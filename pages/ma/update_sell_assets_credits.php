<?php
session_start();
$redirect_target="sell";
if (isset($_SESSION['email'])) {
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $id = $_GET["id"];
  $sql = "SELECT * FROM credit where id=$id";
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
            <div class="sell_asset_credits">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Default Currency</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control default_currency credit_default_currency" id="currency" name="company_type">
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
                  <span>Borrower</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control borrower_type credit_borrower_type" id="borrower_type" name="borrower_type">
                    <option value="" selected disabled>Choose type of Borrower</option>
                    <option value="Household" data-categories="Super Prime, Prime, Subprime">Household</option>
                    <option value="Corporate" data-categories="Investment Grade, High Yield, Leveraged Loans">Corporate</option>
                  </select>
                </div>
              </div>
              <div class="borrower_type_category_container">
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Type of <span class="dynamic_category_borrower"></span></span>
                  </div>
                  <div class="col-md-9 col-sm-12 input-container input-group">
                    <select class="form-control borrower_type_category credit_borrower_type_category" id="borrower_type_category" name="borrower_type_category">
                      <option value="" selected disabled>Choose type of <span class="dynamic_category_borrower"></span></option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Type of Credit</span>
                </div>
                <div class="col-md-9 col-sm-12 input-containe input-groupr">
                  <select class="form-control credit_type" name="credit_type" id="credit_type">
                    <option value="" selected disabled>Choose type of Credit</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Public Administration Receivables">Public Administration Receivables</option>
                    <option value="Invoices">Invoices</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Typology</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control typology credit_typology" name="typology" id="typology">
                    <option value="" selected disabled>Choose Typology</option>
                    <option value="Recourse">Recourse</option>
                    <option value="Non-recourse">Non-recourse</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Maturity</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="date" name="maturity" id="maturity" value="" class="form-control credit_maturity">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Loan/Product type</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control product_type credit_product_type" name="product_type" id="product_type">
                    <option value="" selected disabled>Choose type of Loan/Product</option>
                    <option value="Secured">Secured</option>
                    <option value="Unsecured">Unsecured</option>
                    <option value="Enforceable">Enforceable</option>
                  </select>
                </div>
              </div>
              <div class="collateral_type">
                <div class="row">
                  <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Collateral</span>
                  </div>
                  <div class="col-md-9 col-sm-12 input-container input-group">
                    <select class="form-control collateral_type credit_collateral_type" name="collateral_type" id="collateral_type">
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
                  <span>Lien Position</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control lien_position credit_lien_position" name="lien_position" id="lien_position">
                    <option value="" selected disabled>Choose lien position</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>General Description</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="general_description" rows="3" id="description" class="form-control credit_description" placeholder="Type a description"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Original Amount</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="original_amount" id="original_amount" value="" class="form-control credit_original_amount" placeholder="Enter a value">
                  <div class="input-group-append">
                    <span class="input-group-text span-currency-icon">€</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Asking Price</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="asking_price" id="asking_price" value="" class="form-control credit_asking_price" placeholder="Enter a value">
                  <div class="input-group-append">
                    <span class="input-group-text span-currency-icon">€</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Market Value</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="market_value" id="market_value" value="" class="form-control credit_market_value" placeholder="Enter a value">
                  <div class="input-group-append">
                    <span class="input-group-text span-currency-icon">€</span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Judicialized</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control judicialized credit_judicialized" name="judicialized" id="judicialized">
                    <option value="" selected disabled>Choose an option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Borrower Details</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="borrower_details" id="borrower_details" rows="3" class="form-control credit_borrower_details" placeholder="Type borrower details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Interest Rate</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <div class="input-group">
                    <input type="number" name="rate" id="rate" min=0 max=100 class="form-control credit_rate" placeholder="Enter a value">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Discounted Rate</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <div class="input-group">
                    <input type="number" name="discounted_ratio" id="discounted_ratio" value="" class="form-control credit_discounted_ratio" placeholder="Enter a value between 0 and 100">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
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
    response['credit_borrower_type'] = $(".credit_borrower_type").val();
    response['credit_borrower_type_category'] = $(".credit_borrower_type_category").val();
    response['credit_type'] = $(".credit_type").val();
    response['credit_typology'] = $(".credit_typology").val();
    response['credit_maturity'] = $(".credit_maturity").val();
    response['credit_product_type'] = $(".credit_product_type").val();
    response['credit_collateral_type'] = $(".credit_collateral_type").val();
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
    response['credit_hq_country'] = countryVal.substring(0, countryVal.length - 1);
    if (citySetted)
    response['credit_hq_city'] = cityVal.substring(0, cityVal.length - 1);
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
    response['credit_ratio_ob'] = 0;
    response['credit_rate'] = $(".credit_rate").val();
    response['credit_discounted_ratio'] = $(".credit_discounted_ratio").val();
    response['asset_type'] = "Credit";

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
    document.getElementById("credit_type").value = "<?= $row["CREDIT_TYPE"] ?>";
    document.getElementById("typology").value = "<?= $row["TYPOLOGY"] ?>";
    document.getElementById("maturity").value = "<?= $row["MATURITY"] ?>";
    document.getElementById("borrower_type").value = "<?= $row["BORROWER"] ?>";
    document.getElementById("product_type").value = "<?= $row["PRODUCT_TYPE"] ?>";
    document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
    document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
    document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
    document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
    document.getElementById("borrower_details").value = "<?= $row["BORROWER_DETAILS"] ?>";
    document.getElementById("original_amount").value = "<?= $row["ORIGINAL_AMOUNT"] ?>";
    document.getElementById("asking_price").value = "<?= $row["ASKING_PRICE"] ?>";
    document.getElementById("market_value").value = "<?= $row["MARKET_VALUE"] ?>";
    document.getElementById("rate").value = "<?= $row["RATE"] ?>";
    document.getElementById("discounted_ratio").value = "<?= $row["DISCOUNTED_RATIO"] ?>";
    if ('' != "<?= $row["BORROWER_SUBCAT"] ?>") {
      $(".borrower_type_category").html("");
      $(".borrower_type_category").append($('<option>', {
        value: "",
        text: "Choose type of " + "<?= $row["BORROWER_SUBCAT"] ?>",
        selected: true,
        disabled: true
      }));
      var category_array = $(".borrower_type").find("option:selected").data("categories").split(",");
      for (var i = 0; i < category_array.length; i++) {
        $(".borrower_type_category").append($('<option>', {
          value: category_array[i].toLowerCase(),
          text: category_array[i]
        }));
      }
      $(".dynamic_category").html("<?= $row["BORROWER_SUBCAT"] ?>");
      document.getElementById("borrower_type_category").value = "<?= $row["BORROWER_SUBCAT"] ?>";
      $(".borrower_type_category_container").show();
    } else {
      $(".borrower_type_category_container").hide();
    }
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

<!-- NPE Sell -->
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
