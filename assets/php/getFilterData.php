<?php
session_start();
include('../../assets/php/connection.php');

$ma_ids;
$action = $_POST["action"];
$filterData = isset($_POST["filterData"]) > 0 ? $_POST["filterData"] : [];
$dealType = $_POST["deal"];
if ($dealType == "asset") {
    $table = $_POST["assetType"];
} else {
    $table = "business_company";
}

$sql = "SELECT * FROM $table WHERE DEAL = '$action' ";
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
        if ($elem == "value") {
            $sql = addValue($sql, $filterData[$key]["value"]);
        }
        if ($elem == "subject") {
            $sql = addSubject($sql, $filterData[$key]["subject"]);
        }
        if ($elem == "vendor_type") {
            $sql = addVendorType($sql, $filterData[$key]["vendor_type"]);
        }
        // if ($elem == "location") {
        //     $sql = addLocation($sql, $filterData[$key]["location"]);
        // }
        $globCount++;
        if ($globCount < sizeof($filterData)) {
            $sql = $sql . " AND ";
        }
    }
}

// print_r($sql);


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
