<?php
session_start();
if($_SESSION['username'] != ''){

  $response = "failed";

  date_default_timezone_set('GMT');
  $currentDate = date('Y-m-d');

  $invoiceID = $_POST['invoiceID'];
  $propertyID = $_POST['propertyID'];
  $propertyAddress = $_POST['propertyAddress'];
  $referenceNumber = $_POST['referenceNumber'];
  $invoiceDate = $_POST['invoiceDate'];
  $paymentDate = $currentDate;
  $employeeID = $_POST['employeeID'];
  $landlordName = $_POST['landlordName'];
  $landlordContact = $_POST['landlordContact'];
  $landlordEmail = $_POST['landlordEmail'];
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

  $sql = "INSERT INTO invoiceproperty (invoiceID, propertyID, propertyAddress, referenceNumber,	invoiceDate,	paymentDate, employeeID, landlordName,	landlordMobile, landlordEmail, rentAmount, expenses, orderTotal, paymentTotal, paymentAmount, paymentType, paidDate, revenue, status)
  VALUES ('$invoiceID', '$propertyID', '$propertyAddress', '$referenceNumber', '$invoiceDate', '$paymentDate', '$employeeID', '$landlordName', '$landlordContact',
    '$landlordEmail', '$rentAmount', '$expense', '$orderTotal', '$paymentTotal', '$paymentAmount', '$paymentType', '$paidDate', '$revenue', '$status')";

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
      $output .= '<img src="../../assets/images/logo_1.png" alt="Invoice logo" style="height: 50px; margin: 10px;">';
      $output .= '</div>
      <div class="col-6" style="position: relative; width: 50%; text-align: right; float: right;">
      <h3>RENT PAYMENT</h3>
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
      PAID TO
      <address>
      <strong>'.$landlordName.'</strong><br>
      Phone: '.$landlordContact.'<br>
      Email: '.$landlordEmail.'<br>
      Address: '.$propertyAddress.'
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
      $invoiceDate =  date_format($invoiceDate,"M-Y");

      $output .= '<b>Rent Month:</b> '.$invoiceDate.'<br>
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
      <p><b>Terms & Conditions</b><br><br>
      •	For let only properties its Landlord’s responsibility to put the security deposit into protection scheme. If you fail to do your tenant may process via court to pay back up to 3 times of deposit.<br>
      •	For rental properties its landlord’s responsibility to make sure they have property licence if required by council and updated valid record of Gas, EICR, EPC, smoke alarm & carbon monoxide alarm if landlord want home wide to arrange there will be an additional charge to apply for Property licence, insurance and certificates.<br>
      •	Whilst every care is taken in respect of finding a suitable tenant, home wide cannot accept any responsibility for any default in payment of the rent or any other breach of the tenancy agreement.<br>
      •	The owner will instruct Home Wide in writing if and when the property is to be vacated and to issue a notice requiring possession.<br>
      •	home wide shall be responsible for performing, or hiring necessary personnel to perform, all necessary maintenance and repairs to the Property. Owner shall reimburse home wide for the cost of all such maintenance and repairs.<br>
      •	Home wide shall obtain for the approval of the Client alternative quotations for all work and contracts required to be arranged in carrying out its duties of a value in excess of £50 in the aggregate.<br>
      •	In the event that collection and/or legal proceedings become necessary with regard to the rental of the Property, home wide shall handle all such proceedings. Owner shall reimburse home wide for all expenses incurred in the pursuit of collection proceedings and/or legal proceedings.<br>
      •	We will deduct the management fee from rent and remaining amount will be transferred to landlord within 7 working days.<br>
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

      $file_name = 'invoiceGenerated/'.$invoiceID.'.pdf';
      $pdf = new Pdf();
      $pdf->load_html($output);
      $pdf->setPaper('A4', 'portrait');
      $pdf->render();
      $file = $pdf->output();
      file_put_contents($file_name, $file);

      if($landlordEmail != "" && $emailDocument == 1){
        require("email/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = EMAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = EMAIL_PORT;
        $mail->Username = EMAIL_USERNAME;
        $mail->Password = EMAIL_PASSWORD;
        $mail->setFrom(EMAIL_USERNAME, EMAIL_NAME);
        $mail->addAddress($landlordEmail, $landlordName);
        $mail->addReplyTo(EMAIL_USERNAME, EMAIL_NAME);
        $mail->isHTML(true);
        $mail->AddAttachment($file_name);
        $mail->Subject = EMAIL_NAME.' - INVOICE';
        $mail->Body    = '
        <html>
        <body>
        <span>Hi <span style="text-transform:capitalize;"> '.$landlordName.",".'</span><br><br>Please find the invoice for your order in the attachment.
        </span><br><br><br>
        <b>This is a system generated email do not reply.</b>
        </body>
        </html>';

        $mail->AltBody = EMAIL_NAME.' - INVOICE';

        if($mail->send()) {
          $response = "success";
        }else{
          $sqlRemove = "DELETE FROM invoiceproperty WHERE invoiceID = '$invoiceID'";
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
