<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ucapital Merger - Forgot password </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/custom.css">
  <!-- Local css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <section id="register-page-sign-up">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
          <div class="register-form-section-34543">

            <form id="signin-form">

              <div class="col-md-12">
                <img src="../../dist/img/logo_b.png" alt="1" class="register-logo1010">
              </div><br>

              <div class="col-md-12">
                <h3 class="create-acount-title97"> Reset Password </h3>
              </div><br>


              <div class="form-group">
                <label for="exampleInputEmail1">Registered email</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter registered email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="otp">OTP</label>
                <div class="input-group">
                  <input id="otp" type="password" class="form-control" placeholder="Enter OTP" name="otp">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group" style="display: none;" id="newPasswordGroup">
                <label for="newPassword">New password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter new password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group" style="display: none;" id="confirmPasswordGroup">
                <label for="exampleInputEmail1">Confirm Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
              </div>
              <span id="incorrectCredentials"></span><br><br>
              <div class="row" id="ButtonSet1">
                <div class="col-6">
                  <button type="button" class="btn btn-primary btn-block" id="sendOTPButton">Send OTP</button>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <button type="button" class="btn btn-success btn-block" id="submitButton">Validate</button>
                </div>
                <!-- /.col -->
              </div>
              <div class="row" id="ButtonSet2" style="display: none;">
                <div class="col-12">
                  <button type="button" class="btn btn-primary btn-block" id="changePasswordButton">Change Password</button>
                </div>
              </div>

              <div class="col-md-12"><br>
                <p class="sign-in-login-option102"><a href="login.php"> Back to login </a> </p>
              </div>

            </form><br>

          </div>
        </div>

        <div class="col-md-3"></div>
      </div>
    </div>
  </section>
</body>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Sweet Alert -->
<script src="../../plugins/sweetalert/sweetalert.min.js"></script>
<!-- Local javascript -->
<script src="../../assets/js/script.js"></script>

<script type="text/javascript">
//FORM VALIDATION ***************

var attempts = 0;
var otpHash = "";

$(document).ready(function () {


  $('#email').keypress(function(e){
    $("#incorrectCredentials").fadeTo(500, 0);
    $('#email').removeClass('is-invalid');
  });

  $('#otp').keypress(function(e){
    $("#incorrectCredentials").fadeTo(500, 0);
  });

  $('#newPassword').keypress(function(e){
    $("#incorrectCredentials").fadeTo(500, 0);
  });

  $('#confirmPassword').keypress(function(e){
    $("#incorrectCredentials").fadeTo(500, 0);
  });

  $("#sendOTPButton").on('click', function(){
    $('#signin-form').validate({
      rules: {
        email: {
          required: true
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
    if($('#signin-form').valid()){
      if(otpHash != ""){
        resendOTP();
      }else{
        sendOTP();
      }
    }
  });


  $("#submitButton").on('click', function(){
    $('#signin-form').validate({
      rules: {
        email: {
          required: true
        },
        otp: {
          required: true
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
    if($('#signin-form').valid()){
      checkOTP();
    }
  });

  $("#changePasswordButton").on('click', function(){
    $('#signin-form').validate({
      rules: {
        newPassword: {
          required: true
        },
        confirmPassword: {
          required: true
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
    if($('#signin-form').valid()){
      changePassword();
    }
  });

});

function sendOTP(){
  $.ajax({
    type: 'POST',
    url: '../../assets/php/OTPSend.php',
    data: {
      email: $('#email').val(),
      otp: $('#otp').val()
    },
    beforeSend: function() {
      $('.loader').fadeIn();
    },
    success: function(response) {
      console.log(response);
      if(response.trim() == "failed"){
        $('.loader').fadeOut();
        swal("Error!", "An error occurred, please try again!", "error");
      }
      else if (response.trim() == "invalid"){
        $("#incorrectCredentials").html('Invalid email!');
        $("#incorrectCredentials").fadeTo(0, 1);
        $('.loader').fadeOut();
        $('#email').focus();
      }else {
        $('.loader').fadeOut();
        swal("OTP Sent!", "Check your email for OTP", "success")
        .then((value) => {
          attempts++;
          $("#sendOTPButton").html("Resend OTP");
          otpHash = response.trim();
          $("#email").prop('disabled', true);
        });
      }
    }
  });
}

function resendOTP(){
  $.ajax({
    type: 'POST',
    url: '../../assets/php/OTPResend.php',
    data: {
      email: $('#email').val(),
      otp: otpHash
    },
    beforeSend: function() {
      $('.loader').fadeIn();
    },
    success: function(response) {
      console.log(response);
      if(response.trim() == "failed"){
        $('.loader').fadeOut();
        swal("Error!", "An error occurred, please try again!", "error");
      }else {
        $('.loader').fadeOut();
        swal("OTP Resent!", "Check your email for OTP", "success")
        .then((value) => {
          attempts++;
          $("#sendOTPButton").html("Resend OTP");
          otpHash = response.trim();
          $("#email").prop('disabled', true);
          if(attempts > 2){
            $("#sendOTPButton").remove();
          }
        });
      }
    }
  });
}

function checkOTP(){
  $.ajax({
    type: 'POST',
    url: '../../assets/php/OTPCheck.php',
    data: {
      email: $('#email').val(),
      otp: $('#otp').val()
    },
    beforeSend: function() {
      $('.loader').fadeIn();
    },
    success: function(response) {
      console.log(response);
      if(response.trim() == "failed"){
        $('.loader').fadeOut();
        swal("Error!", "An error occurred, please try again!", "error");
      }else if(response.trim() == "invalid"){
        $('.loader').fadeOut();
        $("#incorrectCredentials").html('Incorrect OTP!');
        $("#incorrectCredentials").fadeTo(0, 1);
        $('.loader').fadeOut();
        $('#otp').focus();
      }else {
        $('.loader').fadeOut();
        $('#otp').prop('disabled', true);
        $("#newPasswordGroup").fadeIn();
        $("#confirmPasswordGroup").fadeIn();
        $("#ButtonSet1").fadeOut();
        $("#ButtonSet2").fadeIn();
      }
    }
  });
}

function changePassword(){
  if($("#newPassword").val() == $("#confirmPassword").val()){
    $.ajax({
      type: 'POST',
      url: '../../assets/php/changePassword.php',
      data: {
        email: $('#email').val(),
        otp: $('#otp').val(),
        password: $('#confirmPassword').val()
      },
      beforeSend: function() {
        $('.loader').fadeIn();
      },
      success: function(response) {
        console.log(response);
        if(response.trim() == "success"){
          $('.loader').fadeOut();
          swal("Success!", "Password changed", "success")
          .then((value) => {
            window.open('login.php', '_self');
          });
        }else {
          $('.loader').fadeOut();
          swal("Error!", "An error occurred, please try again!", "error");
        }
      }
    });
  }else{
    $("#incorrectCredentials").html('Password do not match!');
    $("#incorrectCredentials").fadeTo(0, 1);
  }
}
</script>
</html>
