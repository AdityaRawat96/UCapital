<?php
session_start();
$redirect_target="buy";
if (isset($_SESSION['email'])) {
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $id = $_GET["id"];
  $sql = "SELECT * FROM npe where id=$id";
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
            <div class="buy_asset_npe">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Type of NPE</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control npe_type npe_type_buy" id="npe_type_buy" name="npe_type" data-placeholder="Choose type of NPE" multiple="multiple">
                    <option value="Past due">Past due</option>
                    <option value="Unlikely to pay">Unlikely to pay</option>
                    <option value="NPL">NPL</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Loan/Product type</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control product_type npe_product_type_buy" id="npe_product_type_buy" data-placeholder="Choose type of Loan/Product" name="product_type" multiple="multiple">
                    <option value="Secured">Secured</option>
                    <option value="Unsecured">Unsecured</option>
                  </select>
                </div>
              </div>

              <div class="collateral_type">
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Collateral</span>
                  </div>
                  <div class="col-md-9 col-sm-12 input-container input-group">
                    <select class="form-control collateral_type npe_collateral_type" name="collateral_type" id="collateral_type">
                      <option value="" selected disabled>Choose type of Collateral</option>
                      <option value="Real Estate">Real Estate</option>
                      <option value="Cash">Cash</option>
                      <option value="Inventory">Inventory</option>
                      <option value="Invoice">Invoice</option>
                      <option value="Blanket liens">Blanket liens</option>
                    </select>
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
                  <span>Description</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="general_description" rows="3" class="form-control npe_description_buy" id="description" placeholder="general description of the asset"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Default Currency</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control default_currency npe_default_currency_buy" id="currency" name="company_type">
                    <option data-value="???" selected value='Euro'>Euro</option>
                    <option data-value="$" value='Dollar'>Dollar</option>
                    <option data-value="C$" value='Canadian Dollar'>Canadian Dollar</option>
                    <option data-value="??" value='Pound'>Pound</option>
                    <option data-value="A$" value='Australian Dollar'>Australian Dollar</option>
                    <option data-value="??" value='Yen'>Yen</option>
                    <option data-value="SEK" value='Swedish Krona'>Swedish Krona</option>
                    <option data-value="DKK" value='Danish Krona'>Danish Krona</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Value</span>
                  <span class="deal-subhead">(Choose one)</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="undisclosed" class="deal-radio npe_value_buy">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control" placeholder="Any" disabled style="background-color: white !important;">
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="fixed" class="deal-radio npe_value_buy">
                      </span>
                    </div>
                    <div class="custom-file">
                      <input type="number" class="form-control npe_value_val_buy" id="npe_value_val" placeholder="Type a value">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text span-currency-icon">???</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <input type="radio" name="asset_value" value="range" class="deal-radio npe_value_buy">
                      </span>
                    </div>
                    <div class="custom-file">
                      <select class="form-control npe_value_sel_buy" id="npe_value_sel" name="asset_value_range">
                        <option value="" selected disabled>Select a range</option>
                        <option value="0|500000">from 0 to 500,000</option>
                        <option value="500000|1000000">from 500,000 to 1M</option>
                        <option value="1000000|10000000">from 1M to 10M</option>
                        <option value="10000000|50000000">from 10M to 50M</option>
                        <option value="50000000|250000000">from 50M to 250M</option>
                        <option value="250000000|1000000000">over 250M</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Lien Position<br><i style="font-size: 10px;">(Optional)</i></span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control lien_position npe_lien_position_buy" id="lien_position" name="lien_position">
                    <option value="" selected disabled>Choose lien position</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Judicialized<br><i style="font-size: 10px;">(Optional)</i></span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control judicialized npe_judicialized_buy" id="judicialized" name="judicialized">
                    <option value="" selected disabled>Choose an option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Ratio<br><i style="font-size: 10px;">(Optional)</i></span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control ratio npe_ratio_buy" id="ratio" name="ratio">
                    <option value="" selected disabled>Choose an option</option>
                    <option value="Rate">Rate</option>
                    <option value="Discounted Ratio">Discounted Ratio</option>
                    <option value="Surface">Surface</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Who I am</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control deal_option_visibility_trigger npe_who_i_am" id="who_i_am" name="who_i_am">
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
                    <span>AUM<br><i style="font-size: 10px;">(Optional)</i></span>
                  </div>
                  <div class="col-md-4 col-sm-12 input-container input-group">
                    <input type="number" name="aum" id="aum" value="" class="form-control npe_aum_buy" placeholder="Enter a value">
                    <div class="input-group-append">
                      <span class="input-group-text span-currency-icon">???</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Number of Investments<br><i style="font-size: 10px;">(Optional)</i></span>
                  </div>
                  <div class="col-md-4 col-sm-12 input-container input-group">
                    <input type="number" name="number_of_investments" id="number_of_investments" value="" class="form-control npe_number_of_investments_buy" placeholder="Enter a value">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Preferred Investment Amount<br><i style="font-size: 10px;">(Optional)</i></span>
                    <span class="deal-subhead">(Multiple Choice)</span>
                  </div>
                  <div class="col-md-9 col-sm-12 input-container">
                    <input type="checkbox" name="investment_amount" class="npe_investment_amount_buy" value="0|1000000"> Less than 1M<br>
                    <input type="checkbox" name="investment_amount" class="npe_investment_amount_buy" value="1000000|10000000"> From 1M to 10M<br>
                    <input type="checkbox" name="investment_amount" class="npe_investment_amount_buy" value="10000000|50000000"> From 10M to 50M<br>
                    <input type="checkbox" name="investment_amount" class="npe_investment_amount_buy" value="50000000|1000000000"> More than 50M<br>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-3 col-sm-12">
              </div>
              <div class="col-md-9 col-sm-12">
                <button type="submit" name="button" class="btn btn-success form_submit_button">Update</button>
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
    $(".form_submit_button").click(function(){
      validateAdditionalFields();
    });

    $(".input-group-multiple-radio").on("click", "input", function() {
      $(this).parent().parent().parent().parent().find("small").remove();
      $(this).parent().parent().find("input[type=radio]").prop("checked", true);
    });
    $(".input-group-multiple-radio").on("click", "select", function() {
      $(this).parent().parent().parent().parent().find("small").remove();
      $(this).parent().parent().find("input[type=radio]").prop("checked", true);
    });
    $(".input-group-multiple-checkbox").on("click", "input", function() {
      $(this).parent().parent().parent().parent().find("small").remove();
    });

    $("#npe_type_buy").select2().on("change", function (e) {
      $(this).valid();
    });
    $("#npe_product_type_buy").select2().on("change", function (e) {
      $(this).valid();
    });
    $('.ad-form').validate({
      submitHandler: function() {
        if(validateAdditionalFields()){
          update();
        }
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
          digits: true,
          required: true,
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
        borrower_details: {
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
        discounted_ratio: {
          min: 0,
          max: 100
        },
        total_surface_area_min: {
          required: true,
          min: 0,
          max: 50000
        },
        total_surface_area_max: {
          required: true,
          min: 0,
          max: 50000
        },
        original_amount: {
          digits: true,
          required: true,
        },
        asking_price: {
          digits: true,
          required: true,
        },
        market_value: {
          digits: true,
          required: true,
        }
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
        if ($(this).find("small").length > 0) {
          $(this).find("small").remove();
        }
        $(this).append("<small style='color: #dc3545'>Please select any one option</small>");
        all_validated = false;
        $([document.documentElement, document.body]).animate({
          scrollTop: $(this).offset().top
        }, 0);
      } else {
        if ($(this).find("small").length > 0) {
          $(this).find("small").remove();
        }

        var input_parent = $(this).find("input[type='radio']:checked").parent().parent().parent();
        if (input_parent.find("input[type='number']").val() == "" || input_parent.find("option:selected").val() == "") {
          var checkedVal = $(this).find("input[type='radio']:checked").val();
          console.log(checkedVal);
          if (!(checkedVal == "undisclosed" || checkedVal == "Undisclosed" || checkedVal == "any" || checkedVal == "Any")) {
            $(this).append("<small style='color: #dc3545'>This field is required</small>");
            all_validated = false;
            $([document.documentElement, document.body]).animate({
              scrollTop: $(this).offset().top
            }, 0);
          }
        }
      }
    });
    $(".input-group-multiple-checkbox:visible").each(function() {
      if ($(this).find("input[type='checkbox']:checked").length == 0) {
        if ($(this).find("small").length > 0) {
          $(this).find("small").remove();
        }
        $(this).append("<small style='color: #dc3545'>Please select any one option</small>");
        all_validated = false;
        $([document.documentElement, document.body]).animate({
          scrollTop: $(this).offset().top
        }, 0);
      }
    });

    return all_validated;
  }

  function update() {
    response = {};
    npe_type = "";
    isNpeTypeSetted = false;
    $(".npe_type_buy option:checked").each(function() {
      npe_type += $(this).val() + "|";
      isNpeTypeSetted = true;
    });
    if (isNpeTypeSetted)
    response['npe_type'] = npe_type.substring(0, npe_type.length - 1);

    product_type = "";
    isProductTypeSetted = false;
    $(".npe_product_type_buy option:checked").each(function() {
      product_type += $(this).val() + "|";
      isProductTypeSetted = true;
    });
    if (isProductTypeSetted)
    response['npe_product_type'] = product_type.substring(0, product_type.length - 1);
    response['npe_collateral_type'] = $(".npe_collateral_type").val();
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
    response['npe_hq_country'] = countryVal.substring(0, countryVal.length - 1);
    if (citySetted)
    response['npe_hq_city'] = cityVal.substring(0, cityVal.length - 1);

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
    response['npe_who_i_am'] = $(".npe_who_i_am").val();
    response['npe_aum'] = $(".npe_aum_buy").val();
    response['number_of_investments'] = $(".npe_number_of_investments_buy").val();
    var investmentAmount = "";
    $(".npe_investment_amount_buy").each(function() {
      if ($(this).prop("checked")) {
        investmentAmount += $(this).val() + ",";
      }
    });
    investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
    response['investment_amount'] = investmentAmount;
    response['npe_ratio'] = $(".npe_ratio_buy").val();
    response['asset_type'] = "NPE";

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
            window.location.href = "../profile/index.php?message=success&target=<?=$redirect_target;?>";
          });
        } else {
          swal("Error!", "An unexpected error occurred, please try again!", "error");
        }
      }
    });
  }

  function setValues() {
    var values = "<?= $row["NPE_TYPE"] ?>";
    $.each(values.split("|"), function(i, e) {
      $("#npe_type_buy option[value='" + e + "']").prop("selected", true);
    });
    $("#npe_type_buy").trigger('change');
    values = "<?= $row["PRODUCT_TYPE"] ?>";
    $.each(values.split("|"), function(i, e) {
      $("#npe_product_type_buy option[value='" + e + "']").prop("selected", true);
    });
    $("#npe_product_type_buy").trigger('change');
    document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
    document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
    document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
    document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
    document.getElementById("ratio").value = "<?= $row["RATIO"] ?>";
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
    $("input[name=asset_value][value=<?= $row["VALUE_TYPE"] ?>]").attr('checked', 'checked');
    if ("<?= $row["VALUE_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["VALUE_TYPE"] ?>" == "fixed") {
      document.getElementById("npe_value_val").value = "<?= $row["VALUE_MIN"] ?>";
    } else if ("<?= $row["VALUE_TYPE"] ?>" == "range") {
      document.getElementById("npe_value_sel").value = "<?= $row["VALUE_MIN"] . '|' . $row["VALUE_MAX"] ?>";
    }
    $("#product_type").trigger('change');
    if ('' != "<?= $row["COLLATERAL_TYPE"] ?>") {
      document.getElementById("collateral_type").value = "<?= $row["COLLATERAL_TYPE"] ?>";

    } else {
      $(".collateral_type").hide();
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
        if(index == 0){
          location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select>  <div class="location_container_city"><select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select><i style="font-size: 10px;">(Optional)</i></div> </div>');
        }else{
          location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select>  <div class="location_container_city"><select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select><i style="font-size: 10px;">(Optional)</i></div>  <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
        }
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
  current_location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <div class="location_container_city"><select class="form-control hq_city" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select><i style="font-size: 10px;">(Optional)</i></div>  <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
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
      var city_selector = elem.siblings('.location_container_city').find(".hq_city");
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
$(".product_type").change(function() {
  document.getElementById("collateral_type").value = "";
  if ($(this).find("option:selected").val() == "Secured") {
    $(".collateral_type").fadeIn();
  } else {
    $(".collateral_type").fadeOut();
  }
})
</script>
