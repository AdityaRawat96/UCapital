<?php
session_start();
if($_SESSION['username'] != ''){

  $contractorID = $_POST['contractorID'];

  include_once 'connection.php';

  $sql = "DELETE FROM contractor WHERE id = '$contractorID'";
  if ($con->query($sql)){
    echo "success";
  }else{
    echo mysqli_error($con);
  }

}else{
  ?>
  <script>
  window.open('../php/logout.php','_self')
  </script>
  <?php
}
?>
