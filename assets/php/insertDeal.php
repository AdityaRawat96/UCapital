<?php
session_start();
include('../../assets/php/connection.php');

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
  $re_image = array_key_exists('re_image', $data) && $data['re_image'] != "" ? $data['re_image'] : getImage($asset_type, $re_type);
  $re_yearly_return = (array_key_exists('re_yearly_return', $data) && $data['re_yearly_return'] != "") ? $data['re_yearly_return'] : 0;
  $userId = $_SESSION['id'];

  $sql = "INSERT INTO `real_estate` (
    `USER_ID`,`DEAL`,`OFFER`,`ASSET_TYPE`,`REAL_ESTATE_TYP`,`REAL_ESTATE_SUB_CAT_TYPE`,`DEAL_SUBJECT`, `ASSET_STATUS`,`ASSET_CONDITION`,`TOTAL_SURFACE`,`COUNTRY`,`CITY`,`CURRENCY`,`ASSET_VAL_TYPE`, `ASSET_VAL_MIN`,`ASSET_VAL_MAX`,`WHO_I_AM`,`AUM`,`DESCRIPTION`,`YEAR_OF_CONSTRUCTION`, `VENDOR_TYPE`,`INVESTMENT_TYPE`,`INVESTMENT_MIN`,`INVESTMENT_MAX`,`YEARLY_RETURN`,`KEY_ELEMENTS`, `IMAGE`) VALUES ($userId,'$deal_type','$offer','$asset_type','$re_type','$re_type_category','$re_deal_subject','$re_asset_status','$re_condition_status', $re_surface_area,'$re_hq_country','$re_hq_city','$default_currency','$re_asset_value',  $re_asset_value_min,$re_asset_value_max,'$re_who_i_am',$re_aum,'$re_general_description',  $re_construction_year,'$re_vendor_type','$re_investment_type',$re_investment_value_min, $re_investment_value_max,$re_yearly_return,'$re_key_elements','$re_image')";
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
  $npe_image = array_key_exists('npe_image', $data) && $data['npe_image'] != "" ? $data['npe_image'] : getImage($asset_type, "");
  $userId = $_SESSION['id'];
  $sql = "INSERT INTO `npe` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `NPE_TYPE`, `PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL`, `DESCRIPTION`, `CURRENCY`, `ORG_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `LIEN_POSITION`, `JUDICIALIZED`, `BORROWER_DETAIL`, `RATIO`, `VALUE_TYPE`, `VALUE_MIN`, `VALUE_MAX`, `WHO_I_AM`, `AUM`, `IMAGE`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$npe_type', '$npe_product_type', '$npe_collateral_type', '$npe_hq_country', '$npe_hq_city', '$npe_state', '$npe_post_code', '$npe_description', '$npe_default_currency', $npe_original_amount, $npe_asking_price, $npe_market_value, '$npe_lien_position', '$npe_judicialized', '$npe_borrower_details', '$npe_ratio', '$npe_value', $npe_value_min, $npe_value_max, '$npe_who_i_am', $npe_aum,'$npe_image')";
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
  $credit_image = array_key_exists('credit_image', $data) && $data['credit_image'] != "" ? $data['credit_image'] : getImage($asset_type, "");
  $credit_value_min = (array_key_exists('credit_value_min', $data) && $data['credit_value_min'] != "") ? $data['credit_value_min'] : 0;
  $credit_value_max = (array_key_exists('credit_value_max', $data) && $data['credit_value_max'] != "") ? $data['credit_value_max'] : 0;
  $credit_value = array_key_exists('credit_value', $data) ? $data['credit_value'] : "";
  $credit_ratio = array_key_exists('credit_ratio', $data) ? $data['credit_ratio'] : "";
  $userId = $_SESSION['id'];
  if ($credit_maturity == NULL) {
    $sql = "INSERT INTO `credit` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `CREDIT_TYPE`, `BORROWER`, `BORROWER_SUBCAT`, `CURRENCY`, `TYPOLOGY`,`PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL_CODE`, `LIEN_POSITION`, `DESCRIPTION`, `ORIGINAL_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `JUDICIALIZED`, `BORROWER_DETAILS`, `RATIO_OB`, `RATE`, `DISCOUNTED_RATIO`, `WHO_I_AM`, `AUM`, `IMAGE`,`RATIO`,`VALUE_TYPE`,`VALUE_MIN`,`VALUE_MAX`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$credit_type', '$credit_borrower_type', '$credit_borrower_type_category', '$credit_default_currency', '$credit_typology', '$credit_product_type', '$credit_collateral_type', '$credit_hq_country', '$credit_hq_city', '$credit_state', '$credit_post_code', '$credit_lien_position', '$credit_description', $credit_original_amount, $credit_asking_price, $credit_market_value, '$credit_judicialized', '$credit_borrower_details', $credit_ratio_ob, $credit_rate, $credit_discounted_ratio, '$credit_who_i_am', $credit_aum, '$credit_image', '$credit_ratio', '$credit_value', $credit_value_min, $credit_value_max)";
  } else {
    $sql = "INSERT INTO `credit` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE`, `CREDIT_TYPE`, `BORROWER`, `BORROWER_SUBCAT`, `CURRENCY`, `TYPOLOGY`, `MATURITY`, `PRODUCT_TYPE`, `COLLATERAL_TYPE`, `COUNTRY`, `CITY`, `STATE`, `POSTAL_CODE`, `LIEN_POSITION`, `DESCRIPTION`, `ORIGINAL_AMOUNT`, `ASKING_PRICE`, `MARKET_VALUE`, `JUDICIALIZED`, `BORROWER_DETAILS`, `RATIO_OB`, `RATE`, `DISCOUNTED_RATIO`, `WHO_I_AM`, `AUM`,`IMAGE`,`RATIO`,`VALUE_TYPE`,`VALUE_MIN`,`VALUE_MAX`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$credit_type', '$credit_borrower_type', '$credit_borrower_type_category', '$credit_default_currency', '$credit_typology', '$credit_maturity', '$credit_product_type', '$credit_collateral_type', '$credit_hq_country', '$credit_hq_city', '$credit_state', '$credit_post_code', '$credit_lien_position', '$credit_description', $credit_original_amount, $credit_asking_price, $credit_market_value, '$credit_judicialized', '$credit_borrower_details', $credit_ratio_ob, $credit_rate, $credit_discounted_ratio, '$credit_who_i_am', $credit_aum, '$credit_image', '$credit_ratio', '$credit_value', $credit_value_min, $credit_value_max)";
  }
} else if ($asset_type == "Business Company" || $asset_type == "Start Up") {
  $deal_type = array_key_exists('deal_type', $data) ? $data['deal_type'] : "";
  $offer = array_key_exists('offer', $data) ? $data['offer'] : "";
  $country = array_key_exists('hq_country', $data) ? $data['hq_country'] : "";
  $city = array_key_exists('hq_city', $data) ? $data['hq_city'] : "";
  $sector = array_key_exists('sector_sel', $data) ? $data['sector_sel'] : "";
  $company_type = array_key_exists('company_type', $data) ? $data['company_type'] : "";
  $industry = array_key_exists('industry_sel', $data) ? $data['industry_sel'] : "";
  $startup_type = array_key_exists('startup_type', $data) ? $data['startup_type'] : "";
  $foundation_year = (array_key_exists('foundation_year', $data) && $data['foundation_year'] != "") ? $data['foundation_year'] : 0;
  $default_currency = array_key_exists('default_currency', $data) ? $data['default_currency'] : "";
  $company_value_type = array_key_exists('company_value_type', $data) ? $data['company_value_type'] : "";
  $company_value_min = (array_key_exists('company_value_min', $data) && $data['company_value_min'] != "") ? $data['company_value_min'] : 0;
  $company_value_max = (array_key_exists('company_value_max', $data) && $data['company_value_max'] != "") ? $data['company_value_max'] : 0;
  $actual_revenue_type = array_key_exists('actual_revenue_type', $data) ? $data['actual_revenue_type'] : "";
  $actual_revenue_min = (array_key_exists('actual_revenue_min', $data) && $data['actual_revenue_min'] != "") ? $data['actual_revenue_min'] : 0;
  $actual_revenue_max = (array_key_exists('actual_revenue_max', $data) && $data['actual_revenue_max'] != "") ? $data['actual_revenue_max'] : 0;
  $investment_required_value = array_key_exists('investment_required_value', $data) ? $data['investment_required_value'] : "";
  $investment_required_min = (array_key_exists('investment_required_min', $data) && $data['investment_required_min'] != "") ? $data['investment_required_min'] : 0;
  $investment_required_max = (array_key_exists('investment_required_max', $data) && $data['investment_required_max'] != "") ? $data['investment_required_max'] : 0;
  $company_business = array_key_exists('company_business', $data) ? $data['company_business'] : "";
  $area_of_activity = array_key_exists('area_of_activity', $data) ? $data['area_of_activity'] : "";
  $scalability = array_key_exists('scalability', $data) ? $data['scalability'] : "";
  $scalability_area = array_key_exists('scalability_area', $data) ? $data['scalability_area'] : "";
  $market_share = (array_key_exists('market_share', $data) && $data['market_share'] != "") ? $data['market_share'] : 0;
  $number_of_employees_min = (array_key_exists('number_of_employees_min', $data) && $data['number_of_employees_min'] != "") ? $data['number_of_employees_min'] : 0;
  $number_of_employees_max = (array_key_exists('number_of_employees_max', $data) && $data['number_of_employees_max'] != "") ? $data['number_of_employees_max'] : 0;
  $ebidta_margin = (array_key_exists('ebidta_margin', $data) && $data['ebidta_margin'] != "") ? $data['ebidta_margin'] : 0;
  $for_rev_1 = (array_key_exists('for_rev_1', $data) && $data['for_rev_1'] != "") ? $data['for_rev_1'] : "";
  $for_ebd_1 = (array_key_exists('for_ebd_1', $data) && $data['for_ebd_1'] != "") ? $data['for_ebd_1'] : "";
  $for_rev_2 = (array_key_exists('for_rev_2', $data) && $data['for_rev_2'] != "") ? $data['for_rev_2'] : "";
  $for_ebd_2 = (array_key_exists('for_ebd_2', $data) && $data['for_ebd_2'] != "") ? $data['for_ebd_2'] : "";
  $for_rev_3 = (array_key_exists('for_rev_3', $data) && $data['for_rev_3'] != "") ? $data['for_rev_3'] : "";
  $for_ebd_3 = (array_key_exists('for_ebd_3', $data) && $data['for_ebd_3'] != "") ? $data['for_ebd_3'] : "";
  $for_rev_1_sel = (array_key_exists('for_rev_1_sel', $data) && $data['for_rev_1_sel'] != "") ? $data['for_rev_1_sel'] : "";
  $for_ebd_1_sel = (array_key_exists('for_ebd_1_sel', $data) && $data['for_ebd_1_sel'] != "") ? $data['for_ebd_1_sel'] : "";
  $for_rev_2_sel = (array_key_exists('for_rev_2_sel', $data) && $data['for_rev_2_sel'] != "") ? $data['for_rev_2_sel'] : "";
  $for_ebd_2_sel = (array_key_exists('for_ebd_2_sel', $data) && $data['for_ebd_2_sel'] != "") ? $data['for_ebd_2_sel'] : "";
  $for_rev_3_sel = (array_key_exists('for_rev_3_sel', $data) && $data['for_rev_3_sel'] != "") ? $data['for_rev_3_sel'] : "";
  $for_ebd_3_sel = (array_key_exists('for_ebd_3_sel', $data) && $data['for_ebd_3_sel'] != "") ? $data['for_ebd_3_sel'] : "";
  $aum = (array_key_exists('aum', $data) && $data['aum'] != "") ? $data['aum'] : 0;
  $key_elements = array_key_exists('key_elements', $data) ? $data['key_elements'] : "";
  $number_of_investments = (array_key_exists('number_of_investments', $data) && $data['number_of_investments'] != "") ? $data['number_of_investments'] : 0;
  $investment_size = (array_key_exists('investment_size', $data) && $data['investment_size'] != "") ? $data['investment_size'] : "";
  $investment_amount = (array_key_exists('investment_amount', $data) && $data['investment_amount'] != "") ? $data['investment_amount'] : "";
  $who_i_am = array_key_exists('who_i_am', $data) ? $data['who_i_am'] : "";
  $looking_for = array_key_exists('looking_for', $data) ? $data['looking_for'] : "";
  $what_i_want = array_key_exists('what_i_want', $data) ? $data['what_i_want'] : "";
  $description = array_key_exists('description', $data) ? $data['description'] : "";
  $image = array_key_exists('image', $data) && $data['image'] != "" ? $data['image'] : getImage($asset_type, $sector);
  $userId = $_SESSION['id'];
  $sql = "INSERT INTO `business_company` (`USER_ID`, `DEAL`, `OFFER`, `ASSET_TYPE` , `COMPANY_TYPE`, `SUB_COMPANY_TYPE`, `COUNTRY`, `CITY`, `FOUNDATION_YEAR`, `CURRENCY`, `COMPANY_VAL_TYPE`, `COMPANY_VAL_MIN`, `COMPANY_VAL_MAX`, `INVESTMENT_TYPE`, `INVESTMENT_MIN`, `INVESTMENT_MAX`, `SECTOR`, `INDUSTRY`, `COMPANY_BUSINESS`, `AREA_OF_ACTIVITY`, `SCALABILITY`, `SCALABILITY_AREA`, `MARKET_SHARE`, `NUM_OF_EMPLOYEE_MIN`, `NUM_OF_EMPLOYEE_MAX`, `ACTUAL_REVENUE_TYPE`, `ACTUAL_REVENUE_MIN`, `ACTUAL_REVENUE_MAX`, `EBIDTA_MARGIN`, `FORECAST_REVENUE_Y1`, `FORECAST_REVENUE_Y2`, `FORECAST_REVENUE_Y3`,`FORECAST_EBITDA_Y1`, `FORECAST_EBITDA_Y2`, `FORECAST_EBITDA_Y3`, `NUM_OF_INVESTMENT`, `INVESTMENT_SIZE`, `PREF_INVESTMENT_AMOUNT`, `WHO_I_AM`, `LOOKING_FOR`, `WANT_TO_DO`, `AUM`, `DESCRIPTION`, `KEY_ELEMENTS`, `IMAGE`, `FORECAST_REVENUE_Y1_SEL`, `FORECAST_REVENUE_Y2_SEL`, `FORECAST_REVENUE_Y3_SEL`, `FORECAST_EBITDA_Y1_SEL`, `FORECAST_EBITDA_Y2_SEL`, `FORECAST_EBITDA_Y3_SEL`) VALUES ('$userId', '$deal_type', '$offer', '$asset_type', '$company_type', '$startup_type', '$country', '$city', $foundation_year, '$default_currency', '$company_value_type', $company_value_min, $company_value_max, '$investment_required_value', $investment_required_min, $investment_required_max, '$sector', '$industry', '$company_business', '$area_of_activity', '$scalability', '$scalability_area', $market_share, $number_of_employees_min, $number_of_employees_max, '$actual_revenue_type', $actual_revenue_min, $actual_revenue_max, $ebidta_margin, '$for_rev_1', '$for_rev_2', '$for_rev_3', '$for_ebd_1', '$for_ebd_2', '$for_ebd_3', $number_of_investments, '$investment_size', '$investment_amount', '$who_i_am', '$looking_for', '$what_i_want', $aum, '$description', '$key_elements', '$image','$for_rev_1_sel','$for_rev_2_sel','$for_rev_3_sel','$for_ebd_1_sel','$for_ebd_2_sel','$for_ebd_3_sel')";
}


