<?php
session_start();
include('../../assets/php/connection.php');

// var_dump($_POST['dealData']);

$data = $_POST['dealData'];
var_dump(array_key_exists('asset_type', $data));

$asset_type = array_key_exists('asset_type', $data) ? $data['asset_type'] : "";
var_dump($asset_type);
if ($asset_type == "Real Estate") {
  $deal_type = array_key_exists('deal_type', $data) ? $data['deal_type'] : "";
  $offer = array_key_exists('offer', $data) ? $data['offer'] : "";
  $re_type = array_key_exists('re_type', $data) ? $data['re_type'] : "";
  $re_type_category = array_key_exists('re_type_category', $data) ? $data['re_type_category'] : "";
  $re_deal_subject = array_key_exists('re_deal_subject', $data) ? $data['re_deal_subject'] : "";
  $re_asset_status = array_key_exists('re_asset_status', $data) ? $data['re_asset_status'] : "";
  $re_condition_status = array_key_exists('re_condition_status', $data) ? $data['re_condition_status'] : "";
  $re_surface_area = (array_key_exists('re_surface_area', $data) && $data['re_surface_area'] != "") ? $data['re_surface_area'] : 0;
  $re_hq_country = array_key_exists('re_hq_country', $data) ?  $data['re_hq_country'] : "";
  $re_hq_city = array_key_exists('re_hq_city', $data) ? $data['re_hq_city'] : "";
  $default_currency = array_key_exists('default_currency', $data) ? $data['default_currency'] : "";
  $re_asset_value = array_key_exists('re_asset_value', $data) ? $data['re_asset_value'] : "";
  $re_asset_value_min = (array_key_exists('re_asset_value_min', $data) && $data['re_asset_value_min'] != "") ? $data['re_asset_value_min'] : 0;
  $re_asset_value_max = (array_key_exists('re_asset_value_max', $data) && $data['re_asset_value_max'] != "") ? $data['re_asset_value_max'] : 0;
  $re_general_description = array_key_exists('re_general_description', $data) ? $data['re_general_description'] : "";
  $re_who_i_am = array_key_exists('re_who_i_am', $data) ? $data['re_who_i_am'] : "";
  $re_aum = (array_key_exists('re_aum', $data)  && $data['re_aum'] != "")  ? $data['re_aum'] : 0;
  $re_construction_year = (array_key_exists('re_construction_year', $data) && $data['re_construction_year'] != "") ? $data['re_construction_year'] : 0;
  $re_vendor_type = array_key_exists('re_vendor_type', $data) ? $data['re_vendor_type'] : "";
  $re_investment_type = array_key_exists('re_investment_type', $data) ? $data['re_investment_type'] : "";
  $re_investment_value_min = (array_key_exists('re_investment_value_min', $data) && $data['re_investment_value_min'] != "") ? $data['re_investment_value_min'] : 0;
  $re_investment_value_max = (array_key_exists('re_investment_value_max', $data) && $data['re_investment_value_max'] != "") ? $data['re_investment_value_max'] : 0;
  $re_key_elements = array_key_exists('re_key_elements', $data) ? $data['re_key_elements'] : "";
  $re_image = array_key_exists('re_image', $data) ? $data['re_image'] : "";
  $re_yearly_return = (array_key_exists('re_yearly_return', $data) && $data['re_yearly_return'] != "") ? $data['re_yearly_return'] : 0;
  $userId = $_SESSION['id'];

  $sql = "INSERT INTO `real_estate` (
    `USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `REAL_ESTATE_TYP`, `REAL_ESTATE_SUB_CAT_TYPE`, `DEAL_SUBJECT`, `ASSET_STATUS`, `ASSET_CONDITION`, `TOTAL_SURFACE`, `COUNTRY`, `CITY`, `CURRENCY`, `ASSET_VAL_TYPE`, `ASSET_VAL_MIN`, `ASSET_VAL_MAX`, `WHO_I_AM`, `AUM`, `DESCRIPTION`, `YEAR_OF_CONSTRUCTION`, `VENDOR_TYPE`, `INVESTMENT_TYPE`, `INVESTMENT_MIN`, `INVESTMENT_MAX`, `YEARLY_RETURN`, `KEY_ELEMENTS`, `IMAGES`) VALUES (
    $userId, 
    '$deal_type', 
    '$offer', 
    '$asset_type',
    '$re_type', 
    '$re_type_category', 
    '$re_deal_subject', 
    '$re_asset_status', 
    '$re_condition_status',
     $re_surface_area, 
     '$re_hq_country', 
     '$re_hq_city',
     '$default_currency',
     '$re_asset_value', 
     $re_asset_value_min, 
     $re_asset_value_max,
     '$re_who_i_am',
     $re_aum,
     '$re_general_description', 
     $re_construction_year,
     '$re_vendor_type',
      '$re_investment_type',
     $re_investment_value_min,
     $re_investment_value_max,
      $re_yearly_return, 
      '$re_key_elements', 
     '$re_image')";
  print_r($sql);
  if ($con->query($sql)) {
    echo json_encode("Success");
  } else {
    $response = mysqli_error($con);
    echo json_encode("error  " . $response);
  }
}
// $result= mysqli_query($con, " SELECT * FROM data_countries ORDER BY country ASC")
// or die('An error occurred! Unable to process this request. '. mysqli_error($con));
// $countries_array = array();
// $index = 0;

// if(mysqli_num_rows($result) > 0 ){
//   while($row = mysqli_fetch_array($result)){

//     $country = (object) array();

//     $country->id = $row['id'];
//     $country->country = $row['country'];

//     $countries_array[$index] = $country;
//     $index++;

//     unset($country);
//   }
// }

// echo json_encode($countries_array);
exit();
