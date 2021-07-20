<?php

$response = "failed";

$action = $_POST["action"];
$type = $_POST["type"];
$category = $_POST["category"];
$realestate = isset($_POST["realestate"]) ? $_POST["realestate"] : null;
$value = isset($_POST["value"]) ? $_POST["value"] : null;
$sector = isset($_POST["sector"]) ? json_encode($_POST["sector"]) : null;
$industry = isset($_POST["industry"]) ? json_encode($_POST["industry"]) : null;
$revenue = isset($_POST["revenue"]) ? $_POST["revenue"] : null;
$ebitda = isset($_POST["ebitda"]) ? $_POST["ebitda"] : null;
$finance_status = isset($_POST["finance_status"]) ? $_POST["finance_status"] : null;
$foundation_year = isset($_POST["foundation_year"]) ? $_POST["foundation_year"] : null;
$location = $_POST["location"];
$title = $_POST["title"];
$description = $_POST["description"];
$image_folder = $_POST["image_folder"];
$image = $_POST["image"];
$attachments = $_POST["attachments"];

include_once 'connection.php';

$sql = "INSERT INTO merger_acquisition (
  action,
  type,
  category,
  realestate,
  value,
  sector,
  industry,
  revenue,
  ebitda,
  finance_status,
  foundation_year,
  location,
  title,
  description,
  image_folder,
  image,
  attachments
)
VALUES (
  '$action',
  '$type',
  '$category',
  '$realestate',
  '$value',
  '$sector',
  '$industry',
  '$revenue',
  '$ebitda',
  '$finance_status',
  '$foundation_year',
  '$location',
  '$title',
  '$description',
  '$image_folder',
  '$image',
  '$attachments'
)";

if ($con->query($sql)){
  $response = "success";
}else{
  $response = mysqli_error($con);
}

echo $response;

?>
