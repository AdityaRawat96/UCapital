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
    <div class="buy_asset_npe">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Type of NPE</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control npe_type npe_type_buy" id="npe_type_buy" name="npe_type">
                    <option value="" selected disabled>Choose type of NPE</option>
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
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control product_type npe_product_type_buy" id="npe_product_type_buy" name="product_type">
                    <option value="" selected disabled>Choose type of Loan/Product</option>
                    <option value="Secured">Secured</option>
                    <option value="Unsecured">Unsecured</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Location</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <div class="row location_holder">
                    <div class="col-md-12 col-sm-12 location_container">
                        <select class="form-control hq_country npe_hq_country_buy" name="hq_country" id="country">
                            <option value="" selected disabled>Choose a country</option>
                        </select>
                        <select class="form-control hq_city npe_hq_city_buy" name="hq_city" id="city">
                            <option value="" selected disabled>Choose a city</option>
                        </select>
                        <input type="text" name="state" value="" class="form-control npe_state_buy" id="state" placeholder="Enter State">
                        <input type="number" name="post_code" value="" class="form-control npe_post_code_buy" id="zipcode" placeholder="Enter Zip/Postal code">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Description</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="description" rows="3" class="form-control npe_description_buy" id="description" placeholder="Type a description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Default Currency</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control default_currency npe_default_currency_buy" id="currency" name="company_type">
                    <option data-value="€" selected value='Euro'>Euro</option>
                    <option data-value="$" value='Dollar'>Dollar</option>
                    <option data-value="C$" value='Canadian Dollar'>Canadian Dollar</option>
                    <option data-value="£" value='Pound'>Pound</option>
                    <option data-value="A" value='Australian Dollar'>Australian Dollar</option>
                    <option data-value="¥" value='Yen'>Yen</option>
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
            <div class="col-md-4 col-sm-12 input-container">
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
                        <span class="input-group-text">.00</span>
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
                <span>Lien Position</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
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
                <span>Judicialized</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control judicialized npe_judicialized_buy" id="judicialized" name="judicialized">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="borrower_details" rows="3" class="form-control npe_borrower_details_buy" id="borrower_details" placeholder="Type borrower details"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Ratio</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control ratio npe_ratio_buy" id="ratio" name="ratio">
                    <option value="" selected disabled>Choose an option</option>
                    <option value="OB">OB</option>
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
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control default_currency npe_who_i_am" id="who_i_am" name="who_i_am">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Individual">Individual</option>
                    <option value="Corporation">Corporation</option>
                    <option value="PE Fund">PE Fund</option>
                    <option value="VC Fund">VC Fund</option>
                    <option value="Asset Management">Asset Management</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>AUM</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="aum" value="" class="form-control npe_aum_buy" id="aum" placeholder="Enter a value">
            </div>
        </div>
    </div>

    <input type="button" class="btn btn-success" value="Update" onclick="update()" style="width: 60%; margin-left: 20%;" />
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

<script>
    function update() {
        response = {};
        response['npe_type'] = $(".npe_type_buy").val();
        response['npe_product_type'] = $(".npe_product_type_buy").val();
        response['npe_hq_country'] = $(".npe_hq_country_buy option:selected").text();
        response['npe_hq_city'] = $(".npe_hq_city_buy").val();
        response['npe_state'] = $(".npe_state_buy").val();
        response['npe_post_code'] = $(".npe_post_code_buy").val();
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
            }
        });
    }

    function setValues() {
        document.getElementById("npe_type_buy").value = "<?= $row["NPE_TYPE"] ?>";
        document.getElementById("npe_product_type_buy").value = "<?= $row["PRODUCT_TYPE"] ?>";
        document.getElementById("country").value = "<?= $row["COUNTRY"] ?>";
        document.getElementById("city").value = "<?= $row["CITY"] ?>";
        document.getElementById("state").value = "<?= $row["STATE"] ?>";
        document.getElementById("zipcode").value = "<?= $row["POSTAL"] ?>";
        document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
        document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
        document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
        document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
        document.getElementById("borrower_details").value = "<?= $row["BORROWER_DETAIL"] ?>";
        document.getElementById("ratio").value = "<?= $row["RATIO"] ?>";
        document.getElementById("who_i_am").value = "<?= $row["WHO_I_AM"] ?>";
        document.getElementById("aum").value = "<?= $row["AUM"] ?>";
        $("input[name=asset_value][value=<?= $row["VALUE_TYPE"] ?>]").attr('checked', 'checked');
        if ("<?= $row["VALUE_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["VALUE_TYPE"] ?>" == "fixed") {
            document.getElementById("npe_value_val").value = "<?= $row["VALUE_MIN"] ?>";
        } else if ("<?= $row["VALUE_TYPE"] ?>" == "range") {
            document.getElementById("npe_value_sel").value = "<?= $row["VALUE_MIN"] . '|' . $row["VALUE_MAX"] ?>";
        }
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