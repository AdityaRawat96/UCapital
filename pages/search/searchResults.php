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
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="MaFavorites">
                    <div class="row">

                      <?php
                     // include('../../assets/php/connection.php');

                      $investor_ids;
                      $ma_ids;
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
                          if($row['ma_id'] == "" || $row['ma_id'] == null){
                            $ma_ids = array();
                          }else{
                            $ma_ids = json_decode($row['ma_id']);
                          }
                          if($row['advisor_id'] == "" || $row['advisor_id'] == null){
                            $advisor_ids = array();
                          }else{
                            $advisor_ids = json_decode($row['advisor_id']);
                          }
                        }
                      }

                      $sql = "SELECT * FROM merger_acquisition WHERE title LIKE '%$search_query%'";
                      $result= mysqli_query($con, $sql)
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){

                          ?>
                          <div class="col-md-3 col-sm-5 inline-block ma-card-<?=$row['id']?>">
                            <div class="card mb-4 cart-custom-redious our-shadow">
                              <img class="card-img-top ma-img" src="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.json_decode($row['image'])[0]; ?>" alt="image">
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
                                  <a class="our-color listing-card-tag1">
                                    <span> <i class="fas fa-map-marker-alt"></i> <?=$row['location']; ?> </span>
                                  </a>
                                  <a class="our-color listing-card-tag1">
                                    <span><i class="fas fa-dollar-sign"></i> <?=$row['value']; ?> </span>
                                  </a>
                                  <a class="our-color listing-card-tag1">
                                    <span><i class="fas fa-chart-pie"></i>
                                      <?php
                                      $industries = json_decode($row['industry']);
                                      sort($industries);
                                      echo $industries[0];
                                      ?>
                                    </span>
                                  </a>
                                  <a class="our-color listing-card-tag1">
                                    <span><i class="fas fa-chart-line"></i> <?=$row['category']; ?> </span>
                                  </a>
                                  <a href="../ma/ma-detail.php?ma=<?=$row['id']; ?>" class="contact-here-sectin564"> Contact here  <i class="fas fa-chevron-right"></i></a>
                                </div>
                              </div>
                            </div>
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
  <script type="text/javascript">
  $(document).ready(function(){
    $(".input-serach").val('<?=$search_query ?>');
  })
</script>
<?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
