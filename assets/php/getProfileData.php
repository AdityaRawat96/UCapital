<?php

function getSellProfileData($con, $user_id, $offset, $limit)
{
    $sql_sell = "(SELECT
real_estate.ID,
real_estate.DEAL,
real_estate.ASSET_TYPE,
real_estate.DEAL_SUBJECT AS TITLE_1,
real_estate.REAL_ESTATE_TYP AS TITLE_2,
real_estate.ASSET_STATUS AS DETAIL_1,
real_estate.TOTAL_SURFACE AS DETAIL_2,
'-' AS DETAIL_3,
real_estate.ASSET_VAL_TYPE AS VALUE_TYPE,
real_estate.ASSET_VAL_MIN AS VALUE_MIN,
real_estate.ASSET_VAL_MAX AS VALUE_MAX,
real_estate.CURRENCY AS CURRENCY,
real_estate.COUNTRY,
real_estate.CITY,
real_estate.OFFER,
real_estate.IMAGE,
real_estate.KEY_ELEMENTS,
real_estate.ASSET_TYPE,
real_estate.INSERT_TMSTMP
FROM real_estate where DEAL = 'sell' AND USER_ID = $user_id)
UNION ALL( SELECT
npe.ID,
npe.DEAL,
npe.ASSET_TYPE,
'Selling' AS TITLE_1,
npe.NPE_TYPE AS TITLE_2,
npe.NPE_TYPE AS DETAIL_1,
npe.MARKET_VALUE AS DETAIL_2,
'-' AS DETAIL_3,
'fixed' AS VALUE_TYPE,
npe.ASKING_PRICE AS VALUE_MIN,
npe.ASKING_PRICE AS VALUE_MAX,
npe.CURRENCY AS CURRENCY,
npe.COUNTRY,
npe.CITY,
npe.OFFER,
npe.IMAGE,
'-' AS KEY_ELEMENTS,
npe.ASSET_TYPE,
npe.INSERT_TMSTMP
FROM npe where DEAL = 'sell' AND USER_ID = $user_id)
UNION ALL( SELECT
credit.ID,
credit.DEAL,
credit.ASSET_TYPE,
'Selling' AS TITLE_1,
credit.CREDIT_TYPE AS TITLE_2,
credit.CREDIT_TYPE AS DETAIL_1,
credit.MATURITY AS DETAIL_2,
'-' AS DETAIL_3,
'fixed' AS VALUE_TYPE,
credit.ASKING_PRICE AS VALUE_MIN,
credit.ASKING_PRICE AS VALUE_MAX,
credit.CURRENCY AS CURRENCY,
credit.COUNTRY,
credit.CITY,
credit.OFFER,
credit.IMAGE,
'-' AS KEY_ELEMENTS,
credit.ASSET_TYPE,
credit.INSERT_TMSTMP
FROM credit where DEAL = 'sell' AND USER_ID = $user_id)
UNION ALL ( SELECT
business_company.ID,
business_company.DEAL,
business_company.ASSET_TYPE,
business_company.COMPANY_TYPE AS TITLE_1,
business_company.ASSET_TYPE AS TITLE_2,
business_company.SECTOR AS DETAIL_1,
business_company.INDUSTRY AS DETAIL_2,
business_company.SUB_COMPANY_TYPE AS DETAIL_3,
business_company.COMPANY_VAL_TYPE AS VALUE_TYPE,
business_company.COMPANY_VAL_MIN AS VALUE_MIN,
business_company.COMPANY_VAL_MAX AS VALUE_MAX,
business_company.CURRENCY AS CURRENCY,
business_company.COUNTRY,
business_company.CITY,
business_company.OFFER,
business_company.IMAGE,
business_company.KEY_ELEMENTS,
business_company.ASSET_TYPE,
business_company.INSERT_TMSTMP
FROM business_company where DEAL = 'sell' AND USER_ID = $user_id)
ORDER BY INSERT_TMSTMP DESC
LIMIT $offset, $limit
";
    $result = mysqli_query($con, $sql_sell)
        or die('An error occurred! Unable to process this request. ' . mysqli_error($con));

    if (mysqli_num_rows($result) > 0) {
        $response = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($response, $row);
        }
        return $response;
    } else {
        return "failed";
    }
}

