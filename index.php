<?php

if(isset($_COOKIE["uCapitalEmail"]) && isset($_COOKIE["uCapitalPassword"])){
  $email = $_COOKIE["uCapitalEmail"];
  $password = $_COOKIE["uCapitalPassword"];
  $validCredentials = false;

  include('assets/php/connection.php');

  $result= mysqli_query($con, " SELECT * FROM users WHERE email = '$email' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){

    while($row = mysqli_fetch_array($result)){

      if(strcmp($password, $row['password']) == 0){

        $validCredentials = true;
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['profile_picture'] = $row['profile_picture'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        ?>
        <script>window.open('pages/news/','_self')</script>
        <?php

        break;
      }else{
        ?>
        <script>window.open('pages/auth/login.php','_self')</script>
        <?php
      }
    }
  }

  if($validCredentials == false){
    $exp=time()-3000000;
    setcookie("uCapitalEmail","",$exp,'/');
    setcookie("uCapitalPassword","",$exp,'/');
  }
}

else{
  ?>
  <script>window.open('pages/auth/login.php','_self')</script>
  <?php
}
?>
