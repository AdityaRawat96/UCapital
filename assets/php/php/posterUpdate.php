<?php
session_start();
if($_SESSION['username'] != ''){

  include_once 'connection.php';

  $response = "failed";

  $timestampID = $_POST['timestampID'];
  $type =$_POST['type'];
  $rent = $_POST['rent'];
  $rooms = $_POST['rooms'];
  $receptions = $_POST['receptions'];
  $bathrooms = $_POST['bathrooms'];
  $garden =  $_POST['garden'];
  $about = $con -> real_escape_string($_POST['about']);
  $primaryImage = $_POST['primaryImage'];
  $secondaryImages = $_POST['secondaryImages'];

  $sql = "UPDATE poster SET
  type = '$type',
  rent = '$rent',
  rooms = '$rooms',
  receptions = '$receptions',
  bathrooms = '$bathrooms',
  garden = '$garden',
  about = '$about',
  primaryImage = '$primaryImage',
  secondaryImages = '$secondaryImages'
  WHERE timestampID = '$timestampID'";

  if ($con->query($sql)){
    $response = "success";
  }else {
    $response = mysqli_error($con);
  }

  echo $response;

}
else{
  ?>
  <script>
  window.open('../php/logout.php','_self')
</script>
<?php
}
?>
