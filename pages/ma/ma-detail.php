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
              <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1"> M & A ></a></li>
              <li class="breadcrumb-item active text-custom-2 ma-detail-type">  </li>
              <li class="breadcrumb-item active text-custom-2"> Details </li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <?php

    if(isset($_GET['ma'])){

      include('../../assets/php/connection.php');
      $ma_id = $_GET['ma'];

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

      $result= mysqli_query($con, " SELECT * FROM merger_acquisition WHERE id='$ma_id'")
      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

      if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
          $ma_action = $row['action'];
          $attachments = [];
          if($row['attachments'] != '' && $row['attachments'] != '[]' && $row['attachments'] != null){
            $attachments = json_decode($row['attachments']);
          }
          ?>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card p-3">
                    <div class="row">
                      <div class="col-md-4">
                        <div id="product__slider">
                          <div class="product__slider-main">
                            <div class="slide"><img class="card-img-top img-responsive" src="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.json_decode($row['image'])[0]; ?>" alt="ma image"></div>
                            <?php
                            if(!empty($attachments)){
                              foreach ($attachments as $attachment){
                                $attachment_ext = explode(".", $attachment);
                                $attachment_ext = $attachment_ext[count($attachment_ext)-1];
                                if($attachment_ext == "pdf"){
                                  ?>
                                  <div class="slide">
                                    <div class="pdf_attachment">
                                      <h3>PDF</h3>
                                      <span><?=$attachment; ?></span><br>
                                      <a href="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.$attachment; ?>" class="atttachment_download">
                                        <button type="button" class="btn btn-info">Download</button>
                                      </a>
                                    </div>
                                  </div>
                                  <?php
                                }else{
                                  ?>
                                  <div class="slide"><img class="card-img-top img-responsive" src="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.$attachment; ?>" alt="ma image"></div>
                                  <?php
                                }
                              }
                            }
                            ?>
                          </div>
                          <?php
                          if(!empty($attachments)){
                            ?>
                            <div class="product__slider-thmb">
                              <div class="slide"><img class="card-img-top img-responsive" src="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.json_decode($row['image'])[0]; ?>" alt="ma image"></div>
                              <?php
                              foreach ($attachments as $attachment){
                                $attachment_ext = explode(".", $attachment);
                                $attachment_ext = $attachment_ext[count($attachment_ext)-1];
                                if($attachment_ext == "pdf"){
                                  ?>
                                  <div class="slide">
                                    <div class="pdf_attachment">
                                      <h5>PDF</h5>
                                    </div>
                                  </div>
                                  <?php
                                }else{
                                  ?>
                                  <div class="slide"><img class="card-img-top img-responsive" src="../../assets/uploads/mergeracquisition/<?=$row['image_folder'].'/'.$attachment; ?>" alt="ma image"></div>
                                  <?php
                                }
                              }
                              ?>
                            </div>
                            <?php
                          }
                          ?>
                        </div>
                      </div>

                      <div class="col-md-8">
                        <h1 class="details-title"> <?=$row['title']; ?> </h1>
                        <p class="details-descripatoin"> <?=$row['description']; ?>  </p>
                        <div class="listing">
                          <a class="our-color listing-card-tag1"> <?=$row['type']; ?>  </a>
                        </div>
                      </div>
                      <div class="col-md-12"><br>

                        <h5 class="Spefication-title"> Specification </h5>

                        <div class="table-responsive">
                          <table class="table table-striped table-bordered">
                            <thead class="m-a-detials-header">
                              <tr>
                                <th> 00 </th>
                                <th> 00 </th>
                              </tr>
                            </thead>
                            <tbody class="m-a-detials-body">

                              <tr>
                                <td> <b> Type </b> </td>
                                <td>
                                  <?php
                                  echo $row['category'];
                                  if($row['realestate'] != "" && $row['realestate'] != null){
                                    echo ", ".$row['realestate'];
                                  }
                                  ?>
                                </td>
                              </tr>

                              <tr>
                                <td> <b> Country </b> </td>
                                <td> <?=$row['location']; ?> </td>
                              </tr>

                              <tr>
                                <td> <b> Industry </b> </td>
                                <td>
                                  <?php
                                  $industry;
                                  if($row['industry'] == "" || $row['industry'] == null){
                                    $industry = array();
                                  }else{
                                    $industry = json_decode($row['industry']);
                                  }
                                  if(!empty($industry)){
                                    echo implode(', ', array_map('strval', $industry));
                                  }
                                  ?>
                                </td>
                              </tr>

                              <tr>
                                <td> <b> Value </b> </td>
                                <td> <?=$row['value']; ?>$ </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                        <br>
                        <br>
                        <a href="add-post.html" class="contact-here-deatils our-back-btn"> Contact Here </a>
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

  ?>

  <link rel="stylesheet" type="text/css" href="../../plugins/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../../plugins/slick/slick-theme.css"/>
  <script type="text/javascript" src="../../plugins/slick/slick.min.js"></script>

  <script type="text/javascript">
  var ma_action = '<?=$ma_action; ?>';

  $(document).ready(function(){
    if ( $('.product__slider-main').length ) {
      var $slider = $('.product__slider-main')
      .on('init', function(slick) {
        $('.product__slider-main').fadeIn(1000);
      })
      .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        lazyLoad: 'ondemand',
        autoplaySpeed: 3000,
        asNavFor: '.product__slider-thmb'
      });

      var $slider2 = $('.product__slider-thmb')
      .on('init', function(slick) {
        $('.product__slider-thmb').fadeIn(1000);
      })
      .slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        asNavFor: '.product__slider-main',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
      });

      //remove active class from all thumbnail slides
      $('.product__slider-thmb .slick-slide').removeClass('slick-active');
      //set active class to first thumbnail slides
      $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

      // On before slide change match active thumbnail to current slide
      $('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        if(nextSlide == 0){
          $('.slick-track').css({"transform": "translate3d(0px, 0px, 0px)"});
        }
      });

      $('.product__slider-main').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('.product__slider-thmb .slick-slide').removeClass('slick-active');
        $('.product__slider-thmb .slick-slide').eq(currentSlide).addClass('slick-active');
      });

    }

  });
</script>

<?php

}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
