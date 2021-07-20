<?php
session_start();
if($_SESSION['username'] != ''){

  include_once 'connection.php';

  $response = "failed";

  $timestampID = $_POST['timestampID'];
  $propertyAddress = $con -> real_escape_string($_POST['propertyAddress']);
  $landlordName = $con -> real_escape_string($_POST['landlordName']);
  $landlordContact = $con -> real_escape_string($_POST['landlordContact']);
  $landlordEmail = $con -> real_escape_string($_POST['landlordEmail']);
  $tenantName = $con -> real_escape_string( $_POST['tenantName']);
  $tenantContact = $con -> real_escape_string( $_POST['tenantContact']);
  $tenantEmail = $con -> real_escape_string( $_POST['tenantEmail']);
  $rentAmount = $_POST['rentAmount'];
  $propertyType = $_POST['propertyType'];
  $bedrooms = $_POST['bedrooms'];
  $rentDate = $_POST['rentDate'];
  $status = $_POST['status'];
  $propertyWork = $_POST['propertyWork'];
  $propertyInspection = $_POST['propertyInspection'];
  $propertyCertificates = $_POST['propertyCertificates'];
  $propertyImages = $_POST['propertyImages'];
  $addedBy = $_SESSION['id'];

  $sql = "INSERT INTO property (timestampID, propertyAddress, landlordName, landlordContact, landlordEmail, tenantName, tenantContact, tenantEmail, rentAmount, propertyType, bedrooms, rentDate, status, propertyWork, propertyInspection, propertyCertificates, propertyImages, addedBy)
  VALUES ('$timestampID', '$propertyAddress', '$landlordName', '$landlordContact', '$landlordEmail', '$tenantName', '$tenantContact', '$tenantEmail', '$rentAmount', '$propertyType',
    '$bedrooms', '$rentDate', '$status', '$propertyWork', '$propertyInspection', '$propertyCertificates', '$propertyImages', '$addedBy')";

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
