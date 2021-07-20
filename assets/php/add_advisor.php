<?php

$response = "failed";


$profile_picture = $_POST["profile_picture"];
$studio_name = $_POST["studio_name"];
$interests = $_POST["interests"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$description = $_POST["description"];
$about = $_POST["about"];
$location = $_POST["location"];
$services = json_encode($_POST["services"]);
$folder_name = $_POST["folder_name"];

$data = $_POST["profile_picture"];
$image_array_1 = explode(";", $data);
$image_array_2 = explode(",", $image_array_1[1]);
$data = base64_decode($image_array_2[1]);
$profile_picture = time() . '.png';
$imageLocation = "../uploads/Advisor/".$folder_name."/".$profile_picture;
file_put_contents($imageLocation, $data);

include_once 'connection.php';

$sql = "INSERT INTO advisors (
  profile_picture,
  studio_name,
  interests,
  email,
  phone,
  description,
  about,
  location,
  services,
  folder_name
)
VALUES (
  '$profile_picture',
  '$studio_name',
  '$interests',
  '$email',
  '$phone',
  '$description',
  '$about',
  '$location',
  '$services',
  '$folder_name'
)";

if ($con->query($sql)){
  $response = "success";
}else{
  $response = mysqli_error($con);
}

echo $response;

?>
