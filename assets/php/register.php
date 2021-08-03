<?php
session_start();

$response = "failed";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

include_once 'connection.php';

$result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email'")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){
    if($row['email'] == $email){
      $response = "email";
    }
  }
}else{
  $sql = "INSERT INTO users (user_type, first_name, last_name, email, password)
  VALUES (3, '$first_name', '$last_name', '$email', '$password')";

  if ($con->query($sql)){
    $response = "success";
  }
}

echo $response;

?>
