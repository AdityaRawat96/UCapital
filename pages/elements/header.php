<?php
include '../../assets/php/connection.php';
if(isset($_SESSION['id'])){
  $user_id = $_SESSION['id'];
  if($_SESSION['user_type'] == 0){
    $session_user_chat_name = $_SESSION['first_name'] . " (Super Admin)";
  }else if($_SESSION['user_type'] == 1){
    $session_user_chat_name = $_SESSION['first_name'] . " (Support)";
  }else if($_SESSION['user_type'] == 2){
    $session_user_chat_name = $_SESSION['first_name'] . " (Advisor)";
  }else if($_SESSION['user_type'] == 3){
    $session_user_chat_name = $_SESSION['first_name'];
  }

  $sender_user_type = $_SESSION['user_type'];
}else{
  $user_id = -1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ucapital Merger </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/custom.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Local css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
