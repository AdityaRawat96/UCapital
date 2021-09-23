<?php
session_start();

$valid_link = false;
if(isset($_SESSION['temp_id'])){
  $valid_link = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ucapital Merger - Verification </title>

  <!-- jQuery -->
  <script src="../../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../../dist/css/custom.css">
  <!-- Local css -->
  <link rel="stylesheet" href="../../../assets/css/style.css">
  <!-- Bootstrap select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <section id="register-page-sign-up">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
          <div class="register-form-section-34543">
            <form class="row" id="verification-form" action="#" method="post">

              <div class="col-md-12">
                <img src="../../../dist/img/logo_b.png" alt="1" class="register-logo1010"><br>
              </div>

              <?php

              if($valid_link){
                ?>
                <input type="text" name="user_id" id="user_id" value="<?=$_SESSION['temp_id']; ?>" hidden>
                <div class="col-md-12">
                  <h6 class="create-acount-title97">You have confirmed your account. <br> Complete the registration to start using the platform.</h6><br>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="edit-profile-labels"><b>Phone Number</b></label>
                    <div class="input-group">
                      <input id="phone" type="text" class="input-setting987 form-control" name="phone">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="edit-profile-labels"><b>Country</b></label>
                    <div class="input-group">
                      <select class="input-setting987 form-control" name="country" id="country">
                        <option value="" selected disabled>Select One</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="edit-profile-labels"><b>City</b></label>
                    <div class="input-group">
                      <select class="input-setting987 form-control" name="city" id="city">
                        <option value="" selected disabled>Select One</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="edit-profile-labels"><b>Operator Type</b></label>
                    <div class="input-group">
                      <select class="input-setting987 form-control" name="operator" id="operator">
                        <option value="" selected disabled>Select One</option>
                        <option value="Company">Company</option>
                        <option value="Investor">Investor</option>
                        <option value="Advisor">Advisor</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <br>
                  <small><i>This information will not be shown to other users</i></small>
                </div>

                <div class="col-md-12"><br>
                  <div class="register-acount-input">
                    <button type="submit" class="our-back-btn register-submit-btn-45-63"> Sign In </button>
                  </div>
                </div>
                <?php
              }else{
                ?>
                <div class="col-md-12">
                  <div class="verification_status_error">
                    <i class="fas fa-times-circle fa-5x"></i><br><br>
                    <center>
                      <h4>Registration Unsuccessful!</h4>
                    </center>
                    <h6>Please try to login again</h6>
                  </div>
                </div>
                <?php
              }
              ?>

            </form><br>
          </div>
        </div>

        <div class="col-md-3"></div>
      </div>
    </div>
  </section>
</body>
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../../dist/js/adminlte.js"></script>
<!-- Sweet Alert -->
<script src="../../../plugins/sweetalert/sweetalert.min.js"></script>
<!-- jquery-validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Local javascript -->
<script src="../../../assets/js/script.js"></script>

<style media="screen">
.verification_status_success{
  color: #00B74A;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.verification_status_success h6{
  color: grey;
}
.verification_status_error{
  color: #F93154;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.verification_status_error h6{
  color: grey;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: "../../../assets/php/getCountries.php",
    dataType: 'json',
    success: function(data) {
      $.each(data, function(index, element) {
        $('#country').append($('<option>', {
          value: element.id,
          text: element.country
        }));
      });
    }
  });

  $("#country").on("change", function(){
    $.ajax({
      type: 'POST',
      url: "../../../assets/php/getCities.php",
      dataType: 'json',
      data: {
        country_id : $(this).val()
      },
      success: function(data) {
        $('#city').html("");
        $('#city').append($('<option>', {
          value: "",
          text: "Select One",
          selected: true,
          disabled: true
        }));
        $.each(data, function(index, element) {
          $('#city').append($('<option>', {
            value: element.city,
            text: element.city
          }));
        });
      }
    });
  });

  $('#verification-form').validate({
    submitHandler: function () {
      verificationFunction();
    },
    rules: {
      phone: {
        required: true,
        number: true
      },
      country: {
        required: true
      },
      city: {
        required: true,
      },
      operator: {
        required: true,
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
})
</script>

</html>
