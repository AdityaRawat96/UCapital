<?php
session_start();

if(isset($_POST['user_id'])){
  include 'connection.php';

  $user_id = $_POST['user_id'];
  $mobile = $_POST['mobile'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $operator = $_POST['operator'];

  $sql = "UPDATE users SET
  mobile = '$mobile',
  country = '$country',
  city = '$city',
  operator = '$operator'
  WHERE id='$user_id'";

  if ($con->query($sql)){
    $result= mysqli_query($con, " SELECT * FROM users WHERE id = '$user_id' ")
    or die('An error occurred! Unable to process this request. '. mysqli_error($con));
    if(mysqli_num_rows($result) > 0 ){
      while($row = mysqli_fetch_array($result)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['profile_picture'] = $row['profile_picture'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['operator'] = $row['operator'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];

        echo "success";
        break;
      }
    }else{
      echo "error";
    }
  }else{
    echo "error";
  }
}


?>
