<?php
if(isset($_GET['key'])){
  include_once '../../assets/php/connection.php';
  $registerHash = $_GET['key'];
  $result= mysqli_query($con, " SELECT * FROM advisors WHERE registerHash = '$registerHash' ")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));

  if(mysqli_num_rows($result) > 0 ){

    while($row = mysqli_fetch_array($result)){

      if($row['registered'] == 0){

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> Ucapital Merger - Advisor Registration </title>

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
                      </div><br>

                      <div class="col-md-12">
                        <h3 class="create-acount-title97"> Advisor Registration </h3>
                      </div><br>

                      <input type="text" name="advisor_id" value="<?=$row['id']; ?>" id="advisor_id" hidden disabled>

                      <div class="input-group mb-3">
                        <input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name">
                      </div>

                      <div class="input-group mb-3">
                        <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name">
                      </div>

                      <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="<?=$row['email']; ?>" disabled>
                      </div>

                      <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control password-input" placeholder="Password" name="password">
                        <div class="input-group-append">
                          <div class="input-group-text password_visibility">
                            <span class="fas fa-eye"></span>
                          </div>
                        </div>
                      </div>

                      <div class="input-group mb-3">
                        <div class="icheck-primary">
                          <input type="checkbox" id="agree_checkbox" name="agree_checkbox">
                          <label for="agree_checkbox" style="font-weight: normal;">
                            I accept privacy and condition policy
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="register-acount-input">
                          <button type="submit" class="our-back-btn register-submit-btn-45-63"> Sign Up </button>
                        </div>
                      </div>

                      <div class="col-md-12"><br>
                        <p class="sign-in-login-option102"> Already registered? <a href="login.php"> Sign In </a> </p>
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
            advisorRegistrationFunction();
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

    <?php
  }
}
}
}
?>
