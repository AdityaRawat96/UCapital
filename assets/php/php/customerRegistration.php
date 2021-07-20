<?php
session_start();
if($_SESSION['username'] != ''){

  $response = "failed";

  $Name = $_POST['Name'];
  $contact = $_POST['Contact'];
  $email = $_POST['Email'];
  $customerType = $_POST['customerType'];
  $bedrooms = $_POST['bedrooms'];
  $area = $_POST['area'];
  $budget = $_POST['budget'];
  $addedBy = $_SESSION['id'];
  $addedDate = date('Y-m-d');

  include_once 'connection.php';

  $result= mysqli_query($con, " SELECT * FROM customer WHERE email = '$email' OR phone = '$contact'")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      if($row['email'] == $email){
        $response = "email";
      }else{
        $response = "phone";
      }
    }
  }else{
    $sql = "INSERT INTO customer (name, email, phone, customerType, bedrooms, area, budget, addedBy, addedDate)
    VALUES ('$Name', '$email', '$contact', '$customerType', '$bedrooms', '$area', '$budget', '$addedBy', '$addedDate')";

    if ($con->query($sql)){
      $response = "success";
    }else {
      $response = mysqli_error($con);
    }
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
