<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/pro.png"> Personal profile </a></li>
              <!-- <li class="breadcrumb-item active text-custom-2"> Details </li> -->
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <section class="content">
      <div class="container-fluid">

        <div class="row">

          <div class="col-md-12">
            <div class="card profile-picture-page4">
              <div class="row">

                <div class="col-md-3">
                  <!-- Profile Image -->
                  <img class="profile-user-img profile-img-image74 rounded-circle"
                  src="
                  <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
                    echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
                  }else{
                    echo '../../dist/img/avatar0.png';
                  } ?>
                  "
                  alt="User profile picture">
                  <input  type="file" accept="image/*" id="upload" value="Choose a file" hidden>
                  <input type="hidden" id="imagebase64" name="imagebase64" hidden>


                  <div class="modal fade" id="modal-sm">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Profile picture</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <center>
                            <button type="button" class="btn btn-danger" id="removePicture">Remove picture</button><br><br>
                            <button type="button" class="btn btn-primary" id="changePicture">Change picture</button>
                          </center>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->



                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm" id="smallModal" hidden>
                    Launch Small Modal
                  </button>


                  <!-- This is the modal -->
                  <div class="modal" tabindex="-1" role="dialog" id="uploadimageModal">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Upload image</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <div id="image_demo"></div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary crop_image">Crop and Save</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-7">
                  <p class="name-pro987987"> TIPOLOGIA PROFILO </p>
                  <p class="name-main-heading"> <?=$_SESSION['first_name']." ".$_SESSION['last_name'] ?> </p>
                  <p class="contact-details-email-number"> <i class="far fa-envelope"></i> <?=$_SESSION['email']?> </p>
                  <p class="contact-details-email-number"> <i class="fas fa-phone-alt"></i> <?=$_SESSION['mobile']?> </p>
                </div>

                <!--
                <div class="col-md-2">
                <div class="float-sm-right">
                <a href="edit-profile.html" class="eidt-profile-btn our-border-btn"> <i class="fas fa-pencil-alt"></i> Edit Profile </a>
              </div>
            </div>

          -->

        </div>
      </div>
    </div>

    <div class="col-md-12">
      <form class="profile-form" action="#" method="post">
        <div class="card class-contact-info-settings">
          <div class="row">
            <div class="col-md-12">
              <h6 class="edit-profile-section654654"> Edit your information </h6>
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels"> First Name </label>
                    <div class="input-group">
                      <input type="text" class="input-setting987" value="<?=$_SESSION['first_name']?>" name="first_name" id="first_name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels"> Last Name </label>
                    <div class="input-group">
                      <input type="text" class="input-setting987" value="<?=$_SESSION['last_name']?>" name="last_name" id="last_name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels"> Email </label>
                    <div class="input-group">
                      <input type="email" class="input-setting987" value="<?=$_SESSION['email']?>" name="email" id="email">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels"> Phone number </label>
                    <div class="input-group">
                      <input type="number" class="input-setting987" value="<?=$_SESSION['mobile']?>" name="mobile" id="mobile">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="float-sm-right">
                <button type="submit" name="button" class="post-add-update-post our-back-btn">Update</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>

    <div class="col-md-12">
      <div class="card class-contact-info-settings">
        <form class="password-form" action="#" method="post">
          <div class="row">
            <div class="col-md-12">
              <h6 class="edit-profile-section654654"> Change Password </h6>
            </div>
            <div class="col-md-10">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels">Current Password</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="password" class="form-control" name="current_password" id="current_password">
                      </div>
                      <div class="input-group-append">
                        <div class="input-group-text password_visibility">
                          <span class="fas fa-eye"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels">New Password</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="password" class="form-control" name="new_password" id="new_password" minlength="6">
                      </div>
                      <div class="input-group-append">
                        <div class="input-group-text password_visibility">
                          <span class="fas fa-eye"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="edit-profile-labels">Confirm Password</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="6">
                      </div>
                      <div class="input-group-append">
                        <div class="input-group-text password_visibility">
                          <span class="fas fa-eye"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="float-sm-right">
                <button type="submit" name="button" class="post-add-update-post our-back-btn">Confirm</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div><!-- container-fluid -->
</section>
<!-- content -->
</div>
<!-- content-wrapper -->


