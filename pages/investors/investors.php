<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1 invesctor12"> <img src="../../dist/img/new/investor-breadcum.svg"> Investors </a></li>
          </ol>
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

      <div class="row">

        <?php
        include('../../assets/php/connection.php');

        $investor_ids;
        $user_id = $_SESSION['id'];
        $result= mysqli_query($con, " SELECT investor_id FROM favorites WHERE user_id = '$user_id'  ")
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

        $result= mysqli_query($con, " SELECT * FROM investors limit 150")
        or die('An error occurred! Unable to process this request. '. mysqli_error($con));

        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){

            ?>
            <div class="col-md-3 col-sm-6 investor_card pagination-item"
            data-primaryinvestortype="<?=strtolower($row['Primary_Investor_Type'])?>"
            data-aum="<?=$row['AUM']?>"
            data-totalinvestments="<?=$row['Total_Investments']?>"
            data-preferredindustry="<?=strtolower($row['Preferred_Industry'])?>"
            data-preferredinvestmentamount="<?=$row['Preferred_Investment_Amount']?>"
            data-where="<?=strtolower($row['HQ_Country'])?>"
            >
            <a href="investor-detail.php?investor=<?=$row['id']?>" class="card investor-category-l-4">
              <div class="card-header">
                <span class="right-investor-batch">
                  <span class="bookmark bookmark-investor <?php if(in_array($row['id'], $investor_ids)){echo 'bookmark-active';} ?>" data-id="<?=$row['id']?>">
                    <i class="fas fa-bookmark fa-2x"></i>
                  </span>
                </span>
                <img src="../../dist/img/investor/1.png" alt="1" class="investor-images-set">
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
      ?>

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
