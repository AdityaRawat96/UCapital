<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe  =$_POST['remember'];

$response = "";

include('connection.php');

$result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email' ")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_array($result)){

    if(strcmp(md5($password), $row['password']) == 0){

      if($rememberMe == '1'){
        $expireTime = time() + 3000000;
        setcookie("uCapitalEmail", $row['email'], $expireTime, '/');
        setcookie("uCapitalPassword", $row['password'], $expireTime, '/');
      }

      $_SESSION['id'] = $row['id'];
      $_SESSION['profile_picture'] = $row['profile_picture'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['mobile'] = $row['mobile'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];

      $response = "success";
      break;
    }
  }
}

if($response == ""){
  $response = "failed";
}

echo $response;

?>
