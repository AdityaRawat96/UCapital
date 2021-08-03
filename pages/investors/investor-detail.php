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
                              <p class="col-md-6 float-sm-left address-details-se7458"> <i class="fas fa-map-marker-alt"></i> <?=$row['HQ_Location']; ?> </p>
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

                        <div class="col-md-6">
                          <div class="investor-details-founded">
                            <h4><b>DESCRIPTION</b></h4><hr>
                            <p class="p-desc10">
                              <?=$row['Descriptions']; ?>
                            </p>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                              <h4><b>PROFILE</b></h4><hr>
                              <table class="table table-investor-pro6">
                                <tr style="display: none;">
                                  <th> 0</th>
                                  <th> 0</th>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Primary Investor Type </td>
                                  <td> <?=$row['Primary_Investor_Type'] ? $row['Primary_Investor_Type'] : "-";  ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Other Investor Types </td>
                                  <td> <?=$row['Other_Investor_Types'] ? $row['Other_Investor_Types'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Preferred Investment Types </td>
                                  <td> <?=$row['Preferred_Investment_Types'] ? $row['Preferred_Investment_Types'] : "-"; ?> </td>
                                </tr>
                                <tr class="profile-investor-heading">
                                  <td> Investor Status </td>
                                  <td> <?=$row['Investor_Status'] ? $row['Investor_Status'] : "-"; ?> </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br><br>

                      <div class="row">
                        <div class="col-md-12">
                          <ul class="investor-specificatin-sector9701 nav nav-pills">
                            <li> <a href="#SECTOR" data-toggle="tab" class="active"> SECTOR </a> </li>
                            <li> <a href="#INVESTMENT" data-toggle="tab"> INVESTMENT </a> </li>
                            <li> <a href="#CONTACT" data-toggle="tab"> CONTACT </a> </li>
                          </ul>

                          <div class="tab-content tab-specification-profile-de101010">

                            <div class="tab-pane active" id="SECTOR">

                              <div class="table-responsive">
                                <table class="table">
                                  <thead style="display: none;">
                                    <tr>
                                      <th> 0 </th>
                                      <th> 0</th>
                                    </tr>
                                  </thead>
                                  <tbody class="body-invent7897980-profile">
                                    <tr class="odd">
                                      <td> <b> PREFERRED INDUSTRY </b> </td>
                                      <td> <?=$row['Preferred_Industry'] ? $row['Preferred_Industry'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="even">
                                      <td> <b> PRIMARY VERTICALS </b> </td>
                                      <td> <?=$row['Preferred_Verticals'] ? $row['Preferred_Verticals'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="odd">
                                      <td> <b> ACTIVE PORTFOLIO </b> </td>
                                      <td> <?=$row['Active_Portfolio'] ? $row['Active_Portfolio'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="even">
                                      <td> <b> EXITS </b> </td>
                                      <td> <?=$row['Exits'] ? $row['Exits'] : "-"; ?> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                            </div>

                            <div class="tab-pane" id="INVESTMENT">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead style="display: none;">
                                    <tr>
                                      <th> 0 </th>
                                      <th> 0</th>
                                    </tr>
                                  </thead>
                                  <tbody class="body-invent7897980-profile">
                                    <tr class="odd">
                                      <td> <b> INVESTMENTS </b> </td>
                                      <td> <?=$row['Total_Investments'] ? $row['Total_Investments'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="even">
                                      <td> <b> PREFERRED GEOGRAPHY </b> </td>
                                      <td> <?=$row['Preferred_Geography'] ? $row['Preferred_Geography'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="odd">
                                      <td> <b> PREFERRED INVESTMENT TYPE </b> </td>
                                      <td> <?=$row['Preferred_Investment_Types'] ? $row['Preferred_Investment_Types'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="even">
                                      <td> <b> OTHER STATED PREFERENCES </b> </td>
                                      <td> <?=$row['Other_Stated_Preferences'] ? $row['Other_Stated_Preferences'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="odd">
                                      <td> <b> PREFERRED INVESTMENT AMOUNT </b> </td>
                                      <td> <?=$row['Preferred_Investment_Amount'] ? $row['Preferred_Investment_Amount'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="even">
                                      <td> <b> PREFERRED INVESTMENT AMOUNT MIN </b> </td>
                                      <td> <?=$row['Preferred_Investment_Amount_Min'] ? $row['Preferred_Investment_Amount_Min'] : "-"; ?> </td>
                                    </tr>
                                    <tr class="odd">
                                      <td> <b> PREFERRED INVESTMENT AMOUNT MAX </b> </td>
                                      <td> <?=$row['Preferred_Investment_Amount_Max'] ? $row['Preferred_Investment_Amount_Max'] : "-"; ?> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane" id="CONTACT">
                              <div class="row">
                                <div class="col-md-6 col-sm-12 contact-container">
                                  <h5 style="font-weight: bold; color: #151A61">HEADQUARTER</h5><br><br>
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
                                <div class="col-md-6 col-sm-12 contact-container">
                                  <h5 style="font-weight: bold; color: #151A61">PRIMARY CONTACT</h5><br><br>
                                  <span>
                                    <span class="contact-icon">
                                      <i class="fas fa-user"></i> &nbsp;
                                    </span>
                                    <span><?=$row['Primary_Contact'] ? $row['Primary_Contact'] : "-"; ?></span>
                                  </span><br>
                                  <span>
                                    &nbsp; &nbsp; &nbsp;
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
