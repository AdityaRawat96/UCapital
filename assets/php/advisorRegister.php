<?php
session_start();

$response = "failed";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$advisor_id = $_POST['advisor_id'];

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

  $resultAdvisor = mysqli_query($con, " SELECT * FROM advisors WHERE id = '$advisor_id'")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($resultAdvisor) > 0 ){
    while($rowAdvisor = mysqli_fetch_array($resultAdvisor)){
      $advisor_profile_picture = $rowAdvisor['profile_picture'];
      if($advisor_profile_picture != "" && $advisor_profile_picture != null){
        copy('../uploads/Advisor/'.$rowAdvisor['folder_name'].'/'.$advisor_profile_picture, '../profiles/'.$advisor_profile_picture);
      }

      $sql = "INSERT INTO users (verified, user_type, first_name, last_name, email, password, profile_picture)
      VALUES ('1', 2, '$first_name', '$last_name', '$email', '$password', '$advisor_profile_picture')";

      if ($con->query($sql)){

        $user_id = mysqli_insert_id($con);

        $sql = " UPDATE advisors SET
        user_id = '$user_id',
        registered = 1
        WHERE id = '$advisor_id'";

        if ($con->query($sql)){
          $response = "success";
        }
      }
    }
  }

}

echo $response;

?>
