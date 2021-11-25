<?php
session_start();
include('../../assets/php/connection.php');

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
}else{
  $investor_ids = array();
}

$result= mysqli_query($con, " SELECT Primary_Investor_Type, Preferred_Investment_Amount, Preferred_Investment_Types, _of_Investment_Professionals, AUM, Preferred_Industry, Preferred_Verticals, HQ_Country, id, Investor_Name, HQ_Location FROM investors")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

$investors = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $investor = (object) array();

    $investor->id = $row['id'];
    $investor->name = utf8_encode($row['Investor_Name']);
    $investor->location = utf8_encode($row['HQ_Location']);
    $investor->primaryinvestortype = strtolower($row['Primary_Investor_Type']);
    $investor->preferredinvestmenttypes = strtolower($row['Preferred_Investment_Types']);
    $investor->preferredinvestmentamount = strtolower($row['Preferred_Investment_Amount']);
    $investor->aum = $row['AUM'];
    $investor->preferredindustry = strtolower($row['Preferred_Industry']);
    $investor->Preferred_Verticals = strtolower($row['Preferred_Verticals']);
    $investor->investmentprofessionals = strtolower($row['_of_Investment_Professionals']);
    $investor->where = strtolower($row['HQ_Country']);
    if(in_array($row['id'], $investor_ids)){
      $investor->favorite = true;
    }else{
      $investor->favorite = false;
    }

    $investors[$index] = $investor;
    $index++;

    unset($investor);
  }
}

echo json_encode($investors);
exit();
?>
