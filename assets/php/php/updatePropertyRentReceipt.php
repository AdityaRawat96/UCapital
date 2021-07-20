<?php
session_start();
if($_SESSION['username'] != ''){

  $response = "failed";

  date_default_timezone_set('GMT');
  $currentDate = date('Y-m-d');

  $rentReceiptID = $_POST['rentReceiptID'];
  $referenceNumber = $_POST['referenceNumber'];
  $rentReceiptDate = $_POST['rentReceiptDate'];
  $paymentDate = $currentDate;
  $tenantName = $_POST['tenantName'];
  $tenantContact = $_POST['tenantContact'];
  $tenantEmail = $_POST['tenantEmail'];
  $rentAmount = $_POST['rentAmount'];
  $expense = $_POST['expense'];
  $orderTotal = $_POST['orderTotal'];
  $paymentTotal = $_POST['paymentTotal'];
  $paymentAmount = $_POST['paymentAmount'];
  $paymentType = $_POST['paymentType'];
  $paidDate = $_POST['paidDate'];
  $revenue = $_POST['revenue'];
  $status = $_POST['status'];
  $emailDocument = $_POST['emailDocument'];
  $output = '';

  include_once 'connection.php';
  include('emailPDF.php');


  $sql = "UPDATE rentreceiptproperty SET
  referenceNumber='$referenceNumber',
  rentReceiptDate='$rentReceiptDate',
  paymentDate='$paymentDate',
  tenantName='$tenantName',
  tenantMobile='$tenantContact',
  tenantEmail='$tenantEmail',
  rentAmount = '$rentAmount',
  expenses='$expense',
  orderTotal='$orderTotal',
  paymentTotal='$paymentTotal',
  paymentAmount='$paymentAmount',
  paymentType='$paymentType',
  paidDate = '$paidDate',
  revenue = '$revenue',
  status='$status'
  WHERE rentReceiptID = '$rentReceiptID'";


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
    <div class="col-6" style="position: relative; width: 50%;">';
    $output .= '<img src="../../assets/images/logo_1.png" alt="Rent Receipt logo" style="height: 50px; margin: 10px;">';
    $output .= '</div>
    <div class="col-6" style="position: relative; width: 50%; text-align: right; float: right;">
    <h3>RENT RECEIPT</h3>
    </div>
    </div>
    <hr>
    <div class="row invoice-info">
    <table style="position: relative; width: 100%; font-size: 10px; padding: 0px 10px; margin-left: auto; margin-right: auto;">
    <tr style="position: relative; width: 100%;">
    <td style="position: relative; width: 32%;">
    <div class="invoice-col">
    <address>
    30 Plashet Grove<br>
    London<br>
    E6 1AE<br>
    Phone: 020 8050 9897<br>
    Mobile: 073 6816 4462<br>
    </address>
    </div>
    </td>
    <td style="position: relative; width: 32%;">
    <div class="invoice-col">
    PAID BY
    <address>
    <strong>'.$tenantName.'</strong><br>
    Phone: '.$tenantContact.'<br>
    Email: '.$tenantEmail.'
    </address>
    </div>
    </td>
    <td style="position: relative; width: 32%; float: right;">
    <div class="invoice-col">
    <b>Rent Receipt #'.$rentReceiptID.'</b><br>';

    if($referenceNumber != ""){
      $output .= '<b>Reference Number: </b>'.$referenceNumber.'<br>';
    }

    $rentReceiptDate = date_create($rentReceiptDate);
    $rentReceiptDate =  date_format($rentReceiptDate,"d-m-Y");

    $output .= '<b>Rent Receipt Date:</b> '.$rentReceiptDate.'<br>
    <b>Payment Status:</b>';

    if($status == "1"){
      $output .= "Paid";
    }else{
      $output .= "Pending";
    }

    $output .= '<br>
    </div>
    </td>
    </tr>
    </table><br><br>
    </div>
    <div class="row">
    <div class="col-12 table-responsive">
    <table class="table table-striped" style="font-size: 10px; width: 100%;">
    <thead>
    <tr>
    <th>Type</th>
    <th>Description</th>
    <th>Subtotal</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Rent</td>
    <td>Property rent</td>
    <td>£ '.number_format($rentAmount, 2).'</td>
    </tr>';

    $expenseArray = json_decode($expense);

    for($index = 0; $index < sizeof($expenseArray); $index++){

      $output .= '<tr>
      <td>Expense</td>
      <td>'.$expenseArray[$index]->description.'</td>
      <td> - £ '.number_format($expenseArray[$index]->amount, 2).'</td>
      </tr>';

    }

    $output .= '</tbody>
    </table>
    </div>
    </div><br><br>
    <div class="row">
    <div class="col-6">
    <div class="table-responsive">
    <table class="table" style="font-size: 10px;">
    <tr><th>Total:</th><td>£ ';

    $output .= number_format($orderTotal,2);
    $output .= '</td></tr>';

    $paymentType = (explode(",",$paymentType,-1));
    $paymentAmount = (explode(",",$paymentAmount,-1));
    $paidDate = (explode(",",$paidDate,-1));
    for($index = 0; $index < sizeof($paymentType); $index++){

      $paidDateFormatted = date_create($paidDate[$index]);
      $paidDateFormatted =  date_format($paidDateFormatted,"d-m-Y");

      $output .= '<tr><td>';
      if($paymentType[$index] == '1'){
        $output .= "Bank Payment on ".$paidDateFormatted;
      }else if($paymentType[$index] == '2'){
        $output .= "Cash Payment on ".$paidDateFormatted;
      }else{
        $output .= "Other Payment on ".$paidDateFormatted;
      }
      $output .= '</td><td>£ ';
      $output .= number_format($paymentAmount[$index],2);
      $output .= '</td></tr>';
    }

    $output .= '<tr>
    <th>Amount Due:</th>
    <th>£ '.number_format(($orderTotal - $paymentTotal),2).'</th>
    </tr>
    </table>
    </div>
    </div>
    </div><br>
    <div class="row">
    <div class="col-12" style="font-size: 8px;">
    <hr>
    <span>
    <p><b>Notes / Terms</b><br><br>
    •	No interest will be received on the Security Deposit.<br>
    •	If rent is unpaid for more than 14 days, interest will be payable at 3% above the bank of England base rate.<br>
    •	Early termination/breaking tenancy agreement tenant will be liable for outstanding rent period. <br>
    •	If key loss by tenant there will £15 per key / £35 per Fob or call out charges if tenant locked outside<br>
    •	If there is any changes in tenancy at tenant request admin fee will apply. <br>
    •	personal property of the Tenant is not insured by the Landlord for either damage or loss, and the Landlord assumes no liability for any such loss.<br>
    •	The Tenant will keep the Property in good repair and condition and in good decorative order.<br>
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

    $file_name = 'rentReceiptGenerated/'.$rentReceiptID.'.pdf';
    $pdf = new Pdf();
    $pdf->load_html($output);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $file = $pdf->output();
    file_put_contents($file_name, $file);

    if($tenantEmail != "" && $emailDocument == 1){
      require("email/class.phpmailer.php");
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Host = EMAIL_HOST;
      $mail->SMTPAuth = true;
      $mail->Port = EMAIL_PORT;
      $mail->Username = EMAIL_USERNAME;
      $mail->Password = EMAIL_PASSWORD;
      $mail->setFrom(EMAIL_USERNAME, EMAIL_NAME);
      $mail->addAddress($tenantEmail, $tenantName);
      $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
      $mail->isHTML(true);
      $mail->AddAttachment($file_name);
      $mail->Subject = EMAIL_NAME.' - RENT RECEIPT';
      $mail->Body    = '
      <html>
      <body>
      <span>Hi <span style="text-transform:capitalize;"> '.$tenantName.",".'</span><br><br>Please find the rent receipt for your order in the attachment.
      </span><br><br><br>
      <b>This is a system generated email do not reply.</b>
      </body>
      </html>';

      $mail->AltBody = EMAIL_NAME.' - RENT RECEIPT';

      if($mail->send()) {
        $response = "success";
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
