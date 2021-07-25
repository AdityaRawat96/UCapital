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


$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)
or die("Unable to connect to the database server!");
$db = mysqli_select_db($con, DB_NAME)
or die("Unable to connect to the database server!");

?>
