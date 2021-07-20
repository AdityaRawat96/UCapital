<?php

$con = mysqli_connect("localhost", "root", "", "ucapital")
or die("Unable to connect to the database server!");
$db = mysqli_select_db($con,'ucapital')
or die("Unable to connect to the database server!");

//Email Configuration
define('EMAIL_HOST', 'mail.clarteresearch.in');
define('EMAIL_PORT', 587);
define('EMAIL_USERNAME', 'administrator@structalpha.com');
define('EMAIL_PASSWORD', 'V%V2-C6cBWV$');
define('EMAIL_NAME', 'HomeWide');

//Email Configuration
/*define('EMAIL_HOST', 'authsmtp.securemail.pro');
define('EMAIL_PORT', 587);
define('EMAIL_USERNAME', 'info@ucapitalmerger.com');
define('EMAIL_PASSWORD', 'LatipacuMerger24!');
define('EMAIL_NAME', 'HomeWide');*/

?>
