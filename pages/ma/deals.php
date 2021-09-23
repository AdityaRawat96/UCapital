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
              <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1"> <img src="../../dist/img/new/m-a-breadcum.svg"> M & A ></a></li>
              <li class="breadcrumb-item active text-custom-2"> Post Project </li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"><br>
            <h2 class="text-custom-2" style="color: #151A61;">Deal features</h2>
            <hr><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-12 deal-heading">
            <span>Choose deal side</span>
          </div>
          <div class="col-md-9 col-sm-12 input-container">
            <button type="button" name="button" class="btn btn-deal-custom">
              <input type="radio" name="deal_type" class="deal-radio deal_type" value="buy"> Buying
            </button>
            <button type="button" name="button" class="btn btn-deal-custom">
              <input type="radio" name="deal_type" class="deal-radio deal_type" value="sell"> Selling
            </button>
          </div>
        </div>
        <div class="offer_section">
          <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
              <span>Offer</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
              <button type="button" name="button" class="btn btn-deal-custom">
                <input type="radio" name="offer" class="deal-radio offer" value="asset"> Asset
              </button>
              <button type="button" name="button" class="btn btn-deal-custom">
                <input type="radio" name="offer" class="deal-radio offer" value="company"> Company
              </button>
            </div>
          </div>
        </div>
        <div class="company_type_section hidden_deal_container">
          <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
              <span>Type of company</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
              <select class="form-control offer_type_selector" name="company_type">
                <option value="" selected disabled>Choose type of company</option>
                <option value="Business Company">Business Company</option>
                <option value="Start Up">Start Up</option>
              </select>
            </div>
          </div>
        </div>
        <div class="asset_type_section hidden_deal_container">
          <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
              <span>Type of asset</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
              <select class="form-control offer_type_selector" name="asset_type">
                <option value="" selected disabled>Choose type of asset</option>
                <option value="Real Estate">Business Real Estate</option>
                <option value="NPE">NPE</option>
                <option value="Credits">Credits</option>
              </select>
            </div>
          </div>
        </div>


        <?php

        include 'deals/sell_asset_credits.php';
        include 'deals/sell_asset_npe.php';
        include 'deals/sell_asset_real_estate.php';
        include 'deals/sell_company_business_company.php';
        include 'deals/sell_company_start_up.php';

        include 'deals/buy_asset_credits.php';
        include 'deals/buy_asset_npe.php';
        include 'deals/buy_asset_real_estate.php';
        include 'deals/buy_company_business_company.php';
        include 'deals/buy_company_start_up.php';

        ?>


        <br><br>
        <div class="row">
          <div class="col-md-3 col-sm-12">
          </div>
          <div class="col-md-9 col-sm-12">
            <button type="submit" name="button" class="btn btn-success">Save and post your deal</button>
          </div>
        </div>

        <br><br><br><br><br><br>

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
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">

    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="../../plugins/filer/js/jquery.filer.min.js"></script>

    <script type="text/javascript">

    var folderTimestamp = '<?php echo time(); ?>';
    var folderName = 'MergerAcquisition/' + folderTimestamp;


    $(document).ready(function(){
      $('.ad-form').validate({
        submitHandler: function () {
          checkPicture();
        },
        rules: {
          action: {
            required: true
          },
          category: {
            required: true
          },
          assetType: {
            required: true
          },
          realestate: {
            required: true
          },
          value: {
            required: true,
            digits: true
          },
          companyType: {
            required: true
          },
          sector: {
            required: true
          },
          industry: {
            required: true
          },
          revenue: {
            required: true,
            digits: true
          },
          ebitda: {
            required: true,
            digits: true
          },
          financeStatus: {
            required: true
          },
          foundationYear: {
            required: true
          },
          location: {
            required: true
          },
          title: {
            required: true,
            maxlength: 62,
          },
          description: {
            required: true,
            maxlength: 124,
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




    function initFiler(filerID){

      var uploadedFiles = [];
      $("#"+filerID).filer({
        limit: 1,
        maxSize: 5,
        extensions: ["jpg", "jpeg", "png", "gif"],
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

    </script>


    <!-- company_sell -->
    <script type="text/javascript">
    var country_data;
    $(document).ready(function(){
      $.ajax({
        type: 'POST',
        url: "../../assets/php/getCountries.php",
        dataType: 'json',
        success: function(data) {
          country_data = data;
          $.each(country_data, function(index, element) {
            $('.hq_country').append($('<option>', {
              value: element.id,
              text: element.country
            }));
            $(".scalability_area").append($('<option>', {
              value: element.id,
              text: element.country
            }));
            $(".area_of_activity").append($('<option>', {
              value: element.id,
              text: element.country
            }));
          });
        }
      });

      $("body").on("change", ".hq_country", function(){
        loadCities($(this));
      });

      $(".add-location").on('click', function(){
        $(this).parent().parent().append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> </div>');
        $.each(country_data, function(index, element) {
          $('.hq_country').last().append($('<option>', {
            value: element.id,
            text: element.country
          }));
        });
      });

      $(".default_currency").on("change", function(){
        $(".span-currency-icon").html($(this).val());
      });

      $(".industry").each(function () {
        $(this).select2({
          maximumSelectionLength: 5,
          formatSelectionTooBig: function (limit) {
            return 'Only 5 selections are allowed!';
          }
        });
      });

      $(".area_of_activity").each(function(){
        $(this).select2();
      });

    });
    function loadCities(elem){
      $.ajax({
        type: 'POST',
        url: "../../assets/php/getCities.php",
        dataType: 'json',
        data: {
          country_id : elem.val()
        },
        success: function(data) {
          var city_selector = elem.siblings('.hq_city');
          city_selector.html("");
          city_selector.append($('<option>', {
            value: "",
            text: "Choose a city",
            selected: true,
            disabled: true
          }));
          $.each(data, function(index, element) {
            city_selector.append($('<option>', {
              value: element.city,
              text: element.city
            }));
          });
        }
      });
    }

    initFiler('adImage');
    </script>


    <!-- Real Estate Sell -->
    <script type="text/javascript">
    $(".re_type").change(function(){
      if($(this).find("option:selected").data("categories")){
        $(".re_type_category").html("");
        $(".re_type_category").append($('<option>', {
          value: "",
          text: "Choose type of " + $(this).val(),
          selected: true,
          disabled: true
        }));
        var category_array = $(this).find("option:selected").data("categories").split(",");
        for (var i = 0; i < category_array.length; i++) {
          $(".re_type_category").append($('<option>', {
            value: category_array[i].toLowerCase(),
            text: category_array[i]
          }));
        }
        $(".dynamic_category").html($(this).val());
        $(".re_type_category_container").fadeIn();
      }else{
        $(".re_type_category_container").fadeOut();
      }
    })
    </script>


    <!-- NPE Sell -->
    <script type="text/javascript">
    $(".product_type").change(function(){
      if($(this).find("option:selected").val() == "Secured"){
        $(".collateral_type_container").fadeIn();
      }else{
        $(".collateral_type_container").fadeOut();
      }
    })
    </script>

    <!-- Credits Sell -->
    <script type="text/javascript">
    $(".borrower_type").change(function(){
      if($(this).find("option:selected").data("categories")){
        $(".borrower_type_category").html("");
        $(".borrower_type_category").append($('<option>', {
          value: "",
          text: "Choose type of " + $(this).val(),
          selected: true,
          disabled: true
        }));
        var category_array = $(this).find("option:selected").data("categories").split(",");
        for (var i = 0; i < category_array.length; i++) {
          $(".borrower_type_category").append($('<option>', {
            value: category_array[i].toLowerCase(),
            text: category_array[i]
          }));
        }
        $(".dynamic_category_borrower").html($(this).val());
        $(".borrower_type_category_container").fadeIn();
      }else{
        $(".borrower_type_category_container").fadeOut();
      }
    })
    </script>
    <?php
  }else{
    ?>
    <script>window.open('../../','_self')</script>
    <?php
  }
  ?>
