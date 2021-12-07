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
            <div class="buy_asset_real_estate">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Type of Real Estate</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control re_type re_type_buy" name="re_type" id="re_type">
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
                    <select class="form-control re_type_category re_type_category_buy" name="re_type_category" id="re_type_category">
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
                  <select class="form-control deal_subject re_deal_subject_buy" name="deal_subject" id="deal_subject">
                    <option value="" selected disabled>Choose the subject</span></option>
                    <option value="totality buying">Totality Buying</option>
                    <option value="Looking for Co-Investors">looking for Co-Investors</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Status of the asset</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control asset_status re_asset_status_buy" name="asset_status" id="asset_status">
                    <option value="" selected disabled>Choose the status</span></option>
                    <option value="Existing property">Existing property</option>
                    <option value="Under Construction">Under Construction</option>
                    <option value="Planned Only">Planned Only</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Condition of the asset</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control asset_status re_condition_status_buy" name="asset_status" id="asset_condition">
                    <option value="" selected disabled>Choose the condition</span></option>
                    <option value="New property">New Property</option>
                    <option value="To renovate">To Renovate</option>
                    <option value="Good conditions">Good conditions</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Total surface approx.</span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container">
                  <div class="selector">
                    <div class="price-slider">
                      <div class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                        <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                      </div>
                      <span data-currency="sqm" class="min-price slider-price re_surface_area_buy_min">0</span>
                      <span class="seperator">-</span>
                      <span data-currency="sqm" data-max="10000" class="max-price slider-price re_surface_area_buy_max">0</span>
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
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-12 deal-heading">
                <span>Default Currency</span>
              </div>
              <div class="col-md-4 col-sm-12 input-container input-group">
                <select class="form-control default_currency re_default_currency_buy" name="company_type" id="default_currency">
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
                      <input type="radio" name="asset_value" value="undisclosed" class="deal-radio re_asset_value_buy" id="assetUn">
                    </span>
                  </div>
                  <div class="custom-file">
                    <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
                  </div>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <input type="radio" name="asset_value" value="fixed" class="deal-radio re_asset_value_buy" id="assetFixed">
                    </span>
                  </div>
                  <div class="custom-file">
                    <input type="number" class="form-control re_asset_value_val_buy" placeholder="Type a value" id="asset_value">
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text span-currency-icon">€</span>
                  </div>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <input type="radio" name="asset_value" value="range" class="deal-radio re_asset_value_buy" id="assetRange">
                    </span>
                  </div>
                  <div class="custom-file">
                    <select class="form-control re_asset_value_sel_buy" name="asset_value_range" id="asset_value_range">
                      <option value="" selected disabled>Select a range</option>
                      <option value="0|500000">from 0 to 500'000</option>
                      <option value="500000|1000000">from 500'000 to 1 million</option>
                      <option value="1000000|10000000">from 1 to 10 million</option>
                      <option value="10000000|50000000">from 10 to 50 million</option>
                      <option value="50000000|250000000">from 50 to 250 million</option>
                      <option value="250000000|1000000000">over 250 million</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-12 deal-heading">
                <span>Who I am</span>
              </div>
              <div class="col-md-9 col-sm-12 input-container input-group">
                <select class="form-control deal_option_visibility_trigger re_who_i_am_buy" name="who_i_am" id="who_i_am">
                  <option value="" selected disabled>Select an option</option>
                  <option value="Professional">Professional</option>
                  <option value="Corporation">Corporation</option>
                  <option value="Private Equity">Private Equity</option>
                  <option value="Venture Capital">Venture Capital</option>
                  <option value="Financial Institution">Financial Institution</option>
                </select>
              </div>
            </div>
            <div class="option_visibility_target">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>AUM</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="aum" id="aum" value="" class="form-control re_aum_buy" placeholder="Enter a value">
                  <div class="input-group-append">
                    <span class="input-group-text span-currency-icon">€</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Number of Investments</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="number_of_investments" id="number_of_investments" value="" class="form-control re_number_of_investments_buy" placeholder="Enter a value">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Preferred Investment Amount</span>
                  <span class="deal-subhead">(Multiple Choice)</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container">
                  <input type="checkbox" name="investment_amount" class="re_investment_amount_buy" value="0|1000000"> Less than 1 mln<br>
                  <input type="checkbox" name="investment_amount" class="re_investment_amount_buy" value="1000000|10000000"> From 1 to 10 mln<br>
                  <input type="checkbox" name="investment_amount" class="re_investment_amount_buy" value="10000000|50000000"> From 10 mln to 50 mln<br>
                  <input type="checkbox" name="investment_amount" class="re_investment_amount_buy" value="50000000|1000000000"> More than 50 mln<br>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-12 deal-heading">
                <span>What are we looking for</span>
              </div>
              <div class="col-md-9 col-sm-12 input-container input-group">
                <textarea name="looking_for" rows="3" id="re_general_description_buy" class="form-control re_looking_for_buy" placeholder="co-investor, Institutional investor, individual, corporation"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-12 deal-heading">
                <span>General Description</span>
              </div>
              <div class="col-md-9 col-sm-12 input-container input-group">
                <textarea name="general_description" rows="3" id="description" class="form-control re_general_description_buy" maxlength="124" placeholder="Type a description"></textarea>
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
<link href="../../plugins/jquery-ui/jquery-ui.min.css" type="text/css" rel="stylesheet" />
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../../plugins/jquery-ui/jquery.ui.touch-punch.min.js"></script>

