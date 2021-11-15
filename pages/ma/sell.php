<?php
session_start();
$offset = 0;
$currentPage = 1;
if (isset($_GET['offset'])) {
  $offset = $_GET['offset'];
  $currentPage = ($offset / 48) + 1;
}
if (isset($_SESSION['email'])) {
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $company_ids = "";
  $npe_ids = "";
  $credits_ids = "";
  $re_ids = "";
  $result= mysqli_query($con, " SELECT * FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      $company_ids = $row['company_id'];
      $npe_ids = $row['npe_id'];
      $credits_ids = $row['credits_id'];
      $re_ids = $row['re_id'];
    }
  }
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1"> <img src="../../dist/img/new/m-a-breadcum.svg"> M & A </a></li>
              <li class="breadcrumb-item active text-custom-2"> Sell </li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
              <a href="deals.php" class="post-add our-back-btn"> <img src="../../dist/img/new/post-your-add.svg"> Post Your Add </a>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <section class="content">
      <div class="container-fluid">

        <div class="row mb-4">
          <div class="col-md-12">

            <div class="row  bg-white our-shadow p-3">
              <div class="col-sm-6">
                <div class="autocomplete">
                  <div class="input-group">
                    <div class="searchItems"></div>
                    <input type="search" placeholder="Type to filter result.." class="filter-search" id="searchIndicators" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="float-sm-right">
                  <a onclick="clearFilters();" class="btn-clear-section-1 our-trans-btn" style="cursor: pointer;"> <img src="../../dist/img/new/reload.svg"> Clear All </a>
                  <a href="#" class="btn-clear-section-1 our-border-btn" data-toggle="modal" data-target="#advancedFilters"> <img src="../../dist/img/new/advance-filter.svg"> Advanced Filters </a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="row itemsList">

        </div>

        <div class="row">
          <center>
            <ul class="pagination paginationList">
            </ul>
          </center>
        </div>

      </div><!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->

  <?php
  include 'filter_sell.php';
  include '../elements/footer.php';
  ?>
  <script type="text/javascript" src="../../assets/js/autocomplete.js"></script>
  <script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>
  <script type="text/javascript">
  var obj = [];
  var itemType = "ma";
  var limit = 12;
  var offset = parseInt('<?= $offset ?>');
  var currentPage = parseInt('<?= $currentPage ?>');

  var company_ids = [];
  var npe_ids = [];
  var credits_ids = [];
  var re_ids = [];

  if('<?=$company_ids; ?>' != ''){
    company_ids = jQuery.parseJSON('<?=$company_ids; ?>');
  }
  if('<?=$npe_ids; ?>' != ''){
    npe_ids = jQuery.parseJSON('<?=$npe_ids; ?>');
  }
  if('<?=$credits_ids; ?>' != ''){
    credits_ids = jQuery.parseJSON('<?=$credits_ids; ?>');
  }
  if('<?=$re_ids; ?>' != ''){
    re_ids = jQuery.parseJSON('<?=$re_ids; ?>');
  }


  $(document).ready(function() {
    $.ajax({
      type: 'POST',
      url: '../../assets/php/getMAData.php',
      data: {
        action: "sell",
        limit: limit
      },
      success: function(data) {
        $(".itemsList").html("");
        obj = jQuery.parseJSON(data);
        for (var i = 0; i < obj.length; i++) {
          var elementData = "";
          if(obj[i].ASSET_TYPE.toLowerCase() == "business company" || obj[i].ASSET_TYPE.toLowerCase() == "start up"){
            elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
            if(company_ids.includes(obj[i].ID)){
              elementData += " bookmark-active";
            }
            elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-industry"></i> &nbsp;  Industry: '+obj[i].DETAIL_2+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
            $(".itemsList").append(elementData);
          }else if(obj[i].ASSET_TYPE.toLowerCase() == "real estate"){
            elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
            if(re_ids.includes(obj[i].ID)){
              elementData += " bookmark-active";
            }
            elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-hammer"></i> &nbsp; Status: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-home"></i> &nbsp;  Surface: '+obj[i].DETAIL_2+' smq</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
            $(".itemsList").append(elementData);
          }else if(obj[i].ASSET_TYPE.toLowerCase() == "credits"){
            elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
            if(credits_ids.includes(obj[i].ID)){
              elementData += " bookmark-active";
            }
            elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-receipt"></i> &nbsp; Type: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-calendar"></i> &nbsp;  Maturity: '+obj[i].DETAIL_2+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
            $(".itemsList").append(elementData);
          }else if(obj[i].ASSET_TYPE.toLowerCase() == "npe"){
            elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
            if(npe_ids.includes(obj[i].ID)){
              elementData += " bookmark-active";
            }
            elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-receipt"></i> &nbsp; Type: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-money-bill-wave"></i> &nbsp;  Market Value: '+formatDealValue("fixed", obj[i].DETAIL_2, obj[i].DETAIL_2, obj[i].CURRENCY)+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
            $(".itemsList").append(elementData);
          }
        }
        var searchableElements = [];

        $('.searchable').each(function () {
          searchableElements.push($(this).data("search").toString().trim());
        });
        autocomplete(document.getElementById("searchIndicators"), searchableElements);
      }
    });
  });
</script>
<?php
} else {
  ?>
  <script>
  window.open('../../', '_self')
  </script>
  <?php
}
?>