if (!empty($sql)) {
  if ($con->query($sql)) {
    echo "success";
  } else {
    $response = mysqli_error($con);
    echo json_encode("error  " . $response);
  }
}
exit();


function getImage($asset, $sector)
{
  $image = "";
  if ($asset != "") {
    if ($asset == "Real Estate") {
      if ($sector == "Building") {
        $imagesDir = 'real_estate_building';
      } else if ($sector == "Hotel") {
        $imagesDir = 'real_estate_hotel';
      } else if ($sector == "Resort") {
        $imagesDir = 'real_estate_resort';
      } else if ($sector == "Residential") {
        $imagesDir = 'sector_it';
      } else if ($sector == "Commercial") {
        $imagesDir = 'real_estate_commercial';
      } else if ($sector == "Industrial") {
        $imagesDir = 'real_estate_industrial';
      } else if ($sector == "Land") {
        $imagesDir = 'real_estate_land';
      } else {
        $imagesDir = 'real_estate';
      }
    } else if ($asset == "NPE") {
      $imagesDir = 'npe';
    } else if ($asset == "Credits") {
      $imagesDir = 'credits';
    } else if ($asset == "Business Company") {
      if ($sector == "Information Technology") {
        $imagesDir = 'sector_it';
      } else if ($sector == "Business Products and Services (B2B)") {
        $imagesDir = 'sector_business_products';
      } else if ($sector == "Healthcare") {
        $imagesDir = 'sector_healthcare';
      } else if ($sector == "Consumer Products and Services (B2C)") {
        $imagesDir = 'sector_consumer_products';
      } else if ($sector == "Energy") {
        $imagesDir = 'sector_energy';
      } else if ($sector == "Financial Services") {
        $imagesDir = 'sector_financial';
      } else if ($sector == "Materials and Resources") {
        $imagesDir = 'sector_mineral_resources';
      } else {
        $imagesDir = 'company';
      }
    } else if ($asset == "Start Up") {
      if ($sector == "Information Technology") {
        $imagesDir = 'sector_it';
      } else if ($sector == "Business Products and Services (B2B)") {
        $imagesDir = 'sector_business_products';
      } else if ($sector == "Healthcare") {
        $imagesDir = 'sector_healthcare';
      } else if ($sector == "Consumer Products and Services (B2C)") {
        $imagesDir = 'sector_consumer_products';
      } else if ($sector == "Energy") {
        $imagesDir = 'sector_energy';
      } else if ($sector == "Financial Services") {
        $imagesDir = 'sector_financial';
      } else if ($sector == "Materials and Resources") {
        $imagesDir = 'sector_mineral_resources';
      } else {
        $imagesDir = 'startup';
      }
    }
    $images = glob('./../uploads/dummyImages/' . $imagesDir . '/*');
    if (isset($images)) {
      $randomImage = $images[array_rand($images)];
      $searchSubStr = "uploads/";
      $firstIndex = stripos($randomImage, $searchSubStr);
      $position = $firstIndex + strlen($searchSubStr);
      return substr($randomImage, $position);
    } else {
      return "";
    }
  }
}
