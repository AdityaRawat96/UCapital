<?php
session_start();

include_once 'connection.php';// inlcude HybridAuth library
// change the following paths if necessary
// Include Composer's autoloader
include '../../vendor/autoload.php';

// Import Hybridauth's namespace
use Hybridauth\Hybridauth;


// if page requested by submitting login form
if( isset( $_REQUEST["email"] ) && isset( $_REQUEST["password"] ) ){

  $response = "failed";

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);



  $result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email'")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['email'] == $email){
        $response = "email";
      }
    }
  }else{
    $sql = "INSERT INTO users (user_type, first_name, last_name, email, password)
    VALUES (3, '$first_name', '$last_name', '$email', '$password')";

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
      $mail->addAddress($email, $first_name);
      $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
      $mail->isHTML(true);
      $mail->Subject = EMAIL_NAME.' - Account email verification';
      $mail->Body    = '
      <html>
      <body>
      <p>Hi '.$first_name.',</p>
      <p>Please use the below link to verify your email.</p><br>
      <p><a href="'.BASE_URL.'pages/auth/verify?query='.md5($email).'">'.BASE_URL.'pages/auth/verify?query='.md5($email).'</a></p>
      <br><br><br>
      This is a system generated email do not reply.
      </body>
      </html>';
      $mail->AltBody = EMAIL_NAME.' - Account email verification';

      if($mail->send()) {
        $response = "success";
      }else{
        $response = "failed";
      }

    }else{
      $response = mysqli_error($con);
    }
  }
  echo $response;
}
// else, if login page request by clicking a provider button
elseif( isset( $_REQUEST["provider"] ) ){

  // the selected provider
  $provider_name = $_REQUEST["provider"];

  try{

    // First step is to build a configuration array to pass to `Hybridauth\Hybridauth`
    $config = [
      // Location where to redirect users once they authenticate with a provider
      'callback' => BASE_URL.'assets/php/login.php',

      // Providers specifics
      'providers' => [

        'Twitter' => [
          'callback' => BASE_URL.'assets/php/login.php?provider=twitter',
          'enabled' => true,     // Optional: indicates whether to enable or disable Twitter adapter. Defaults to false
          'keys' => [
            'key' => '6aDMnlmww4b1bsHUPT4albHm4', // Required: your Twitter consumer key
            'secret' => '7OiAruAR5AixAPGukJUOyBoyTASygDOw3YLo8DYokn9D7cZSN9'  // Required: your Twitter consumer secret
          ],
        ],

        'Google' => [
          'callback' => BASE_URL.'assets/php/login.php?provider=google',
          'enabled' => true,
          'keys' => [
            'id' => '637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com',
            'secret' => '9a1AO6Ca3IT0wg3SrBnT8PiY'
          ],
        ], // To populate in a similar way to Twitter

        'LinkedIn' => [
          'callback' => BASE_URL.'assets/php/login.php?provider=linkedin',
          'enabled' => true,
          'keys' => [
            'id' => '...',
            'secret' => '...'
          ],
        ], // To populate in a similar way to Twitter

        'Facebook' => [
          'callback' => BASE_URL.'assets/php/login.php?provider=facebook',
          'enabled' => true,
          'keys' => [
            'id' => '278764557384180',
            'secret' => '749617d11518f4b15aee193cc68af24e'
          ],
        ],  // And so on
      ],

      "debug_mode" => true ,

      // to enable logging, set 'debug_mode' to true, then provide here a path of a writable file
      "debug_file" => "error_logs.php",
    ];

    // initialize Hybrid_Auth class with the config file
    $hybridauth = new Hybridauth( $config );

    // try to authenticate with the selected provider
    $adapter = $hybridauth->authenticate( $provider_name );

    // then grab the user profile
    $user_profile = $adapter->getUserProfile();
  }

  // something went wrong?
  catch( Exception $e ){
    header("Location: ../../pages/auth/register.php?error=social_error");
  }

  // check if the current user already have authenticated using this provider before
  $user_exist = get_user_by_provider_and_id( $provider_name, $user_profile->identifier );

  // if the used didn't authenticate using the selected provider before
  // we create a new entry on database.users for him
  if(!$user_exist ){
    $user_email_exists = get_user_by_email($user_profile->email);
    if(!$user_email_exists){
      create_new_hybridauth_user(
        $user_profile->email,
        $user_profile->firstName,
        $user_profile->lastName,
        $user_profile->photoURL,
        $provider_name,
        $user_profile->identifier
      );
      header("Location: ../../pages/auth/login.php");
    }else{
      header("Location: ../../pages/auth/register.php?error=email_exists");
    }
  }else{
    header("Location: ../../pages/auth/register.php?error=social_exists");
  }
}

function mysqli_query_excute( $sql ){
  global $con;
  $result = mysqli_query( $con, $sql );
  if(!$result ){
    die( printf( "Error: %s\n", mysqli_error( $con ) ) );
  }
  if(is_bool($result)){
    return true;
  }else{
    return $result->fetch_object();
  }
}

/*
* get the user data from database by provider name and provider user id
**/
function get_user_by_provider_and_id( $provider_name, $provider_user_id ){
  return mysqli_query_excute( "SELECT * FROM users WHERE hybridauth_provider_name = '$provider_name' AND hybridauth_provider_uid = '$provider_user_id'" );
}
/*
* get the user data from database by email
**/
function get_user_by_email( $email ){
  return mysqli_query_excute( "SELECT * FROM users WHERE email = '$email'" );
}

/*
* get the user data from database by provider name and provider user id
**/
function create_new_hybridauth_user( $email, $first_name, $last_name, $profile_picture, $provider_name, $provider_user_id ){
  global $con;
  // let generate a random password for the user
  $password = md5( str_shuffle( "0123456789abcdefghijklmnoABCDEFGHIJ" ) );

  $sql = "INSERT INTO users
  (
    verified,
    email,
    password,
    first_name,
    last_name,
    profile_picture,
    hybridauth_provider_name,
    hybridauth_provider_uid,
    created_timestamp
  )
  VALUES
  (
    '1',
    '$email',
    '$password',
    '$first_name',
    '$last_name',
    '$profile_picture',
    '$provider_name',
    '$provider_user_id',
    NOW()
  )";

  if($con->query($sql)){
    return $con->insert_id;
  }

}

function update_user_profile(){

}


?>
