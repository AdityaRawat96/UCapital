<?php
session_start();
include('../../assets/php/connection.php');

$ma_ids;
$action = $_POST["action"];
$filterData = isset($_POST["filterData"]) > 0 ? $_POST["filterData"] : [];
$dealType = $_POST["deal"];
if (isset($_POST["assetType"]) && $_POST["assetType"] != '') {
  if ($dealType == "asset") {
    $table = $_POST["assetType"];
  } else {
    $table = 'business_company';
  }
  if ($table == 'business_company' || $table == 'real_estate') {
    if ($_POST['deal'] != 'asset') {
      $aType = $_POST['assetType'];
      $sql = "SELECT business_company.ID,
      business_company.DEAL,
      business_company.ASSET_TYPE,
      business_company.WHO_I_AM AS SUB_TITLE_1,
      business_company.WANT_TO_DO AS TITLE_1,
      business_company.ASSET_TYPE AS TITLE_2,
      business_company.SECTOR AS DETAIL_1,
      business_company.INDUSTRY AS DETAIL_2,
      business_company.SUB_COMPANY_TYPE AS DETAIL_3,
      business_company.COMPANY_VAL_TYPE AS VALUE_TYPE,
      business_company.COMPANY_VAL_MIN AS VALUE_MIN,
      business_company.COMPANY_VAL_MAX AS VALUE_MAX,
      business_company.CURRENCY AS CURRENCY,
      business_company.COUNTRY,
      business_company.CITY,
      business_company.OFFER,
      business_company.IMAGE,
      business_company.KEY_ELEMENTS,
      business_company.ASSET_TYPE FROM $table WHERE DEAL = '$action' AND ASSET_TYPE = '$aType'";
    } else
    $sql = "SELECT real_estate.ID,
    real_estate.DEAL,
    real_estate.ASSET_TYPE,
    real_estate.WHO_I_AM AS SUB_TITLE_1,
    real_estate.DEAL_SUBJECT AS TITLE_1,
    real_estate.REAL_ESTATE_TYP AS TITLE_2,
    real_estate.ASSET_STATUS AS DETAIL_1,
    real_estate.TOTAL_SURFACE AS DETAIL_2,
    real_estate.TOTAL_SURFACE_MAX AS DETAIL_3,
    real_estate.ASSET_VAL_TYPE AS VALUE_TYPE,
    real_estate.ASSET_VAL_MIN AS VALUE_MIN,
    real_estate.ASSET_VAL_MAX AS VALUE_MAX,
    real_estate.CURRENCY AS CURRENCY,
    real_estate.COUNTRY,
    real_estate.CITY,
    real_estate.OFFER,
    real_estate.IMAGE,
    real_estate.KEY_ELEMENTS,
    real_estate.ASSET_TYPE FROM $table WHERE DEAL = '$action'";
    $globCount = 0;
    if (sizeof($filterData) > 0) {
      $sql = $sql . " AND ";
    }
    foreach (array_keys($filterData) as $key) {
      foreach (array_keys($filterData[$key]) as $elem) {
        if ($elem == "location") {
          $sql = addLocation($sql, $filterData[$key]["location"]);
        }
        if ($elem == "subject") {
          $sql = addSubject($sql, $filterData[$key]["subject"]);
        }
        if ($elem == "status") {
          $sql = addStatus($sql, $filterData[$key]["status"]);
        }
        if ($elem == "condition") {
          $sql = addCondition($sql, $filterData[$key]["condition"]);
        }
        if ($elem == "surface_area") {
          $sql = addTotalSurface($sql, $filterData[$key]["surface_area"]);
        }
        if ($elem == "value") {
          $sql = addValue($sql, $filterData[$key]["value"]);
        }
        if ($elem == "publisher") {
          $sql = addPublisher($sql, $filterData[$key]["publisher"]);
        }
        if ($elem == "aum") {
          $sql = addAum($sql, $filterData[$key]["aum"]);
        }
        if ($elem == "ebitda_margin") {
          $sql = addEbidtaMargin($sql, $filterData[$key]["ebitda_margin"]);
        }
        if ($elem == "industry") {
          $sql = addIndustry($sql, $filterData[$key]["industry"]);
        }
        if ($elem == "sector") {
          $sql = addSector($sql, $filterData[$key]["sector"]);
        }
        if ($elem == "objective") {
          $sql = addObjective($sql, $filterData[$key]["objective"]);
        }
        if ($elem == "preferred_investment_amount") {
          $sql = addInvestmentAmount($sql, $filterData[$key]["preferred_investment_amount"]);
        }
        if ($elem == "investment_size") {
          $sql = addInvestmentSize($sql, $filterData[$key]["investment_size"]);
        }
        if ($elem == "revenue") {
          $sql = addRevenue($sql, $filterData[$key]["revenue"]);
        }
        if ($elem == "propertyType" && $table == 'business_company') {
          $sql = addCompanyPropertyType($sql, $filterData[$key]["propertyType"]);
        }
        if ($elem == "propertyType" && $table != 'business_company') {
          $sql = addPropertyType($sql, $filterData[$key]["propertyType"]);
        }

        $globCount++;
        if ($globCount < sizeof($filterData)) {
          $sql = $sql . " AND ";
        }
      }
    }

    $result = mysqli_query($con, $sql)
    or die('An error occurred! Unable to process this request. ' . mysqli_error($con));

    if (mysqli_num_rows($result) > 0) {
      $response = array();
      while ($row = mysqli_fetch_array($result)) {
        array_push($response, $row);
      }
      echo json_encode($response);
    } else {
      return "failed";
    }
  }
} else {
  if ($dealType == "asset") {
    $sql = "(SELECT
    real_estate.ID,
    real_estate.DEAL,
    real_estate.ASSET_TYPE,
    real_estate.WHO_I_AM AS SUB_TITLE_1,
    real_estate.DEAL_SUBJECT AS TITLE_1,
    real_estate.REAL_ESTATE_TYP AS TITLE_2,
    real_estate.ASSET_STATUS AS DETAIL_1,
    real_estate.TOTAL_SURFACE AS DETAIL_2,
    real_estate.TOTAL_SURFACE_MAX AS DETAIL_3,
    real_estate.ASSET_VAL_TYPE AS VALUE_TYPE,
    real_estate.ASSET_VAL_MIN AS VALUE_MIN,
    real_estate.ASSET_VAL_MAX AS VALUE_MAX,
    real_estate.CURRENCY AS CURRENCY,
    real_estate.COUNTRY,
    real_estate.CITY,
    real_estate.OFFER,
    real_estate.IMAGE,
    real_estate.KEY_ELEMENTS,
    real_estate.ASSET_TYPE
    FROM real_estate where real_estate.DEAL = 'buy')

    UNION ALL( SELECT
    npe.ID,
    npe.DEAL,
    npe.ASSET_TYPE,
    npe.WHO_I_AM AS SUB_TITLE_1,
    'Buying' AS TITLE_1,
    npe.NPE_TYPE AS TITLE_2,
    npe.NPE_TYPE AS DETAIL_1,
    npe.MARKET_VALUE AS DETAIL_2,
    '-' AS DETAIL_3,
    npe.VALUE_TYPE AS VALUE_TYPE,
    npe.VALUE_MIN AS VALUE_MIN,
    npe.VALUE_MAX AS VALUE_MAX,
    npe.CURRENCY AS CURRENCY,
    npe.COUNTRY,
    npe.CITY,
    npe.OFFER,
    npe.IMAGE,
    '-' AS KEY_ELEMENTS,
    npe.ASSET_TYPE
    FROM npe where npe.DEAL = 'buy')

    UNION ALL( SELECT
    credit.ID,
    credit.DEAL,
    credit.ASSET_TYPE,
    credit.WHO_I_AM AS SUB_TITLE_1,
    'Buying' AS TITLE_1,
    credit.CREDIT_TYPE AS TITLE_2,
    credit.CREDIT_TYPE AS DETAIL_1,
    '-' AS DETAIL_2,
    credit.PRODUCT_TYPE AS DETAIL_3,
    credit.VALUE_TYPE AS VALUE_TYPE,
    credit.VALUE_MIN AS VALUE_MIN,
    credit.VALUE_MAX AS VALUE_MAX,
    credit.CURRENCY AS CURRENCY,
    credit.COUNTRY,
    credit.CITY,
    credit.OFFER,
    credit.IMAGE,
    '-' AS KEY_ELEMENTS,
    credit.ASSET_TYPE
    FROM credit where credit.DEAL = 'buy')";
  } else {
    $sql = "SELECT
    business_company.DEAL,
    business_company.ASSET_TYPE,
    business_company.WHO_I_AM AS SUB_TITLE_1,
    business_company.WANT_TO_DO AS TITLE_1,
    business_company.ASSET_TYPE AS TITLE_2,
    business_company.SECTOR AS DETAIL_1,
    business_company.INDUSTRY AS DETAIL_2,
    business_company.SUB_COMPANY_TYPE AS DETAIL_3,
    business_company.COMPANY_VAL_TYPE AS VALUE_TYPE,
    business_company.COMPANY_VAL_MIN AS VALUE_MIN,
    business_company.COMPANY_VAL_MAX AS VALUE_MAX,
    business_company.CURRENCY AS CURRENCY,
    business_company.COUNTRY,
    business_company.CITY,
    business_company.OFFER,
    business_company.IMAGE,
    business_company.KEY_ELEMENTS,
    business_company.ASSET_TYPE
    FROM business_company where business_company.DEAL = 'buy'";
  }

  $result = mysqli_query($con, $sql)
  or die('An error occurred! Unable to process this request. ' . mysqli_error($con));

  if (mysqli_num_rows($result) > 0) {
    $response = array();
    while ($row = mysqli_fetch_array($result)) {
      array_push($response, $row);
    }
    echo json_encode($response);
  } else {
    return "failed";
  }
}


