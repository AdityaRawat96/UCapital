<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ucapital Merger - Sign Up </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/custom.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
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
            <form class="row" id="register_form" action="#" method="post">

              <div class="col-md-12">
                <img src="../../dist/img/logo_b.png" alt="1" class="register-logo1010">
              </div>

              <div class="col-md-12">
                <h6 class="create-acount-title97"> Create an Account </h6><br>
              </div>


              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels"><b>First Name</b></label>
                  <div class="input-group">
                    <input id="first_name" type="text" class="input-setting987 form-control" name="first_name">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels"><b>Last Name</b></label>
                  <div class="input-group">
                    <input id="last_name" type="text" class="input-setting987 form-control" name="last_name">
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels"><b>Email Address</b></label>
                  <div class="input-group">
                    <input id="email" type="email" class="input-setting987 form-control" name="email">
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels"><b>Password</b></label>
                  <div class="input-group mb-3">
                    <input id="password" type="password" class="input-setting987 form-control password-input" name="password">
                    <div class="input-group-append">
                      <div class="input-group-text password_visibility">
                        <span class="fas fa-eye"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels"><b>Confirm password</b></label>
                  <div class="input-group mb-3">
                    <input id="password_confirm" type="password" class="input-setting987 form-control password-input" name="password_confirm">
                    <div class="input-group-append">
                      <div class="input-group-text password_visibility">
                        <span class="fas fa-eye"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="icheck-primary">
                  <input type="checkbox" id="agree_checkbox" name="agree_checkbox">
                  <label for="agree_checkbox" style="font-weight: normal; font-size: 12px;">
                    I accept privacy & terms and conditions
                  </label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="register-acount-input">
                  <button type="submit" class="our-back-btn register-submit-btn-45-63"> Sign Up </button>
                </div>
              </div>

              <div class="col-md-12">
                <center>
                  <span class="text-alt-singup">Or sign up with</span>
                </center>
                <div class="social-button-container">
                  <a href="../../assets/php/register.php?provider=google">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-google"><i class="fab fa-google"></i></button>
                  </a>
                  <a href="../../assets/php/register.php?provider=facebook">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-facebook"><i class="fab fa-facebook-f"></i></button>
                  </a>
                  <a href="../../assets/php/register.php?provider=linkedin">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-linkedin"><i class="fab fa-linkedin-in"></i></button>
                  </a>
                  <a href="../../assets/php/register.php?provider=twitter">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-twitter"><i class="fab fa-twitter"></i></button>
                  </a>
                </div>

                <?php
                if(isset($_GET['error'])){
                  if($_GET['error'] == "social_error"){
                    ?>
                    <br><br><small class="error auth_error">An error occurred please try again!</small><br>
                    <?php
                  }else if($_GET['error'] == "email_exists"){
                    ?>
                    <br><br><small class="error auth_error">Email already registered, Sign-In Instead!</small><br>
                    <?php
                  }else if($_GET['error'] == "social_exists"){
                    ?>
                    <br><br><small class="error auth_error">Social account already registered, Sign-In Instead!</small><br>
                    <?php
                  }
                }
                ?>
              </div>

              <div class="col-md-12"><br>
                <p class="sign-in-login-option102"> Already a user? <a href="login.php"> Sign In </a> </p>
              </div>

            </form><br>
          </div>
        </div>

        <div class="col-md-3"></div>
      </div>
    </div>
  </section>

</body>

<style media="screen">
.input-setting987:hover, .input-setting987:focus{
  width: 1%;
}
.form-group{
  margin-bottom: 5px;
}
.icheck-primary{
  margin-left: 10px;
}
.text-alt-singup{
  margin: 10px 0px;
  display: block;
}
</style>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
<!-- Sweet Alert -->
<script src="../../plugins/sweetalert/sweetalert.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Local javascript -->
<script src="../../assets/js/script.js"></script>


<script type="text/javascript">
//FORM VALIDATION ***************

$(document).ready(function () {

  //Sign-In Form
  $('#register_form').validate({
    submitHandler: function () {
      registrationFunction();
    },
    rules: {
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6,
      },
      password_confirm: {
        required: true,
        equalTo : "#password",
        minlength: 6,
      },
      agree_checkbox: {
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

});
</script>

</html>
