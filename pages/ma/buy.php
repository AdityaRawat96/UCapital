<?php
session_start();
$offset = 0;
$currentPage = 1;
if(isset($_GET['offset'])){
  $offset=$_GET['offset'];
  $currentPage = ($offset/48) + 1;
}
if(isset($_SESSION['email'])){
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
              <li class="breadcrumb-item active text-custom-2"> Buy </li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
              <a href="post_ad.php" class="post-add our-back-btn"> <img src="../../dist/img/new/post-your-add.svg">  Post Your Add </a>
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
  include 'filter.php';
  include '../elements/footer.php';
  ?>
  <script type="text/javascript" src="../../assets/js/autocomplete.js"></script>
  <script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>
  <script type="text/javascript">
  var obj = [];
  var itemType = "ma";
  var offset = parseInt('<?=$offset?>');
  var currentPage = parseInt('<?=$currentPage?>');

  autocomplete(document.getElementById("searchIndicators"), searchableElements);
  $(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: '../../assets/php/getMA.php',
      data: {
        action: "Buy"
      },
      success: function(data) {
        obj = jQuery.parseJSON(data);
        showResults();
      }
    });
  })
  </script>
  <?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
