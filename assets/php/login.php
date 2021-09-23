<?php
session_start();

include('connection.php');
// inlcude HybridAuth library
// change the following paths if necessary
// Include Composer's autoloader
include '../../vendor/autoload.php';

// Import Hybridauth's namespace
use Hybridauth\Hybridauth;


// if page requested by submitting login form
if( isset( $_REQUEST["email"] ) && isset( $_REQUEST["password"] ) )
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rememberMe  =$_POST['remember'];

  $response = "";

  $result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){

    while($row = mysqli_fetch_array($result)){

      if(strcmp(md5($password), $row['password']) == 0){

        if($row['verified']){
          if($row['mobile'] == null && $row['country'] == null && $row['city'] == null && $row['operator'] == null){
            $response = "registration";
            $_SESSION['temp_id'] = $row['id'];
          }else{
            if($rememberMe == '1'){
              $expireTime = time() + 3000000;
              setcookie("uCapitalEmail", $row['email'], $expireTime, '/');
              setcookie("uCapitalPassword", $row['password'], $expireTime, '/');
            }

            $_SESSION['id'] = $row['id'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['profile_picture'] = $row['profile_picture'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['operator'] = $row['operator'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];

            $response = "success";
          }
        }else{
          $response = "unverified";
        }
        break;
      }
    }
  }

  if($response == ""){
    $response = "failed";
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
    header("Location: ../../pages/auth/login.php?error=social_error");
  }

  // check if the current user already have authenticated using this provider before
  $user_exist = get_user_by_provider_and_id( $provider_name, $user_profile->identifier );

  // if the used didn't authenticate using the selected provider before
  // we create a new entry on database.users for him
  if( ! $user_exist ){
    header("Location: ../../pages/auth/login.php?error=not_found");
  }else{
    if($user_exist->mobile == null && $user_exist->country == null && $user_exist->city == null && $user_exist->operator == null){
      $response = "registration";
      $_SESSION['temp_id'] = $user_exist->id;
      header("Location: ../../pages/auth/verify/registration.php");
    }else{
      $_SESSION['id'] = $user_exist->id;
      $_SESSION['user_type'] = $user_exist->user_type;
      $_SESSION['profile_picture'] = $user_exist->profile_picture;
      $_SESSION['email'] = $user_exist->email;
      $_SESSION['mobile'] = $user_exist->mobile;
      $_SESSION['country'] = $user_exist->country;
      $_SESSION['city'] = $user_exist->city;
      $_SESSION['operator'] = $user_exist->operator;
      $_SESSION['first_name'] = $user_exist->first_name;
      $_SESSION['last_name'] = $user_exist->last_name;

      header("Location: ../../pages/news/index.php");
    }

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

?>
