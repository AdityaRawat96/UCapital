<?php
session_start();

$response = "failed";
include('connection.php');
$type = $_POST['type'];
$bookmark_id = $_POST['id'];
$user_id = $_SESSION['id'];

if($type == "investor"){
  $result= mysqli_query($con, " SELECT investor_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['investor_id'] == "" || $row['investor_id'] == null){
        $investor_ids = array();
      }else{
        $investor_ids = json_decode($row['investor_id']);
      }
      $investor_ids = array_diff($investor_ids, array($bookmark_id));
      $investor_ids = json_encode(array_values($investor_ids));
      $sql = "UPDATE favorites SET investor_id='$investor_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}else if($type == "ma"){
  $result= mysqli_query($con, " SELECT ma_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['ma_id'] == "" || $row['ma_id'] == null){
        $ma_ids = array();
      }else{
        $ma_ids = json_decode($row['ma_id']);
      }
      $ma_ids = array_diff($ma_ids, array($bookmark_id));
      $ma_ids = json_encode(array_values($ma_ids));
      $sql = "UPDATE favorites SET ma_id='$ma_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}else if($type == "advisor"){
  $result= mysqli_query($con, " SELECT advisor_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['advisor_id'] == "" || $row['advisor_id'] == null){
        $advisor_ids = array();
      }else{
        $advisor_ids = json_decode($row['advisor_id']);
      }
      $advisor_ids = array_diff($advisor_ids, array($bookmark_id));
      $advisor_ids = json_encode(array_values($advisor_ids));
      $sql = "UPDATE favorites SET advisor_id='$advisor_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}

echo $response;

?>
