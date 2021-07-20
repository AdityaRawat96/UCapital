<?php
session_start();
if($_SESSION['username'] != ''){

  $customerID = $_POST['customerID'];
  $name = $_POST['Name'];
  $contact = $_POST['Contact'];
  $email = $_POST['Email'];
  $customerType = $_POST['customerType'];
  $bedrooms = $_POST['bedrooms'];
  $area = $_POST['area'];
  $budget = $_POST['budget'];

  include_once 'connection.php';

  $sql = "UPDATE customer SET name='$name', email='$email', phone='$contact', customerType='$customerType', bedrooms='$bedrooms', area='$area', budget='$budget' WHERE id = '$customerID'";

  if ($con->query($sql)){
  echo "success";
  }else{
    echo mysqli_error($con);
  }

}
else{
  ?>
  <script>
  window.open('../php/logout.php','_self')
</script>
<?php
}
?>
