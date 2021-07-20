<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/advisor-breadcum.png"> Advisors </a></li>
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- content-header -->

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <?php
        include('../../assets/php/connection.php');

        $advisor_ids;
        $user_id = $_SESSION['id'];
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

        $result= mysqli_query($con, " SELECT * FROM advisors")
        or die('An error occurred! Unable to process this request. '. mysqli_error($con));

        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){

            ?>
            <div class="col-md-4 col-sm-6 pagination-item">
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
                  <a href="advisor-detail.php?advisor=<?=$row['id']?>" class="advisor-category-contact-34"> Contact here > </a>
                </div>
              </div>
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
