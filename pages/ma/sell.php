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
              <a href="post_ad.php" class="post-add our-back-btn"> <img src="../../dist/img/new/post-your-add.svg"> Post Your Add </a>
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

  autocomplete(document.getElementById("searchIndicators"), searchableElements);
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
        console.log(data)
        obj = jQuery.parseJSON(data);
        console.log(obj);
        for (var i = 0; i < obj.length; i++) {
          var elementData = "";
          elementData += ' <div class="col-md-6 col-sm-5 inline-block ma_card pagination-item"> <a href="ma-detail.php?ma='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-ma" data-id="'+obj[i].id+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> <div class="d-flex flex-column justify-content-end p-2"> <h5 class="card-heading text-dark"> '+obj[i].COUNTRY+", "+obj[i].CITY+'</h5> <p class="card-descripatoin pb-1 pt-1"> '+obj[i].COUNTRY+'</p><div class="listing"> <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: '+obj[i].SECTOR+' </span><br><span><i class="fas fa-chart-line"></i>&nbsp; '+obj[i].INDUSTRY+'</span> <hr> <span>Key Elements: '+obj[i].KEY_ELEMENTS+'</span> </div></div></div></a> </div>';
          $(".itemsList").append(elementData);
        }
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
