<?php
session_start();
include('../../assets/php/connection.php');


$result= mysqli_query($con, "SELECT area, country, id FROM data_countries ORDER BY area, country")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));
$countries_array = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $country = (object) array();

    $country->id = $row['id'];
    $country->country = $row['country'];
    $country->area = $row['area'];

    $countries_array[$index] = $country;
    $index++;

    unset($country);
  }
}

echo json_encode($countries_array);
exit();
?>
