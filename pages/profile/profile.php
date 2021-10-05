<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/pro.png"> Personal profile </a></li>
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
          <div class="card profile-picture-page4">
            <div style="width: 100%; display: flex; flex-direction: columns; flex-wrap: wrap;">

              <div>
                <img class="profile-img-image74 rounded-circle"
                src="
                <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
                  if(filter_var($_SESSION['profile_picture'], FILTER_VALIDATE_URL)){
                    echo trim($_SESSION['profile_picture']);
                  }else{
                    echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
                  }
                }else{
                  echo '../../dist/img/avatar0.png';
                } ?>
                "
                alt="User profile picture">
              </div>

              <div style="margin-left: 5vw; flex: 1;">
                <?php
                if($_SESSION['user_type'] == 0){
                  $user_type = "Super-Admin";
                }else if($_SESSION['user_type'] == 1){
                  $user_type = "Admin";
                }else if($_SESSION['user_type'] == 2){
                  $user_type = "Advisor";
                }else if($_SESSION['user_type'] == 3){
                  $user_type = "User";
                }
                ?>
                <div>
                  <span class="bg-danger today-timeline-aea" style="border-radius: 5px; padding: 5px;"> <?=$user_type; ?> </span>
                </div><br>
                <h3><b> <?=$_SESSION['first_name']." ".$_SESSION['last_name'] ?> </b></h3>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <p class="contact-details-email-number"> <i class="far fa-envelope" style="color: #D7DBEC;"></i> <?=$_SESSION['email']?> </p>
                    <p class="contact-details-email-number"> <i class="fas fa-phone-alt" style="color: #D7DBEC;"></i> <?=$_SESSION['mobile']?> </p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <?php
                    if($_SESSION['user_type'] == 2){
                      $result= mysqli_query($con, " SELECT *  FROM advisors WHERE user_id='$user_id'")
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));
                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){
                          ?>
                          <p class="contact-details-email-number"> <i class="fas fa-briefcase" style="color: #D7DBEC;"></i> <?=$row['role'].", ".$row['company']; ?> </p>
                          <p class="contact-details-email-number"> <i class="fas fa-globe" style="color: #D7DBEC;"></i> <?=$row['website']?> </p>
                          <?php
                        }
                      }
                    }else{
                      $result= mysqli_query($con, " SELECT *  FROM users WHERE id='$user_id'")
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));
                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){
                          ?>
                          <p class="contact-details-email-number"> <i class="fas fa-briefcase" style="color: #D7DBEC;"></i> <?=$row['role'].", ".$row['company']; ?> </p>
                          <p class="contact-details-email-number"> <i class="fas fa-globe" style="color: #D7DBEC;"></i> <?=$row['website']?> </p>
                          <?php
                        }
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>

              <div>
                <div class="float-sm-right">
                  <a href="edit-profile.php" class="eidt-profile-btn our-border-btn" style="margin-top: 0px;"> <i class="fas fa-pencil-alt"></i> Edit Profile </a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card class-contact-info-settings">

            <ul class="listing-add-post1-profile nav nav-pills">
              <li> <a href="#published_sell_deal" data-toggle="tab" class="active"> Published Sell deal </a> </li>
                <li> <a href="#published_buy_deal" data-toggle="tab"> Published Buy deal </a> </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="published_sell_deal">

                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger today-timeline-aea">
                      Today
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas custom-fab654"> <img src="../../dist/img/new/m-a-hover.png" alt="1" style="width:14px"></i>
                    <div class="timeline-item timeline-body-setting">
                      <div class="timeline-body">
                        <h5 class="timeline-title-set564"> Pubblicazione annuncio </h5>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->

                  <!-- timeline item -->
                  <div>
                    <i class="fas custom-fab654"> <img src="../../dist/img/new/advisor-hover.png" class="icon-advisor-hover12" alt="1"></i>
                    <div class="timeline-item timeline-body-setting">
                      <div class="timeline-body">
                        <h5 class="timeline-title-set564"> Richiesta di contatto </h5>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger today-timeline-aea">
                      12 Gennaio 2021
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas custom-fab654"> <img src="../../dist/img/new/advisor-hover.png" class="icon-advisor-hover12" alt="1"></i>
                    <div class="timeline-item timeline-body-setting">
                      <div class="timeline-body">
                        <h5 class="timeline-title-set564"> Richiesta di contatto </h5>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->

                </div>

              </div>
              <div class="tab-pane" id="published_buy_deal">



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