function addCompanyPropertyType($query, $arr)
{
  $outerCounter = 0;
  $query = $query . " (";
  foreach (array_keys($arr) as $key) {
    $counter = 0;
    foreach (array_keys($arr[$key]) as $propName) {
      $query = $query . " (";
      $query = $query . " SUB_COMPANY_TYPE='" . $propName . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr[$key])) {
        $query = $query . " OR";
      }
    }
    $outerCounter++;
    if ($outerCounter < sizeof($arr)) {
      $query = $query . " OR";
    }
  }
  $query = $query . ")";
  return $query;
}



function addPropertyType($query, $arr)
{
  $outerCounter = 0;
  $query = $query . " (";
  foreach (array_keys($arr) as $key) {
    $counter = 0;
    foreach (array_keys($arr[$key]) as $propName) {
      $query = $query . " (";
      $query = $query . " REAL_ESTATE_TYP='" . $propName . "'";
      if (sizeOf($arr[$key][$propName]) > 0 && $arr[$key][$propName][0] != '') {
        $query = $query . " AND (";
          $innerCounter = 0;
          foreach (array_keys($arr[$key][$propName]) as $value) {
          $query = $query . " REAL_ESTATE_SUB_CAT_TYPE= '" . $arr[$key][$propName][$value] . "'";
          $innerCounter++;
          if ($innerCounter < sizeof($arr[$key][$propName])) {
          $query = $query . " OR";
          }
          }
          $query = $query . ")";
        }
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr[$key])) {
          $query = $query . " OR";
        }
      }
      $outerCounter++;
      if ($outerCounter < sizeof($arr)) {
        $query = $query . " OR";
      }
    }
    $query = $query . ")";
    return $query;
  }

  function addLocation($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " FIND_IN_SET('" . $value . "',replace(COUNTRY,'|',','))";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      } else {
        $query = $query . "OR (";
        $query = $query . " FIND_IN_SET('All',replace(COUNTRY,'|',','))";
        $query = $query . ")";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addSubject($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " DEAL_SUBJECT='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addPublisher($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " WHO_I_AM='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addCondition($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " ASSET_CONDITION='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addTotalSurface($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $val = explode("|", $value);
      $query = $query . "(";
      $query = $query . " TOTAL_SURFACE>=" . $val[0] . " AND TOTAL_SURFACE_MAX<=" . $val[1];
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addValue($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      if (strtolower($value) == "undisclosed") {
        $query = $query . "(";
        $query = $query . " ASSET_VAL_TYPE='" . $value . "'";
        $query = $query . ")";
      } else {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " ASSET_VAL_MIN>=" . $val[0] . " AND ASSET_VAL_MAX<=" . $val[1];
        $query = $query . ")";
      }
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addCompanyValue($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      if (strtolower($value) == "undisclosed") {
        $query = $query . "(";
        $query = $query . " COMPANY_VAL_TYPE='" . $value . "'";
        $query = $query . ")";
      } else {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " COMPANY_VAL_MIN>=" . $val[0] . " AND COMPANY_VAL_MAX<=" . $val[1];
        $query = $query . ")";
      }
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addStatus($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " ASSET_STATUS='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addAum($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $val = explode("|", $value);
      $query = $query . "(";
      $query = $query . " AUM>=" . $val[0] . " AND AUM<=" . $val[1];
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addSector($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " SECTOR='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addObjective($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " WANT_TO_DO='" . $value . "'";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addIndustry($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " FIND_IN_SET('" . $value . "',INDUSTRY)";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addEbidtaMargin($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      if (strtolower($value) == "undisclosed") {
        $query = $query . "(";
        $query = $query . " EBITDA_MARGIN_TYPE='" . $value . "'";
        $query = $query . ")";
      } else {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " EBIDTA_MARGIN>=" . $val[0] . " AND EBITDA_MARGIN_MAX<=" . $val[1];
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
          $query = $query . " OR ";
        }
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addRevenue($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      if (strtolower($value) == "undisclosed") {
        $query = $query . "(";
        $query = $query . " ACTUAL_REVENUE_TYPE='" . $value . "'";
        $query = $query . ")";
      } else {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " ACTUAL_REVENUE_MIN>=" . $val[0] . " AND ACTUAL_REVENUE_MAX<=" . $val[1];
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
          $query = $query . " OR ";
        }
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addInvestmentSize($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " FIND_IN_SET('" . $value . "',INVESTMENT_SIZE)";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }

  function addInvestmentAmount($query, $arr)
  {
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
      $query = $query . "(";
      $query = $query . " FIND_IN_SET('" . $value . "',PREF_INVESTMENT_AMOUNT)";
      $query = $query . ")";
      $counter++;
      if ($counter < sizeof($arr)) {
        $query = $query . " OR ";
      }
    }
    $query = $query . ")";

    return $query;
  }
