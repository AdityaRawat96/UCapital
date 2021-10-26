<?php
session_start();
if (isset($_SESSION['email'])) {
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $id = $_GET["id"];
  $sql = "SELECT * FROM real_estate where id=$id";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
  }
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
              <li class="breadcrumb-item active text-custom-2"> Post AD LITE </li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="card p-3"><br>
          <form class="ad-form" action="index.html" method="post">
            <div class="sell_asset_real_estate">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Type of Real Estate</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control re_type" name="re_type" id="re_type">
                    <option value="" selected disabled>Choose type of Real Estate</option>
                    <option value="Building">Building</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Resort">Resort</option>
                    <option value="Residential" data-categories="Single-family homes,Multi-family homes,Apartments,Condos,Private House">Residential</option>
                    <option value="Commercial" data-categories="Office, Retail">Commercial</option>
                    <option value="Industrial" data-categories="Manufacturing,Storage and Distribution,Flex space">Industrial</option>
                    <option value="Land">Land</option>
                  </select>
                </div>
              </div>
              <div class="type_category_container">
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Type of <span class="dynamic_category"></span></span>
                  </div>
                  <div class="col-md-9 col-sm-12 input-container input-group">
                    <select class="form-control re_type_category" name="re_type_category" id="re_type_category">
                      <option value="" selected disabled>Choose type of <span class="dynamic_category"></span></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Subject of deal</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control deal_subject re_deal_subject" name="deal_subject" id="deal_subject">
                    <option value="" selected disabled>Choose the subject</span></option>
                    <option value="Totality Selling">Totality Selling</option>
                    <option value="Looking for Co-Investors">looking for Co-Investors</option>
                    <option value="Looking for Investors">Looking for Investors</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Status of the asset</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control asset_status re_asset_status" name="asset_status" id="asset_status">
                    <option value="" selected disabled>Choose the status</span></option>
                    <option value="Existing property">Existing property</option>
                    <option value="Under Construction ">Under Construction </option>
                    <option value="project">Project</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Condition of the asset</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control asset_status re_condition_status" name="asset_status" id="asset_condition">
                    <option value="" selected disabled>Choose the condition</span></option>
                    <option value="New property">new property</option>
                    <option value="To renovate">to renovate</option>
                    <option value="Good conditions">good conditions</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Year of construction</span></span>
                </div>
                <div class="col-md-2 col-sm-12 input-container input-group">
                  <input type="number" name="construction_year" id="foundation_year" class="form-control re_construction_year" placeholder="Type a year">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Total surface approx.</span></span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input name="total_surface_area" type="number" class="form-control re_surface_area" id="surface_area" placeholder="Type a value">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">sqm</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Location</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <div class="row location_holder">
                    <div class="col-md-8 col-sm-12 location_container">
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <button type="button" name="button" class="btn btn-add-custom form-control add-location">+ Add a location</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Default Currency</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control default_currency re_default_currency" name="company_type" id="currency">
                    <option data-value="€" selected value='Euro'>Euro</option>
                    <option data-value="$" value='Dollar'>Dollar</option>
                    <option data-value="C$" value='Canadian Dollar'>Canadian Dollar</option>
                    <option data-value="£" value='Pound'>Pound</option>
                    <option data-value="A$" value='Australian Dollar'>Australian Dollar</option>
                    <option data-value="¥" value='Yen'>Yen</option>
                    <option data-value="SEK" value='Swedish Krona'>Swedish Krona</option>
                    <option data-value="DKK" value='Danish Krona'>Danish Krona</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Asset value</span>
                  <span class="deal-subhead">(Choose one)</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="undisclosed" class="deal-radio re_asset_value">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="fixed" class="deal-radio re_asset_value">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control re_asset_value_val" id="asset_value" placeholder="Type a value">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="range" class="deal-radio re_asset_value">
                      </span>
                    </div>
                    <div class="custom-file">
                      <select class="form-control re_asset_value_sel" id="asset_value_range" name="asset_value_range">
                        <option value="" selected disabled>Select a range</option>
                        <option value="0|500000">from 0 to 500k</option>
                        <option value="500000|1000000">from 500k to 1 million</option>
                        <option value="1000000|10000000">from 1 to 10 million</option>
                        <option value="10000000|50000000">from 10 to 50 million</option>
                        <option value="50000000|1000000000">over 50 million</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Investment Required</span>
                  <span class="deal-subhead">(Choose one)</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="investment_required" value="undisclosed" class="deal-radio re_investment_type">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="investment_required" value="fixed" class="deal-radio re_investment_type">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control re_investment_val" id="investment_val" placeholder="Type a value">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="investment_required" value="range" class="deal-radio re_investment_type">
                      </span>
                    </div>
                    <div class="custom-file">
                      <select class="form-control re_investment_val_sel" id="investment_val_sel" name="investment_required_range">
                        <option value="" selected disabled>Select a range</option>
                        <option value="0|500000">from 0 to 500k</option>
                        <option value="500000|1000000">from 500k to 1 million</option>
                        <option value="1000000|10000000">from 1 to 10 million</option>
                        <option value="10000000|50000000">from 10 to 50 million</option>
                        <option value="50000000|1000000000">over 50 million</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Yearly Return</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="number" name="yearly_return" class="form-control re_yearly_return" id="yearly_return" placeholder="Insert a value">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Vendor Type</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control re_vendor_type" id="vendor_type">
                    <option value="" selected disabled>Choose one</option>
                    <option value="private owner">Private owner</option>
                    <option value="company">Company</option>
                    <option value="investment fund">Investment fund</option>
                    <option value="bank">Bank</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>General Description</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="general_description" rows="3" id="description" class="form-control re_general_description" placeholder="Type a description"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Key Elements</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="key_elements" rows="3" id="keyElem" class="form-control re_key_elements" placeholder="Co-Investor, Institutional Investor, Individual, Corporation..."></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Image</span>
                  <span class="deal-subhead">(Max 5MB)</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <div class="input-group">
                    <input type="text" id="adImage-list" hidden value="">
                    <input type="file" name="files[]" class="adImage" id="adImage" multiple="false">
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-3 col-sm-12">
              </div>
              <div class="col-md-9 col-sm-12">
                <button type="submit" name="button" class="btn btn-success">Update</button>
              </div>
            </div>
            <br><br><br><br><br><br>
          </form><br>
        </div>
        <!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->
  <?php
  include '../elements/footer.php';
  ?>