<!-- bootstrap-datepicker -->
<link href="../../plugins/bootstrap-datepicker/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<script src="../../plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
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
    $("#foundation_year").datepicker({
      format: "yyyy",
      viewMode: "years",
      minViewMode: "years"
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
            var checkedVal = $(this).find("input[type='radio']:checked").val();
            console.log(checkedVal);
            if (!(checkedVal == "undisclosed" || checkedVal == "Undisclosed" || checkedVal == "any" || checkedVal == "Any")) {
              $(this).append("<small style='color: red'>This field is required</small>");
              all_validated = false;
              $([document.documentElement, document.body]).animate({
                scrollTop: $(this).offset().top
              }, 0);
            }
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
    response['re_type'] = $(".re_type_buy").val();
    response['re_type_category'] = $(".re_type_category_buy").val();
    response['re_deal_subject'] = $(".re_deal_subject_buy").val();
    response['re_asset_status'] = $(".re_asset_status_buy").val();
    response['re_condition_status'] = $(".re_condition_status_buy").val();
    response['re_surface_area'] = $(".re_surface_area_buy_min").text();
    response['re_surface_area_max'] = $(".re_surface_area_buy_max").text();
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
    response['number_of_investments'] = $(".re_number_of_investments_buy").val();
    var investmentAmount = "";
    $(".re_investment_amount_buy").each(function() {
      if ($(this).prop("checked")) {
        investmentAmount += $(this).val() + ",";
      }
    });
    investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
    response['investment_amount'] = investmentAmount;
    response['re_looking_for'] = $(".re_looking_for_buy").val();
    response['re_general_description'] = $(".re_general_description_buy").val();
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

  function setValues() {
    console.log("inside set values")
    document.getElementById("re_type").value = "<?= $row["REAL_ESTATE_TYP"] ?>";

    $(".slider-range").slider({
      range: true,
      min: 0,
      max: 10000,
      step: 100,
      values: [<?= $row["TOTAL_SURFACE"] ?>, <?= $row["TOTAL_SURFACE_MAX"] ?>],
      slide: function(event, ui) {
        $(this).siblings(".min-price").html(ui.values[0]);
        $(this).siblings(".max-price").html(ui.values[1]);
      }
    });

    $(".min-price").html('<?= $row["TOTAL_SURFACE"] ?>');
    $(".max-price").html('<?= $row["TOTAL_SURFACE_MAX"] ?>');

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
    document.getElementById("default_currency").value = "<?= $row["CURRENCY"] ?>";
    $("#min-price").html(<?= $row["TOTAL_SURFACE"] ?>);
    $("#max-price").html(<?= $row["TOTAL_SURFACE_MAX"] ?>);
    document.getElementById("who_i_am").value = "<?= $row["WHO_I_AM"] ?>";
    if ("<?= $row["WHO_I_AM"] ?>" == "Private Equity" || "<?= $row["WHO_I_AM"] ?>" == "Venture Capital" || "<?= $row["WHO_I_AM"] ?>" == "Financial Institution") {
      document.getElementById("number_of_investments").value = "<?= $row["NUM_OF_INVESTMENT"] ?>";
      document.getElementById("aum").value = "<?= $row["AUM"] ?>";
      var investmentAmount = "<?= $row["PREF_INVESTMENT_AMOUNT"] ?>";
      var investmentAmountArr = investmentAmount.split(",");
      for (var i = 0; i < investmentAmountArr.length; i++) {
        $('input[name="investment_amount"][value="' + investmentAmountArr[i].toString() + '"]').prop("checked", true);
      }
      $(".option_visibility_target").fadeIn(0);
    } else {
      $(".option_visibility_target").fadeOut(0);
    }
    document.getElementById("re_general_description_buy").value = "<?= $row["LOOKING_FOR"] ?>";
    document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
    $("input[name=asset_value][value=<?= $row["ASSET_VAL_TYPE"] ?>]").attr('checked', 'checked');
    if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "fixed") {
      document.getElementById("asset_value").value = "<?= $row["ASSET_VAL_MIN"] ?>";
    } else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "range") {
      document.getElementById("asset_value_range").value = "<?= $row["ASSET_VAL_MIN"] . '|' . $row["ASSET_VAL_MAX"] ?>";
    }
    $(".span-currency-icon").html(
      $(".default_currency").find("option:selected").data("value")
    );
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
        country_data = data.reduce(function(result, current) {
          result[current.area] = result[current.area] || [];
          result[current.area].push(current);
          return result;
        }, {});
        var countryVal = "<?= $row['COUNTRY'] ?>";
        var cityVal = "<?= $row['CITY'] ?>";
        countryArr = countryVal.split("|");
        cityArr = cityVal.split("|");
        var location_container = $(".location_container");
        countryArr.forEach(function(element, index) {
          var curr_country = element;
          var countryId = "";
          location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
          var keys = Object.keys(country_data).forEach(key => {
            if (key != "null") {
              location_container.find('.hq_country').last().append('<optgroup label="' + key + '">');
              $.each(country_data[key], function(index, element) {
                location_container.find('.hq_country').last().append($('<option>', {
                  value: element.id,
                  text: element.country,
                  selected: element.country == curr_country ? true : false
                }));
                if (index === country_data[key].length - 1) {
                  location_container.find('.hq_country').last().append('</optgroup>');
                }
              });
            } else {
              location_container.find('.hq_country').last().append($('<option>', {
                value: "0",
                text: "All",
                selected: "All" == curr_country ? true : false
              }));
            }
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
    current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
    var keys = Object.keys(country_data).forEach(key => {
      if (key != "null") {
        current_location_container.find('.hq_country').last().append('<optgroup label="' + key + '">');
        $.each(country_data[key], function(index, element) {
          current_location_container.find('.hq_country').last().append($('<option>', {
            value: element.id,
            text: element.country
          }));
          if (index === country_data[key].length - 1) {
            current_location_container.find('.hq_country').last().append('</optgroup>');
          }
        });
      } else {
        current_location_container.find('.hq_country').last().append($('<option>', {
          value: "0",
          text: "All"
        }));
      }
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
</script>