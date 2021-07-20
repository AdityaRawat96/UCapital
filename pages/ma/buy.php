<?php
session_start();
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


        <?php
        include('../../assets/php/connection.php');

        $ma_ids;
        $user_id = $_SESSION['id'];
        $result= mysqli_query($con, " SELECT ma_id FROM favorites WHERE user_id = '$user_id' ")
        or die('An error occurred! Unable to process this request. '. mysqli_error($con));
        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){
            if($row['ma_id'] == "" || $row['ma_id'] == null){
              $ma_ids = array();
            }else{
              $ma_ids = json_decode($row['ma_id']);
            }
          }
        }

        $result= mysqli_query($con, " SELECT * FROM merger_acquisition WHERE action='Buy'")
        or die('An error occurred! Unable to process this request. '. mysqli_error($con));

        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){

            ?>
            <div class="col-md-3 col-sm-5 inline-block ma_card pagination-item"
            data-type="<?=$row['type']; ?>"
            data-category="<?=$row['category']; ?>"
            data-realestate="<?=$row['realestate']; ?>"
            data-value="<?=$row['value']; ?>"
            data-industry="<?=strtolower(implode(',', array_map('strval', json_decode($row['industry'])))); ?>"
            data-sector="<?=$row['sector'] ? strtolower(implode(',', array_map('strval', json_decode($row['sector'])))) : ""; ?>"
            data-revenue="<?=$row['revenue']; ?>"
            data-ebitda="<?=$row['ebitda']; ?>"
            data-financialstatus="<?=$row['finance_status']; ?>"
            data-foundationyear="<?=$row['foundation_year']; ?>"
            data-location="<?=$row['location']; ?>"
            >
              <div class="card mb-4 cart-custom-redious our-shadow">
                <img class="card-img-top ma-img" src="../../assets/uploads/MergerAcquisition/<?=$row['image_folder'].'/'.json_decode($row['image'])[0]; ?>" alt="image">
                <span class="left-tag-card our-back"> <?=$row['type']; ?> </span>
                <span class="right-tag-batch">
                  <span class="bookmark bookmark-ma <?php if(in_array($row['id'], $ma_ids)){echo 'bookmark-active';} ?>" data-id="<?=$row['id']?>">
                    <i class="fas fa-bookmark fa-2x"></i>
                  </span>
                </span>
                <div class="d-flex flex-column justify-content-end p-2">
                  <h5 class="card-heading text-dark"> <?=$row['title']; ?> </h5>
                  <p class="card-descripatoin pb-1 pt-1"> <?=$row['description']; ?> </p>
                  <div class="listing">
                    <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="<?=$row['location']; ?>">
                      <span> <i class="fas fa-map-marker-alt"></i> <?=$row['location']; ?> </span>
                    </a>
                    <a class="our-color listing-card-tag1">
                      <span><i class="fas fa-dollar-sign"></i> <?=$row['value']; ?> </span>
                    </a>
                    <?php
                    $industries = json_decode($row['industry']);
                    sort($industries);
                     ?>
                    <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="<?=$industries[0]; ?>">
                      <span><i class="fas fa-chart-pie"></i>
                        <?=$industries[0]; ?>
                      </span>
                    </a>
                    <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="<?=$row['category']; ?>">
                      <span><i class="fas fa-chart-line"></i> <?=$row['category']; ?> </span>
                    </a>
                    <a href="ma-detail.php?ma=<?=$row['id']; ?>" class="contact-here-sectin564"> Contact here  <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>


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
  autocomplete(document.getElementById("searchIndicators"), searchableElements);
  $(document).ready(function(){
    $('.paginationList').rpmPagination({
      domElement: '.pagination-item',
      limit: 48,
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