<?php
} else {
?>
  <script>
    window.open('../../', '_self')
  </script>
<?php
}
?>
<link href="../../plugins/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="../../plugins/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">

<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../plugins/filer/js/jquery.filer.min.js"></script>
<script>
  $(document).ready(function() {
    $('.ad-form').validate({
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
      update();
    }
  }

  function update() {
    response = {};
    response['re_type'] = $(".re_type").val();
    response['re_type_category'] = $(".re_type_category").val();
    response['re_deal_subject'] = $(".re_deal_subject").val();
    response['re_asset_status'] = $(".re_asset_status").val();
    response['re_condition_status'] = $(".re_condition_status").val();
    response['re_construction_year'] = $(".re_construction_year").val();
    response['re_surface_area'] = $(".re_surface_area").val();
    var countryVal = "";
    var cityVal = "";
    var countrySetted = false;
    var citySetted = false;
    $(".hq_country").each(function() {
      countrySetted = true;
      countryVal += $(this).find("option:selected").text() + "|";
    });
    $(".hq_city").each(function() {
      citySetted = true;
      cityVal += $(this).find("option:selected").val() + "|";
    });

    if (countrySetted)
      response['re_hq_country'] = countryVal.substring(0, countryVal.length - 1);
    if (citySetted)
      response['re_hq_city'] = cityVal.substring(0, cityVal.length - 1);
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
    response['re_image'] = $(".jFiler-item-title").val();
    response['re_general_description'] = $(".re_general_description").val();
    response['asset_type'] = "RE";
    $.ajax({
      type: 'POST',
      url: '../../assets/php/updateDeals.php',
      data: {
        dealData: response,
        id: <?= $id ?>
      },
      success: function(data) {
        console.log(data);
        if (data.trim() == "success") {
          swal("Success!", "Deal Updated!", "success")
            .then((value) => {
              location.reload();
            });
        } else {
          swal("Error!", "An unexpected error occurred, please try again!", "error");
        }
      }
    });
  }
</script>
<script>
  function setValues() {
    console.log("inside set values")
    document.getElementById("re_type").value = "<?= $row["REAL_ESTATE_TYP"] ?>";

    if ('' != "<?= $row["REAL_ESTATE_SUB_CAT_TYPE"] ?>") {
      $(".re_type_category").html("");
      $(".re_type_category").append($('<option>', {
        value: "",
        text: "Choose type of " + "<?= $row["REAL_ESTATE_TYP"] ?>",
        selected: true,
        disabled: true
      }));
      var category_array = $(".re_type").find("option:selected").data("categories").split(",");
      for (var i = 0; i < category_array.length; i++) {
        $(".re_type_category").append($('<option>', {
          value: category_array[i].toLowerCase(),
          text: category_array[i]
        }));
      }
      $(".dynamic_category").html("<?= $row["REAL_ESTATE_TYP"] ?>");
      document.getElementById("re_type_category").value = "<?= $row["REAL_ESTATE_SUB_CAT_TYPE"] ?>";

    } else {
      $(".type_category_container").hide();
    }
    document.getElementById("deal_subject").value = "<?= $row["DEAL_SUBJECT"] ?>";
    document.getElementById("asset_status").value = "<?= $row["ASSET_STATUS"] ?>";
    document.getElementById("asset_condition").value = "<?= $row["ASSET_CONDITION"] ?>";
    document.getElementById("surface_area").value = "<?= $row["TOTAL_SURFACE"] ?>";
    document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
    document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
    document.getElementById("yearly_return").value = "<?= $row["YEARLY_RETURN"] ?>";
    document.getElementById("vendor_type").value = "<?= $row["VENDOR_TYPE"] ?>";
    document.getElementById("keyElem").value = "<?= $row["KEY_ELEMENTS"] ?>";
    document.getElementById("foundation_year").value = "<?= $row["YEAR_OF_CONSTRUCTION"] ?>";

    $("input[name=asset_value][value=<?= $row["ASSET_VAL_TYPE"] ?>]").attr('checked', 'checked');
    if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "fixed") {
      document.getElementById("asset_value").value = "<?= $row["ASSET_VAL_MIN"] ?>";
    } else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "range") {
      document.getElementById("asset_value_range").value = "<?= $row["ASSET_VAL_MIN"] . '|' . $row["ASSET_VAL_MAX"] ?>";
    }

    $("input[name=investment_required][value=<?= $row["INVESTMENT_TYPE"] ?>]").attr('checked', 'checked');
    if ("<?= $row["INVESTMENT_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["INVESTMENT_TYPE"] ?>" == "fixed") {
      document.getElementById("investment_val").value = "<?= $row["INVESTMENT_MIN"] ?>";
    } else if ("<?= $row["INVESTMENT_TYPE"] ?>" == "range") {
      document.getElementById("investment_val_sel").value = "<?= $row["INVESTMENT_MIN"] . '|' . $row["INVESTMENT_MAX"] ?>";
    }
    $(".span-currency-icon").html(
      $(".default_currency").find("option:selected").data("value")
    );


    var image_file = '<?= $row["IMAGE"]; ?>';
    folderName = image_file.split("/")[0] + "/" + image_file.split("/")[1];
    imageName = image_file.split("/")[2];
    var fileDetails = [];
    var fileAttachmentNames = [];
    var fileDetail = {
      name: imageName,
      file: '../../assets/uploads/' + image_file,
      url: '../../assets/uploads/' + image_file
    }
    fileDetails.push(fileDetail);
    $("#adImage-list").val('<?= $row["IMAGE"]; ?>');
    fileAttachmentNames.push(imageName)

    addFiles('adImage', fileDetails, fileAttachmentNames);
  }
