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
    <div class="sell_asset_npe">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Type of NPE</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control npe_type" name="npe_type" id="npe_type">
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
                <select class="form-control product_type npe_product_type" name="product_type" id="product_type">
                    <option value="" selected disabled>Choose type of Loan/Product</option>
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
                <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="description" rows="3" class="form-control npe_description" id="description" placeholder="Type a description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Default Currency</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control default_currency npe_default_currency" id="currency" name="company_type">
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
                <span>Original Amount</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="original_amount" id="original_amount" value="" class="form-control npe_original_amount" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Asking Price</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="asking_price" id="asking_price" value="" class="form-control npe_asking_price" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Market Value</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="market_value" id="market_value" value="" class="form-control npe_market_value" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Lien Position</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
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
            <div class="col-md-4 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="borrower_details" id="borrower_details" rows="3" class="form-control npe_borrower_details" placeholder="Type borrower details"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Ratio</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
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
        response['npe_type'] = $(".npe_type").val();
        response['npe_product_type'] = $(".npe_product_type").val();
        response['npe_collateral_type'] = $(".npe_collateral_type").val();
        response['npe_hq_country'] = $(".npe_hq_country").val();
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
            }
        });
    }

    function setValues() {
        document.getElementById("npe_type").value = "<?= $row["NPE_TYPE"] ?>";
        document.getElementById("product_type").value = "<?= $row["PRODUCT_TYPE"] ?>";
        if ('' != "<?= $row["COLLATERAL_TYPE"] ?>") {
            document.getElementById("collateral_type").value = "<?= $row["COLLATERAL_TYPE"] ?>";

        } else {
            $(".collateral_type").hide();
        }
        document.getElementById("country").value = "<?= $row["COUNTRY"] ?>";
        document.getElementById("city").value = "<?= $row["CITY"] ?>";
        document.getElementById("state").value = "<?= $row["STATE"] ?>";
        document.getElementById("zipcode").value = "<?= $row["POSTAL"] ?>";
        document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
        document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
        document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
        document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
        document.getElementById("borrower_details").value = "<?= $row["BORROWER_DETAIL"] ?>";
        document.getElementById("original_amount").value = "<?= $row["ORG_AMOUNT"] ?>";
        document.getElementById("asking_price").value = "<?= $row["ASKING_PRICE"] ?>";
        document.getElementById("market_value").value = "<?= $row["MARKET_VALUE"] ?>";
        document.getElementById("ratio").value = "<?= $row["RATIO"] ?>";
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
                document.getElementById("country").value = "<?= $row['COUNTRY'] ?>";
            }
        });
        $.ajax({
            type: 'POST',
            url: "../../assets/php/getCities.php",
            dataType: 'json',
            data: {
                country_id: <?= $row['COUNTRY'] ?>
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