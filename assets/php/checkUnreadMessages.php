<?php
session_start();
$chat_receiver = $_SESSION['id'];

$response = array();
$index = 0;
$unreadCounter = 0;

include('connection.php');

$result= mysqli_query($con, "SELECT B.id, B.user_type, B.profile_picture, B.first_name, count(sender) as msg_count FROM chats A JOIN users B ON B.id = A.sender WHERE A.receiver='$chat_receiver' AND A.status=0 GROUP BY A.sender")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $unreadCounter += $row['msg_count'];

    $chat = (object) array();

    $chat->user_id = $row['id'];
    $chat->first_name = $row['first_name'];
    $chat->user_type = $row['user_type'];
    $chat->profile_picture = $row['profile_picture'];
    $chat->msg_count = $row['msg_count'];

    $response[$index] = $chat;
    $index++;

    unset($chat);
  }
}

$data["msg_count"] = $unreadCounter;
$data["response"] = $response;

echo json_encode($data);
exit();

?>
