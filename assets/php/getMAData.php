<?php
session_start();
include('../../assets/php/connection.php');

$ma_ids;
$limit =  $_POST['limit'];
$action = $_POST["action"];

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
FROM real_estate where real_estate.DEAL = '$action'  LIMIT $limit)
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
FROM npe where npe.DEAL = '$action' LIMIT $limit )
UNION ALL ( SELECT
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
FROM credit where credit.DEAL = '$action' LIMIT $limit )
UNION ALL ( SELECT
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
FROM business_company where business_company.DEAL = '$action' LIMIT $limit)";
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
