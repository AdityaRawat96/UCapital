<?php
session_start();
if(isset($_SESSION['email'])){
include '../elements/header.php';
include '../elements/navbar.php';
include '../elements/sidebar.php';
include 'dashboard.php';
include '../elements/footer.php';
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
