<?php

define('BASE_URL', 'http://localhost/UCapital/');

//DB Configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ucapital');

//Email Configuration
define('EMAIL_HOST', 'mail.clarteresearch.in');
define('EMAIL_PORT', 587);
define('EMAIL_USERNAME', 'administrator@structalpha.com');
define('EMAIL_PASSWORD', 'V%V2-C6cBWV$');
define('EMAIL_NAME', 'Ucapital');

//Google-Map API
define('MAP_API', 'AIzaSyAXtg6dVLr7xRZNCB2JZ-BrxNR8Mq0-HR4');

//Pusher Configuration
define('PUSHER_APP_ID', '1239880');
define('PUSHER_APP_KEY', '994a4a55e0cd6dbaf6e1');
define('PUSHER_APP_SECRET', 'aa457f9ce111d33fa5f9');
define('PUSHER_APP_CLUSTER', 'ap2');
define('PUSHER_APP_CHANNEL', 'UCapital-channel');
define('PUSHER_APP_EVENT', 'chat-event');


$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)
or die("Unable to connect to the database server!");
$db = mysqli_select_db($con, DB_NAME)
or die("Unable to connect to the database server!");

?>
