<?php
session_start();
if($_SESSION['username'] != ''){

  $propertyID = $_POST['propertyID'];

  include_once 'connection.php';

  $sql = "DELETE FROM property WHERE id = '$propertyID'";
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