<?php
include '../elements/footer.php';
?>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Croppie -->
<link rel="stylesheet" href="../../plugins/croppie/croppie.css">
<script src="../../plugins/croppie/croppie.min.js"></script>
<!-- Page specific script -->
<script type="text/javascript">

var user_id = '<?=$_SESSION['id']; ?>'

function updateProfile(){
  $.ajax({
    url:"../../assets/php/updateProfile.php",
    type: "POST",
    data:{
      first_name: $("#first_name").val(),
      last_name: $("#last_name").val(),
      email: $("#email").val(),
      mobile: $("#mobile").val(),
      update: "profile",
    },
    success:function(data)
    {
      console.log(data);;
      if(data == "success"){
        swal("Success!", "Profile updated!", "success")

      }else if(data == "email"){
        swal("Error!", "Email ID is already in use by another user!", "error");
        $("#email").focus();
      }else {
        swal("Error!", "An error occurred, please try again!", "error");
      }
    }
  });
}


function updatePassword(){
  $.ajax({
    url:"../../assets/php/updateProfile.php",
    type: "POST",
    data:{
      old_password: $("#current_password").val(),
      new_password: $("#confirm_password").val(),
      update: "password",
    },
    success:function(data)
    {
      console.log(data);;
      if(data == "success"){
        swal("Success!", "Password updated!", "success")

      }else if(data == "password"){
        swal("Error!", "Your current password is incorrect!", "error");
        $("#email").focus();
      }else {
        swal("Error!", "An error occurred, please try again!", "error");
      }
    }
  });
}

$( document ).ready(function() {

  var image_crop;

  $('.profile-form').validate({
    submitHandler: function () {
      updateProfile();
    },
    rules: {
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      email: {
        email: true,
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


  $('.password-form').validate({
    submitHandler: function () {
      updatePassword();
    },
    rules: {
      current_password: {
        required: true
      },
      new_password: {
        required: true,
        minlength : 6,
      },
      confirm_password: {
        required: true,
        minlength : 6,
        equalTo : "#new_password"
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

  $("#removePicture").on("click", function(){
    $('#modal-sm').modal('hide');
    $('.loader').fadeIn();
    $.ajax({
      url:"../../assets/php/removePicture.php",
      type: "POST",
      data:{
        user_id : user_id
      },
      success:function(data)
      {
        console.log(data);;
        if(data == "success"){
          $('.loader').fadeOut();
          swal("Success!", "Profile picture removed!", "success")
          .then((value) => {
            $(".profile-user-img").attr("src", "../../dist/img/avatar0.png?"+Date.now());
            $(".profile-picture-heading").attr("src", "../../dist/img/avatar0.png?"+Date.now());
          });
        }else {
          $('.loader').fadeOut();
          swal("Error!", "An error occurred, please try again!", "error");
        }
      }
    });
  });

  $(".profile-user-img").on('click', function(){
    $("#smallModal").trigger('click');
  });


  $("#changePicture").on('click', function(){
    $('#modal-sm').modal('hide');
    $('#upload').val('');
    $("#upload").trigger('click');
    image_crop = $('#image_demo').croppie({
      viewport: {
        width: 200,
        height: 200,
        type:'circle'
      },
      boundary:{
        width: 300,
        height: 300
      }
    });
  });


  /// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
  $('#upload').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      image_crop.croppie('bind', {
        url: event.target.result,
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });


  $('.crop_image').click(function(event){
    image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $('.loader').fadeIn();
      $.ajax({
        url:"../../assets/php/uploadProfileImage.php",
        type: "POST",
        data:{
          "image": response,
          "user_id": user_id
        },
        success:function(data)
        {
          console.log(data);
          $('#upload').val('');
          image_crop.croppie('destroy');
          $('#uploadimageModal').modal('hide');
          obj = jQuery.parseJSON(data);
          if(obj[0].status == "success"){
            $('.loader').fadeOut();
            swal("Success!", "Profile picture updated!", "success")
            .then((value) => {
              $(".profile-user-img").attr("src", "../../assets/profiles/"+obj[0].target+"?"+Date.now());
              $(".profile-picture-heading").attr("src", "../../assets/profiles/"+obj[0].target+"?"+Date.now());
            });
          }else {
            $('.loader').fadeOut();
            swal("Error!", "An error occurred, please try again!", "error");
          }
        }
      });
    })
  });

});
</script>
<?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
