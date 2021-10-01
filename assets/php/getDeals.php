<?php
session_start();
include('../../assets/php/connection.php');

$sql = "SELECT ID, DEAL, OFFER, ASSET_TYPE FROM real_estate UNION SELECT ID, DEAL, OFFER, ASSET_TYPE FROM npe UNION SELECT ID, DEAL, OFFER, ASSET_TYPE FROM credit UNION SELECT ID, DEAL, OFFER, ASSET_TYPE FROM business_company";


$result = mysqli_query($con, $sql)
    or die('An error occurred! Unable to process this request. ' . mysqli_error($con));
if (mysqli_num_rows($result) > 0) {
    $response = array();
    while ($row = mysqli_fetch_array($result)) {
        array_push($response, $row);
    }
    echo json_encode($response);
}
