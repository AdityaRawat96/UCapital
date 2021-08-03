<?php
session_start();
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
}else{
  $advisor_ids = array();
}

$result= mysqli_query($con, " SELECT id, folder_name, profile_picture, studio_name, interests  FROM advisors ORDER BY date_created DESC")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

$advisors = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $advisor = (object) array();

    $advisor->id = $row['id'];
    $advisor->folder_name = $row['folder_name'];
    $advisor->profile_picture = $row['profile_picture'];
    $advisor->studio_name = $row['studio_name'];
    $advisor->interests = $row['interests'];

    if(in_array($row['id'], $advisor_ids)){
      $advisor->favorite = true;
    }else{
      $advisor->favorite = false;
    }

    $advisors[$index] = $advisor;
    $index++;

    unset($advisor);
  }
}

echo json_encode($advisors);
exit();
?>
