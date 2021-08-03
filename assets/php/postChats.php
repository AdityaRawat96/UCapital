<?php
session_start();

include('connection.php');
$response = "FAILED";

if(isset($_SESSION['id'])){
  $message = $con -> real_escape_string($_POST['message']);
  $receiver = $_POST['current_recipient'];
  $sender = $_SESSION['id'];
  $chat_timestamp = $_POST['chat_time'];
  $sender_image = $_POST['chat_sender_image'];
  $sender_name = $_POST['chat_sender_name'];
  $sender_user_type = $_POST['sender_user_type'];

  $sql = "INSERT INTO chats (
    sender,
    receiver,
    message,
    chat_timestamp
  )
  VALUES (
    '$sender',
    '$receiver',
    '$message',
    '$chat_timestamp'
  )";

  if ($con->query($sql)){
    require '../../vendor/autoload.php';

    $options = array(
      'cluster' => 'ap2',
      'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      PUSHER_APP_KEY,
      PUSHER_APP_SECRET,
      PUSHER_APP_ID,
      $options
    );

    $data['message'] = $message;
    $data['receiver'] = $receiver;
    $data['sender'] = $sender;
    $data['chat_timestamp'] = $chat_timestamp;
    $data['sender_image'] = $sender_image;
    $data['sender_name'] = $sender_name;
    $data['sender_user_type'] = $sender_user_type;
    $pusher->trigger(PUSHER_APP_CHANNEL, PUSHER_APP_EVENT, $data);

    $response = "SUCCESS";
  }else{
    $response = "FAILED";
  }
}


echo $response;


?>
