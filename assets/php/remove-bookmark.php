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
}else if($type == "company"){
  $result= mysqli_query($con, " SELECT company_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['company_id'] == "" || $row['company_id'] == null){
        $company_ids = array();
      }else{
        $company_ids = json_decode($row['company_id']);
      }
      $company_ids = array_diff($company_ids, array($bookmark_id));
      $company_ids = json_encode(array_values($company_ids));
      $sql = "UPDATE favorites SET company_id='$company_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}else if($type == "credits"){
  $result= mysqli_query($con, " SELECT credits_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['credits_id'] == "" || $row['credits_id'] == null){
        $credits_ids = array();
      }else{
        $credits_ids = json_decode($row['credits_id']);
      }
      $credits_ids = array_diff($credits_ids, array($bookmark_id));
      $credits_ids = json_encode(array_values($credits_ids));
      $sql = "UPDATE favorites SET credits_id='$credits_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}else if($type == "npe"){
  $result= mysqli_query($con, " SELECT npe_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['npe_id'] == "" || $row['npe_id'] == null){
        $npe_ids = array();
      }else{
        $npe_ids = json_decode($row['npe_id']);
      }
      $npe_ids = array_diff($npe_ids, array($bookmark_id));
      $npe_ids = json_encode(array_values($npe_ids));
      $sql = "UPDATE favorites SET npe_id='$npe_ids' WHERE user_id = '$user_id'";
      if ($con->query($sql)){
        $response = "success";
      }else{
        $response = mysqli_error($con);
      }
    }
  }else{
    $response = "success";
  }
}else if($type == "real estate"){
  $result= mysqli_query($con, " SELECT re_id FROM favorites WHERE user_id = '$user_id' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['re_id'] == "" || $row['re_id'] == null){
        $re_ids = array();
      }else{
        $re_ids = json_decode($row['re_id']);
      }
      $re_ids = array_diff($re_ids, array($bookmark_id));
      $re_ids = json_encode(array_values($re_ids));
      $sql = "UPDATE favorites SET re_id='$re_ids' WHERE user_id = '$user_id'";
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
