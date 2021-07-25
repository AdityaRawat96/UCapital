<?php
session_start();

include('connection.php');
$response = "FAILED";

if(isset($_SESSION['id'])){
  $message = $con -> real_escape_string($_POST['message']);
  $receiver = $_POST['current_recipient'];
  $sender = $_SESSION['id'];

  $sql = "INSERT INTO chats (
    sender,
    receiver,
    message
  )
  VALUES (
    '$sender',
    '$receiver',
    '$message'
  )";

  if ($con->query($sql)){
    $response = "SUCCESS";
  }else{
    $response = "FAILED";
  }
}


echo $response;


?>
