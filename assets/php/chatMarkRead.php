<?php
session_start();

include('connection.php');

if(isset($_SESSION['id'])){

  $sender = $_POST['sender_id'];
  $receiver = $_SESSION['id'];

  $sql = "UPDATE chats SET status=1 WHERE sender='$sender' AND receiver='$receiver'";

  $con->query($sql);
}

?>
