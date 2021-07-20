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
            <div class="row">

              <div class="col-md-3">
                <img class="profile-img-image74 rounded-circle"
                src="
                <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
                  echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
                }else{
                  echo '../../dist/img/avatar0.png';
                } ?>
                "
                alt="User profile picture">
              </div>

              <div class="col-md-7">
                <p class="name-pro987987"> TIPOLOGIA PROFILO </p>
                <p class="name-main-heading"> <?=$_SESSION['first_name']." ".$_SESSION['last_name'] ?> </p>
                <p class="contact-details-email-number"> <i class="far fa-envelope"></i> <?=$_SESSION['email']?> </p>
                <p class="contact-details-email-number"> <i class="fas fa-phone-alt"></i> <?=$_SESSION['mobile']?> </p>
              </div>

              <div class="col-md-2">
                <div class="float-sm-right">
                  <a href="edit-profile.php" class="eidt-profile-btn our-border-btn"> <i class="fas fa-pencil-alt"></i> Edit Profile </a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card class-contact-info-settings">

            <ul class="listing-add-post1-profile nav nav-pills">
              <li> <a href="#RecentActivity" data-toggle="tab" class="active"> Recent Activity </a> </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="RecentActivity">

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

            </div>

          </div>
        </div>

      </div>

    </div><!-- container-fluid -->
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->
