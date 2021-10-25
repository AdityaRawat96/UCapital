<?php
session_start();
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
            <div class="sell_asset_npe">
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Type of NPE</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <select class="form-control npe_type" name="npe_type" id="npe_type" data-placeholder="Choose type of NPE" multiple="multiple">
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
                  <select class="form-control product_type npe_product_type" name="product_type" data-placeholder="Choose type of Loan/Product" id="product_type" multiple="multiple">
                    <option value="NPL">NPL</option>
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
                    <div class="col-md-12 col-sm-12 location_container">
                      <select class="form-control hq_country npe_hq_country" name="hq_country" id="country">
                        <option value="" selected disabled>Choose a country</option>
                      </select>
                      <select class="form-control hq_city npe_hq_city" name="hq_city" id="city">
                        <option value="" selected disabled>Choose a city</option>
                      </select>
                      <input type="text" name="state" value="" class="form-control npe_state" id="state" placeholder="Enter State">
                      <input type="number" name="post_code" value="" class="form-control npe_post_code" id="zipcode" placeholder="Enter Zip/Postal code">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Description</span>
                </div>
                <div class="col-md-9 col-sm-12 input-container input-group">
                  <textarea name="general_description" rows="3" class="form-control npe_description" id="description" placeholder="Type a description"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Default Currency</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control default_currency npe_default_currency" id="currency" name="company_type">
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
                  <span>Original Amount</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="original_amount" id="original_amount" value="" class="form-control npe_original_amount" placeholder="Enter a value">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Asking Price</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="asking_price" id="asking_price" value="" class="form-control npe_asking_price" placeholder="Enter a value">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Market Value</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <input type="number" name="market_value" id="market_value" value="" class="form-control npe_market_value" placeholder="Enter a value">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Lien Position</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control lien_position npe_lien_position" name="lien_position" id="lien_position">
                    <option value="" selected disabled>Choose lien position</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Judicialized</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control judicialized npe_judicialized" name="judicialized" id="judicialized">
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
                  <textarea name="borrower_details" id="borrower_details" rows="3" class="form-control npe_borrower_details" placeholder="Type borrower details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                  <span>Ratio</span>
                </div>
                <div class="col-md-4 col-sm-12 input-container input-group">
                  <select class="form-control ratio npe_ratio" id="ratio" name="ratio">
                    <option value="" selected disabled>Choose an option</option>
                    <option value="OB">OB</option>
                    <option value="Rate">Rate</option>
                    <option value="Discounted Ratio">Discounted Ratio</option>
                    <option value="Surface">Surface</option>
                  </select>
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
    $("#npe_type").select2();
    $("#product_type").select2();
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
              location.reload();
            });
        } else {
          swal("Error!", "An unexpected error occurred, please try again!", "error");
        }
      }
    });
  }

  function setValues() {
    var values = "<?= $row["NPE_TYPE"] ?>";
    $.each(values.split(","), function(i, e) {
      $("#npe_type option[value='" + e + "']").prop("selected", true);
    });
    $("#npe_type").trigger('change');
    values = "<?= $row["PRODUCT_TYPE"] ?>";
    $.each(values.split(","), function(i, e) {
      $("#product_type option[value='" + e + "']").prop("selected", true);
    });
    $("#product_type").trigger('change');
    if ('' != "<?= $row["COLLATERAL_TYPE"] ?>") {
      document.getElementById("collateral_type").value = "<?= $row["COLLATERAL_TYPE"] ?>";

    } else {
      $(".collateral_type").hide();
    }
    document.getElementById("country").value = "<?= $row["COUNTRY"] ?>";
    document.getElementById("city").value = "<?= $row["CITY"] ?>";
    document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
    document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
    document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
    document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
    document.getElementById("borrower_details").value = "<?= $row["BORROWER_DETAIL"] ?>";
    document.getElementById("original_amount").value = "<?= $row["ORG_AMOUNT"] ?>";
    document.getElementById("asking_price").value = "<?= $row["ASKING_PRICE"] ?>";
    document.getElementById("market_value").value = "<?= $row["MARKET_VALUE"] ?>";
    document.getElementById("ratio").value = "<?= $row["RATIO"] ?>";
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
        var countryVal = "";
        $(".hq_country option").each(function() {
          if ($(this).text() == "<?= $row['COUNTRY'] ?>") {
            $(this).attr('selected', 'selected');
            countryVal = $(this).val();
          }
        });
        $.ajax({
          type: 'POST',
          url: "../../assets/php/getCities.php",
          dataType: 'json',
          data: {
            country_id: countryVal
          },
          success: function(data) {
            $('.hq_city').html("");
            $('.hq_city').append($('<option>', {
              value: "",
              text: "Choose a city",
              selected: true,
              disabled: true
            }));
            $.each(data, function(index, element) {
              $('.hq_city').append($('<option>', {
                value: element.city,
                text: element.city
              }));
            });
            document.getElementById("city").value = "<?= $row['CITY'] ?>";
          }
        });
      }
    });

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
  $(".product_type").change(function() {
    document.getElementById("collateral_type").value = "";
    if ($(this).find("option:selected").val() == "Secured") {
      $(".collateral_type").fadeIn();
    } else {
      $(".collateral_type").fadeOut();
    }
  })
</script>
