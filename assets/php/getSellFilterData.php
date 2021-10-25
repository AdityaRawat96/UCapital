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
            $sql = "SELECT   business_company.ID,
              business_company.DEAL,
              business_company.ASSET_TYPE,
              business_company.COMPANY_TYPE AS SUBJECT,
              business_company.ASSET_TYPE AS SUBJECT_TYPE,
              business_company.SECTOR,
              business_company.INDUSTRY,
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
            real_estate.DEAL_SUBJECT AS SUBJECT,
            real_estate.REAL_ESTATE_TYP AS SUBJECT_TYPE,
            '-' AS SECTOR,
            '-' AS INDUSTRY,
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
                if ($elem == "investment_required") {
                    $sql = addInvestmentRequired($sql, $filterData[$key]["investment_required"]);
                }
                if ($elem == "yearly_return") {
                    $sql = addYearlyReturn($sql, $filterData[$key]["yearly_return"]);
                }
                if ($elem == "surface_area") {
                    $sql = addTotalSurface($sql, $filterData[$key]["surface_area"]);
                }
                if ($elem == "status") {
                    $sql = addStatus($sql, $filterData[$key]["status"]);
                }
                if ($elem == "value" && $dealType == "asset") {
                    $sql = addValue($sql, $filterData[$key]["value"]);
                }
                if ($elem == "value" && $dealType != "asset") {
                    $sql = addCompanyValue($sql, $filterData[$key]["value"]);
                }
                if ($elem == "subject") {
                    $sql = addSubject($sql, $filterData[$key]["subject"]);
                }
                if ($elem == "vendor_type") {
                    $sql = addVendorType($sql, $filterData[$key]["vendor_type"]);
                }
                if ($elem == "location") {
                    $sql = addLocation($sql, $filterData[$key]["location"]);
                }
                if ($elem == "ebidta_margin") {
                    $sql = addEbidtaMargin($sql, $filterData[$key]["ebidta_margin"]);
                }
                if ($elem == "num_of_employee") {
                    $sql = addNumOfEmployee($sql, $filterData[$key]["num_of_employee"]);
                }
                if ($elem == "operation_technology") {
                    $sql = addOperationTechnology($sql, $filterData[$key]["operation_technology"]);
                }
                if ($elem == "industry") {
                    $sql = addIndustry($sql, $filterData[$key]["industry"]);
                }
                if ($elem == "area_of_activity") {
                    $sql = addAreaOfActivity($sql, $filterData[$key]["area_of_activity"]);
                }
                if ($elem == "revenue") {
                    $sql = addRevenue($sql, $filterData[$key]["revenue"]);
                }
                if ($elem == "sector") {
                    $sql = addSector($sql, $filterData[$key]["sector"]);
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
        real_estate.DEAL_SUBJECT AS SUBJECT,
        real_estate.REAL_ESTATE_TYP AS SUBJECT_TYPE,
        '-' AS SECTOR,
        '-' AS INDUSTRY,
        real_estate.COUNTRY,
        real_estate.CITY,
        real_estate.OFFER,
        real_estate.IMAGE,
        real_estate.KEY_ELEMENTS,
        real_estate.ASSET_TYPE
        FROM real_estate where real_estate.DEAL = 'sell')
        UNION ALL( SELECT
        npe.ID,
        npe.DEAL,
        npe.ASSET_TYPE,
        npe.DEAL AS SUBJECT,
        'NPE' AS SUBJECT_TYPE,
        '-' AS SECTOR,
        '-' AS INDUSTRY,
        npe.COUNTRY,
        npe.CITY,
        npe.OFFER,
        npe.IMAGE,
        '-' AS KEY_ELEMENTS,
        npe.ASSET_TYPE
        FROM npe where npe.DEAL = 'sell')
        UNION ALL( SELECT
        credit.ID,
        credit.DEAL,
        credit.ASSET_TYPE,
        credit.DEAL AS SUBJECT,
        'Credit' AS SUBJECT_TYPE,
        '-' AS SECTOR,
        '-' AS INDUSTRY,
        credit.COUNTRY,
        credit.CITY,
        credit.OFFER,
        credit.IMAGE,
        '-' AS KEY_ELEMENTS,
        credit.ASSET_TYPE
        FROM credit where credit.DEAL = 'sell')";
    } else {
        $sql = "SELECT
        business_company.ID,
        business_company.DEAL,
        business_company.ASSET_TYPE,
        business_company.COMPANY_TYPE AS SUBJECT,
        business_company.ASSET_TYPE AS SUBJECT_TYPE,
        business_company.SECTOR,
        business_company.INDUSTRY,
        business_company.COUNTRY,
        business_company.CITY,
        business_company.OFFER,
        business_company.IMAGE,
        business_company.KEY_ELEMENTS,
        business_company.ASSET_TYPE
        FROM business_company where business_company.DEAL = 'sell'";
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

function addYearlyReturn($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " YEARLY_RETURN>=" . $val[0] . " AND YEARLY_RETURN<=" . $val[1];
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR";
        }
    }
    $query = $query . ")";

    return $query;
}

function addInvestmentRequired($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        if (strtolower($value) == "undisclosed") {
            $query = $query . "(";
            $query = $query . " INVESTMENT_TYPE='" . $value . "'";
            $query = $query . ")";
        } else {
            $val = explode("|", $value);
            $query = $query . "(";
            $query = $query . " INVESTMENT_MIN>=" . $val[0] . " AND INVESTMENT_MAX<=" . $val[1];
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

function addTotalSurface($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " TOTAL_SURFACE>=" . $val[0] . " AND TOTAL_SURFACE<=" . $val[1];
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR ";
        }
    }
    $query = $query . ")";

    return $query;
}

function addNumOfEmployee($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " NUM_OF_EMPLOYEE_MIN>=" . $val[0] . " AND NUM_OF_EMPLOYEE_MAX<=" . $val[1];
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
        $val = explode("|", $value);
        $query = $query . "(";
        $query = $query . " EBIDTA_MARGIN>=" . $val[0] . " AND EBIDTA_MARGIN<=" . $val[1];
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

function addOperationTechnology($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $query = $query . "(";
        $query = $query . " COMPANY_TYPE='" . $value . "'";
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR ";
        }
    }
    $query = $query . ")";

    return $query;
}

function addVendorType($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $query = $query . "(";
        $query = $query . " VENDOR_TYPE='" . $value . "'";
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR ";
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
        $query = $query . " FIND_IN_SET('" . $value . "',COUNTRY)";
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR ";
        } else {
            $query = $query . "OR (";
            $query = $query . " FIND_IN_SET('All',COUNTRY)";
            $query = $query . ")";
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

function addAreaOfActivity($query, $arr)
{
    $query = $query . "(";
    $counter = 0;
    foreach ($arr as $value) {
        $query = $query . "(";
        $query = $query . " FIND_IN_SET('" . $value . "',AREA_OF_ACTIVITY)";
        $query = $query . ")";
        $counter++;
        if ($counter < sizeof($arr)) {
            $query = $query . " OR ";
        }
    }
    $query = $query . ")";

    return $query;
}
