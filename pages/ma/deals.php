<?php
session_start();
if (isset($_SESSION['email'])) {
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
        <form class="deal-form" action="#" method="post">

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
            <div class="col-md-9 col-sm-12 input-container input-group">
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
              <div class="col-md-9 col-sm-12 input-container input-group">
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
              <div class="col-md-9 col-sm-12 input-container input-group">
                <select class="form-control offer_type_selector company_type" name="company_type">
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
              <div class="col-md-9 col-sm-12 input-container input-group">
                <select class="form-control offer_type_selector asset_type" name="asset_type">
                  <option value="" selected disabled>Choose type of asset</option>
                  <option value="Real Estate">Real Estate</option>
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
    </form>

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


    $(document).ready(function() {
      $('.deal-form').validate({
        submitHandler: function() {
          validateAdditionalFields();
        },
        rules: {
          deal_type: {
            required: true
          },
          offer: {
            required: true
          },
          company_type: {
            required: true
          },
          asset_type: {
            required: true
          },
          startup_type: {
            required: true,
          },
          hq_country: {
            required: true,
          },
          subject: {
            required: true
          },
          foundation_year: {
            digits: true
          },
          default_currency: {
            required: true,
          },
          sector: {
            required: true
          },
          industry: {
            required: true
          },
          company_business: {
            required: true
          },
          area_of_activity: {
            required: true,
          },
          number_of_employees: {
            required: true
          },
          ebitda_margin: {
            required: true,
            max: 100,
            min: -100
          },
          general_description: {
            required: true
          },
          key_elements: {
            required: true,
          },
          investment_size: {
            required: true,
          },
          who_i_am: {
            required: true,
          },
          aum: {
            required: true,
          },
          number_of_investments: {
            required: true,
          },
          investment_amount: {
            required: true,
          },
          what_i_want: {
            required: true,
          },
          looking_for: {
            required: true,
          },
          re_type: {
            required: true,
          },
          re_type_category: {
            required: true,
          },
          asset_status: {
            required: true,
          },
          asset_condition: {
            required: true,
          },
          yearly_return: {
            required: true,
            min: 0,
            max: 100
          },
          construction_year: {
            required: true,
          },
          total_surface_area: {
            required: true,
            min: 0
          },
          vendor_type: {
            required: true,
          },
          npe_type: {
            required: true,
          },
          product_type: {
            required: true,
          },
          collateral_type: {
            required: true,
          },
          lien_position: {
            required: true,
          },
          judicialized: {
            required: true,
          },
          borrower_details: {
            required: true,
          },
          ratio: {
            required: true,
          },
          borrower_type: {
            required: true,
          },
          borrower_type_category: {
            required: true,
          },
          credit_type: {
            required: true,
          },
          typology: {
            required: true,
          },
          maturity: {
            required: true,
          },
          ratio_ob: {
            min: 0,
            max: 100
          },
          rate: {
            required: true,
          },
          discounted_ratio: {
            min: 0,
            max: 100
          },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });

    });

    function validateAdditionalFields() {
      var all_validated = true;
      $(".input-group-multiple-radio:visible").each(function() {
        if ($(this).find("input[type='radio']:checked").length == 0) {
          if ($(this).find("small").length == 0) {
            $(this).append("<small style='color: red'>Please select any one option</small>");
            all_validated = false;
          }
          $([document.documentElement, document.body]).animate({
            scrollTop: $(this).offset().top
          }, 0);
        } else {
          if ($(this).find("small").length == 0) {
            var input_parent = $(this).find("input[type='radio']:checked").parent().parent().parent();
            if (input_parent.find("input[type='number']").val() == "" || input_parent.find("option:selected").val() == "") {
              $(this).append("<small style='color: red'>This field is required</small>");
              all_validated = false;
              $([document.documentElement, document.body]).animate({
                scrollTop: $(this).offset().top
              }, 0);
            }
          }
        }
      });
      if (all_validated) {
        insertDealData();
      }
    }



    function initFiler(filerID) {

      var uploadedFiles = [];
      $("." + filerID).filer({
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
          beforeSend: function() {},
          success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id) {
            var parent = itemEl.find(".jFiler-jProgressBar").parent(),
              new_file_name = JSON.parse(data),
              filerKit = inputEl.prop("jFiler");
            filerKit.files_list[id].name = new_file_name;
            uploadedFiles.push(new_file_name);
            $("." + filerID + "-list").val(folderName + "/" + new_file_name)
            itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function() {
              $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
            });
          },
          error: function(el) {
            var parent = el.find(".jFiler-jProgressBar").parent();
            el.find(".jFiler-jProgressBar").fadeOut("slow", function() {
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
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl) {
          var filerKit = inputEl.prop("jFiler"),
            file_name = filerKit.files_list[id].name;
          uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
            return value != file_name;
          });
          $("." + filerID + "-list").val("")
          $.post('../../plugins/filer/php/ajax_remove_file.php?folderName=' + folderName, {
            file: file_name
          });
        },
        onEmpty: null,
        options: null,
        dialogs: {
          alert: function(text) {
            return alert(text);
          },
          confirm: function(text, callback) {
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
    $(document).ready(function() {
      $.ajax({
        type: 'POST',
        url: "../../assets/php/getCountries.php",
        dataType: 'json',
        success: function(data) {
          country_data = data.reduce(function(result, current) {
            result[current.area] = result[current.area] || [];
            result[current.area].push(current);
            return result;
          }, {});
          var keys = Object.keys(country_data).forEach(key => {
            if (key != "null") {
              $('.hq_country').append('<optgroup label="' + key + '">');
              $('.scalability_area').append('<optgroup label="' + key + '">');
              $('.area_of_activity').append('<optgroup label="' + key + '">');

              $.each(country_data[key], function(index, element) {
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

                if (index === country_data[key].length - 1) {
                  $('.hq_country').append('</optgroup>');
                  $('.scalability_area').append('</optgroup>');
                  $('.area_of_activity').append('</optgroup>');
                }
              });
            } else {
              $('.hq_country').append($('<option>', {
                value: "0",
                text: "All"
              }));
              $(".scalability_area").append($('<option>', {
                value: 0,
                text: "All"
              }));
              $(".area_of_activity").append($('<option>', {
                value: 0,
                text: "All"
              }));
            }

          });
        }
      });

      $("body").on("change", ".hq_country", function() {
        loadCities($(this));
      });

      $(".location_holder").on("click", ".btn-location-remove", function() {
        $(this).parent().remove();
      });

      $(".add-location").on('click', function() {
        var deal_type = $(".deal_type:checked").val();
        var current_location_container = $(this).parent().parent();
        if (deal_type == "sell") {
          current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country bc_hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city bc_hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
        } else {
          current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country bc_hq_country_buy" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city bc_hq_city_buy" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
        }

        var keys = Object.keys(country_data).forEach(key => {
          if (key != "null") {
            $('.hq_country').last().append('<optgroup label="' + key + '">');
            $.each(country_data[key], function(index, element) {
              $('.hq_country').last().append($('<option>', {
                value: element.id,
                text: element.country
              }));
            });
            $('.hq_country').last().append('</optgroup>');
          } else {
            $('.hq_country').last().append($('<option>', {
              value: "0",
              text: "ALL"
            }));
          }
        });
      });

      $(".industry").each(function() {
        $(this).select2({
          maximumSelectionLength: 5,
          formatSelectionTooBig: function(limit) {
            return 'Only 5 selections are allowed!';
          }
        });
      });

      $(".area_of_activity").each(function() {
        $(this).select2();
      });

      $(".npe_type").each(function() {
        $(this).select2();
      });
      $(".npe_product_type").each(function() {
        $(this).select2();
      });
      $(".npe_type_buy").each(function() {
        $(this).select2();
      });
      $(".npe_product_type_buy").each(function() {
        $(this).select2();
      });

      $(".input-group-multiple-radio").on("click", "input", function() {
        $(this).parent().parent().parent().parent().find("small").remove();
        $(this).parent().parent().find("input[type=radio]").prop("checked", true);
      });
      $(".input-group-multiple-radio").on("click", "select", function() {
        $(this).parent().parent().parent().parent().find("small").remove();
        $(this).parent().parent().find("input[type=radio]").prop("checked", true);
      });
    });

    function loadCities(elem) {
      $.ajax({
        type: 'POST',
        url: "../../assets/php/getCities.php",
        dataType: 'json',
        data: {
          country_id: elem.val()
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

    initFiler('sell_bc_image');
    initFiler('sell_startup_image');
    initFiler('sell_re_image');
    initFiler('buy_bc_image');
    initFiler('buy_startup_image');
  </script>

  <!-- Real Estate Sell -->
  <script type="text/javascript">
    $(".re_type").change(function() {
      if ($(this).find("option:selected").data("categories")) {
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
      } else {
        $(".re_type_category_container").fadeOut();
      }
    })
  </script>


  <!-- NPE Sell -->
  <script type="text/javascript">
    $(".product_type").change(function() {
      if ($(this).find("option:selected").val() == "Secured") {
        $(".collateral_type_container").fadeIn();
      } else {
        $(".collateral_type_container").fadeOut();
      }
    })
  </script>

  <!-- Credits Sell -->
  <script type="text/javascript">
    $(".borrower_type").change(function() {
      if ($(this).find("option:selected").data("categories")) {
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
      } else {
        $(".borrower_type_category_container").fadeOut();
      }
    })
  </script>
  <script>
    function insertDealData() {
      insertData = {};
      var deal_type = $(".deal_type:checked").val();
      if (deal_type == "buy") {
        var offer = $(".offer:checked").val();
        if (offer == "asset") {
          var asset_type = $(".asset_type").val();
          if (asset_type === "Real Estate") {
            insertData = getBuyRealEstateData();
          } else if (asset_type === "NPE") {
            insertData = getBuyNPEData();
          } else if (asset_type === "Credits") {
            insertData = getBuyCreditData();
          }
        } else if (offer == "company") {
          console.log("company");
          var asset_type = $(".company_type").val();
          if (asset_type == "Business Company") {
            insertData = getBuyBusinessCompanyData();
          } else {
            insertData = getBuyStartUpData();
          }
        }
      } else if (deal_type == "sell") {
        var offer = $(".offer:checked").val();
        if (offer == "asset") {
          var asset_type = $(".asset_type").val();
          if (asset_type === "Real Estate") {
            insertData = getSellRealEstateData();
          } else if (asset_type === "NPE") {
            insertData = getSellNPEData();
          } else if (asset_type === "Credits") {
            insertData = getSellCreditData();
          }
        } else if (offer == "company") {
          var asset_type = $(".company_type").val();
          if (asset_type == "Business Company") {
            insertData = getSellBusinessCompanyData();
          } else {
            insertData = getSellStartUpData();
          }
        }
      }

      insertData["asset_type"] = asset_type;
      insertData["offer"] = offer;
      insertData["deal_type"] = deal_type;

      console.log(insertData);

      $.ajax({
        type: 'POST',
        url: '../../assets/php/insertDeal.php',
        data: {
          dealData: insertData
        },
        success: function(data) {
          console.log(data);
          if (data.trim() == "success") {
            swal("Success!", "Deal added!", "success")
              .then((value) => {
                location.reload();
              });
          } else {
            swal("Error!", "An unexpected error occurred, please try again!", "error");
          }
        }
      });

    }

    function getBuyRealEstateData() {
      response = {};
      response['re_type'] = $(".re_type_buy").val();
      response['re_type_category'] = $(".re_type_category_buy").val();
      response['re_deal_subject'] = $(".re_deal_subject_buy").val();
      response['re_asset_status'] = $(".re_asset_status_buy").val();
      response['re_condition_status'] = $(".re_condition_status_buy").val();
      response['re_surface_area'] = $(".re_surface_area_buy").val();
      response['re_hq_country'] = $(".re_hq_country_buy option:selected").text();
      response['re_hq_city'] = $(".re_hq_city_buy").val();
      response['default_currency'] = $(".re_default_currency_buy").val();
      response['re_asset_value'] = $(".re_asset_value_buy:checked").val();
      if ($(".re_asset_value_buy:checked").val() === "undisclosed") {
        console.log("undisclosed")
      } else if ($(".re_asset_value_buy:checked").val() === "fixed") {
        console.log("fixed");
        console.log($(".re_asset_value_val_buy").val());
        response['re_asset_value_min'] = $(".re_asset_value_val_buy").val();
        response['re_asset_value_max'] = $(".re_asset_value_val_buy").val();
      } else if ($(".re_asset_value_buy:checked").val() === "range") {
        assetVal = $(".re_asset_value_sel_buy").val();
        index = assetVal.lastIndexOf("|");
        response['re_asset_value_min'] = assetVal.substring(0, index);
        response['re_asset_value_max'] = assetVal.substring(index + 1);
      }
      response['re_who_i_am'] = $(".re_who_i_am_buy").val();
      response['re_aum'] = $(".re_aum_buy").val();
      response['re_general_description'] = $(".re_general_description_buy").val();
      return response;
    }

    function getBuyNPEData() {
      response = {};
      npe_type = "";
      isNpeTypeSetted = false;
      $(".npe_type_buy option:checked").each(function() {
        npe_type += $(this).val() + ",";
        isNpeTypeSetted = true;
      });
      if (isNpeTypeSetted)
        response['npe_type'] = npe_type.substring(0, npe_type.length - 1);

      product_type = "";
      isProductTypeSetted = false;
      $(".npe_product_type_buy option:checked").each(function() {
        product_type += $(this).val() + ",";
        isProductTypeSetted = true;
      });
      if (isProductTypeSetted)
        response['npe_product_type'] = product_type.substring(0, product_type.length - 1);

      response['npe_hq_country'] = $(".npe_hq_country_buy option:selected").text();
      response['npe_hq_city'] = $(".npe_hq_city_buy").val();
      response['npe_description'] = $(".npe_description_buy").val();
      response['npe_default_currency'] = $(".npe_default_currency_buy").val();
      response['npe_value'] = $(".npe_value_buy:checked").val();
      if ($(".npe_value_buy:checked").val() === "undisclosed") {} else if ($(".npe_value_buy:checked").val() === "fixed") {
        response['npe_value_min'] = $(".npe_value_val_buy").val();
        response['npe_value_max'] = $(".npe_value_val_buy").val();
      } else if ($(".npe_value_buy:checked").val() === "range") {
        assetVal = $(".npe_value_sel_buy").val();
        index = assetVal.lastIndexOf("|");
        response['npe_value_min'] = assetVal.substring(0, index);
        response['npe_value_max'] = assetVal.substring(index + 1);
      }
      response['npe_lien_position'] = $(".npe_lien_position_buy").val();
      response['npe_judicialized'] = $(".npe_judicialized_buy").val();
      response['npe_borrower_details'] = $(".npe_borrower_details_buy").val();
      response['npe_who_i_am'] = $(".npe_who_i_am").val();
      response['npe_aum'] = $(".npe_aum_buy").val();
      response['npe_ratio'] = $(".npe_ratio_buy").val();
      return response;
    }


    function getSellRealEstateData() {
      response = {};
      response['re_type'] = $(".re_type").val();
      response['re_type_category'] = $(".re_type_category").val();
      response['re_deal_subject'] = $(".re_deal_subject").val();
      response['re_asset_status'] = $(".re_asset_status").val();
      response['re_condition_status'] = $(".re_condition_status").val();
      response['re_construction_year'] = $(".re_construction_year").val();
      response['re_surface_area'] = $(".re_surface_area").val();
      response['re_hq_country'] = $(".re_hq_country option:selected").text();
      response['re_hq_city'] = $(".re_hq_city").val();
      response['default_currency'] = $(".re_default_currency").val();
      response['re_asset_value'] = $(".re_asset_value:checked").val();
      if ($(".re_asset_value:checked").val() === "undisclosed") {} else if ($(".re_asset_value:checked").val() === "fixed") {
        response['re_asset_value_min'] = $(".re_asset_value_val").val();
        response['re_asset_value_max'] = $(".re_asset_value_val").val();
      } else if ($(".re_asset_value:checked").val() === "range") {
        assetVal = $(".re_asset_value_sel").val();
        index = assetVal.lastIndexOf("|");
        response['re_asset_value_min'] = assetVal.substring(0, index);
        response['re_asset_value_max'] = assetVal.substring(index + 1);
      }
      response['re_investment_type'] = $(".re_investment_type:checked").val();
      if ($(".re_investment_type:checked").val() === "undisclosed") {} else if ($(".re_investment_type:checked").val() === "fixed") {
        response['re_investment_value_min'] = $(".re_investment_val").val();
        response['re_investment_value_max'] = $(".re_investment_val").val();
      } else if ($(".re_investment_type:checked").val() === "range") {
        investVal = $(".re_investment_val_sel").val();
        index = investVal.lastIndexOf("|");
        response['re_investment_value_min'] = investVal.substring(0, index);
        response['re_investment_value_max'] = investVal.substring(index + 1);
      }
      response['re_yearly_return'] = $(".re_yearly_return").val();
      response['re_vendor_type'] = $(".re_vendor_type").val();
      response['re_key_elements'] = $(".re_key_elements").val();
      response['re_image'] = $(".sell_re_image-list").val();
      response['re_general_description'] = $(".re_general_description").val();
      return response;
    }

    function getSellNPEData() {
      response = {};
      npe_type = "";
      isNpeTypeSetted = false;
      $(".npe_type option:checked").each(function() {
        npe_type += $(this).val() + ",";
        isNpeTypeSetted = true;
      });
      if (isNpeTypeSetted)
        response['npe_type'] = npe_type.substring(0, npe_type.length - 1);

      product_type = "";
      isProductTypeSetted = false;
      $(".npe_product_type option:checked").each(function() {
        product_type += $(this).val() + ",";
        isProductTypeSetted = true;
      });
      if (isProductTypeSetted)
        response['npe_product_type'] = product_type.substring(0, product_type.length - 1);

      response['npe_collateral_type'] = $(".npe_collateral_type").val();
      response['npe_hq_country'] = $(".npe_hq_country option:selected").text();
      response['npe_hq_city'] = $(".npe_hq_city").val();
      response['npe_state'] = $(".npe_state").val();
      response['npe_post_code'] = $(".npe_post_code").val();
      response['npe_description'] = $(".npe_description").val();
      response['npe_default_currency'] = $(".npe_default_currency").val();
      response['npe_original_amount'] = $(".npe_original_amount").val();
      response['npe_asking_price'] = $(".npe_asking_price").val();
      response['npe_market_value'] = $(".npe_market_value").val();
      response['npe_lien_position'] = $(".npe_lien_position").val();
      response['npe_judicialized'] = $(".npe_judicialized").val();
      response['npe_borrower_details'] = $(".npe_borrower_details").val();
      response['npe_ratio'] = $(".npe_ratio").val();
      return response;
    }

    function getSellCreditData() {
      response = {};
      response['credit_borrower_type'] = $(".credit_borrower_type").val();
      response['credit_borrower_type_category'] = $(".credit_borrower_type_category").val();
      response['credit_type'] = $(".credit_type").val();
      response['credit_typology'] = $(".credit_typology").val();
      response['credit_maturity'] = $(".credit_maturity").val();
      response['credit_product_type'] = $(".credit_product_type").val();
      response['credit_collateral_type'] = $(".credit_collateral_type").val();
      response['credit_hq_country'] = $(".credit_hq_country option:selected").text();
      response['credit_hq_city'] = $(".credit_hq_city").val();
      response['credit_state'] = $(".credit_state").val();
      response['credit_post_code'] = $(".credit_post_code").val();
      response['credit_lien_position'] = $(".credit_lien_position").val();
      response['credit_description'] = $(".credit_description").val();
      response['credit_default_currency'] = $(".credit_default_currency").val();
      response['credit_original_amount'] = $(".credit_original_amount").val();
      response['credit_asking_price'] = $(".credit_asking_price").val();
      response['credit_market_value'] = $(".credit_market_value").val();
      response['credit_judicialized'] = $(".credit_judicialized").val();
      response['credit_borrower_details'] = $(".credit_borrower_details").val();
      response['credit_ratio_ob'] = $(".credit_ratio_ob").val();
      response['credit_rate'] = $(".credit_rate").val();
      response['credit_discounted_ratio'] = $(".credit_discounted_ratio").val();
      return response;
    }

    function getBuyCreditData() {
      response = {};
      response['credit_type'] = $(".npec_type_buy").val();
      response['credit_product_type'] = $(".npec_product_type_buy").val();
      response['credit_hq_country'] = $(".npec_hq_country_buy option:selected").text();
      response['credit_hq_city'] = $(".npec_hq_city_buy").val();
      response['credit_state'] = $(".npec_state_buy").val();
      response['credit_post_code'] = $(".npec_post_code_buy").val();
      response['credit_description'] = $(".npec_description_buy").val();
      response['credit_default_currency'] = $(".npec_default_currency_buy").val();
      response['credit_value'] = $(".npec_value_buy:checked").val();
      if ($(".npec_value_buy:checked").val() === "undisclosed") {} else if ($(".npec_value_buy:checked").val() === "fixed") {
        response['credit_value_min'] = $(".npec_value_val_buy").val();
        response['credit_value_max'] = $(".npec_value_val_buy").val();
      } else if ($(".npec_value_buy:checked").val() === "range") {
        assetVal = $(".npec_value_sel_buy").val();
        index = assetVal.lastIndexOf("|");
        response['credit_value_min'] = assetVal.substring(0, index);
        response['credit_value_max'] = assetVal.substring(index + 1);
      }
      response['credit_lien_position'] = $(".npec_lien_position_buy").val();
      response['credit_judicialized'] = $(".npec_judicialized_buy").val();
      response['credit_borrower_details'] = $(".npec_borrower_details_buy").val();
      response['credit_who_i_am'] = $(".npec_who_i_am").val();
      response['credit_aum'] = $(".npec_aum_buy").val();
      response['credit_ratio'] = $(".npec_ratio_buy").val();
      return response;
    }

    function getBuyBusinessCompanyData() {
      response = {};
      var countryVal = "";
      var cityVal = "";
      var countrySetted = false;
      var citySetted = false;
      $(".bc_hq_country_buy").each(function() {
        countrySetted = true;
        countryVal += $(this).find("option:selected").text() + ",";
      });
      $(".bc_hq_city_buy").each(function() {
        citySetted = true;
        cityVal += $(this).find("option:selected").val() + ",";
      });

      if (countrySetted)
        response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
      if (citySetted)
        response['hq_city'] = cityVal.substring(0, cityVal.length - 1);

      response['sector_sel'] = $(".bc_sector_sel_buy").val();
      var isIndustrySetted = false;
      var industry = '';
      $(".bc_industry_sel_buy").each(function() {
        isIndustrySetted = true;
        industry += $(this).val() + "|";
      });
      if (isIndustrySetted)
        response['industry_sel'] = industry.substring(0, industry.length - 1);

      response['default_currency'] = $(".bc_default_currency_buy").val();

      response['actual_revenue_type'] = $(".bc_actual_revenue_type_buy:checked").val();
      if ($(".bc_actual_revenue_type_buy:checked").val() === "undisclosed") {} else if ($(".bc_actual_revenue_type_buy:checked").val() === "fixed") {
        response['actual_revenue_min'] = $(".bc_actual_revenue_val_buy").val();
        response['actual_revenue_max'] = $(".bc_actual_revenue_val_buy").val();
      } else if ($(".bc_actual_revenue_type_buy:checked").val() === "range") {
        assetVal = $(".bc_actual_revenue_sel_buy").val();
        index = assetVal.lastIndexOf("|");
        response['actual_revenue_min'] = assetVal.substring(0, index);
        response['actual_revenue_max'] = assetVal.substring(index + 1);
      }

      response['ebidta_margin'] = $(".bc_ebidta_margin_buy").val();
      response['for_rev_1_sel'] = $("input[name='forcast_revenue_1_sel']:checked").val();
      response['for_rev_2_sel'] = $("input[name='forcast_revenue_2_sel']:checked").val();
      response['for_rev_3_sel'] = $("input[name='forcast_revenue_3_sel']:checked").val();
      response['for_ebd_1_sel'] = $("input[name='forcast_ebitda_1_sel']:checked").val();
      response['for_ebd_2_sel'] = $("input[name='forcast_ebitda_2_sel']:checked").val();
      response['for_ebd_3_sel'] = $("input[name='forcast_ebitda_3_sel']:checked").val();
      if ($("input[name='forcast_revenue_1_sel']:checked").val() == "fixed") {
        response['for_rev_1'] = $(".bc_for_rev_1_buy").val();
      } else {
        response['for_rev_1'] = $(".bc_for_rev_1_buy option:selected").val();
      }
      if ($("input[name='forcast_revenue_2_sel']:checked").val() == "fixed") {
        response['for_rev_2'] = $(".bc_for_rev_2_buy").val();
      } else {
        response['for_rev_2'] = $(".bc_for_rev_2_buy option:selected").val();
      }
      if ($("input[name='forcast_revenue_3_sel']:checked").val() == "fixed") {
        response['for_rev_3'] = $(".bc_for_rev_3_buy").val();
      } else {
        response['for_rev_3'] = $(".bc_for_rev_3_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_1_sel']:checked").val() == "fixed") {
        response['for_ebd_1'] = $(".bc_for_ebd_1_buy").val();
      } else {
        response['for_ebd_1'] = $(".bc_for_ebd_1_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_2_sel']:checked").val() == "fixed") {
        response['for_ebd_2'] = $(".bc_for_ebd_2_buy").val();
      } else {
        response['for_ebd_2'] = $(".bc_for_ebd_2_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_3_sel']:checked").val() == "fixed") {
        response['for_ebd_3'] = $(".bc_for_ebd_3_buy").val();
      } else {
        response['for_ebd_3'] = $(".bc_for_ebd_3_buy option:selected").val();
      }

      response['who_i_am'] = $(".bc_who_i_am").val();
      response['aum'] = $(".bc_aum").val();
      response['number_of_investments'] = $(".bc_number_of_investments").val();
      response['what_i_want'] = $(".bc_what_i_want_buy").val();
      response['description'] = $(".bc_description_buy").val();
      response['looking_for'] = $(".bc_looking_for").val();
      response['image'] = $(".buy_bc_image-list").val();

      var investmentAmount = "";
      var investmentSize = "";
      $(".bc_investment_required_value_buy").each(function() {
        if ($(this).prop("checked")) {
          investmentSize += $(this).val() + ",";
        }
      });
      $(".bc_investment_amount_buy").each(function() {
        if ($(this).prop("checked")) {
          investmentAmount += $(this).val() + ",";
        }
      });
      investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
      investmentSize = investmentSize.length > 0 ? investmentSize.substring(0, investmentSize.length - 1) : investmentSize;
      response['investment_size'] = investmentSize;
      response['investment_amount'] = investmentAmount;
      return response;
    }

    function getBuyStartUpData() {
      response = {};
      var countryVal = "";
      var cityVal = "";
      var countrySetted = false;
      var citySetted = false;
      $(".su_hq_country_buy").each(function() {
        countrySetted = true;
        countryVal += $(this).find("option:selected").text() + ",";
      });
      $(".su_hq_city_buy").each(function() {
        citySetted = true;
        cityVal += $(this).find("option:selected").val() + ",";
      });

      if (countrySetted)
        response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
      if (citySetted)
        response['hq_city'] = cityVal.substring(0, cityVal.length - 1);

      response['sector_sel'] = $(".su_sector_sel_buy").val();
      var isIndustrySetted = false;
      var industry = '';
      $(".su_industry_sel_buy").each(function() {
        isIndustrySetted = true;
        industry += $(this).val() + "|";
      });
      if (isIndustrySetted)
        response['industry_sel'] = industry.substring(0, industry.length - 1);

      response['default_currency'] = $(".su_default_currency_buy").val();
      response['startup_type'] = $(".su_startup_type_buy").val();

      response['actual_revenue_type'] = $(".su_actual_revenue_type_buy:checked").val();
      if ($(".su_actual_revenue_type_buy:checked").val() === "undisclosed") {} else if ($(".su_actual_revenue_type_buy:checked").val() === "fixed") {
        response['actual_revenue_min'] = $(".su_actual_revenue_val_buy").val();
        response['actual_revenue_max'] = $(".su_actual_revenue_val_buy").val();
      } else if ($(".su_actual_revenue_type_buy:checked").val() === "range") {
        assetVal = $(".su_actual_revenue_sel_buy").val();
        index = assetVal.lastIndexOf("|");
        response['actual_revenue_min'] = assetVal.substring(0, index);
        response['actual_revenue_max'] = assetVal.substring(index + 1);
      }

      response['ebidta_margin'] = $(".su_ebidta_margin_buy").val();
      response['for_rev_1_sel'] = $("input[name='forcast_revenue_1_sel']:checked").val();
      response['for_rev_2_sel'] = $("input[name='forcast_revenue_2_sel']:checked").val();
      response['for_rev_3_sel'] = $("input[name='forcast_revenue_3_sel']:checked").val();
      response['for_ebd_1_sel'] = $("input[name='forcast_ebitda_1_sel']:checked").val();
      response['for_ebd_2_sel'] = $("input[name='forcast_ebitda_2_sel']:checked").val();
      response['for_ebd_3_sel'] = $("input[name='forcast_ebitda_3_sel']:checked").val();
      if ($("input[name='forcast_revenue_1_sel']:checked").val() == "fixed") {
        response['for_rev_1'] = $(".su_for_rev_1_buy").val();
      } else {
        response['for_rev_1'] = $(".su_for_rev_1_buy option:selected").val();
      }
      if ($("input[name='forcast_revenue_2_sel']:checked").val() == "fixed") {
        response['for_rev_2'] = $(".su_for_rev_2_buy").val();
      } else {
        response['for_rev_2'] = $(".su_for_rev_2_buy option:selected").val();
      }
      if ($("input[name='forcast_revenue_3_sel']:checked").val() == "fixed") {
        response['for_rev_3'] = $(".su_for_rev_3_buy").val();
      } else {
        response['for_rev_3'] = $(".su_for_rev_3_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_1_sel']:checked").val() == "fixed") {
        response['for_ebd_1'] = $(".su_for_ebd_1_buy").val();
      } else {
        response['for_ebd_1'] = $(".su_for_ebd_1_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_2_sel']:checked").val() == "fixed") {
        response['for_ebd_2'] = $(".su_for_ebd_2_buy").val();
      } else {
        response['for_ebd_2'] = $(".su_for_ebd_2_buy option:selected").val();
      }
      if ($("input[name='forcast_ebitda_3_sel']:checked").val() == "fixed") {
        response['for_ebd_3'] = $(".su_for_ebd_3_buy").val();
      } else {
        response['for_ebd_3'] = $(".su_for_ebd_3_buy option:selected").val();
      }

      response['who_i_am'] = $(".su_who_i_am").val();
      response['aum'] = $(".su_aum").val();
      response['number_of_investments'] = $(".su_number_of_investments").val();
      response['what_i_want'] = $(".su_what_i_want_buy").val();
      response['description'] = $(".su_description_buy").val();
      response['looking_for'] = $(".su_looking_for").val();
      response['image'] = $(".buy_su_image-list").val();

      var investmentAmount = "";
      var investmentSize = "";
      $(".su_investment_required_value_buy").each(function() {
        if ($(this).prop("checked")) {
          investmentSize += $(this).val() + ",";
        }
      });
      $(".su_investment_amount_buy").each(function() {
        if ($(this).prop("checked")) {
          investmentAmount += $(this).val() + ",";
        }
      });
      investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
      investmentSize = investmentSize.length > 0 ? investmentSize.substring(0, investmentSize.length - 1) : investmentSize;
      response['investment_size'] = investmentSize;
      response['investment_amount'] = investmentAmount;
      return response;
    }

    // function getBuyStartUpData() {
    //   response = {};
    //   response['sector_sel'] = $(".su_sector_buy").val();
    //   response['startup_type'] = $(".su_startup_type_buy").val();
    //   var countryVal = "";
    //   var cityVal = "";
    //   var countrySetted = false;
    //   var citySetted = false;
    //   $(".su_hq_country_buy").each(function() {
    //     countrySetted = true;
    //     countryVal += $(this).find("option:selected").text() + ",";
    //   });
    //   $(".su_hq_city_buy").each(function() {
    //     citySetted = true;
    //     cityVal += $(this).find("option:selected").val() + ",";
    //   });

    //   if (countrySetted)
    //     response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
    //   if (citySetted)
    //     response['hq_city'] = cityVal.substring(0, cityVal.length - 1);


    //   var isIndustrySetted = false;
    //   var industry = '';
    //   $(".su_industry_buy").each(function() {
    //     isIndustrySetted = true;
    //     industry += $(this).val() + "|";
    //   });
    //   if (isIndustrySetted)
    //     response['industry_sel'] = industry.substring(0, industry.length - 1);

    //   response['default_currency'] = $(".su_default_currency_buy").val();

    //   response['actual_revenue_type'] = $(".su_preferred_revenue_buy:checked").val();
    //   if ($(".su_preferred_revenue_buy:checked").val() === "undisclosed") {} else if ($(".su_preferred_revenue_buy:checked").val() === "fixed") {
    //     response['actual_revenue_min'] = $(".su_preferred_revenue_val_buy").val();
    //     response['actual_revenue_max'] = $(".su_preferred_revenue_val_buy").val();
    //   } else if ($(".su_preferred_revenue_buy:checked").val() === "range") {
    //     assetVal = $(".su_preferred_revenue_sel_buy").val();
    //     index = assetVal.lastIndexOf("|");
    //     response['actual_revenue_min'] = assetVal.substring(0, index);
    //     response['actual_revenue_max'] = assetVal.substring(index + 1);
    //   }

    //   response['ebidta_margin'] = $(".su_ebidta_margin_buy").val();
    //   response['for_rev_1'] = $(".su_for_rev_1_buy").val();
    //   response['for_ebd_1'] = $(".su_for_ebd_1_buy").val();
    //   response['for_rev_2'] = $(".su_for_rev_2_buy").val();
    //   response['for_ebd_2'] = $(".su_for_ebd_2_buy").val();
    //   response['for_rev_3'] = $(".su_for_rev_3_buy").val();
    //   response['for_ebd_3'] = $(".su_for_ebd_3_buy").val();
    //   response['who_i_am'] = $(".su_who_i_am_buy").val();
    //   response['aum'] = $(".su_aum").val();
    //   response['number_of_investments'] = $(".su_number_of_investments").val();
    //   response['what_i_want'] = $(".su_what_i_want").val();
    //   response['description'] = $(".su_description_buy").val();
    //   response['looking_for'] = $(".su_looking_for").val();
    //   response['image'] = $(".buy_startup_image-list").val();

    //   var investmentAmount = "";
    //   var investmentSize = "";
    //   $(".su_investment_required_value_buy").each(function() {
    //     if ($(this).prop("checked")) {
    //       investmentSize += $(this).val() + ",";
    //     }
    //   });
    //   $(".su_preferred_investment_amount").each(function() {
    //     if ($(this).prop("checked")) {
    //       investmentAmount += $(this).val() + ",";
    //     }
    //   });
    //   investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
    //   investmentSize = investmentSize.length > 0 ? investmentSize.substring(0, investmentSize.length - 1) : investmentSize;
    //   response['investment_size'] = investmentSize;
    //   response['investment_amount'] = investmentAmount;
    //   return response;

    // }

    function getSellBusinessCompanyData() {
      response = {};
      var countryVal = "";
      var cityVal = "";
      var countrySetted = false;
      var citySetted = false;
      $(".bc_hq_country").each(function() {
        countrySetted = true;
        countryVal += $(this).find("option:selected").text() + ",";
      });
      $(".bc_hq_city").each(function() {
        citySetted = true;
        cityVal += $(this).find("option:selected").val() + ",";
      });

      if (countrySetted)
        response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
      if (citySetted)
        response['hq_city'] = cityVal.substring(0, cityVal.length - 1);

      response['company_type'] = $(".bc_company_type").val();
      response['foundation_year'] = $(".bc_foundation_year").val();
      response['default_currency'] = $(".bc_default_currency").val();

      response['company_value_type'] = $(".bc_company_value:checked").val();
      if ($(".bc_company_value:checked").val() === "undisclosed") {} else if ($(".bc_company_value:checked").val() === "fixed") {
        response['company_value_min'] = $(".bc_company_value_val").val();
        response['company_value_max'] = $(".bc_company_value_val").val();
      } else if ($(".bc_company_value:checked").val() === "range") {
        assetVal = $(".bc_company_value_sel").val();
        index = assetVal.lastIndexOf("|");
        response['company_value_min'] = assetVal.substring(0, index);
        response['company_value_max'] = assetVal.substring(index + 1);
      }

      response['investment_required_value'] = $(".bc_investment_required_value:checked").val();
      if ($(".bc_investment_required_value:checked").val() === "undisclosed") {} else if ($(".bc_investment_required_value:checked").val() === "fixed") {
        response['investment_required_min'] = $(".bc_investment_required_value_val").val();
        response['investment_required_max'] = $(".bc_investment_required_value_val").val();
      } else if ($(".bc_investment_required_value:checked").val() === "range") {
        assetVal = $(".bc_investment_required_value_sel").val();
        index = assetVal.lastIndexOf("|");
        response['investment_required_min'] = assetVal.substring(0, index);
        response['investment_required_max'] = assetVal.substring(index + 1);
      }

      response['sector_sel'] = $(".bc_sector_sel").val();

      var isIndustrySetted = false;
      var industry = '';
      $(".bc_industry_sel").each(function() {
        isIndustrySetted = true;
        industry += $(this).val() + "|";
      });
      if (isIndustrySetted)
        response['industry_sel'] = industry.substring(0, industry.length - 1);

      response['company_business'] = $(".bc_company_business").val();
      var isAreaSetted = false;
      var areaOfActivity = '';
      $(".bc_area_of_activity option:checked").each(function() {
        isAreaSetted = true;
        areaOfActivity += $(this).text() + ",";
      });
      if (isAreaSetted)
        response['area_of_activity'] = areaOfActivity.substring(0, areaOfActivity.length - 1);

      response['scalability'] = $(".bc_scalability").val();
      response['scalability_area'] = $(".bc_scalability_area option:selected").val() == "" ? "" : $(".bc_scalability_area option:selected").text();
      response['market_share'] = $(".bc_market_share").val();
      console.log($(".bc_number_of_employees:checked").val());
      if (null != $(".bc_number_of_employees:checked").val()) {
        var numOfEmp = $(".bc_number_of_employees:checked").val();
        index = numOfEmp.lastIndexOf("|");
        response['number_of_employees_min'] = numOfEmp.substring(0, index);
        response['number_of_employees_max'] = numOfEmp.substring(index + 1);
      }

      response['actual_revenue_type'] = $(".bc_actual_revenue_type:checked").val();
      if ($(".bc_actual_revenue_type:checked").val() === "fixed") {
        response['actual_revenue_min'] = $(".bc_actual_revenue_val").val();
        response['actual_revenue_max'] = $(".bc_actual_revenue_val").val();
      } else if ($(".bc_actual_revenue_type:checked").val() === "range") {
        assetVal = $(".bc_actual_revenue_sel").val();
        index = assetVal.lastIndexOf("|");
        response['actual_revenue_min'] = assetVal.substring(0, index);
        response['actual_revenue_max'] = assetVal.substring(index + 1);
      }
      response['ebidta_margin'] = $(".bc_ebidta_margin").val();

      response['for_rev_1_sel'] = $("input[name='forcast_revenue_1_sell']:checked").val();
      response['for_rev_2_sel'] = $("input[name='forcast_revenue_2_sell']:checked").val();
      response['for_rev_3_sel'] = $("input[name='forcast_revenue_3_sell']:checked").val();
      response['for_ebd_1_sel'] = $("input[name='forcast_ebitda_1_sell']:checked").val();
      response['for_ebd_2_sel'] = $("input[name='forcast_ebitda_2_sell']:checked").val();
      response['for_ebd_3_sel'] = $("input[name='forcast_ebitda_3_sell']:checked").val();
      if ($("input[name='forcast_revenue_1_sell']:checked").val() == "fixed") {
        response['for_rev_1'] = $(".bc_for_rev_1").val();
      } else {
        response['for_rev_1'] = $(".bc_for_rev_1 option:selected").val();
      }
      if ($("input[name='forcast_revenue_2_sell']:checked").val() == "fixed") {
        response['for_rev_2'] = $(".bc_for_rev_2").val();
      } else {
        response['for_rev_2'] = $(".bc_for_rev_2 option:selected").val();
      }
      if ($("input[name='forcast_revenue_3_sell']:checked").val() == "fixed") {
        response['for_rev_3'] = $(".bc_for_rev_3").val();
      } else {
        response['for_rev_3'] = $(".bc_for_rev_3 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_1_sell']:checked").val() == "fixed") {
        response['for_ebd_1'] = $(".bc_for_ebd_1").val();
      } else {
        response['for_ebd_1'] = $(".bc_for_ebd_1 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_2_sell']:checked").val() == "fixed") {
        response['for_ebd_2'] = $(".bc_for_ebd_2").val();
      } else {
        response['for_ebd_2'] = $(".bc_for_ebd_2 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_3_sell']:checked").val() == "fixed") {
        response['for_ebd_3'] = $(".bc_for_ebd_3").val();
      } else {
        response['for_ebd_3'] = $(".bc_for_ebd_3 option:selected").val();
      }


      response['description'] = $(".bc_description").val();
      response['key_elements'] = $(".bc_key_elements").val();
      response['image'] = $(".sell_bc_image-list").val();
      return response;

    }

    function getSellStartUpData() {
      response = {};
      var countryVal = "";
      var cityVal = "";
      var countrySetted = false;
      var citySetted = false;
      $(".su_hq_country").each(function() {
        countrySetted = true;
        countryVal += $(this).find("option:selected").text() + ",";
      });
      $(".su_hq_city").each(function() {
        citySetted = true;
        cityVal += $(this).find("option:selected").val() + ",";
      });

      if (countrySetted)
        response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
      if (citySetted)
        response['hq_city'] = cityVal.substring(0, cityVal.length - 1);

      response['startup_type'] = $(".su_startup_type").val();
      response['company_type'] = $(".su_company_type").val();
      response['foundation_year'] = $(".su_foundation_year").val();
      response['default_currency'] = $(".su_default_currency").val();

      response['company_value_type'] = $(".su_company_value:checked").val();
      if ($(".su_company_value:checked").val() === "undisclosed") {} else if ($(".su_company_value:checked").val() === "fixed") {
        response['company_value_min'] = $(".su_company_value_val").val();
        response['company_value_max'] = $(".su_company_value_val").val();
      } else if ($(".su_company_value:checked").val() === "range") {
        assetVal = $(".su_company_value_sel").val();
        index = assetVal.lastIndexOf("|");
        response['company_value_min'] = assetVal.substring(0, index);
        response['company_value_max'] = assetVal.substring(index + 1);
      }

      response['investment_required_value'] = $(".su_investment_required_value:checked").val();
      if ($(".su_investment_required_value:checked").val() === "undisclosed") {} else if ($(".su_investment_required_value:checked").val() === "fixed") {
        response['investment_required_min'] = $(".su_investment_required_value_val").val();
        response['investment_required_max'] = $(".su_investment_required_value_val").val();
      } else if ($(".su_investment_required_value:checked").val() === "range") {
        assetVal = $(".su_investment_required_value_sel").val();
        index = assetVal.lastIndexOf("|");
        response['investment_required_min'] = assetVal.substring(0, index);
        response['investment_required_max'] = assetVal.substring(index + 1);
      }

      response['sector_sel'] = $(".su_sector_sel").val();

      var isIndustrySetted = false;
      var industry = '';
      $(".su_industry_sel").each(function() {
        isIndustrySetted = true;
        industry += $(this).val() + "|";
      });
      if (isIndustrySetted)
        response['industry_sel'] = industry.substring(0, industry.length - 1);

      response['company_business'] = $(".su_company_business").val();
      var isAreaSetted = false;
      var areaOfActivity = '';
      $(".su_area_of_activity option:checked").each(function() {
        isAreaSetted = true;
        areaOfActivity += $(this).text() + ",";
      });
      if (isAreaSetted)
        response['area_of_activity'] = areaOfActivity.substring(0, areaOfActivity.length - 1);

      response['scalability'] = $(".su_scalability").val();
      response['scalability_area'] = $(".su_scalability_area option:selected").val() == "" ? "" : $(".su_scalability_area option:selected").text();
      response['market_share'] = $(".su_market_share").val();
      console.log($(".su_number_of_employees:checked").val());
      if (null != $(".su_number_of_employees:checked").val()) {
        var numOfEmp = $(".su_number_of_employees:checked").val();
        index = numOfEmp.lastIndexOf("|");
        response['number_of_employees_min'] = numOfEmp.substring(0, index);
        response['number_of_employees_max'] = numOfEmp.substring(index + 1);
      }

      response['actual_revenue_type'] = $(".su_actual_revenue_type:checked").val();
      if ($(".su_actual_revenue_type:checked").val() === "fixed") {
        response['actual_revenue_min'] = $(".su_actual_revenue_val").val();
        response['actual_revenue_max'] = $(".su_actual_revenue_val").val();
      } else if ($(".su_actual_revenue_type:checked").val() === "range") {
        assetVal = $(".su_actual_revenue_sel").val();
        index = assetVal.lastIndexOf("|");
        response['actual_revenue_min'] = assetVal.substring(0, index);
        response['actual_revenue_max'] = assetVal.substring(index + 1);
      }
      response['ebidta_margin'] = $(".su_ebidta_margin").val();

      response['for_rev_1_sel'] = $("input[name='forcast_revenue_1_sell']:checked").val();
      response['for_rev_2_sel'] = $("input[name='forcast_revenue_2_sell']:checked").val();
      response['for_rev_3_sel'] = $("input[name='forcast_revenue_3_sell']:checked").val();
      response['for_ebd_1_sel'] = $("input[name='forcast_ebitda_1_sell']:checked").val();
      response['for_ebd_2_sel'] = $("input[name='forcast_ebitda_2_sell']:checked").val();
      response['for_ebd_3_sel'] = $("input[name='forcast_ebitda_3_sell']:checked").val();
      if ($("input[name='forcast_revenue_1_sell']:checked").val() == "fixed") {
        response['for_rev_1'] = $(".su_for_rev_1").val();
      } else {
        response['for_rev_1'] = $(".su_for_rev_1 option:selected").val();
      }
      if ($("input[name='forcast_revenue_2_sell']:checked").val() == "fixed") {
        response['for_rev_2'] = $(".su_for_rev_2").val();
      } else {
        response['for_rev_2'] = $(".su_for_rev_2 option:selected").val();
      }
      if ($("input[name='forcast_revenue_3_sell']:checked").val() == "fixed") {
        response['for_rev_3'] = $(".su_for_rev_3").val();
      } else {
        response['for_rev_3'] = $(".su_for_rev_3 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_1_sell']:checked").val() == "fixed") {
        response['for_ebd_1'] = $(".su_for_ebd_1").val();
      } else {
        response['for_ebd_1'] = $(".su_for_ebd_1 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_2_sell']:checked").val() == "fixed") {
        response['for_ebd_2'] = $(".su_for_ebd_2").val();
      } else {
        response['for_ebd_2'] = $(".su_for_ebd_2 option:selected").val();
      }
      if ($("input[name='forcast_ebitda_3_sell']:checked").val() == "fixed") {
        response['for_ebd_3'] = $(".su_for_ebd_3").val();
      } else {
        response['for_ebd_3'] = $(".su_for_ebd_3 option:selected").val();
      }


      response['description'] = $(".su_description").val();
      response['key_elements'] = $(".su_key_elements").val();
      response['image'] = $(".sell_su_image-list").val();
      return response;

    }

    // function getSellStartUpData() {
    //   response = {};
    //   var countryVal = "";
    //   var cityVal = "";
    //   var countrySetted = false;
    //   var citySetted = false;
    //   $(".su_hq_country").each(function() {
    //     countrySetted = true;
    //     countryVal += $(this).find("option:selected").text() + ",";
    //   });
    //   $(".su_hq_city").each(function() {
    //     citySetted = true;
    //     cityVal += $(this).find("option:selected").val() + ",";
    //   });
    //   if (countrySetted)
    //     response['hq_country'] = countryVal.substring(0, countryVal.length - 1);
    //   if (citySetted)
    //     response['hq_city'] = cityVal.substring(0, cityVal.length - 1);

    //   response['sector_sel'] = $(".su_sector").val();
    //   response['startup_type'] = $(".su_startup_type").val();


    //   var isIndustrySetted = false;
    //   var industry = '';
    //   $(".su_industry").each(function() {
    //     isIndustrySetted = true;
    //     industry += $(this).val() + "|";
    //   });
    //   if (isIndustrySetted)
    //     response['industry_sel'] = industry.substring(0, industry.length - 1);

    //   response['default_currency'] = $(".su_default_currency").val();

    //   response['actual_revenue_type'] = $(".su_preferred_revenue:checked").val();
    //   if ($(".su_preferred_revenue:checked").val() === "undisclosed") {} else if ($(".su_preferred_revenue:checked").val() === "fixed") {
    //     response['actual_revenue_min'] = $(".su_preferred_revenue_val").val();
    //     response['actual_revenue_max'] = $(".su_preferred_revenue_val").val();
    //   } else if ($(".su_preferred_revenue:checked").val() === "range") {
    //     assetVal = $(".su_preferred_revenue_sel").val();
    //     index = assetVal.lastIndexOf("|");
    //     response['actual_revenue_min'] = assetVal.substring(0, index);
    //     response['actual_revenue_max'] = assetVal.substring(index + 1);
    //   }

    //   response['ebidta_margin'] = $(".su_ebidta_margin").val();
    //   response['for_rev_1'] = $(".su_for_rev_1").val();
    //   response['for_ebd_1'] = $(".su_for_ebd_1").val();
    //   response['for_rev_2'] = $(".su_for_rev_2").val();
    //   response['for_ebd_2'] = $(".su_for_ebd_2").val();
    //   response['for_rev_3'] = $(".su_for_rev_3").val();
    //   response['for_ebd_3'] = $(".su_for_ebd_3").val();
    //   response['who_i_am'] = $(".su_who_i_am").val();
    //   response['aum'] = $(".su_aum").val();
    //   response['number_of_investments'] = $(".su_number_of_investments").val();
    //   response['what_i_want'] = $(".su_what_i_want").val();
    //   response['description'] = $(".su_description").val();
    //   response['looking_for'] = $(".su_looking_for").val();
    //   response['image'] = $(".sell_startup_image-list").val();

    //   var investmentAmount = "";
    //   var investmentSize = "";
    //   $(".su_investment_required_value").each(function() {
    //     if ($(this).prop("checked")) {
    //       investmentSize += $(this).val() + ",";
    //     }
    //   });
    //   $(".su_preferred_investment_amount").each(function() {
    //     if ($(this).prop("checked")) {
    //       investmentAmount += $(this).val() + ",";
    //     }
    //   });
    //   investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
    //   investmentSize = investmentSize.length > 0 ? investmentSize.substring(0, investmentSize.length - 1) : investmentSize;
    //   response['investment_size'] = investmentSize;
    //   response['investment_amount'] = investmentAmount;
    //   return response;

    // }
  </script>
<?php
} else {
?>
  <script>
    window.open('../../', '_self')
  </script>
<?php
}
?>