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

    if(isset($_GET['id']) && isset($_GET['type'])){

      $ma_id = $_GET['id'];
      $ma_type = $_GET['type'];

      if($ma_type == "business company" || $ma_type == "start up"){
        $table_name = "business_company";
        $fav_column_name = "company_id";
      }else if($ma_type == "real estate"){
        $table_name = "real_estate";
        $fav_column_name = "re_id";
      }else if($ma_type == "npe"){
        $table_name = "npe";
        $fav_column_name = "npe_id";
      }else if($ma_type == "credits"){
        $table_name = "credit";
        $fav_column_name = "credits_id";
      }

      $category_favorites;
      $user_id = $_SESSION['id'];
      $result= mysqli_query($con, " SELECT $fav_column_name FROM favorites WHERE user_id = '$user_id' ")
      or die('An error occurred! Unable to process this request. '. mysqli_error($con));
      if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
          if($row[$fav_column_name] == "" || $row[$fav_column_name] == null){
            $category_favorites = array();
          }else{
            $category_favorites = json_decode($row[$fav_column_name]);
          }
        }
      }

      $result= mysqli_query($con, " SELECT * FROM $table_name WHERE id='$ma_id'")
      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

      if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
          $ma_deal = $row['DEAL'];

          ?>
          <section class="content">
            <div class="container-fluid">

              <?php

              if ($ma_deal == "sell" && $ma_type == "real estate") {
                include 'details/sell_real_estate.php';
              }else if ($ma_deal == "sell" && $ma_type == "npe") {
                include 'details/sell_npe.php';
              }else if ($ma_deal == "sell" && $ma_type == "credits") {
                include 'details/sell_credits.php';
              }else if ($ma_deal == "sell" && $ma_type == "business company") {
                include 'details/sell_business_company.php';
              }else if ($ma_deal == "sell" && $ma_type == "start up") {
                include 'details/sell_start_up.php';
              }else if ($ma_deal == "buy" && $ma_type == "real estate") {
                include 'details/buy_real_estate.php';
              }else if ($ma_deal == "buy" && $ma_type == "npe") {
                include 'details/buy_npe.php';
              }else if ($ma_deal == "buy" && $ma_type == "credits") {
                include 'details/buy_credits.php';
              }else if ($ma_deal == "buy" && $ma_type == "business company") {
                include 'details/buy_business_company.php';
              }else if ($ma_deal == "buy" && $ma_type == "start up") {
                include 'details/buy_start_up.php';
              }

              ?>

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
