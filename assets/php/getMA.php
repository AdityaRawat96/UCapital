<?php
session_start();
include('../../assets/php/connection.php');

$ma_ids;
$user_id = $_SESSION['id'];
$action = $_POST['action'];
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
}else{
  $ma_ids = array();
}

$result= mysqli_query($con, " SELECT * FROM merger_acquisition WHERE action='$action' ORDER BY date_created DESC")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

$mas = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $ma = (object) array();

    $industries = json_decode($row['industry']);
    sort($industries);

    $ma->id = $row['id'];
    $ma->type = $row['type'];
    $ma->category = $row['category'];
    $ma->realestate = $row['realestate'];
    $ma->value = $row['value'];
    $ma->industry_visible = $industries[0];
    $ma->industry = strtolower(implode(',', array_map('strval', json_decode($row['industry']))));
    $ma->sector = $row['sector'] ? strtolower(implode(',', array_map('strval', json_decode($row['sector'])))) : "";
    $ma->revenue = $row['revenue'];
    $ma->ebitda = $row['ebitda'];
    $ma->financialstatus = $row['finance_status'];
    $ma->foundationyear = $row['foundation_year'];
    $ma->location = $row['location'];
    $ma->image_folder = $row['image_folder'];
    $ma->image = json_decode($row['image'])[0];
    $ma->title = $row['title'];
    $ma->description = $row['description'];
    if(in_array($row['id'], $ma_ids)){
      $ma->favorite = true;
    }else{
      $ma->favorite = false;
    }

    $mas[$index] = $ma;
    $index++;

    unset($ma);
  }
}

echo json_encode($mas);
exit();
?>
