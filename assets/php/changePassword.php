<?php

$userEmail = trim($_POST['email']);
$userOTP = trim($_POST['otp']);
$userPassword_unhashed = trim($_POST['password']);
$userPassword =  md5(trim($_POST['password']));

include_once 'connection.php';

$result= mysqli_query($con, " SELECT * FROM users WHERE email = '$userEmail'")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){
    if($row['passwordHash'] == $userOTP){
      $sqlUpdate = " UPDATE users SET password = '$userPassword' WHERE email = '$userEmail'";
      if ($con->query($sqlUpdate)){
        require("email/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = EMAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = EMAIL_PORT;
        $mail->Username = EMAIL_USERNAME;
        $mail->Password = EMAIL_PASSWORD;
        $mail->setFrom(EMAIL_USERNAME, EMAIL_NAME);
        $mail->addAddress($userEmail, $row['first_name']);
        $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
        $mail->isHTML(true);
        $mail->Subject = 'New password for '.EMAIL_NAME;
        $mail->Body    = '
        <html>
        <body>
        <p>Hi '.$row['first_name'].',</p>
        <p>Use below credentials for login to your '.EMAIL_NAME.' account.</p>
        <p>Email : '.$userEmail.'</p>
        <p>Password : '.$userPassword_unhashed.'</p>
        <br><br><br>
        This is a system generated email do not reply.
        </body>
        </html>';

        $mail->AltBody = 'New password for '.EMAIL_NAME;

        if($mail->send()) {
          echo "success";
          break;
        }else{
          echo "failed1";
        }
      }else{
        echo "failed2";
      }
    }else{
      echo "invalid";
    }
  }
}else{
  echo "failed3";
}

?>
