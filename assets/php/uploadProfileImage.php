<?php
session_start();

$response = array();
$index = 0;
$user_id = $_POST["user_id"];

if(isset($_POST["image"]))
{
  $data = $_POST["image"];
  $image_array_1 = explode(";", $data);
  $image_array_2 = explode(",", $image_array_1[1]);
  $data = base64_decode($image_array_2[1]);
  $imageName = $user_id . '.png';
  $imageLocation = "../profiles/".$imageName;
  $imageLocationAdvisor = "../../../profiles/".$imageName;
  file_put_contents($imageLocation, $data);

  include_once 'connection.php';

  $sql = "UPDATE users SET profile_picture='$imageName' WHERE id = '$user_id'";

  if ($con->query($sql)){

    if($_SESSION['user_type'] == 2){
      $sqlAdvisor = "UPDATE advisors SET profile_picture='$imageLocationAdvisor' WHERE user_id = '$user_id'";
      $con->query($sqlAdvisor);
    }

    $_SESSION['profile_picture'] = $imageName;
    $responseObject = (object) array();
    $responseObject->status = "success";
    $responseObject->target = $imageName;
    $response[$index] = $responseObject;
    $index++;
  }else{
    $responseObject = (object) array();
    $responseObject->status = mysqli_error($con);
    $response[$index] = $responseObject;
    $index++;
  }

}

echo json_encode($response);
exit();

?>
