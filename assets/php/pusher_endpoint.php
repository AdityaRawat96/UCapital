<?php
session_start();
header("Content-Type: application/json");

include('connection.php');
require '../../vendor/autoload.php';

if(!isset($_SESSION["id"]))
{
  $_SESSION["id"] = time();
}

$pusher = new Pusher\Pusher(
  PUSHER_APP_KEY,
  PUSHER_APP_SECRET,
  PUSHER_APP_ID
);

echo $pusher->presence_auth($_POST["channel_name"], $_POST["socket_id"], $_SESSION["id"], array("id" => $_SESSION["id"]));

?>
