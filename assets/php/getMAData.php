<?php
session_start();
include('../../assets/php/connection.php');

$ma_ids;
$limit =  $_POST['limit'];
$action = $_POST["action"];

$sql = "(SELECT real_estate.ID, real_estate.DEAL, real_estate.OFFER, real_estate.ASSET_TYPE FROM real_estate where real_estate.DEAL = '$action'  LIMIT $limit) UNION ALL( SELECT npe.ID, npe.DEAL, npe.OFFER, npe.ASSET_TYPE FROM npe where npe.DEAL = '$action' LIMIT $limit ) UNION ALL ( SELECT credit.ID, credit.DEAL, credit.OFFER, credit.ASSET_TYPE FROM credit where credit.DEAL = '$action' LIMIT $limit ) UNION ALL ( SELECT business_company.ID, business_company.DEAL, business_company.OFFER, business_company.ASSET_TYPE FROM business_company where business_company.DEAL = '$action' LIMIT $limit)";
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