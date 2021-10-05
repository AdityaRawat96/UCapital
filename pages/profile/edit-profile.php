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

                <div class="col-md-12">
                  <!-- Profile Image -->
                  <img class="profile-user-img profile-img-image74 rounded-circle"
                  src="
                  <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
                    if(filter_var($_SESSION['profile_picture'], FILTER_VALIDATE_URL)){
                      echo trim($_SESSION['profile_picture']);
                    }else{
                      echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
                    }
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

                <!--
                <div class="col-md-2">
                <div class="float-sm-right">
                <a href="edit-profile.html" class="eidt-profile-btn our-border-btn"> <i class="fas fa-pencil-alt"></i> Edit Profile </a>
              </div>
            </div>

          -->

        </div>

        <?php
        if($_SESSION['user_type'] != 2){
          ?>
          <div class="col-md-12">
            <form class="profile-form" action="#" method="post">
              <div class="row">
                <div class="col-md-12"><br><br>
                  <h5><b>Edit your information</b></h5><br>
                </div>
                <div class="col-md-12">
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

                    <?php
                    $currentUserID = $_SESSION['id'];
                    $resultUser= mysqli_query($con, " SELECT *  FROM users WHERE id='$currentUserID'")
                    or die('An error occurred! Unable to process this request. '. mysqli_error($con));
                    if(mysqli_num_rows($resultUser) > 0 ){
                      while($rowUser = mysqli_fetch_array($resultUser)){
                        ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="edit-profile-labels"> Job Title <i style="color: #21D59B;">&nbsp; Optional</i> </label>
                            <div class="input-group">
                              <input type="text" class="input-setting987" value="<?=$rowUser['role']?>" name="role" id="role">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="edit-profile-labels"> Country </label>
                            <div class="input-group">
                              <input type="text" class="input-setting987" value="<?=$rowUser['country']?>" name="country" id="country">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="edit-profile-labels"> City </label>
                            <div class="input-group">
                              <input type="text" class="input-setting987" value="<?=$rowUser['city']?>" name="city" id="city">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="edit-profile-labels"> Website <i style="color: #21D59B;">&nbsp; Optional</i> </label>
                            <div class="input-group">
                              <input type="text" class="input-setting987" value="<?=$rowUser['website']?>" name="website" id="website">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="edit-profile-labels"> Company <i style="color: #21D59B;">&nbsp; Optional</i> </label>
                            <div class="input-group">
                              <input type="text" class="input-setting987" value="<?=$rowUser['company']?>" name="company" id="company">
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                    }
                    ?>

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="float-sm-left">
                    <button type="submit" name="button" class="post-add-update-post our-back-btn">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>

        <?php
      }
      ?>



      <div class="col-md-12">
        <div class="card class-contact-info-settings">
          <form class="password-form" action="#" method="post">
            <div class="row">
              <div class="col-md-12">
                <h5><b>Edit your Password</b></h5><br>
              </div>
              <div class="col-md-12">
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
                <div class="float-sm-left">
                  <button type="submit" name="button" class="post-add-update-post our-back-btn">Confirm</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php

      if($_SESSION['user_type'] == 2){

        $result= mysqli_query($con, " SELECT *  FROM advisors WHERE user_id='$user_id'")
        or die('An error occurred! Unable to process this request. '. mysqli_error($con));
        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){
            $advisor_id = $row['id'];
            $location = $row['location'];
            $services = $row['services'];
            $folder_name = $row['folder_name'];
            ?>
            <div class="col-md-12">
              <form id="advisor-form" method="post">
                <div class="card class-contact-info-settings">
                  <div class="row">
                    <div class="col-md-12">
                      <h6 class="edit-profile-section654654"> Edit Advisor Information </h6>
                    </div>
                    <div class="col-md-10">
                      <div class="row">
                        <div class="col-md-6 com-sm-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">First Name</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?=$_SESSION['first_name']; ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 com-sm-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">Last Name</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?=$_SESSION['last_name']; ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 com-sm-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">Studio Name</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="text" class="form-control" name="studio_name" id="studio_name" value="<?=$row['studio_name']; ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 com-sm-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">Interests</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-star"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="text" class="form-control" name="interests" id="interests" value="<?=$row['interests']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="edit-profile-labels">Email</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-at"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="email" class="form-control" name="email" id="email" value="<?=$row['email']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="edit-profile-labels">Phone</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-phone-alt"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="phone" class="form-control" name="phone" id="phone" value="<?=$row['phone']; ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 com-sm-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">Job Role</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-user"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="text" class="form-control" name="role" id="role" value="<?=$row['role']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="edit-profile-labels">Company</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-building"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="text" class="form-control" name="company" id="company" value="<?=$row['company']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="edit-profile-labels">Website</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <span class="fas fa-globe"></span>
                                </div>
                              </div>
                              <div class="custom-file">
                                <input type="text" class="form-control" name="website" id="website" value="<?=$row['website']; ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">Description:</label>
                            <textarea class="form-control" name="description" id="description" rows="3"><?=$row['description']; ?></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="edit-profile-labels">About:</label>
                            <textarea class="form-control" name="about" id="about" rows="5"><?=$row['about']; ?></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label class="edit-profile-labels">Location</label>
                          <div class="form-group">
                            <input
                            name="location"
                            onclick="$('.location-error').fadeOut();"
                            id="pac-input"
                            class="controls"
                            type="text"
                            placeholder="Location"
                            value="<?=$row['location']; ?>"
                            />
                          </div>
                          <div id="map"></div>
                          <small class="error-span location-error">Please select a location</small>
                        </div>
                        <div class="col-md-6 col-sm-12" style="margin-bottom: 20px;"><br><br><br>
                          <label class="edit-profile-labels">Services:</label>
                        </div>
                        <div class="col-md-6 col-sm-12" style="margin-bottom: 20px;"><br><br><br>
                          <button type="button" name="button" class="btn btn-info float-right" onclick="addService();">+ Add Service</button>
                        </div>
                        <div class="col-12 service-cards row">
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
            <?php
          }
        }
      }

      ?>


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
      role: $("#role").val(),
      country: $("#country").val(),
      city: $("#city").val(),
      website: $("#website").val(),
      company: $("#company").val(),
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
      phone: {
        required: true
      },
      country: {
        required: true
      },
      city: {
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
if($_SESSION['user_type'] == 2){
  ?>

  <link href="../../plugins/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
  <link href="../../plugins/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
  <script src="../../plugins/filer/js/jquery.filer.js"></script>
  <!-- Map -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?=MAP_API ?>&callback=initAutocomplete&libraries=places&v=weekly" async></script>
  <script type="text/javascript">

  var services = JSON.parse('<?=$services; ?>');
  var timestamp = '<?php echo time(); ?>';
  var folderName = 'Advisor/' + '<?=$folder_name ?>';

  $(document).ready(function(){
    for(items in services){
      var filerID = Math.floor(Date.now());
      var fileDetails = [];
      var fileAttachmentNames = [];
      var attachedFiles = services[items].image;
      var attashedFilesJSON = JSON.stringify(attachedFiles);

      var serviceCardDetail = '<div class="col-md-6 col-sm-12"><div class="card card-info serviceDetailCard"><div class="card-header"><h3 class="card-title">Service Details</h3><div class="card-tools"> <button type="button" class="btn btn-tool" onclick="$(this).closest('+" '"+'.card '+"' "+').remove();"> <i class="fas fa-times"></i> </button></div></div><div class="card-body"><div class="row"><div class="col-12"><div class="form-group"> <label for="certificateType" class="edit-profile-labels">Service Title</label> <input type="text" class="form-control serviceTitle" name="serviceTitle" value="'+services[items].title+'"></div><div class="form-group"> <label class="edit-profile-labels">Image</label> <input type="text" id="'+filerID+'-list" class="attachmentList" value='+"'"+attashedFilesJSON+"'"+' hidden> <input id="'+filerID+'" type="file" name="files" class="serviceAttachments"><small class="error-span attachment-error">Please attach a picture</small></div></div></div></div></div></div>'
      $(".service-cards").append(serviceCardDetail);

      for(af in attachedFiles){
        var req = new XMLHttpRequest();
        req.open('HEAD', '../../assets/uploads/' + folderName + '/' + attachedFiles[af], false);
        req.send();
        if(req.status==200){
          var fileDetail = {
            name: attachedFiles[af],
            file: '../../assets/uploads/' + folderName + '/' + attachedFiles[af],
            type: 'image/*',
            url: '../../assets/uploads/' + folderName + '/' + attachedFiles[af]
          }
          fileAttachmentNames.push(attachedFiles[af])
          fileDetails.push(fileDetail);
        }
      }
      addFiles(filerID, fileDetails, fileAttachmentNames);
    }
  });


  function addService(){
    var filerID = Math.floor(Date.now()) + "-service";
    var serviceCardDetail = '<div class="col-md-6 col-sm-12"><div class="card card-info serviceDetailCard"><div class="card-header"><h3 class="card-title">Service Details</h3><div class="card-tools"> <button type="button" class="btn btn-tool" onclick="$(this).closest('+" '"+'.card '+"' "+').remove();"> <i class="fas fa-times"></i> </button></div></div><div class="card-body"><div class="row"><div class="col-12"><div class="form-group"> <label for="certificateType" class="edit-profile-labels">Service Title</label> <input type="text" class="form-control serviceTitle" name="serviceTitle"></div><div class="form-group"> <label class="edit-profile-labels">Image</label> <input type="text" id="'+filerID+'-list" class="attachmentList" hidden> <input id="'+filerID+'" type="file" name="files" class="serviceAttachments"><small class="error-span attachment-error">Please attach a picture</small></div></div></div></div></div></div>'
    $(".service-cards").append(serviceCardDetail);
    initFiler(filerID);
  }


  function addFiles(filerID, fileDetails, fileAttachmentNames){
    var uploadedFiles = fileAttachmentNames;
    $("#"+filerID).filer({
      limit: null,
      maxSize: null,
      extensions: null,
      changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
      showThumbs: true,
      theme: "dragdropbox",
      files: fileDetails,
      templates: {
        box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
        item: '<li class="jFiler-item">\
        <div class="jFiler-item-container">\
        <div class="jFiler-item-inner">\
        <div class="jFiler-item-thumb">\
        <div class="jFiler-item-status"></div>\
        <div class="jFiler-item-thumb-overlay">\
        <div class="jFiler-item-info">\
        <div style="display:table-cell;vertical-align: middle;">\
        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
        <span class="jFiler-item-others">{{fi-size2}}</span>\
        </div>\
        </div>\
        </div>\
        {{fi-image}}\
        </div>\
        <div class="jFiler-item-assets jFiler-row">\
        <ul class="list-inline pull-left">\
        <li>{{fi-progressBar}}</li>\
        </ul>\
        <ul class="list-inline pull-right">\
        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
        </ul>\
        </div>\
        </div>\
        </div>\
        </li>',
        itemAppend: '<li class="jFiler-item">\
        <div class="jFiler-item-container">\
        <div class="jFiler-item-inner">\
        <div class="jFiler-item-thumb">\
        <div class="jFiler-item-status"></div>\
        <div class="jFiler-item-thumb-overlay">\
        <div class="jFiler-item-info">\
        <div style="display:table-cell;vertical-align: middle;">\
        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
        <span class="jFiler-item-others">{{fi-size2}}</span>\
        </div>\
        </div>\
        </div>\
        {{fi-image}}\
        </div>\
        <div class="jFiler-item-assets jFiler-row">\
        <ul class="list-inline pull-left">\
        <li><span class="downloadButton" id="{{fi-name}}" onclick="downloadAttachment(this)" style="color: #4285F4;"><i class="fas fa-2x fa-arrow-circle-down"></i></span></li>\
        </ul>\
        <ul class="list-inline pull-right">\
        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
        </ul>\
        </div>\
        </div>\
        </div>\
        </li>',
        progressBar: '<div class="bar"></div>',
        itemAppendToEnd: false,
        canvasImage: true,
        removeConfirmation: true,
        _selectors: {
          list: '.jFiler-items-list',
          item: '.jFiler-item',
          progressBar: '.bar',
          remove: '.jFiler-item-trash-action'
        }
      },
      dragDrop: {
        dragEnter: null,
        dragLeave: null,
        drop: null,
        dragContainer: null,
      },
      uploadFile: {
        url: "../../plugins/filer/php/ajax_upload_file.php",
        data: {
          folderName: folderName,
        },
        type: 'POST',
        enctype: 'multipart/form-data',
        synchron: true,
        beforeSend: function(){},
        success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
          var parent = itemEl.find(".jFiler-jProgressBar").parent(),
          new_file_name = JSON.parse(data),
          filerKit = inputEl.prop("jFiler");
          filerKit.files_list[id].name = new_file_name;
          uploadedFiles.push(new_file_name);
          $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
          itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
          });
        },
        error: function(el){
          var parent = el.find(".jFiler-jProgressBar").parent();
          el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
          });
        },
        statusCode: null,
        onProgress: null,
        onComplete: null
      },
      allowDuplicates: false,
      clipBoardPaste: true,
      excludeName: null,
      beforeRender: null,
      afterRender: null,
      beforeShow: null,
      beforeSelect: null,
      onSelect: null,
      afterShow: null,
      onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
        var filerKit = inputEl.prop("jFiler"),
        file_name = filerKit.files_list[id].name;
        if(file_name == undefined){
          file_name = filerKit.files_list[id].file.name;
        }
        uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
          return value != file_name;
        });
        $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
        $.post('../../plugins/filer/php/ajax_remove_file.php?folderName='+folderName, {file: file_name});
      },
      onEmpty: null,
      options: null,
      dialogs: {
        alert: function(text) {
          return alert(text);
        },
        confirm: function (text, callback) {
          confirm(text) ? callback() : null;
        }
      },
      captions: {
        button: "Choose Files",
        feedback: "Choose files To Upload",
        feedback2: "files were chosen",
        drop: "Drop file here to Upload",
        removeConfirmation: "Are you sure you want to remove this file?",
        errors: {
          filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
          filesType: "Only Images are allowed to be uploaded.",
          filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
          filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
        }
      }
    });
  }

  function initFiler(filerID){
    var uploadedFiles = [];
    $("#"+filerID).filer({
      limit: 1,
      maxSize: 5,
      extensions: ["jpg", "png", "gif"],
      changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
      showThumbs: true,
      theme: "dragdropbox",
      templates: {
        box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
        item: '<li class="jFiler-item">\
        <div class="jFiler-item-container">\
        <div class="jFiler-item-inner">\
        <div class="jFiler-item-thumb">\
        <div class="jFiler-item-status"></div>\
        <div class="jFiler-item-thumb-overlay">\
        <div class="jFiler-item-info">\
        <div style="display:table-cell;vertical-align: middle;">\
        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
        <span class="jFiler-item-others">{{fi-size2}}</span>\
        </div>\
        </div>\
        </div>\
        {{fi-image}}\
        </div>\
        <div class="jFiler-item-assets jFiler-row">\
        <ul class="list-inline pull-left">\
        <li>{{fi-progressBar}}</li>\
        </ul>\
        <ul class="list-inline pull-right">\
        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
        </ul>\
        </div>\
        </div>\
        </div>\
        </li>',
        itemAppend: '<li class="jFiler-item">\
        <div class="jFiler-item-container">\
        <div class="jFiler-item-inner">\
        <div class="jFiler-item-thumb">\
        <div class="jFiler-item-status"></div>\
        <div class="jFiler-item-thumb-overlay">\
        <div class="jFiler-item-info">\
        <div style="display:table-cell;vertical-align: middle;">\
        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
        <span class="jFiler-item-others">{{fi-size2}}</span>\
        </div>\
        </div>\
        </div>\
        {{fi-image}}\
        </div>\
        <div class="jFiler-item-assets jFiler-row">\
        <ul class="list-inline pull-left">\
        <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
        </ul>\
        <ul class="list-inline pull-right">\
        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
        </ul>\
        </div>\
        </div>\
        </div>\
        </li>',
        progressBar: '<div class="bar"></div>',
        itemAppendToEnd: false,
        canvasImage: true,
        removeConfirmation: true,
        _selectors: {
          list: '.jFiler-items-list',
          item: '.jFiler-item',
          progressBar: '.bar',
          remove: '.jFiler-item-trash-action'
        }
      },
      dragDrop: {
        dragEnter: null,
        dragLeave: null,
        drop: null,
        dragContainer: null,
      },
      uploadFile: {
        url: "../../plugins/filer/php/ajax_upload_file.php",
        data: {
          folderName: folderName,
        },
        type: 'POST',
        enctype: 'multipart/form-data',
        synchron: true,
        beforeSend: function(){},
        success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
          var parent = itemEl.find(".jFiler-jProgressBar").parent(),
          new_file_name = JSON.parse(data),
          filerKit = inputEl.prop("jFiler");
          filerKit.files_list[id].name = new_file_name;
          uploadedFiles.push(new_file_name);
          $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
          itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
          });
        },
        error: function(el){
          var parent = el.find(".jFiler-jProgressBar").parent();
          el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
          });
        },
        statusCode: null,
        onProgress: null,
        onComplete: null
      },
      files: null,
      addMore: false,
      allowDuplicates: true,
      clipBoardPaste: true,
      excludeName: null,
      beforeRender: null,
      afterRender: null,
      beforeShow: null,
      beforeSelect: null,
      onSelect: null,
      afterShow: null,
      onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
        var filerKit = inputEl.prop("jFiler"),
        file_name = filerKit.files_list[id].name;
        uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
          return value != file_name;
        });
        $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
        $("#"+filerID).val("");
        $.post('../../plugins/filer/php/ajax_remove_file.php?folderName='+folderName, {file: file_name});
      },
      onEmpty: null,
      options: null,
      dialogs: {
        alert: function(text) {
          return alert(text);
        },
        confirm: function (text, callback) {
          confirm(text) ? callback() : null;
        }
      },
      captions: {
        button: "Choose Files",
        feedback: "Choose files To Upload",
        feedback2: "files were chosen",
        drop: "Drop file here to Upload",
        removeConfirmation: "Are you sure you want to remove this file?",
        errors: {
          filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
          filesType: "Only Images are allowed to be uploaded.",
          filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
          filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
        }
      }
    });
  }

  function addAdvisor(){
    var cards = document.getElementsByClassName('serviceDetailCard');
    var services = [];
    for(var i = 0; i < cards.length; i++){
      var service = {
        title: cards[i].getElementsByClassName('serviceTitle')[0].value ? cards[i].getElementsByClassName('serviceTitle')[0].value : "",
        image: cards[i].getElementsByClassName('attachmentList')[0].value ? JSON.parse(cards[i].getElementsByClassName('attachmentList')[0].value) : "",
      }
      services.push(service);
    }

    $.ajax({
      type: 'POST',
      url: '../../assets/php/update_advisor.php',
      data: {
        advisor_id : '<?=$advisor_id; ?>',
        first_name: $("#first_name").val(),
        last_name: $("#last_name").val(),
        studio_name: $('#studio_name').val(),
        interests: $('#interests').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
        role: $('#role').val(),
        company: $('#company').val(),
        website: $('#website').val(),
        description: $('#description').val(),
        about: $('#about').val(),
        location: $('#pac-input').val(),
        services: services,
        folder_name: timestamp,
      },
      success: function(response) {
        console.log(response);
        if ( response.trim() == "success" ){
          swal("Success!", "Advisor profile updated Successfully!", "success")
          .then((value) => {
            location.reload();
          });
        }else if(response.trim() == "email"){
          swal("Error!", "Email ID is already in use by another user!", "error");
          $("#email").focus();
        }else{
          swal("Error!", "An error occurred, please try again!", "error");
        }
      }
    });

  }

  function additionalValidation(){
    var response = true;
    if($("#pac-input").val() == ""){
      $(".location-error").fadeIn();
      response = false;
    }
    var cards = document.getElementsByClassName('serviceDetailCard');
    for(var i = 0; i < cards.length; i++){
      if(cards[i].getElementsByClassName('attachmentList')[0].value == ""){
        cards[i].getElementsByClassName('attachment-error')[0].style.display="block";
        response = false;
      }
      if(cards[i].getElementsByClassName('serviceTitle')[0].value == ""){
        response = false;
      }
    }
    return response;
  }

  $(document).ready(function(){

    //Addition Form - PNR
    $('#advisor-form').validate({
      submitHandler: function () {
        if(additionalValidation()){
          addAdvisor();
        }
      },
      rules: {
        studio_name: {
          required: true
        },
        interests: {
          required: true
        },
        email:{
          email: true,
          required: true
        },
        phone: {
          required: true
        },
        description: {
          required: true
        },
        about: {
          required: true
        },
        serviceTitle: {
          required: true
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

  })


  //maps
  function initAutocomplete() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 42.102773, lng: 13.93627 },
      zoom: 10,
      mapTypeId: "roadmap",
    });
    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
      searchBox.setBounds(map.getBounds());
    });
    let markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
      const places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }
      // Clear out the old markers.
      markers.forEach((marker) => {
        marker.setMap(null);
      });
      markers = [];
      // For each place, get the icon, name and location.
      const bounds = new google.maps.LatLngBounds();
      places.forEach((place) => {
        if (!place.geometry || !place.geometry.location) {
          console.log("Returned place contains no geometry");
          return;
        }
        const icon = {
          url: "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25),
        };
        // Create a marker for each place.
        markers.push(
          new google.maps.Marker({
            map,
            icon,
            title: place.name,
            position: place.geometry.location,
          })
        );

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });

    geocoder = new google.maps.Geocoder();
    geocoder.geocode( {address: "<?=$location; ?>"}, function(results, status)
    {
      if (status == google.maps.GeocoderStatus.OK)
      {
        map.setCenter(results[0].geometry.location);//center the map over the result
        //place a marker at the location
        var marker = new google.maps.Marker(
          {
            map: map,
            position: results[0].geometry.location
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }
    </script>
    <style media="screen">
    #map {
      height: 300px;
      width: 100%;
    }

    #description {
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
    }

    #infowindow-content .title {
      font-weight: bold;
    }

    #infowindow-content {
      display: none;
    }

    #map #infowindow-content {
      display: inline;
    }

    .pac-card {
      margin: 10px 10px 0 0;
      border-radius: 2px 0 0 2px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      outline: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      background-color: #fff;
      font-family: Roboto;
    }

    #pac-container {
      padding-bottom: 12px;
      margin-right: 12px;
    }

    .pac-controls {
      display: inline-block;
      padding: 5px 11px;
    }

    .pac-controls label {
      font-family: Roboto;
      font-size: 13px;
      font-weight: 300;
    }

    #pac-input {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 400px;
      height: 30px;
      margin-top: 10px;
      border-radius: 5px;
    }

    #pac-input:focus {
      border-color: #4d90fe;
    }

    #title {
      color: #fff;
      background-color: #4d90fe;
      font-size: 25px;
      font-weight: 500;
      padding: 6px 12px;
    }

    #target {
      width: 345px;
    }
    </style>
    <?php
  }
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
