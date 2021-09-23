<?php
session_start();
include('../../assets/php/connection.php');

if(isset($_POST['country_id'])){
  $country_id = $_POST['country_id'];
  $result= mysqli_query($con, " SELECT * FROM data_cities WHERE country_id = '$country_id' ORDER BY city ASC")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  $cities_array = array();
  $index = 0;

  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){

      $city = (object) array();

      $city->id = $row['id'];
      $city->city = $row['city'];

      $cities_array[$index] = $city;
      $index++;

      unset($city);
    }
  }

  echo json_encode($cities_array);
  exit();
}

?>
