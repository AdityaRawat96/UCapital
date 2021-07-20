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
  $addedBy = $_SESSION['id'];

  $sql = "INSERT INTO poster (timestampID, type, rent, rooms, receptions, bathrooms, garden, about, primaryImage, secondaryImages, addedBy)
  VALUES ('$timestampID', '$type', '$rent', '$rooms', '$receptions', '$bathrooms', '$garden', '$about', '$primaryImage', '$secondaryImages', '$addedBy')";

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
