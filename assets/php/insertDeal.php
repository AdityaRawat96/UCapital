<?php
session_start();
include('../../assets/php/connection.php');

// var_dump($_POST['dealData']);

$data = $_POST['dealData'];

$asset_type = array_key_exists('asset_type', $data) ? $data['asset_type'] : "";
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
    `USER_ID`,`DEAL`,`OFFER`,`ASSET_TYPE`,`REAL_ESTATE_TYP`,`REAL_ESTATE_SUB_CAT_TYPE`,`DEAL_SUBJECT`, `ASSET_STATUS`,`ASSET_CONDITION`,`TOTAL_SURFACE`,`COUNTRY`,`CITY`,`CURRENCY`,`ASSET_VAL_TYPE`, `ASSET_VAL_MIN`,`ASSET_VAL_MAX`,`WHO_I_AM`,`AUM`,`DESCRIPTION`,`YEAR_OF_CONSTRUCTION`, `VENDOR_TYPE`,`INVESTMENT_TYPE`,`INVESTMENT_MIN`,`INVESTMENT_MAX`,`YEARLY_RETURN`,`KEY_ELEMENTS`, `IMAGES`) VALUES ($userId,'$deal_type','$offer','$asset_type','$re_type','$re_type_category','$re_deal_subject','$re_asset_status','$re_condition_status', $re_surface_area,'$re_hq_country','$re_hq_city','$default_currency','$re_asset_value',  $re_asset_value_min,$re_asset_value_max,'$re_who_i_am',$re_aum,'$re_general_description',  $re_construction_year,'$re_vendor_type','$re_investment_type',$re_investment_value_min, $re_investment_value_max,$re_yearly_return,'$re_key_elements','$re_image')";
} else if ($asset_type == "NPE") {
  $deal_type = array_key_exists('deal_type', $data) ? $data['deal_type'] : "";
  $offer = array_key_exists('offer', $data) ? $data['offer'] : "";
  $npe_type = array_key_exists('npe_type', $data) ? $data['npe_type'] : "";
  $npe_product_type = array_key_exists('npe_product_type', $data) ? $data['npe_product_type'] : "";
  $npe_collateral_type = array_key_exists('npe_collateral_type', $data) ? $data['npe_collateral_type'] : "";
  $npe_hq_country = array_key_exists('npe_hq_country', $data) ? $data['npe_hq_country'] : "";
  $npe_hq_city = array_key_exists('npe_hq_city', $data) ? $data['npe_hq_city'] : "";
  $npe_state = array_key_exists('npe_state', $data) ? $data['npe_state'] : "";
  $npe_post_code = array_key_exists('npe_post_code', $data) ? $data['npe_post_code'] : "";
  $npe_description = array_key_exists('npe_description', $data) ? $data['npe_description'] : "";
  $npe_default_currency = array_key_exists('npe_default_currency', $data) ?  $data['npe_default_currency'] : "";
  $npe_original_amount = (array_key_exists('npe_original_amount', $data) && $data['npe_original_amount'] != "") ? $data['npe_original_amount'] : 0;
  $npe_asking_price = (array_key_exists('npe_asking_price', $data) && $data['npe_asking_price'] != "") ? $data['npe_asking_price'] : 0;
  $npe_market_value = (array_key_exists('npe_market_value', $data) && $data['npe_market_value'] != "") ? $data['npe_market_value'] : 0;
  $npe_lien_position = array_key_exists('npe_lien_position', $data) ? $data['npe_lien_position'] : "";
  $npe_judicialized = array_key_exists('npe_judicialized', $data) ? $data['npe_judicialized'] : "";
  $npe_borrower_details = array_key_exists('npe_borrower_details', $data)  ? $data['npe_borrower_details'] : "";
  $npe_ratio = array_key_exists('npe_ratio', $data) ? $data['npe_ratio'] : "";
  $npe_value = array_key_exists('npe_value', $data) ? $data['npe_value'] : "";
  $npe_value_min = (array_key_exists('npe_value_min', $data) && $data['npe_value_min'] != "") ? $data['npe_value_min'] : 0;
  $npe_value_max = (array_key_exists('npe_value_max', $data) && $data['npe_value_max'] != "") ? $data['npe_value_max'] : 0;
  $npe_who_i_am = array_key_exists('npe_who_i_am', $data) ? $data['npe_who_i_am'] : "";
  $npe_aum = (array_key_exists('npe_aum', $data) && $data['npe_aum'] != "") ? $data['npe_aum'] : 0;
  $userId = $_SESSION['id'];
  $sql = "INSERT INTO `npe` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `NPE_TYPE`, `PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL`, `DESCRIPTION`, `CURRENCY`, `ORG_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `LIEN_POSITION`, `JUDICIALIZED`, `BORROWER_DETAIL`, `RATIO`, `VALUE_TYPE`, `VALUE_MIN`, `VALUE_MAX`, `WHO_I_AM`, `AUM`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$npe_type', '$npe_product_type', '$npe_collateral_type', '$npe_hq_country', '$npe_hq_city', '$npe_state', '$npe_post_code', '$npe_description', '$npe_default_currency', $npe_original_amount, $npe_asking_price, $npe_market_value, '$npe_lien_position', '$npe_judicialized', '$npe_borrower_details', '$npe_ratio', '$npe_value', $npe_value_min, $npe_value_max, '$npe_who_i_am', $npe_aum)";
} else if ($asset_type == "Credits") {
  $deal_type = array_key_exists('deal_type', $data) ? $data['deal_type'] : "";
  $offer = array_key_exists('offer', $data) ? $data['offer'] : "";
  $credit_type = array_key_exists('credit_type', $data) ? $data['credit_type'] : "";
  $credit_product_type = array_key_exists('credit_product_type', $data) ? $data['credit_product_type'] : "";
  $credit_collateral_type = array_key_exists('credit_collateral_type', $data) ? $data['credit_collateral_type'] : "";
  $credit_hq_country = array_key_exists('credit_hq_country', $data) ? $data['credit_hq_country'] : "";
  $credit_hq_city = array_key_exists('credit_hq_city', $data) ? $data['credit_hq_city'] : "";
  $credit_state = array_key_exists('credit_state', $data) ? $data['credit_state'] : "";
  $credit_post_code = array_key_exists('credit_post_code', $data) ? $data['credit_post_code'] : "";
  $credit_description = array_key_exists('credit_description', $data) ? $data['credit_description'] : "";
  $credit_default_currency = array_key_exists('credit_default_currency', $data) ?  $data['credit_default_currency'] : "";
  $credit_original_amount = (array_key_exists('credit_original_amount', $data) && $data['credit_original_amount'] != "") ? $data['credit_original_amount'] : 0;
  $credit_asking_price = (array_key_exists('credit_asking_price', $data) && $data['credit_asking_price'] != "") ? $data['credit_asking_price'] : 0;
  $credit_market_value = (array_key_exists('credit_market_value', $data) && $data['credit_market_value'] != "") ? $data['credit_market_value'] : 0;
  $credit_lien_position = array_key_exists('credit_lien_position', $data) ? $data['credit_lien_position'] : "";
  $credit_judicialized = array_key_exists('credit_judicialized', $data) ? $data['credit_judicialized'] : "";
  $credit_borrower_details = array_key_exists('credit_borrower_details', $data)  ? $data['credit_borrower_details'] : "";
  $credit_borrower_type_category = array_key_exists('credit_borrower_type_category', $data)  ? $data['credit_borrower_type_category'] : "";
  $credit_typology = array_key_exists('credit_typology', $data)  ? $data['credit_typology'] : "";
  $credit_maturity = (array_key_exists('credit_maturity', $data) && $data['credit_maturity'] != '')
    ? $data['credit_maturity'] : NULL;
  $credit_borrower_type = array_key_exists('credit_borrower_type', $data) ? $data['credit_borrower_type'] : "";
  $credit_ratio_ob = (array_key_exists('credit_ratio_ob', $data) && $data['credit_ratio_ob'] != "") ? $data['credit_ratio_ob'] : 0;
  $credit_rate = (array_key_exists('credit_rate', $data) && $data['credit_rate'] != "") ? $data['credit_rate'] : 0;
  $credit_discounted_ratio = (array_key_exists('credit_discounted_ratio', $data) && $data['credit_discounted_ratio'] != "") ? $data['credit_discounted_ratio'] : 0;
  $credit_who_i_am = array_key_exists('credit_who_i_am', $data) ? $data['credit_who_i_am'] : "";
  $credit_aum = (array_key_exists('credit_aum', $data) && $data['credit_aum'] != "") ? $data['credit_aum'] : 0;
  $userId = $_SESSION['id'];
  if ($credit_maturity == NULL) {
    $sql = "INSERT INTO `credit` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `CREDIT_TYPE`, `BORROWER`, `BORROWER_SUBCAT`, `CURRENCY`, `TYPOLOGY`,`PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL_CODE`, `LIEN_POSITION`, `DESCRIPTION`, `ORIGINAL_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `JUDICIALIZED`, `BORROWER_DETAILS`, `RATIO_OB`, `RATE`, `DISCOUNTED_RATIO`, `WHO_I_AM`, `AUM`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$credit_type', '$credit_borrower_type', '$credit_borrower_type_category', '$credit_default_currency', '$credit_typology', '$credit_product_type', '$credit_collateral_type', '$credit_hq_country', '$credit_hq_city', '$credit_state', '$credit_post_code', '$credit_lien_position', '$credit_description', $credit_original_amount, $credit_asking_price, $credit_market_value, '$credit_judicialized', '$credit_borrower_details', $credit_ratio_ob, $credit_rate, $credit_discounted_ratio, '$credit_who_i_am', $credit_aum)";
  } else {
    $sql = "INSERT INTO `credit` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `CREDIT_TYPE`, `BORROWER`, `BORROWER_SUBCAT`, `CURRENCY`, `TYPOLOGY`, `MATURITY`, `PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL_CODE`, `LIEN_POSITION`, `DESCRIPTION`, `ORIGINAL_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `JUDICIALIZED`, `BORROWER_DETAILS`, `RATIO_OB`, `RATE`, `DISCOUNTED_RATIO`, `WHO_I_AM`, `AUM`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$credit_type', '$credit_borrower_type', '$credit_borrower_type_category', '$credit_default_currency', '$credit_typology', '$credit_maturity', '$credit_product_type', '$credit_collateral_type', '$credit_hq_country', '$credit_hq_city', '$credit_state', '$credit_post_code', '$credit_lien_position', '$credit_description', $credit_original_amount, $credit_asking_price, $credit_market_value, '$credit_judicialized', '$credit_borrower_details', $credit_ratio_ob, $credit_rate, $credit_discounted_ratio, '$credit_who_i_am', $credit_aum)";
  }
}

if (!empty($sql)) {
  print_r($sql);
  if ($con->query($sql)) {
    echo json_encode("Success");
  } else {
    $response = mysqli_error($con);
    echo json_encode("error  " . $response);
  }
}
exit();
