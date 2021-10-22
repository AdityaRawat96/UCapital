
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
                      if($row['company_id'] != null && $row['company_id'] != ''){
                        $company_ids = json_decode($row['company_id']);
                        $company_ids_search = implode(',', array_map('intval', $company_ids));
                      }else{
                        $company_ids_search = 0;
                      }
                      if($row['npe_id'] != null && $row['npe_id'] != ''){
                        $npe_ids = json_decode($row['npe_id']);
                        $npe_ids_search = implode(',', array_map('intval', $npe_ids));
                      }else{
                        $npe_ids_search = 0;
                      }
                      if($row['credits_id'] != null && $row['credits_id'] != ''){
                        $credits_ids = json_decode($row['credits_id']);
                        $credits_ids_search = implode(',', array_map('intval', $credits_ids));
                      }else{
                        $credits_ids_search = 0;
                      }
                      if($row['re_id'] != null && $row['re_id'] != ''){
                        $re_ids = json_decode($row['re_id']);
                        $re_ids_search = implode(',', array_map('intval', $re_ids));
                      }else{
                        $re_ids_search = 0;
                      }
                    }
                  }

                  $sql = "(SELECT
                  real_estate.ID,
                  real_estate.DEAL,
                  real_estate.ASSET_TYPE,
                  real_estate.DEAL_SUBJECT AS SUBJECT,
                  real_estate.REAL_ESTATE_TYP AS SUBJECT_TYPE,
                  '-' AS SECTOR,
                  '-' AS INDUSTRY,
                  real_estate.COUNTRY,
                  real_estate.CITY,
                  real_estate.OFFER,
                  real_estate.IMAGE,
                  real_estate.KEY_ELEMENTS,
                  real_estate.ASSET_TYPE
                  FROM real_estate where ID IN (".$company_ids_search."))
                  UNION ALL( SELECT
                  npe.ID,
                  npe.DEAL,
                  npe.ASSET_TYPE,
                  npe.DEAL AS SUBJECT,
                  'NPE' AS SUBJECT_TYPE,
                  '-' AS SECTOR,
                  '-' AS INDUSTRY,
                  npe.COUNTRY,
                  npe.CITY,
                  npe.OFFER,
                  npe.IMAGE,
                  '-' AS KEY_ELEMENTS,
                  npe.ASSET_TYPE
                  FROM npe where ID IN (".$npe_ids_search."))
                  UNION ALL( SELECT
                  credit.ID,
                  credit.DEAL,
                  credit.ASSET_TYPE,
                  credit.DEAL AS SUBJECT,
                  'Credit' AS SUBJECT_TYPE,
                  '-' AS SECTOR,
                  '-' AS INDUSTRY,
                  credit.COUNTRY,
                  credit.CITY,
                  credit.OFFER,
                  credit.IMAGE,
                  '-' AS KEY_ELEMENTS,
                  credit.ASSET_TYPE
                  FROM credit where ID IN (".$credits_ids_search."))
                  UNION ALL ( SELECT
                  business_company.ID,
                  business_company.DEAL,
                  business_company.ASSET_TYPE,
                  business_company.COMPANY_TYPE AS SUBJECT,
                  business_company.ASSET_TYPE AS SUBJECT_TYPE,
                  business_company.SECTOR,
                  business_company.INDUSTRY,
                  business_company.COUNTRY,
                  business_company.CITY,
                  business_company.OFFER,
                  business_company.IMAGE,
                  business_company.KEY_ELEMENTS,
                  business_company.ASSET_TYPE
                  FROM business_company where ID IN (".$re_ids_search."))";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($deal = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item">
                      <a href="ma-detail.php?ma=<?=$deal['ID']; ?>">
                        <div class="card mb-4 cart-custom-redious our-shadow">
                          <img class="card-img-top ma-img" src="../../assets/uploads/<?=$deal['IMAGE']; ?>" alt="image">
                          <span class="left-tag-card our-back"> <?=$deal['OFFER']; ?> </span>
                          <span class="right-tag-batch">
                            <span class="bookmark bookmark-active bookmark-<?=strtolower(str_replace(" ", "_", $deal['ASSET_TYPE'])); ?>" data-id="<?=$deal['ID']; ?>"> <i class="fas fa-bookmark fa-2x"></i> </span>
                          </span>
                          <div class="d-flex flex-column justify-content-end p-2">
                            <span><i> <?=$deal['COUNTRY'].", ".$deal['CITY']; ?> </i></span>
                            <span class="deal-card-heading"><?=$deal['SUBJECT']; ?> <b><?=$deal['SUBJECT_TYPE']; ?></b></span>
                            <div class="listing">
                              <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: <?=$deal['SECTOR']; ?> </span><br>
                              <span><i class="fas fa-chart-line"></i> &nbsp; <?=$deal['INDUSTRY']; ?></span><hr>
                              <span ><b>Key Elements:</b> <?=$deal['KEY_ELEMENTS']; ?></span><br><br>
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
