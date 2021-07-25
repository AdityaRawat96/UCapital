<?php

include_once 'connection.php';

$response = "failed";

$profile_picture = $_POST["profile_picture"];
$studio_name = $con -> real_escape_string($_POST["studio_name"]);
$interests = $con -> real_escape_string($_POST["interests"]);
$email = $con -> real_escape_string($_POST["email"]);
$phone = $_POST["phone"];
$role = $con -> real_escape_string($_POST["role"]);
$company = $con -> real_escape_string($_POST["company"]);
$website = $con -> real_escape_string($_POST["website"]);
$description = $con -> real_escape_string($_POST["description"]);
$about = $con -> real_escape_string($_POST["about"]);
$location = $_POST["location"];
$folder_name = $_POST["folder_name"];

if(isset($_POST["services"])){
  $services = json_encode($_POST["services"]);
}else{
  $services = "[]";
}

$data = $_POST["profile_picture"];
$image_array_1 = explode(";", $data);
$image_array_2 = explode(",", $image_array_1[1]);
$data = base64_decode($image_array_2[1]);
$profile_picture = time() . '.png';
$imageLocation = "../uploads/Advisor/".$folder_name."/".$profile_picture;
if (!file_exists("../uploads/Advisor/".$folder_name)) {
  mkdir("../uploads/Advisor/".$folder_name, 0777, true);
}
file_put_contents($imageLocation, $data);

$registerHash = md5(uniqid(rand(), true));


$sql = "INSERT INTO advisors (
  profile_picture,
  studio_name,
  interests,
  email,
  phone,
  role,
  company,
  website,
  description,
  about,
  location,
  services,
  registerHash,
  folder_name
)
VALUES (
  '$profile_picture',
  '$studio_name',
  '$interests',
  '$email',
  '$phone',
  '$role',
  '$company',
  '$website',
  '$description',
  '$about',
  '$location',
  '$services',
  '$registerHash',
  '$folder_name'
)";

if ($con->query($sql)){
  require("email/class.phpmailer.php");
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Host = EMAIL_HOST;
  $mail->SMTPAuth = true;
  $mail->Port = EMAIL_PORT;
  $mail->Username = EMAIL_USERNAME;
  $mail->Password = EMAIL_PASSWORD;
  $mail->setFrom(EMAIL_USERNAME, EMAIL_NAME);
  $mail->addAddress($email, $studio_name);
  $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
  $mail->isHTML(true);
  $mail->Subject = 'UCapital Advisor Registration';
  $mail->Body    = '
  <html>
  <body>
  <p>Hello,</p><br>
  <p>Please visit the below link to register as an Advisor on the UCapital.</p><br>
  <p>'.BASE_URL.'pages/auth/advisor_registration.php?key='.$registerHash.'</p><br>
  <br><br><br>
  This is a system generated email do not reply.
  </body>
  </html>';

  $mail->AltBody = 'UCapital Advisor Registration';

  if($mail->send()) {
    $response = "success";
  }else{
    $response = "failed";
  }
}else{
  $response = mysqli_error($con);
}

echo $response;

?>
