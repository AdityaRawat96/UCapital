<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ucapital Merger - Sign In </title>

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
            <form class="row" id="signin-form" action="#" method="post">

              <div class="col-md-12">
                <img src="../../dist/img/logo_b.png" alt="1" class="register-logo1010">
              </div><br>

              <div class="col-md-12">
                <h6 class="create-acount-title97"> Log In </h6><br>
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

              <small class="error" id="incorrectCredentials">Invalid credentials!</small>
              <small class="error" id="unverifiedAccount">Please verify your email before Signing-In!</small><br><br>

              <div class="col-md-12">
                <div class="register-acount-input">
                  <div class="form-check">
                    <label class="main form-check-label">
                      Keep me signed in
                      <input type="checkbox" id="remember">
                      <span class="geekmark"></span>
                    </label>

                  </div>
                </div>
              </div>

              <div class="col-md-12"><br>
                <div class="register-acount-input">
                  <button type="submit" class="our-back-btn register-submit-btn-45-63"> Sign In </button>
                </div>
              </div>

              <div class="col-md-12">
                <center>
                  <span class="text-alt-singup">Or sign in with</span>
                </center>
                <div class="social-button-container">
                  <a href="../../assets/php/login.php?provider=google">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-google"><i class="fab fa-google"></i></button>
                  </a>
                  <a href="../../assets/php/login.php?provider=facebook">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-facebook"><i class="fab fa-facebook-f"></i></button>
                  </a>
                  <a href="../../assets/php/login.php?provider=linkedin">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-linkedin"><i class="fab fa-linkedin-in"></i></button>
                  </a>
                  <a href="../../assets/php/login.php?provider=twitter">
                    <button type="button" name="button" class="btn btn-social-login btn-social-login-twitter"><i class="fab fa-twitter"></i></button>
                  </a>
                </div>

                <?php
                if(isset($_GET['error'])){
                  if($_GET['error'] == "social_error"){
                    ?>
                    <br><br><small class="error auth_error">An error occurred please try again!</small><br>
                    <?php
                  }else if($_GET['error'] == "not_found"){
                    ?>
                    <br><br><small class="error auth_error">No users found associated with this social account, Sign-Up instead!</small><br>
                    <?php
                  }
                }

                ?>
              </div>

              <div class="col-md-12"><br>
                <p class="sign-in-login-option102"> New user? <a href="register.php"> Create an account </a> </p>
              </div>
              <div class="col-md-12">
                <p class="sign-in-login-option102"> <a href="forgotpassword.php"> Forgot Password? </a> </p>
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
$.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Local javascript -->
<script src="../../assets/js/script.js"></script>

<script type="text/javascript">
//FORM VALIDATION ***************

$(document).ready(function () {

  //Sign-In Form
  $('#signin-form').validate({
    submitHandler: function () {
      loginFunction();
    },
    rules: {
      email: {
        required: true
      },
      password: {
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
