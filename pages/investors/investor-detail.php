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
              <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1 invesctor12"> <img src="../../dist/img/new/investor-breadcum.svg"> Investors </a></li>
              <li class="breadcrumb-item active text-custom-2"> Details </li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <?php

    if(isset($_GET['investor'])){

      $investor_id = $_GET['investor'];

      $investor_ids;
      $user_id = $_SESSION['id'];
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

      $result= mysqli_query($con, " SELECT * FROM investors WHERE id='$investor_id'")
      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

      if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
          ?>
          <section class="content">
            <div class="container-fluid">

              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header-investor-details1">
                      <div class="row">
                        <div class="col-md-3"> <img src="../../dist/img/investor/1.png" class="investor-profile-deetils987987">  </div>
                        <div class="col-md-9">
                          <div class="heading-investor-details-7410">
                            <h3> <?=$row['Investor_Name']; ?> </h3>
                            <h4> <?=$row['Investor_Former_Name']; ?> </h4>
                            <span class="de-tag-40">
                              <span class="bookmark bookmark-investor <?php if(in_array($row['id'], $investor_ids)){echo 'bookmark-active';} ?>" data-id="<?=$row['id']?>">
                                <i class="fas fa-bookmark fa-2x"></i>
                              </span>
                            </span>
                            <div class="row">
                              <div class="col-md-6">
                                <p class="float-sm-left address-details-se7458"> <i class="fas fa-map-marker-alt"></i> <?=$row['HQ_Location']; ?> </p><br>
                              </div>
                              <div class="col-md-6">
                                <a href="//<?=$row['Website']; ?>" target="_blank">
                                  <button class="float-sm-right our-back-btn contact-setting-deatils"> Visit Website </button>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body-investor-details2"><br><br>
                      <div class="row">

                        <div class="col-md-7">
                          <div class="investor-details-founded">
                            <h3>About</h3><hr>
                            <p class="p-desc10">
                              <?=$row['Descriptions']; ?>
                            </p><br><br>
                            <h3><i class="fas fa-search-dollar"></i> &nbsp; Preferred Investment Type</h3><hr>
                            <?php
                            if($row['Preferred_Investment_Types'] != null && $row['Preferred_Investment_Types'] != ""){
                              $Preferred_Investment_Type = explode(",", trim($row['Preferred_Investment_Types']));
                              foreach ($Preferred_Investment_Type as $pi) {
                                ?>
                                <span class="blue-box-rounded"><?=$pi; ?></span>
                                <?php
                              }
                            }
                            ?>
                            <br><br><br>
                            <h3><i class="fas fa-industry"></i> &nbsp; Preferred Industry</h3><hr>
                            <?php
                            if($row['Preferred_Industry'] != null && $row['Preferred_Industry'] != ""){
                              $Preferred_Industry = explode(",", trim($row['Preferred_Industry']));
                              foreach ($Preferred_Industry as $pi) {
                                ?>
                                <span class="blue-box-rounded"><?=$pi; ?></span>
                                <?php
                              }
                            }
                            ?>
                            <br><br><br>
                            <h3><i class="fas fa-map-marker-alt"></i> &nbsp; Preferred Geography</h3><hr>
                            <?php
                            if($row['Preferred_Geography'] != null && $row['Preferred_Geography'] != ""){
                              $Preferred_Geography = explode(",", trim($row['Preferred_Geography']));
                              foreach ($Preferred_Geography as $pi) {
                                ?>
                                <span class="blue-box-rounded"><?=$pi; ?></span>
                                <?php
                              }
                            }
                            ?>
                            <br><br><br>
                            <h3><i class="fas fa-id-card"></i> &nbsp; Contact</h3><hr>
                            <div class="row contact-table-container">
                              <div class="col-md-6 col-sm-12" style="padding: 0px; border-right: 1px solid #D7DBEC;">
                                <div class="header-contact-table">
                                  HEADQUARTER
                                </div><br>
                                <div class="body-contact-table">
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-map-marker-alt"></i> &nbsp;
                                    </span>
                                    <span><?=$row['HQ_City']." ".$row['HQ_Country'] ? $row['HQ_City']." ".$row['HQ_Country'] : "-"; ?></span>
                                  </span><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-envelope"></i> &nbsp;
                                    </span>
                                    <span><?=$row['HQ_Email'] ? $row['HQ_Email'] : "-"; ?></span>
                                  </span><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-phone-alt"></i> &nbsp;
                                    </span>
                                    <span><?=$row['HQ_Phone'] ? $row['HQ_Phone'] : "-"; ?></span>
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6 col-sm-12" style="padding: 0px;">
                                <div class="header-contact-table">
                                  PRIMARY CONTACT
                                </div><br>
                                <div class="body-contact-table">
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-user"></i> &nbsp;
                                    </span>
                                    <span><?=$row['Primary_Contact'] ? $row['Primary_Contact'] : "-"; ?></span>
                                  </span><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-briefcase"></i> &nbsp;
                                    </span>
                                    <span><?=$row['Primary_Contact_Title'] ? $row['Primary_Contact_Title'] : "-"; ?></span>
                                  </span><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-envelope"></i> &nbsp;
                                    </span>
                                    <span><?=$row['Primary_Contact_Email'] ? $row['Primary_Contact_Email'] : "-"; ?></span>
                                  </span><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-phone-alt"></i> &nbsp;
                                    </span>
                                    <span><?=$row['Primary_Contact_Phone'] ? $row['Primary_Contact_Phone'] : "-"; ?></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-5">
                          <div class="card">
                            <div class="card-header" style="background-color: #001F3B; color: white;">
                              <h5><b>DETAIL</b></h5>
                            </div>
                            <div class="card-body">
                              <table class="table table-investor-pro6">
                                <tr class="profile-investor-heading">
                                  <td> HQ: </td>
                                  <td> <?=$row['HQ_Location'] ? $row['HQ_Location'] : "-";  ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Primary Investor type: </td>
                                  <td> <?=$row['Primary_Investor_Type'] ? $row['Primary_Investor_Type'] : "-";  ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Secondary Investor type: </td>
                                  <td> <?=$row['Other_Investor_Types'] ? $row['Other_Investor_Types'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> AUM: </td>
                                  <td> <?=$row['AUM'] ? $row['AUM'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Year founded: </td>
                                  <td> <?=$row['Year_Founded'] ? $row['Year_Founded'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> No. of Investments: </td>
                                  <td> <?=$row['Investments'] ? $row['Investments'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Exits: </td>
                                  <td> <?=$row['Exits'] ? $row['Exits'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Active Portfolio: </td>
                                  <td> <?=$row['Active_Portfolio'] ? $row['Active_Portfolio'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Preferred Investment Amount: </td>
                                  <td> <?=$row['Preferred_Investment_Amount'] ? $row['Preferred_Investment_Amount'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Last Investment: </td>
                                  <td> <?=$row['Last_Investment_Company'] ? $row['Last_Investment_Company'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> No. of investment professionals: </td>
                                  <td> <?=$row['_of_Investment_Professionals'] ? $row['_of_Investment_Professionals'] : "-"; ?> </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- container-fluid -->
          </section>
          <!-- content -->
          <?php
        }
      }
    }

    ?>


  </div>
  <!-- content-wrapper -->


  <?php

  include '../elements/footer.php';
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
