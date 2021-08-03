<?php
session_start();
include_once 'connection.php';

$user_id = $_POST['user_id'];
$status_type = $_POST['status_type'];
$status_value = $_POST['status_value'];

if($_SESSION['user_type'] == 0){
  if($status_type == "chat"){
    $sql = "UPDATE users SET chat_allowed='$status_value' WHERE id = '$user_id'";
    $con->query($sql);
  }else if($status_type == "type"){
    $sql = "UPDATE users SET user_type='$status_value' WHERE id = '$user_id'";
    $con->query($sql);
  }
}

?>
