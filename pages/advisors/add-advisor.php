<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  include '../../assets/php/connection.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/advisor-breadcum.png"> Advisors </a></li>
              <li class="breadcrumb-item active text-custom-2"> Profile creation </li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

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

    <section class="content">
      <div class="container-fluid">
        <form id="advisor-form" method="post">
          <div class="card p-3"><br>
            <div class="row">
              <div class="col-md-4 com-sm-12" style="justify-content: center; align-items: center; margin-bottom: 20px; margin-top: 20px;">
                <center>
                  <img class="profile-user-img profile-img-image74 rounded-circle"
                  src="../../dist/img/avatar0.png"
                  onclick="$('.picture-error').fadeOut();"
                  alt="User profile picture"><br>
                  <input  type="file" accept="image/*" id="upload" value="Choose a file" hidden>
                  <input type="hidden" id="imagebase64" name="imagebase64" hidden><br>
                  <small class="error-span picture-error">Please upload a profile picture</small>
                </center>
              </div>
              <div class="col-md-8 com-sm-12">
                <div class="form-group">
                  <label class="edit-profile-labels">Studio Name</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="text" class="form-control" name="studio_name" id="studio_name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="edit-profile-labels">Interests</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fas fa-star"></span>
                      </div>
                    </div>
                    <div class="custom-file">
                      <input type="text" class="form-control" name="interests" id="interests">
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
                      <input type="email" class="form-control" name="email" id="email">
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
                      <input type="phone" class="form-control" name="phone" id="phone">
                    </div>
                  </div>
                </div>
              </div>
            </div><br>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="edit-profile-labels">Description:</label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="edit-profile-labels">About:</label>
                  <textarea class="form-control" name="about" id="about" rows="5"></textarea>
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
                  />
                </div>
                <div id="map"></div>
                <small class="error-span location-error">Please select a location</small>
              </div>
            </div><br><br>

            <div class="row">
              <div class="col-md-6 col-sm-12" style="margin-bottom: 20px;">
                <label class="edit-profile-labels">Services:</label>
              </div>
              <div class="col-md-6 col-sm-12" style="margin-bottom: 20px;">
                <button type="button" name="button" class="btn btn-info float-right" onclick="addService();">+ Add Service</button>
              </div>
              <div class="col-12 service-cards">
              </div>
            </div>

            <div class="row">
              <div class="col-12"><br><br>
                <button type="submit" name="button" class="btn btn-primary float-right" onclick="additionalValidation();">Add Advisor</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->


  <?php


  include '../elements/footer.php';
  ?>
  <link href="../../plugins/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
  <link href="../../plugins/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
  <script src="../../plugins/filer/js/jquery.filer.min.js"></script>
  <!-- jquery-validation -->
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- Croppie -->
  <link rel="stylesheet" href="../../plugins/croppie/croppie.css">
  <script src="../../plugins/croppie/croppie.min.js"></script>
  <!-- Map -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?=MAP_API ?>&callback=initAutocomplete&libraries=places&v=weekly" async></script>
  <script type="text/javascript">

  var timestamp = '<?php echo time(); ?>';
  var folderName = 'Advisor/' + timestamp;
  console.log(folderName);
  function addService(){
    var filerID = Math.floor(Date.now()) + "-service";
    var serviceCardDetail = '<div class="card card-info serviceDetailCard"><div class="card-header"><h3 class="card-title">Service Details</h3><div class="card-tools"> <button type="button" class="btn btn-tool" onclick="$(this).closest('+" '"+'.card '+"' "+').remove();"> <i class="fas fa-times"></i> </button></div></div><div class="card-body"><div class="row"><div class="col-12"><div class="form-group"> <label for="certificateType" class="edit-profile-labels">Service Title</label> <input type="text" class="form-control serviceTitle" name="serviceTitle"></div><div class="form-group"> <label class="edit-profile-labels">Image</label> <input type="text" id="'+filerID+'-list" class="attachmentList" hidden> <input id="'+filerID+'" type="file" name="files" class="serviceAttachments"><small class="error-span attachment-error">Please attach a picture</small></div></div></div></div></div>'
    $(".service-cards").append(serviceCardDetail);
    initFiler(filerID);
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
      url: '../../assets/php/add_advisor.php',
      data: {
        profile_picture: $('#imagebase64').val(),
        studio_name: $('#studio_name').val(),
        interests: $('#interests').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
        description: $('#description').val(),
        about: $('#about').val(),
        location: $('#pac-input').val(),
        services: services,
        folder_name: timestamp,
      },
      success: function(response) {
        console.log(response);
        if ( response.trim() == "success" ){
          swal("Success!", "Advisor added Successfully!", "success")
          .then((value) => {
            location.reload();
          });
        }else{
          swal("Error!", "An error occurred, please try again!", "error");
        }
      }
    });

  }

  function additionalValidation(){
    var response = true;
    if($("#imagebase64").val() == ""){
      $(".picture-error").fadeIn();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      response = false;
    }
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

    $(".profile-img-image74").on('click', function(){
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
        $('#uploadimageModal').modal('hide');
        $(".profile-img-image74").attr("src", response);
        $("#imagebase64").val(response);
      })
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
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
