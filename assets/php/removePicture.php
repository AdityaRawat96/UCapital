<?php
session_start();

$user_id= $_POST['user_id'];

include_once 'connection.php';

$sql = "UPDATE users SET profile_picture=null WHERE id = '$user_id'";

if ($con->query($sql)){
  $_SESSION['profile_picture'] = null;
  echo "success";
}else{
  echo mysqli_error($con);
}
