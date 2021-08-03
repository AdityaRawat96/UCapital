<?php
session_start();

include_once 'connection.php';

$response = "failed";
$email_flag = true;

$user_id = $_SESSION['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$advisor_id = $_POST["advisor_id"];
$studio_name = $con -> real_escape_string($_POST["studio_name"]);
$interests = $con -> real_escape_string($_POST["interests"]);
$email = $con -> real_escape_string($_POST["email"]);
$phone = $_POST["phone"];
$role = $con -> real_escape_string($_POST["role"]);
$company = $con -> real_escape_string($_POST["company"]);
$website = $con -> real_escape_string($_POST["website"]);
$description = $con -> real_escape_string($_POST["description"]);
$about = $con -> real_escape_string($_POST["about"]);
$location = $_POST["location"];
$folder_name = $_POST["folder_name"];

if(isset($_POST["services"])){
  $services = json_encode($_POST["services"]);
}else{
  $services = "[]";
}

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

  $sql = "UPDATE advisors SET
  studio_name ='$studio_name',
  interests ='$interests',
  email ='$email',
  phone ='$phone',
  role ='$role',
  company ='$company',
  website ='$website',
  description ='$description',
  about ='$about',
  location ='$location',
  services ='$services'
  WHERE id='$advisor_id'";

  if ($con->query($sql)){
    $sql = " UPDATE users SET
    first_name = '$first_name',
    last_name = '$last_name',
    email = '$email',
    mobile = '$phone'
    WHERE id = '$user_id'";

    if ($con->query($sql)){
      $response = "success";
      $_SESSION['email'] = $email;
      $_SESSION['mobile'] = $phone;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;
    }else{
      echo mysqli_error($con);
    }
  }else{
    $response = mysqli_error($con);
  }

}




echo $response;

?>
