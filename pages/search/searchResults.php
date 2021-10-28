<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  if(isset($_POST['search'])){
    $search_query = $_POST['search'];
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/pro.png"> Search Results </a></li>
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
                  <li> <a href="#newsSection" data-toggle="tab"> News </a> </li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="MaFavorites">
                    <div class="row">

                      <?php

                      $investor_ids;
                      $company_ids = array();
                      $npe_ids = array();
                      $credits_ids = array();
                      $re_ids = array();
                      $advisor_ids;
                      $user_id = $_SESSION['id'];
                      $result= mysqli_query($con, " SELECT * FROM favorites WHERE user_id = '$user_id' ")
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));
                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){
                          if($row['investor_id'] == "" || $row['investor_id'] == null){
                            $investor_ids = array();
                          }else{
                            $investor_ids = json_decode($row['investor_id']);
                          }
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
                          if($row['advisor_id'] == "" || $row['advisor_id'] == null){
                            $advisor_ids = array();
                          }else{
                            $advisor_ids = json_decode($row['advisor_id']);
                          }
                        }
                      }

                      $published_buy_deal = array();
                      $published_sell_deal = array();
                      $sql_buy = "(SELECT
                      real_estate.ID,
                      real_estate.DEAL,
                      real_estate.ASSET_TYPE,
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
                      FROM real_estate where DEAL = 'buy' AND (real_estate.DEAL_SUBJECT LIKE '%$search_query%' OR real_estate.REAL_ESTATE_TYP LIKE '%$search_query%'))
                      UNION ALL( SELECT
                      npe.ID,
                      npe.DEAL,
                      npe.ASSET_TYPE,
                      npe.DEAL AS TITLE_1,
                      'NPE' AS TITLE_2,
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
                      FROM npe where DEAL = 'buy' AND (npe.DEAL LIKE '%$search_query%' OR npe.ASSET_TYPE LIKE '%$search_query%'))
                      UNION ALL( SELECT
                      credit.ID,
                      credit.DEAL,
                      credit.ASSET_TYPE,
                      credit.DEAL AS TITLE_1,
                      'Credit' AS TITLE_2,
                      credit.CREDIT_TYPE AS DETAIL_1,
                      '-' AS DETAIL_2,
                      '-' AS DETAIL_3,
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
                      FROM credit where DEAL = 'buy' AND (credit.DEAL LIKE '%$search_query%' OR credit.ASSET_TYPE LIKE '%$search_query%'))
                      UNION ALL ( SELECT
                      business_company.ID,
                      business_company.DEAL,
                      business_company.ASSET_TYPE,
                      business_company.WANT_TO_DO AS TITLE_1,
                      business_company.ASSET_TYPE AS TITLE_2,
                      business_company.SECTOR AS DETAIL_1,
                      business_company.INDUSTRY AS DETAIL_2,
                      '-' AS DETAIL_3,
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
                      FROM business_company where DEAL = 'buy' AND (business_company.WANT_TO_DO LIKE '%$search_query%' OR business_company.ASSET_TYPE LIKE '%$search_query%'))";


                      $sql_sell = "(SELECT
                      real_estate.ID,
                      real_estate.DEAL,
                      real_estate.ASSET_TYPE,
                      real_estate.DEAL_SUBJECT AS TITLE_1,
                      real_estate.REAL_ESTATE_TYP AS TITLE_2,
                      real_estate.ASSET_STATUS AS DETAIL_1,
                      real_estate.TOTAL_SURFACE AS DETAIL_2,
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
                      FROM real_estate where DEAL = 'sell' AND (real_estate.DEAL_SUBJECT LIKE '%$search_query%' OR real_estate.REAL_ESTATE_TYP LIKE '%$search_query%'))
                      UNION ALL( SELECT
                      npe.ID,
                      npe.DEAL,
                      npe.ASSET_TYPE,
                      npe.DEAL AS TITLE_1,
                      'NPE' AS TITLE_2,
                      npe.NPE_TYPE AS DETAIL_1,
                      npe.MARKET_VALUE AS DETAIL_2,
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
                      FROM npe where DEAL = 'sell' AND (npe.DEAL LIKE '%$search_query%' OR npe.ASSET_TYPE LIKE '%$search_query%'))
                      UNION ALL( SELECT
                      credit.ID,
                      credit.DEAL,
                      credit.ASSET_TYPE,
                      credit.DEAL AS TITLE_1,
                      'Credit' AS TITLE_2,
                      credit.CREDIT_TYPE AS DETAIL_1,
                      credit.MATURITY AS DETAIL_2,
                      'fixed' AS VALUE_TYPE,
                      credit.VALUE_MIN AS ASKING_PRICE,
                      credit.VALUE_MAX AS ASKING_PRICE,
                      credit.CURRENCY AS CURRENCY,
                      credit.COUNTRY,
                      credit.CITY,
                      credit.OFFER,
                      credit.IMAGE,
                      '-' AS KEY_ELEMENTS,
                      credit.ASSET_TYPE
                      FROM credit where DEAL = 'sell' AND (credit.DEAL LIKE '%$search_query%' OR credit.ASSET_TYPE LIKE '%$search_query%'))
                      UNION ALL ( SELECT
                      business_company.ID,
                      business_company.DEAL,
                      business_company.ASSET_TYPE,
                      business_company.COMPANY_TYPE AS TITLE_1,
                      business_company.ASSET_TYPE AS TITLE_2,
                      business_company.SECTOR AS DETAIL_1,
                      business_company.INDUSTRY AS DETAIL_2,
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
                      FROM business_company where DEAL = 'sell' AND (business_company.COMPANY_TYPE LIKE '%$search_query%' OR business_company.ASSET_TYPE LIKE '%$search_query%'))";
                      $result_buy = mysqli_query($con, $sql_buy);
                      if (mysqli_num_rows($result_buy) > 0) {
                        while ($deal = mysqli_fetch_array($result_buy)) {
                          ?>
                          <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item">
                            <a href="ma-detail.php?ma=<?= $deal['ID']; ?>">
                              <div class="card mb-4 cart-custom-redious our-shadow">
                                <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                                <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                                <span class="right-tag-batch">
                                  <span class="bookmark
                                  <?php
                                  $deatil_1_title = "";
                                  $deatil_2_title = "";
                                  if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                                    $deatil_1_title = "Sector: ";
                                    $deatil_2_title = "Industry: ";
                                    if (in_array($deal['ID'], $company_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                                    $deatil_1_title = "Status: ";
                                    $deatil_2_title = "Surface: ";
                                    if (in_array($deal['ID'], $re_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                                    $deatil_1_title = "Type: ";
                                    $deatil_2_title = "Value: ";
                                    if (in_array($deal['ID'], $credits_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                                    $deatil_1_title = "Type: ";
                                    $deatil_2_title = "Value: ";
                                    if (in_array($deal['ID'], $npe_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  }
                                  ?>
                                  bookmark-<?= strtolower(str_replace(" ", "_", $deal['ASSET_TYPE'])); ?>" data-id="<?= $deal['ID']; ?>"> <i class="fas fa-bookmark fa-2x"></i> </span>
                                </span>
                                <div class="d-flex flex-column justify-content-end p-2">
                                  <span><i> <?=generateLocationTags($deal['COUNTRY'], $deal['CITY']); ?> </i></span>
                                  <span class="deal-card-heading"><?= $deal['TITLE_1']; ?> <b><?= $deal['TITLE_2']; ?></b></span>
                                  <div class="listing">
                                    <span><i class="fas fa-chart-pie"></i> &nbsp; <?= $deatil_1_title.str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                                    <span><i class="fas fa-chart-line"></i> &nbsp;
                                      <?php
                                      if($deal['DETAIL_3'] != "-"){
                                        echo ($deatil_2_title."From ".$deal['DETAIL_2']." To ".$deal['DETAIL_3']." sqm");
                                      }else{
                                        echo ($deatil_2_title.$deal['DETAIL_2']);
                                      } ?>
                                    </span>
                                    <hr>
                                    <span ><b>Key Elements:</b> <?= $deal['KEY_ELEMENTS']; ?></span><br><br>
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
                          <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item">
                            <a href="ma-detail.php?ma=<?= $deal['ID']; ?>">
                              <div class="card mb-4 cart-custom-redious our-shadow">
                                <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                                <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                                <span class="right-tag-batch">
                                  <span class="bookmark
                                  <?php
                                  $deatil_1_title = "";
                                  $deatil_2_title = "";
                                  $deatil_2_title_end = "";
                                  if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                                    $deatil_1_title = "Sector: ";
                                    $deatil_2_title = "Industry: ";
                                    if (in_array($deal['ID'], $company_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                                    $deatil_1_title = "Status: ";
                                    $deatil_2_title = "Surface: ";
                                    $deatil_2_title_end = " sqm";
                                    if (in_array($deal['ID'], $re_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                                    $deatil_1_title = "Type: ";
                                    $deatil_2_title = "Maturity: ";
                                    if (in_array($deal['ID'], $credits_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                                    $deatil_1_title = "Type: ";
                                    $deatil_2_title = "Value: ";
                                    if (in_array($deal['ID'], $npe_ids)) {
                                      echo " bookmark-active ";
                                    }
                                  }
                                  ?>
                                  bookmark-<?= strtolower(str_replace(" ", "_", $deal['ASSET_TYPE'])); ?>" data-id="<?= $deal['ID']; ?>"> <i class="fas fa-bookmark fa-2x"></i> </span>
                                </span>
                                <div class="d-flex flex-column justify-content-end p-2">
                                  <span><i> <?=generateLocationTags($deal['COUNTRY'], $deal['CITY']); ?> </i></span>
                                  <span class="deal-card-heading"><?= $deal['TITLE_1']; ?> <b><?= $deal['TITLE_2']; ?></b></span>
                                  <div class="listing">
                                    <span><i class="fas fa-chart-pie"></i> &nbsp; <?= $deatil_1_title.str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                                    <span><i class="fas fa-chart-line"></i> &nbsp; <?= $deatil_2_title.$deal['DETAIL_2'].$deatil_2_title_end; ?></span>
                                    <hr>
                                    <span ><b>Key Elements:</b> <?= $deal['KEY_ELEMENTS']; ?></span><br><br>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php
                        }
                      }/*
else{
                        ?>
                        <center><br>
                          <h4>No results found!</h4>
                        </center>
                        <?php
                      }*/


                      ?>
                    </div>
                  </div>

                  <div class="tab-pane" id="InvestorsFavorites">
                    <div class="row">
                      <?php
                      $sql = "SELECT * FROM investors WHERE Investor_Name LIKE '%$search_query%'";
                      $result= mysqli_query($con, $sql)
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){

                          ?>
                          <div class="col-md-3 col-sm-6 investor-card-<?=$row['id']?>">
                            <a href="../investors/investor-detail.php?investor=<?=$row['id']?>" class="card investor-category-l-4">
                              <div class="card-header">
                                <span class="right-investor-batch">
                                  <span class="bookmark bookmark-investor <?php if(in_array($row['id'], $investor_ids)){echo 'bookmark-active';} ?>" data-id="<?=$row['id']?>">
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
                      }else{
                        ?>
                        <center><br>
                          <h4>No results found!</h4>
                        </center>
                        <?php
                      }
                      ?>
                    </div>
                  </div>


                  <div class="tab-pane" id="ADVISORSFavorites"><br>
                    <div class="row">
                      <?php
                      $sql = "SELECT * FROM advisors WHERE studio_name LIKE '%$search_query%'";
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
                      }else{
                        ?>
                        <center>
                          <h4>No results found!</h4>
                        </center>
                        <?php
                      }
                      ?>
                    </div>
                  </div>


                  <div class="tab-pane" id="newsSection"><br>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12">
                            <h3>Latest News</h3><br>
                          </div>
                        </div>

                        <div class="row news_loader_search">
                          <div class="col-12">
                            <center>
                              <div>
                                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                  <animateTransform
                                  attributeName="transform"
                                  attributeType="XML"
                                  type="rotate"
                                  dur="1s"
                                  from="0 50 50"
                                  to="360 50 50"
                                  repeatCount="indefinite" />
                                </path>
                              </svg>
                            </div>
                          </center>
                        </div>
                      </div>

                      <div class="row">
                        <div class="latest_news_container row col-12">

                        </div>
                      </div><br><br>
                      <div class="row">
                        <center>
                          <ul class="pagination paginationList">
                          </ul>
                        </center>
                      </div><br><br>
                    </div>
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

  <?php
}
include '../elements/footer.php';
?>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>

<script type="text/javascript">

var search_query = '<?=$search_query ?>';

$(document).ready(function(){
  $(".input-serach").val(search_query);
})

GetFeeds();

function GetFeeds(){
  $.ajax({
    type: 'POST',
    url: "../../assets/php/getNewsFeed.php",
    data: {
      search_query: search_query
    },
    success: function(data) {
      obj = jQuery.parseJSON(data);
      showNews(obj)
    }
  });
}

function showNews(feeddata){
  feeddata.sort(function(a, b) {
    return parseFloat(b.timestamp) - parseFloat(a.timestamp);
  });


  if(feeddata.length > 0){
    feeddata.forEach(function(newsfeed){
      if(newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)){
        newsfeed.image = newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)[1];
      }
      if(newsfeed.img_type == 1){
        $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'../news/news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
      }else{
        $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'../news/news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'"  alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
      }
    });
  }else{
    $("#newsSection").html('<div class="row"><center><h4>No results found!</h4></center></div>')
  }

  $('.paginationList').rpmPagination({
    domElement: '.pagination-item',
    limit: 10,
  });
  $(".news_loader_search").fadeOut();

}

function feed_detail(feedurl){
  location.href = feedurl;
}


</script>
<?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
