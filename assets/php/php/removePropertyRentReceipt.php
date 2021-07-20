<?php
session_start();
if($_SESSION['username'] != ''){

  $rentReceiptID = $_POST['rentReceiptID'];

  include_once 'connection.php';

  $sql = "DELETE FROM rentReceiptproperty WHERE id = '$rentReceiptID'";
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
