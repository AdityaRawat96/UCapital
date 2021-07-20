<?php
session_start();
if($_SESSION['username'] != ''){

  include_once 'connection.php';

  $response = "failed";

  $propertyID = $_POST['propertyID'];
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

  $sql = "UPDATE property SET
  propertyAddress = '$propertyAddress',
  landlordName = '$landlordName',
  landlordContact = '$landlordContact',
  landlordEmail = '$landlordEmail',
  tenantName = '$tenantName',
  tenantContact = '$tenantContact',
  tenantEmail = '$tenantEmail',
  rentAmount = '$rentAmount',
  propertyType = '$propertyType',
  bedrooms = '$bedrooms',
  rentDate = '$rentDate',
  status = '$status',
  propertyWork = '$propertyWork',
  propertyInspection = '$propertyInspection',
  propertyCertificates = '$propertyCertificates',
  propertyImages = '$propertyImages'
  WHERE id = '$propertyID'";

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