</script>
<script>
  var country_data;
  $(document).ready(function() {
    setValues();
    $.ajax({
      type: 'POST',
      url: "../../assets/php/getCountries.php",
      dataType: 'json',
      success: function(data) {
        country_data = data;
        var countryVal = "<?= $row['COUNTRY'] ?>";
        var cityVal = "<?= $row['CITY'] ?>";
        countryArr = countryVal.split("|");
        cityArr = cityVal.split("|");
        var location_container = $(".location_container");
        countryArr.forEach(function(element, index) {
          var countryId = "";
          location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
          country_data.forEach(country_data => {
            location_container.find('.hq_country').last().append($('<option>', {
              value: country_data.id,
              text: country_data.country,
              selected: country_data.country == element ? true : false
            }));
          });
          countryId = location_container.find('.hq_country').last().val();
          syncLoadCity(countryId, cityArr[index], location_container.find('.hq_city').last()).then(function(data) {}).catch(function(err) {
            console.log(err);
          })
        });
      }
    });
  });

  function syncLoadCity(countryId, cityVal, domElem) {
    console.log(cityVal);
    return new Promise(function(resolve, reject) {
      $.ajax({
        type: 'POST',
        url: "../../assets/php/getCities.php",
        dataType: 'json',
        data: {
          country_id: countryId
        },
        success: function(data) {
          data.forEach(element => {
            domElem.append($('<option>', {
              value: element.city,
              text: element.city,
              selected: element.city == cityVal ? true : false
            }));
          });

          resolve()
        },
        error: function(err) {
          reject(err)
        }
      });
    });
  }

  $(".add-location").on('click', function() {
    var deal_type = $(".deal_type:checked").val();
    var current_location_container = $(this).parent().parent();
    if (deal_type == "sell") {
      current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
    } else {
      current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country bc_hq_country_buy" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city bc_hq_city_buy" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
    }
    $.each(country_data, function(index, element) {
      current_location_container.find('.hq_country').last().append($('<option>', {
        value: element.id,
        text: element.country
      }));
    });
  });

  $(".location_holder").on("click", ".btn-location-remove", function() {
    $(this).parent().remove();
  });

  $("body").on("change", ".hq_country", function() {
    loadCities($(this));
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
</script>

<script type="text/javascript">
  $(".re_type").change(function() {
    $(".re_type_category").html("");
    if ($(this).find("option:selected").data("categories")) {
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
      $(".type_category_container").fadeIn();
    } else {
      $(".type_category_container").fadeOut();
    }
  })

  function addFiles(filerID, fileDetails, fileAttachmentNames) {
    var uploadedFiles = fileAttachmentNames;
    $("#" + filerID).filer({
      limit: 1,
      maxSize: 5,
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
        beforeSend: function() {},
        success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id) {
          var parent = itemEl.find(".jFiler-jProgressBar").parent(),
            new_file_name = JSON.parse(data),
            filerKit = inputEl.prop("jFiler");
          filerKit.files_list[id].name = new_file_name;
          uploadedFiles.push(new_file_name);
          $("#" + filerID + "-list").val(folderName + "/" + new_file_name)
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
      allowDuplicates: false,
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
        if (file_name == undefined) {
          file_name = filerKit.files_list[id].file.name;
        }
        uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
          return value != file_name;
        });
        $("#" + filerID + "-list").val("")
        if (folderName.split("/")[0] == "MergerAcquisition") {
          $.post('../../vendor/plugins/filer/php/ajax_remove_file.php?folderName=' + folderName, {
            file: file_name
          });
        }
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