function getBuyProfileData($con, $user_id, $offset, $limit)
{
    $sql_buy = "(SELECT
real_estate.ID,
real_estate.DEAL,
real_estate.ASSET_TYPE,
real_estate.WHO_I_AM AS SUB_TITLE_1,
real_estate.DEAL_SUBJECT AS TITLE_1,
real_estate.REAL_ESTATE_TYP AS TITLE_2,
real_estate.ASSET_STATUS AS DETAIL_1,
real_estate.TOTAL_SURFACE AS DETAIL_2,
real_estate.TOTAL_SURFACE_MAX AS DETAIL_3,
real_estate.ASSET_VAL_TYPE AS VALUE_TYPE,
real_estate.ASSET_VAL_MIN AS VALUE_MIN,
real_estate.ASSET_VAL_MAX AS VALUE_MAX,
real_estate.CURRENCY AS CURRENCY,
real_estate.COUNTRY,
real_estate.CITY,
real_estate.OFFER,
real_estate.IMAGE,
real_estate.KEY_ELEMENTS,
real_estate.ASSET_TYPE,
real_estate.INSERT_TMSTMP
FROM real_estate where DEAL = 'buy' AND USER_ID = $user_id)
UNION ALL( SELECT
npe.ID,
npe.DEAL,
npe.ASSET_TYPE,
npe.WHO_I_AM AS SUB_TITLE_1,
'Buying' AS TITLE_1,
npe.NPE_TYPE AS TITLE_2,
npe.NPE_TYPE AS DETAIL_1,
npe.MARKET_VALUE AS DETAIL_2,
'-' AS DETAIL_3,
npe.VALUE_TYPE AS VALUE_TYPE,
npe.VALUE_MIN AS VALUE_MIN,
npe.VALUE_MAX AS VALUE_MAX,
npe.CURRENCY AS CURRENCY,
npe.COUNTRY,
npe.CITY,
npe.OFFER,
npe.IMAGE,
'-' AS KEY_ELEMENTS,
npe.ASSET_TYPE,
npe.INSERT_TMSTMP
FROM npe where DEAL = 'buy' AND USER_ID = $user_id)
UNION ALL( SELECT
credit.ID,
credit.DEAL,
credit.ASSET_TYPE,
credit.WHO_I_AM AS SUB_TITLE_1,
'Buying' AS TITLE_1,
credit.CREDIT_TYPE AS TITLE_2,
credit.CREDIT_TYPE AS DETAIL_1,
'-' AS DETAIL_2,
credit.PRODUCT_TYPE AS DETAIL_3,
credit.VALUE_TYPE AS VALUE_TYPE,
credit.VALUE_MIN AS VALUE_MIN,
credit.VALUE_MAX AS VALUE_MAX,
credit.CURRENCY AS CURRENCY,
credit.COUNTRY,
credit.CITY,
credit.OFFER,
credit.IMAGE,
'-' AS KEY_ELEMENTS,
credit.ASSET_TYPE,
credit.INSERT_TMSTMP
FROM credit where DEAL = 'buy' AND USER_ID = $user_id)
UNION ALL ( SELECT
business_company.ID,
business_company.DEAL,
business_company.ASSET_TYPE,
business_company.WHO_I_AM AS SUB_TITLE_1,
business_company.WANT_TO_DO AS TITLE_1,
business_company.ASSET_TYPE AS TITLE_2,
business_company.SECTOR AS DETAIL_1,
business_company.INDUSTRY AS DETAIL_2,
business_company.SUB_COMPANY_TYPE AS DETAIL_3,
business_company.COMPANY_VAL_TYPE AS VALUE_TYPE,
business_company.COMPANY_VAL_MIN AS VALUE_MIN,
business_company.COMPANY_VAL_MAX AS VALUE_MAX,
business_company.CURRENCY AS CURRENCY,
business_company.COUNTRY,
business_company.CITY,
business_company.OFFER,
business_company.IMAGE,
business_company.KEY_ELEMENTS,
business_company.ASSET_TYPE,
business_company.INSERT_TMSTMP
FROM business_company where DEAL = 'buy' AND USER_ID = $user_id)
ORDER BY INSERT_TMSTMP DESC
LIMIT $offset, $limit";
    $result = mysqli_query($con, $sql_buy)
        or die('An error occurred! Unable to process this request. ' . mysqli_error($con));

    if (mysqli_num_rows($result) > 0) {
        $response = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($response, $row);
        }
        return $response;
    } else {
        return "failed";
    }
}
