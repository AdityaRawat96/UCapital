<?php
session_start();
$response = "failed";

$update = $_POST['update'];
$user_id = $_SESSION['id'];

$email_flag = true;
$password_flag = true;
$expireTime = time() + 3000000;

include_once 'connection.php';

if($update == "profile"){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
  $role = isset($_POST['role']) ? $_POST['role'] : "";
  $country = $_POST['country'];
  $city = $_POST['city'];
  $website = isset($_POST['website']) ? $_POST['website'] : "";
  $company = isset($_POST['company']) ? $_POST['company'] : "";

  if($_SESSION['email'] != $_POST['email']){
    $result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email'")
    or die('An error occurred! Unable to process this request. '. mysqli_error($con));

    if(mysqli_num_rows($result) > 0 ){
      while($row = mysqli_fetch_array($result)){
        if($row['email'] == $email){
          $response = "email";
          $email_flag = false;
        }
      }
    }else{
      if(isset($_COOKIE["uCapitalEmail"]) && isset($_COOKIE["uCapitalPassword"])){
        setcookie("uCapitalEmail", $email, $expireTime, '/');
      }
    }
  }
  if($email_flag){
    $sql = " UPDATE users SET
    first_name = '$first_name',
    last_name = '$last_name',
    email = '$email',
    mobile = '$mobile',
    role = '$role',
    country = '$country',
    city = '$city',
    website = '$website',
    company = '$company'
    WHERE id = '$user_id'";

    if ($con->query($sql)){
      $response = "success";
      $_SESSION['email'] = $email;
      $_SESSION['mobile'] = $mobile;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;
    }else{
      echo mysqli_error($con);
    }
  }
}else if($update == "password"){
  $old_password = $_POST['old_password'];
  $new_password = md5($_POST['new_password']);

  $result= mysqli_query($con, " SELECT * FROM users WHERE id = '$user_id'")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['password'] == md5($old_password)){
        $sql = " UPDATE users SET
        password = '$new_password'
        WHERE id = '$user_id'";

        if ($con->query($sql)){
          $response = "success";
          if(isset($_COOKIE["uCapitalEmail"]) && isset($_COOKIE["uCapitalPassword"])){
            setcookie("uCapitalPassword", $new_password, $expireTime, '/');
          }
        }
      }else{
        $response = "password";
      }
    }
  }
}

echo $response;

?>
