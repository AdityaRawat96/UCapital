
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/pro.png"> Your Favorites </a></li>
            <!-- <li class="breadcrumb-item active text-custom-2"> Details </li> -->
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- content-header -->

  <section class="content">
    <div class="container-fluid">

      <div class="row">


        <div class="col-md-12">
          <div class="card class-contact-info-settings">

            <ul class="listing-add-post1-profile nav nav-pills">
              <li> <a href="#MaFavorites" data-toggle="tab" class="active"> M&As </a> </li>
              <li> <a href="#InvestorsFavorites" data-toggle="tab"> Investors </a> </li>
              <li> <a href="#ADVISORSFavorites" data-toggle="tab"> Advisors </a> </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="MaFavorites">

                <div class="row">

                  <?php

                  $user_id = $_SESSION['id'];
                  $company_ids = array();
                  $npe_ids = array();
                  $credits_ids = array();
                  $re_ids = array();
                  $result= mysqli_query($con, " SELECT * FROM favorites WHERE user_id = '$user_id' ")
                  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
                  if(mysqli_num_rows($result) > 0 ){
                    while($row = mysqli_fetch_array($result)){
                      if($row['company_id'] != null && $row['company_id'] != '' && $row['company_id'] != '[]'){
                        $company_ids = json_decode($row['company_id']);
                        $company_ids_search = implode(',', array_map('intval', $company_ids));
                      }else{
                        $company_ids_search = 0;
                      }
                      if($row['npe_id'] != null && $row['npe_id'] != '' && $row['npe_id'] != '[]'){
                        $npe_ids = json_decode($row['npe_id']);
                        $npe_ids_search = implode(',', array_map('intval', $npe_ids));
                      }else{
                        $npe_ids_search = 0;
                      }
                      if($row['credits_id'] != null && $row['credits_id'] != '' && $row['credits_id'] != '[]'){
                        $credits_ids = json_decode($row['credits_id']);
                        $credits_ids_search = implode(',', array_map('intval', $credits_ids));
                      }else{
                        $credits_ids_search = 0;
                      }
                      if($row['re_id'] != null && $row['re_id'] != '' && $row['re_id'] != '[]'){
                        $re_ids = json_decode($row['re_id']);
                        $re_ids_search = implode(',', array_map('intval', $re_ids));
                      }else{
                        $re_ids_search = 0;
                      }
                    }
                  }


                  $published_buy_deal = array();
                  $published_sell_deal = array();
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
                  real_estate.ASSET_TYPE
                  FROM real_estate where DEAL = 'buy' AND  ID IN (".$re_ids_search."))
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
                  npe.ASSET_TYPE
                  FROM npe where DEAL = 'buy' AND  ID IN (".$npe_ids_search."))
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
                  credit.ASSET_TYPE
                  FROM credit where DEAL = 'buy' AND  ID IN (".$credits_ids_search."))
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
                  business_company.ASSET_TYPE
                  FROM business_company where DEAL = 'buy' AND  ID IN (".$company_ids_search."))";


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
                  real_estate.ASSET_TYPE
                  FROM real_estate where DEAL = 'sell' AND  ID IN (".$re_ids_search."))
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
                  npe.ASSET_TYPE
                  FROM npe where DEAL = 'sell' AND ID IN (".$npe_ids_search."))
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
                  credit.ASSET_TYPE
                  FROM credit where DEAL = 'sell' AND ID IN (".$credits_ids_search."))
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
                  business_company.ASSET_TYPE
                  FROM business_company where DEAL = 'sell' AND ID IN (".$company_ids_search."))";
                  $result_buy = mysqli_query($con, $sql_buy);
                  if (mysqli_num_rows($result_buy) > 0) {
                    while ($deal = mysqli_fetch_array($result_buy)) {
                      ?>
                      <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item ma-card-<?=$deal['ID']."-".$deal['ASSET_TYPE']."-".$deal['DEAL']; ?>">
                        <a href="ma-detail.php?type=<?=strtolower($deal['ASSET_TYPE']); ?>&id=<?=$deal['ID']; ?>">
                          <div class="card mb-4 cart-custom-redious our-shadow">
                            <div class="card-img-contain">
                              <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                              <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                              <span class="right-tag-batch">
                                <span class="bookmark
                                <?=" bookmark-".str_replace(" ","_", strtolower($deal['ASSET_TYPE'])); ?>
                                <?php
                                $detail_1_icon = "";
                                $detail_2_icon = "";
                                $detail_1_title = "";
                                $detail_2_title = "";
                                $detail_2_value= "";
                                $detail_2_title_end = "";
                                if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                                  $detail_1_icon = " fa-chart-pie";
                                  $detail_2_icon = " fa-industry";
                                  $detail_1_title = "Sector: ";
                                  $detail_2_title = "Industry: ";
                                  $detail_2_value= $deal['DETAIL_2'];
                                  if (in_array($deal['ID'], $company_ids)) {
                                    echo " bookmark-active ";
                                  }
                                } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                                  $detail_1_icon = " fa-hammer";
                                  $detail_2_icon = " fa-home";
                                  $detail_1_title = "Status: ";
                                  $detail_2_title = "Surface: ";
                                  $detail_2_title_end = " sqm";
                                  if($deal['DETAIL_3'] != "-"){
                                    $detail_2_value= "From ".$deal['DETAIL_2']." To ".$deal['DETAIL_3'];
                                  }else{
                                    $detail_2_value = $deal['DETAIL_2'];
                                  }
                                  if (in_array($deal['ID'], $re_ids)) {
                                    echo " bookmark-active ";
                                  }
                                } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                                  $detail_1_icon = " fa-receipt";
                                  $detail_2_icon = " fa-money-bill-wave";
                                  $detail_1_title = "Type: ";
                                  $detail_2_title = "Value: ";
                                  $detail_2_value= shorten_number_range($deal['VALUE_TYPE'], $deal['VALUE_MIN'], $deal['VALUE_MAX'])." ".add_currency_symbol($deal['CURRENCY']);
                                  if (in_array($deal['ID'], $credits_ids)) {
                                    echo " bookmark-active ";
                                  }
                                } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                                  $detail_1_icon = " fa-receipt";
                                  $detail_2_icon = " fa-money-bill-wave";
                                  $detail_1_title = "Type: ";
                                  $detail_2_title = "Value: ";
                                  $detail_2_value= shorten_number_range($deal['VALUE_TYPE'], $deal['VALUE_MIN'], $deal['VALUE_MAX'])." ".add_currency_symbol($deal['CURRENCY']);
                                  if (in_array($deal['ID'], $npe_ids)) {
                                    echo " bookmark-active ";
                                  }
                                }
                                ?>"
                                <?=' data-id="'.$deal['ID'].'"'; ?>>
                                <i class="fas fa-bookmark fa-2x"></i>
                              </span>
                            </span>
                          </div>
                          <div class="d-flex flex-column justify-content-end p-2">
                            <span>
                              <i><?=generateLocationTitle($deal['SUB_TITLE_1'], $deal['COUNTRY'], $deal['CITY']); ?></i>
                            </span>
                            <span class="deal-card-heading"><?=generateCardTitle(strtolower($deal['ASSET_TYPE']), $deal['DEAL'], $deal['TITLE_1'], $deal['TITLE_2'], $deal['DETAIL_3']); ?></span>
                            <div class="listing">
                              <span><i class="fas <?=$detail_1_icon; ?>"></i> &nbsp; <?= $detail_1_title.str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                              <span><i class="fas <?=$detail_2_icon; ?>"></i> &nbsp; <?= $detail_2_title.$detail_2_value.$detail_2_title_end; ?></span>
                              <hr>
                              <span >
                                <b>Key Elements:</b> <?=$deal['KEY_ELEMENTS']; ?>
                              </span>
                              <br>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <?php
                  }
                }
                $result_sell = mysqli_query($con, $sql_sell);
                if (mysqli_num_rows($result_sell) > 0) {
                  while ($deal = mysqli_fetch_array($result_sell)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item ma-card-<?=$deal['ID']."-".$deal['ASSET_TYPE']."-".$deal['DEAL']; ?>">
                      <a href="ma-detail.php?type=<?=strtolower($deal['ASSET_TYPE']); ?>&id=<?=$deal['ID']; ?>">
                        <div class="card mb-4 cart-custom-redious our-shadow">
                          <div class="card-img-contain">
                            <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                            <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                            <span class="bottom-right-tag-card"><?=shorten_number_range($deal['VALUE_TYPE'],$deal['VALUE_MIN'],$deal['VALUE_MAX'])." ".add_currency_symbol($deal['CURRENCY']); ?></span>
                            <span class="right-tag-batch">
                              <span class="bookmark
                              <?=" bookmark-".str_replace(" ","_", strtolower($deal['ASSET_TYPE'])); ?>
                              <?php
                              $detail_1_icon = "";
                              $detail_2_icon = "";
                              $detail_1_title = "";
                              $detail_2_title = "";
                              $detail_2_value= "";
                              $detail_2_title_end = "";
                              if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                                $detail_1_icon = " fa-chart-pie";
                                $detail_2_icon = " fa-industry";
                                $detail_1_title = "Sector: ";
                                $detail_2_title = "Industry: ";
                                $detail_2_value= $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $company_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                                $detail_1_icon = " fa-hammer";
                                $detail_2_icon = " fa-home";
                                $detail_1_title = "Status: ";
                                $detail_2_title = "Surface: ";
                                $detail_2_title_end = " sqm";
                                $detail_2_value= $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $re_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                                $detail_1_icon = " fa-receipt";
                                $detail_2_icon = " fa-calendar";
                                $detail_1_title = "Type: ";
                                $detail_2_title = "Maturity: ";
                                $detail_2_value= $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $credits_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                                $detail_1_icon = " fa-receipt";
                                $detail_2_icon = " fa-money-bill-wave";
                                $detail_1_title = "Type: ";
                                $detail_2_title = "Market Value: ";
                                $detail_2_value= number_shorten($deal['DETAIL_2'])." ".add_currency_symbol($deal['CURRENCY']);
                                if (in_array($deal['ID'], $npe_ids)) {
                                  echo " bookmark-active ";
                                }
                              }
                              ?>"
                              <?=' data-id="'.$deal['ID'].'"'; ?>>
                              <i class="fas fa-bookmark fa-2x"></i>
                            </span>
                          </span>
                        </div>
                        <div class="d-flex flex-column justify-content-end p-2">
                          <span>
                            <i><?=generateLocationTags($deal['COUNTRY'], $deal['CITY']); ?></i>
                          </span>
                          <span class="deal-card-heading"><?=generateCardTitle(strtolower($deal['ASSET_TYPE']), $deal['DEAL'], $deal['TITLE_1'], $deal['TITLE_2'], $deal['DETAIL_3']); ?></span>
                          <div class="listing">
                            <span><i class="fas <?=$detail_1_icon; ?>"></i> &nbsp; <?= $detail_1_title.str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                            <span><i class="fas <?=$detail_2_icon; ?>"></i> &nbsp; <?= $detail_2_title.$detail_2_value.$detail_2_title_end; ?></span>
                            <hr>
                            <span >
                              <b>Key Elements:</b> <?=$deal['KEY_ELEMENTS']; ?>
                            </span>
                            <br>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php
                }
              }
              ?>

            </div>

          </div>

          <div class="tab-pane" id="InvestorsFavorites">
            <div class="row">
              <?php

              $investor_ids;
              $result= mysqli_query($con, " SELECT investor_id FROM favorites WHERE user_id = '$user_id' ")
              or die('An error occurred! Unable to process this request. '. mysqli_error($con));
              if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_array($result)){
                  if($row['investor_id'] == "" || $row['investor_id'] == null){
                    $investor_ids = array();
                  }else{
                    $investor_ids = json_decode($row['investor_id']);
                  }
                }
              }

              if(!empty($investor_ids)){
                $investor_ids_search = implode(',', array_map('strval', $investor_ids));
                $sql = "SELECT * FROM investors WHERE id IN (".$investor_ids_search.")";
                $result= mysqli_query($con, $sql)
                or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_array($result)){

                    ?>
                    <div class="col-md-3 col-sm-6 investor-card-<?=$row['id']?>">
                      <a href="../investors/investor-detail.php?investor=<?=$row['id']?>" class="card investor-category-l-4">
                        <div class="card-header">
                          <span class="right-investor-batch">
                            <span class="bookmark bookmark-investor bookmark-active favorite-bookmark" data-id="<?=$row['id']?>" data-type="investor">
                              <i class="fas fa-bookmark fa-2x"></i>
                            </span>
                          </span>
                          <img src="../../dist/img/investor/1.jpg" alt="1" class="investor-images-set">
                        </div>
                        <div class="card-body">
                          <h6 class="card-title-heading-set"><?=$row['Investor_Name']?></h6>
                          <p class="card-text-location10"> <i class="fas fa-map-marker-alt"></i><?=$row['HQ_Location']?></p>
                        </div>
                      </a>
                    </div>
                    <?php
                  }
                }
              }


              ?>
            </div>
          </div>
          <div class="tab-pane" id="ADVISORSFavorites"><br>
            <div class="row">
              <?php
              $advisor_ids;
              $result= mysqli_query($con, " SELECT advisor_id FROM favorites WHERE user_id = '$user_id' ")
              or die('An error occurred! Unable to process this request. '. mysqli_error($con));
              if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_array($result)){
                  if($row['advisor_id'] == "" || $row['advisor_id'] == null){
                    $advisor_ids = array();
                  }else{
                    $advisor_ids = json_decode($row['advisor_id']);
                  }
                }
              }

              if(!empty($advisor_ids)){
                $advisor_ids_search = implode(',', array_map('strval', $advisor_ids));
                $sql = "SELECT * FROM advisors WHERE id IN (".$advisor_ids_search.")";
                $result= mysqli_query($con, $sql)
                or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_array($result)){

                    ?>
                    <div class="col-md-4 col-sm-6">
                      <div class="card advisor-category-l-4">
                        <div class="card-header">
                          <span class="right-investor-batch">
                            <span class="bookmark bookmark-advisor <?php if(in_array($row['id'], $advisor_ids)){echo 'bookmark-active';} ?>" data-id="<?=$row['id']?>">
                              <i class="fas fa-bookmark fa-2x"></i>
                            </span>
                          </span>
                          <center>
                            <img src="../../assets/uploads/Advisor/<?=$row['folder_name'].'/'.$row['profile_picture']; ?>" alt="1" class="profile-advisor-category12">
                          </center>
                        </div>
                        <div class="card-body">
                          <p class="studio-commercialista"> <?=$row['studio_name']?> </p>
                          <hr>
                          <p class="studio-commercialista-second"> <i class="far fa-star"></i> <?=$row['interests']?> </p>
                          <a href="advisor-detail.php?advisor=<?=$row['id']?>" class="advisor-category-contact-34"> Content here > </a>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- container-fluid -->
</section>
<!-- content -->
</div>
<!-- content-wrapper -->
