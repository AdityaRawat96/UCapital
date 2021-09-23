<?php
session_start();
include('../../assets/php/connection.php');

echo json_encode($_POST['dealData']);

$data = $_POST['dealData'];

$deal_type = $data['deal_type'];
$offer = $data['offer'];
$asset_type = $data['asset_type'];
$re_type_buy = $data['re_type_buy'];
$re_type_category_buy = $data['re_type_category_buy'];
$re_deal_subject_buy = $data['re_deal_subject_buy'];
$re_asset_status_buy = $data['re_asset_status_buy'];
$re_condition_status_buy = $data['re_condition_status_buy'];
$re_surface_area_buy = $data['re_surface_area_buy'];
$re_hq_country_buy = $data['re_hq_country_buy'];
$re_hq_city_buy = $data['re_hq_city_buy'];
$default_currency_buy = $data['default_currency_buy'];
$re_asset_value_buy = $data['re_asset_value_buy'];
$re_asset_value_min = $data['re_asset_value_min'];
$re_asset_value_max = $data['re_asset_value_max'];
$re_who_i_am_buy = $data['re_who_i_am_buy'];
$re_aum_buy = $data['re_aum_buy'];
$re_general_description_buy = $data['re_general_description_buy'];
$userId = $_SESSION['id'];

if ($asset_type == "Real Estate") {
  $sql = "INSERT INTO `real_estate` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `REAL_ESTATE_TYP`, `REAL_ESTATE_SUB_CAT_TYPE`, `DEAL_SUBJECT`, `ASSET_STATUS`, `ASSET_CONDITION`, `TOTAL_SURFACE`, `COUNTRY`, `CITY`, `CURRENCY`, `ASSET_VAL_TYPE`, `ASSET_VAL_MIN`, `ASSET_VAL_MAX`, `WHO_I_AM`, `AUM`, `DESCRIPTION`, `YEAR_OF_CONSTRUCTION`, `VENDOR_TYPE`, `INVESTMENT_TYPE`, `INVESTMENT_MIN`, `INVESTMENT_MAX`, `YEARLY_RETURN`, `KEY_ELEMENTS`, `IMAGES`) VALUES ($userId, '$deal_type', '$offer', '$asset_type','$re_type_buy', '$re_type_category_buy', '$re_deal_subject_buy', '$re_asset_status_buy', '$re_condition_status_buy', $re_surface_area_buy, '$re_hq_country_buy', '$re_hq_city_buy', '$default_currency_buy', '$re_asset_value_buy', $re_asset_value_min, $re_asset_value_max, '$re_who_i_am_buy', '$re_aum_buy', '$re_general_description_buy', 0, '', '', 0, 0, 0, '', '')";

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
