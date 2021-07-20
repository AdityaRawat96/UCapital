<?php
session_start();
if($_SESSION['username'] != ''){

  $response = "failed";

  $output = '';

  date_default_timezone_set('GMT');
  $currentDate = date('Y-m-d');

  include_once 'connection.php';
  include('emailPDF.php');

  $quotationNumber = $_POST['quotationNumber'];
  $referenceNumber = $_POST['referenceNumber'];
  $quotationDate = $_POST['quotationDate'];
  $company = $_POST['company'];
  $employeeID = $_POST['employeeID'];
  $customerID = $_POST['customerID'];
  $customerName = $_POST['customerName'];
  $customerMobile = $_POST['customerMobile'];
  $customerEmail = $_POST['customerEmail'];
  $quotationItems =  $_POST['quotationItems'];
  $quotationCostPrice = $_POST['quotationCostPrice'];
  $quotationSellingPrice = $_POST['quotationSellingPrice'];
  $emailDocument = $_POST['emailDocument'];


  if($customerID != ''){
    $sql = "UPDATE quotation SET
    referenceNumber='$referenceNumber',
    quotationDate='$quotationDate',
    company='$company',
    customerID='$customerID',
    customerName='$customerName',
    customerMobile='$customerMobile',
    customerEmail='$customerEmail',
    quotationItems='$quotationItems',
    costPrice='$quotationCostPrice',
    sellingPrice='$quotationSellingPrice'
    WHERE quotationID = '$quotationNumber'";
  }else{
    $sql = "UPDATE quotation SET
    referenceNumber='$referenceNumber',
    quotationDate='$quotationDate',
    company='$company',
    customerName='$customerName',
    customerMobile='$customerMobile',
    customerEmail='$customerEmail',
    quotationItems='$quotationItems',
    costPrice='$quotationCostPrice',
    sellingPrice='$quotationSellingPrice'
    WHERE quotationID = '$quotationNumber'";
  }

  if ($con->query($sql)){

    $output = '<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
    <div class="invoice p-3 mb-3">
    <div class="row">
    <div class="col-6" style="position: relative; width: 50%;">
    </div>
    <div class="col-6" style="position: relative; width: 50%; text-align: right; float: right;">
    <h3>QUOTATION</h3>
    </div>
    </div>
    <hr>
    <div class="row invoice-info">
    <table style="position: relative; width: 100%; font-size: 10px; padding: 0px 10px; margin-left: auto; margin-right: auto;">
    <tr style="position: relative; width: 100%;">
    <td style="position: relative; width: 32%;">
    <div class="invoice-col"><br>
    FROM
    <address>
    30 Plashet Grove<br>
    London E6, 1AE<br>
    Phone: 020 8050 9897<br>
    Mobile: 073 6816 4462<br>
    </address>
    </div>
    </td>
    <td style="position: relative; width: 32%;">
    <div class="invoice-col"><br>
    QUOTATION TO
    <address>
    <strong>'.$customerName.'</strong><br>
    Phone: '.$customerMobile.'<br>
    Email: '.$customerEmail.'
    </address>
    </div>
    </td>
    <td style="position: relative; width: 32%; float: right;">
    <div class="invoice-col">
    <b>Quotation #'.$quotationNumber.'</b><br><br>';

    if($referenceNumber != ""){
      $output .= '<b>Reference Number: </b>'.$referenceNumber.'<br>';
    }

    $quotationDate = date_create($quotationDate);
    $quotationDate =  date_format($quotationDate,"d-m-Y");

    $output .= '<b>Quotation Date:</b> '.$quotationDate.'<br>
    </div>
    </td>
    </tr>
    </table><br><br>
    </div>';

    if(!empty($quotationItems)){
      $output .= '
      <span><b>ITEM DETAILS:</b></span><br><br>
      <div class="row">
      <div class="col-12 table-responsive">
      <table class="table" style="font-size: 10px;">
      <thead class="thead-light">
      <tr>
      <th>Name</th>
      <th>Description</th>
      </tr>
      </thead>
      <tbody>';

      $items = json_decode($quotationItems);
      for($index = 0; $index < sizeof($items); $index++){
        $output .= '
        <tr>
        <td>'.$items[$index]->itemName.'</td>
        <td>'.$items[$index]->itemDescription.'</td>
        </tr>';
      }

      $output .= '</tbody>
      </table>
      </div>
      </div><br>';
    }

    $output .= '<div class="row">
    <div class="col-6">
    <div class="table-responsive">
    <table class="table" style="font-size: 10px;">
    <tr><th>Total:</th>
    <td>£ '.$quotationSellingPrice.'</td>
    </tr>
    </table>
    </div>
    </div>
    </div><br>
    <div class="row">
    <div class="col-12" style="font-size: 8px;">
    <hr>
    <span>
    <p>
    <b>Additional Information</b><br><br>
    •	This estimate is an approximation and is not guaranteed. The estimate is based on information provided from the client regarding project requirements. Actual cost may change once all project elements are finalized or negotiated. Prior to any changes of cost, the client will be notified. Estimate valid for 7 days.<br>
    •	Upon acceptance by you, we will perform the services described in the estimate. Any additional services requested by you and not covered by the estimate will incur additional charges.<br>
    •	The services will be completed, and delivery will be made in accordance with the schedule in the estimate, or as otherwise approved by the parties in writing.<br>
    •	Changes in the specifications, quantities, schedule, or other aspects of the services that are requested or approved by you do not become binding upon us unless accepted by us in writing. Any such changes may result in additional or increased charges, and you agree to pay such increased charges.<br>
    •	Unless explicitly agreed prior to commencement of work, payment will be due in full upon completion of the work or services provided. Where a quotation has been provided, the full amount, less any payments already made, is payable. <br>
    <br><br>
    <b>Account Details</b><br><br>
    Global Wide Group Ltd T/A Home wide <br>
    Bank Name: Santander | Sort Code: 090129 | Account No:39503886<br>
    </p>
    </span><br>
    <div style="position:relative; width: 100%; text-align: center;">
    <span>Global wide group Ltd T/A Home wide, registered in England & Wales number 11773523</span>
    </div>
    </div>
    </div><br>
    </div>
    </div>
    </div>
    </div>
    </div>';

    $file_name = 'quotationGenerated/'.$quotationNumber.'.pdf';
    $pdf = new Pdf();
    $pdf->load_html($output);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $file = $pdf->output();
    file_put_contents($file_name, $file);

    if($customerEmail != "" && $emailDocument == 1){
      require("email/class.phpmailer.php");
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Host = EMAIL_HOST;
      $mail->SMTPAuth = true;
      $mail->Port = EMAIL_PORT;
      $mail->Username = EMAIL_USERNAME;
      $mail->Password = EMAIL_PASSWORD;
      $mail->setFrom(EMAIL_USERNAME, EMAIL_NAME);
      $mail->addAddress($customerEmail, $customerName);
    $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
      $mail->isHTML(true);
      $mail->AddAttachment($file_name);
      $mail->Subject = EMAIL_NAME.' - QUOTATION';
      $mail->Body    = '
      <html>
      <body>
      <span>Hi <span style="text-transform:capitalize;"> '.$customerName.",".'</span><br><br>Please find the quotation for your order in the attachment.
      </span><br><br><br>
      <b>This is a system generated email do not reply.</b>
      </body>
      </html>';

      $mail->AltBody = EMAIL_NAME.' - QUOTATION';

      if($mail->send()) {
        $response = "success";
      }else{
        $sqlRemove = "DELETE FROM quotation WHERE quotationID = '$quotationNumber'";
        $con->query($sqlRemove);
      }
    }else{
      $response = "success";
    }

  }
  if($response == "success"){
    echo $response;
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
