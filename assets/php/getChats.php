<?php
session_start();
$user_id1 = $_POST['user_id'];
$user_id2 = $_SESSION['id'];

$response = array();
$index = 0;

include('connection.php');

$result= mysqli_query($con, " SELECT * FROM chats WHERE (sender=$user_id1 AND receiver='$user_id2') OR (sender=$user_id2 AND receiver='$user_id1')")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $chat = (object) array();

    $chat->id = $row['id'];
    $chat->msg_type = $row['msg_type'];
    $chat->sender = $row['sender'];
    $chat->receiver = $row['receiver'];
    $chat->message = $row['message'];
    $chat->status = $row['status'];
    $chat->chat_timestamp = $row['chat_timestamp'];

    $response[$index] = $chat;
    $index++;

    unset($chat);
  }
}

echo json_encode($response);
exit();

?>
