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
              <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/advisor-breadcum.png"> Advisors </a></li>
              <li class="breadcrumb-item active text-custom-2"> Details </li>
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
          if(isset($_GET['advisor'])){
            include('../../assets/php/connection.php');
            $advisor_id = $_GET['advisor'];
            $result= mysqli_query($con, " SELECT * FROM advisors WHERE id='$advisor_id'")
            or die('An error occurred! Unable to process this request. '. mysqli_error($con));

            if(mysqli_num_rows($result) > 0 ){
              while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-md-12">
                  <div class="card advisor-details-cate-l-02">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-md-3">
                          <img src="../../assets/uploads/Advisor/<?=$row['folder_name'].'/'.$row['profile_picture']; ?>" alt="1" class="profile-advisor-inner-category12">
                        </div>
                        <div class="col-md-6">
                          <div class="content-inner-categoyr-874864">
                            <h3> <?=$row['studio_name']?> </h3><br>
                            <p class="private-equity65465"> <i class="far fa-star"></i> <?=$row['interests']?> </p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="inner-advisor-btn-cont64">
                            <?php
                            $user_id = $row['user_id'];
                            $result_user= mysqli_query($con, " SELECT * FROM users WHERE id='$user_id'")
                            or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                            if(mysqli_num_rows($result_user) > 0 ){
                              while($row_user = mysqli_fetch_array($result_user)){
                                ?>
                                <form action="../chat/index.php" method="post" style="display: inline-block;">
                                  <input type="text" name="chat_recipient_id" value="<?=$row['user_id']?>" hidden>
                                  <input type="text" name="chat_recipient_image" value="../../assets/uploads/Advisor/<?=$row['folder_name'].'/'.$row['profile_picture']; ?>" hidden>
                                  <input type="text" name="chat_recipient_type" value="<?=$row_user['user_type']?>" hidden>
                                  <button type="submit" name="button" class="our-back-btn commercialista-contact-btn">Chat</button>
                                </form>
                                <?php
                              }
                            }
                            ?>
                            <a href="mailto:<?=$row['email']?>" target="_blank" style="display: inline-block;">
                              <button type="submit" class="our-back-btn commercialista-contact-btn"> Contact here </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">

                        <div class="col-md-12">
                          <div class="advisor-details-founded">
                            <p class="descr-found-inv-s"> DESCRIPTION </p>
                            <p class="p-desc10"> <?=$row['description']?> </p>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="advisor-details-founded">
                            <p class="descr-found-inv-s"> Services </p>
                            <div class="row">

                              <?php

                              $services = json_decode($row['services']);
                              foreach ($services as $service){
                                ?>
                                <div class="col-md-3">
                                  <div class="category-advisor-services-in654">
                                    <img src="../../assets/uploads/Advisor/<?=$row['folder_name'].'/'.$service->image[0]; ?>" alt="s" class="advisor-societaria987">
                                    <div class="hide-content-bottom-advisor56">
                                      <h5><?=$service->title; ?></h5>
                                    </div>
                                  </div>
                                </div>
                                <?php
                              }
                              ?>

                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="advisor-details-founded">
                            <p class="descr-found-inv-s"> ABOUT US </p>
                            <p class="p-desc10"> <?=$row['about']?></p>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="advisor-details-founded">
                            <p class="descr-found-inv-s"> VISIT US </p>
                            <div class="row">

                              <div class="col-md-6">
                                <div id="map_canvas" ></div>
                              </div>

                              <div class="col-md-6">
                                <div class="contact-advisor-catergory-cont654">
                                  <?php
                                  $location = $row['location'];
                                  ?>
                                  <p> <i class="fas fa-map-marker-alt"></i> <?=$location ?> </p><br>
                                  <p> <i class="fas fa-phone-alt"></i> <?=$row['phone'] ?> </p>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          }
          ?>
        </div>
      </div><!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->
  <?php
  include '../elements/footer.php';
  ?>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?=MAP_API ?>"></script>

  <script type="text/javascript">
  var geocoder;
  var map;
  var address = "<?=$location; ?>";

  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
      },
      navigationControl: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    if (geocoder) {
      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
            map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow({
              content: '<b>' + address + '</b>',
              size: new google.maps.Size(150, 50)
            });

            var marker = new google.maps.Marker({
              position: results[0].geometry.location,
              map: map,
              title: address
            });
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map, marker);
            });

          } else {
            alert("No results found");
          }
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <style media="screen">
  #map_canvas {
    height: 300px;
    width: 100%;
  }
  </style>
  <?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
