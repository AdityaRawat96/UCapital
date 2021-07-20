<?php
session_start();
if($_SESSION['username'] != ''){

  $response = "failed";

  $invoiceID = $_POST['invoiceID'];
  $referenceNumber = $_POST['referenceNumber'];
  $invoiceDate = $_POST['invoiceDate'];
  $paymentDate = $_POST['paymentDate'];
  $company = $_POST['company'];
  $employeeID = $_POST['employeeID'];
  $customerID = $_POST['customerID'];
  $customerName = $_POST['customerName'];
  $customerMobile = $_POST['customerMobile'];
  $customerEmail = $_POST['customerEmail'];
  $productID = $_POST['productID'];
  $productCostPrice = $_POST['productCostPrice'];
  $productSellingPrice = $_POST['productSellingPrice'];
  $productQuantity = $_POST['productQuantity'];
  $orderTotal = $_POST['orderTotal'];
  $paymentTotal = $_POST['paymentTotal'];
  $paymentAmount = $_POST['paymentAmount'];
  $paymentType = $_POST['paymentType'];
  $paidDate = $_POST['paidDate'];
  $status = $_POST['status'];
  $emailDocument = $_POST['emailDocument'];
  $output = '';

  date_default_timezone_set('GMT');
  $currentDate = date('Y-m-d');

  include_once 'connection.php';
  include('emailPDF.php');


  if($customerID != ''){
    $sql = "UPDATE invoice SET referenceNumber='$referenceNumber',	invoiceDate='$invoiceDate',	paymentDate='$paymentDate',	company='$company', customerID='$customerID', customerName='$customerName',	customerMobile='$customerMobile', customerEmail='$customerEmail',
    productID='$productID', productCostPrice='$productCostPrice', productSellingPrice='$productSellingPrice', productQuantity='$productQuantity', orderTotal='$orderTotal', paymentTotal='$paymentTotal', paymentAmount='$paymentAmount', paymentType='$paymentType', paidDate = '$paidDate', status='$status' WHERE invoiceID = '$invoiceID'";
  }else{
    $sql = "UPDATE invoice SET referenceNumber='$referenceNumber',	invoiceDate='$invoiceDate',	paymentDate='$paymentDate',	company='$company', customerName='$customerName',	customerMobile='$customerMobile', customerEmail='$customerEmail',
    productID='$productID', productCostPrice='$productCostPrice', productSellingPrice='$productSellingPrice', productQuantity='$productQuantity', orderTotal='$orderTotal', paymentTotal='$paymentTotal', paymentAmount='$paymentAmount', paymentType='$paymentType', paidDate = '$paidDate', status='$status' WHERE invoiceID = '$invoiceID'";
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
    <div class="col-6" style="position: relative; width: 50%;">';
    if($company == '1'){
      $output .= '<img src="../../assets/images/logo_1.png" alt="Invoice logo" style="height: 50px; margin: 10px;">';
    }else{
      $output .= '<img src="../../assets/images/logo_2.png" alt="Invoice logo" style="height: 100px; margin: 10px;">';
    }
    $output .= '</div>
    <div class="col-6" style="position: relative; width: 50%; text-align: right; float: right;">
    <h3>INVOICE</h3>
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
    INVOICE TO
    <address>
    <strong>'.$customerName.'</strong><br>
    Phone: '.$customerMobile.'<br>
    Email: '.$customerEmail.'
    </address>
    </div>
    </td>
    <td style="position: relative; width: 32%; float: right;">
    <div class="invoice-col">
    <b>Invoice #'.$invoiceID.'</b><br>';

    if($referenceNumber != ""){
      $output .= '<b>Reference Number: </b>'.$referenceNumber.'<br>';
    }

    $invoiceDate = date_create($invoiceDate);
    $invoiceDate =  date_format($invoiceDate,"d-m-Y");

    $paymentDate = date_create($paymentDate);
    $paymentDate =  date_format($paymentDate,"d-m-Y");

    $output .= '<b>Invoice Date:</b> '.$invoiceDate.'<br>
    <b>Payment Due:</b> '.$paymentDate.'<br>
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
    <table class="table table-striped" style="font-size: 10px;">
    <thead>
    <tr>
    <th>Quantity</th>
    <th>Service</th>
    <th>Description</th>
    <th>Subtotal</th>
    </tr>
    </thead>
    <tbody>';

    $productIdArray = (explode(",",$productID,-1));
    $productQtyArray = (explode(",",$productQuantity,-1));
    $productPriceArray = (explode(",",$productSellingPrice,-1));
    $orderTotal = 0;

    for($index = 0; $index < sizeof($productIdArray); $index++){

      $productSearch = trim($productIdArray[$index]);
      $resultProduct= mysqli_query($con, " SELECT * FROM product WHERE id = '$productSearch'")
      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

      if(mysqli_num_rows($resultProduct) > 0 ){
        while($rowProduct = mysqli_fetch_array($resultProduct)){
          $productSubtotal = (float) trim($productPriceArray[$index]);
          $orderTotal = $orderTotal + $productSubtotal;

          $output .= '<tr>
          <td>'.trim($productQtyArray[$index]).'</td>
          <td>'.$rowProduct['productName'].'</td>
          <td>'.$rowProduct['productDescription'].'</td><td>£ ';
          $output .=  number_format($productSubtotal, 2);
          $output .= '</td></tr>';
        }
      }

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
    <p><b>Terms & Conditions</b><br>
    •	Extra works can be provided subject to a written confirmation including cost.<br>
    •	It is the customer’s responsibility to arrange planning permission, building control and any utility changes. If planning permission is required for the work, we may request to see proof.<br>
    •	We will agree all practical arrangements with regards to working methods with the client in order to provide minimum disruption to the client and allow work to be carried out efficiently by the contractor.<br>
    •	Free access is required for delivery of building materials, plant, machinery, skips etc.<br>
    •	We will employ or subcontract labour to work on site. Each sub-contractor takes full responsibility for their own third-party liability.<br>
    •	Invoices will be sent out prior to the relevant payment date and each invoice will serve as a receipt for payment. Payments must be made in a timely manner or work progress may be impeded or ceased (in the case of non-payment). Payments can be made by cash or bank transfer. All invoices include our bank details for bank transfers.<br>
    •	No responsibility is taken by us for the presence of perished or rotten timber (or any other perished or rotten materials) in existing structures such as doors, windows and frames whether detected or undetected at the time of contract.<br>
    •	We will not be held responsible for the suitability of the existing boilers ability to provide for additional plumbing works. If the existing boiler is found to be unsuitable, this shall be discussed with the client and any parts required shall be supplied by client. If we have to remove existing radiators for any reason (e.g. plastering) we will not be held responsible for their effectiveness once they are replaced.<br>
    •	If we are required to move furniture to undertake our work, we will not be held responsible for any breakages or stains that may occur. We advise clients to keep all valuables and expensive items safe and secure for the duration of the works, as we cannot be held liable for any theft or loss.<br>
    •	We take pictures of the progress of our projects. We reserve the right to use these pictures in our portfolio of work, on our website and on various social media websites for marketing and information purposes. Please let us know via email at the start of your work if you are not happy with this.<br>
    </p>
    </span><br>
    <p>
    <b>Account Details</b><br>
    Global Wide Group Ltd T/A Home wide <br>
    Bank Name: Santander | Sort Code: 090129 | Account No:39503886<br>
    </p>
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

    $file_name = 'invoiceGenerated/'.$invoiceID.'.pdf';
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
      $mail->Subject = EMAIL_NAME.' - INVOICE';
      $mail->Body    = '
      <html>
      <body>
      <span>Hi <span style="text-transform:capitalize;"> '.$customerName.",".'</span><br><br>Please find the invoice for your order in the attachment.
      </span><br><br><br>
      <b>This is a system generated email do not reply.</b>
      </body>
      </html>';

      $mail->AltBody = EMAIL_NAME.' - INVOICE';

      if($mail->send()) {
        $response = "success";
      }else{
        $sqlRemove = "DELETE FROM invoice WHERE invoiceID = '$invoiceID'";
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
