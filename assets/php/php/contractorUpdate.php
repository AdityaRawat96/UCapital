<?php
session_start();
if($_SESSION['username'] != ''){

  $contractorID = $_POST['contractorID'];
  $name = $_POST['Name'];
  $contact = $_POST['Contact'];
  $email = $_POST['Email'];
  $profession = $_POST['Profession'];

  include_once 'connection.php';

  $sql = "UPDATE contractor SET name='$name', email='$email', phone='$contact', profession='$profession' WHERE id = '$contractorID'";

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
