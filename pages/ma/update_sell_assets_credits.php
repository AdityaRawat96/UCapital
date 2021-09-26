<?php
session_start();
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
    <div class="sell_asset_credits">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Default Currency</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control default_currency credit_default_currency" id="currency" name="company_type">
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
                <span>Borrower</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control borrower_type credit_borrower_type" id="borrower_type" name="borrower_type">
                    <option value="" selected disabled>Choose type of Borrower</option>
                    <option value="Household" data-categories="Super Prime, Prime, Subprime">Household</option>
                    <option value="Corporate" data-categories="Investment Grade, High Yeild, Leveraged Loans">Corporate</option>
                </select>
            </div>
        </div>
        <div class="borrower_type_category_container">
            <div class="row">
                <div class="col-md-3 col-sm-12 deal-heading">
                    <span>Type of <span class="dynamic_category_borrower"></span></span>
                </div>
                <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-4 col-sm-12 input-container">
                <input type="date" name="maturity" id="maturity" value="" class="form-control credit_maturity">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Loan/Product type</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
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
                <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <div class="row location_holder">
                    <div class="col-md-12 col-sm-12 location_container">
                        <select class="form-control hq_country credit_hq_country" name="hq_country" id="country">
                            <option value="" selected disabled>Choose a country</option>
                        </select>
                        <select class="form-control hq_city credit_hq_city" name="hq_city" id="city">
                            <option value="" selected disabled>Choose a city</option>
                        </select>
                        <input type="text" name="state" value="" id="state" class="form-control credit_state" placeholder="Enter State">
                        <input type="number" name="post_code" value="" id="zipcode" class="form-control credit_post_code" placeholder="Enter Zip/Postal code">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Lien Position</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="general_description" rows="3" id="description" class="form-control credit_description" placeholder="Type a description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Original Amount</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="original_amount" id="original_amount" value="" class="form-control credit_original_amount" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Asking Price</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="asking_price" id="asking_price" value="" class="form-control credit_asking_price" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Market Value</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="market_value" id="market_value" value="" class="form-control credit_market_value" placeholder="Enter a value">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Judicialized</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="borrower_details" id="borrower_details" rows="3" class="form-control credit_borrower_details" placeholder="Type borrower details"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Ratio OB %</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="ratio_ob" id="ratio_ob" value="" class="form-control credit_ratio_ob" placeholder="Enter a value between 0 and 100">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Rate</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="text" name="rate" id="rate" value="" class="form-control credit_rate" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Dicounted Ratio %</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="discounted_ratio" id="discounted_ratio" value="" class="form-control credit_discounted_ratio" placeholder="Enter a value between 0 and 100">
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
        response['credit_borrower_type'] = $(".credit_borrower_type").val();
        response['credit_borrower_type_category'] = $(".credit_borrower_type_category").val();
        response['credit_type'] = $(".credit_type").val();
        response['credit_typology'] = $(".credit_typology").val();
        response['credit_maturity'] = $(".credit_maturity").val();
        response['credit_product_type'] = $(".credit_product_type").val();
        response['credit_collateral_type'] = $(".credit_collateral_type").val();
        response['credit_hq_country'] = $(".credit_hq_country").val();
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
            }
        });
    }


    function setValues() {
        document.getElementById("credit_type").value = "<?= $row["CREDIT_TYPE"] ?>";
        document.getElementById("typology").value = "<?= $row["TYPOLOGY"] ?>";
        document.getElementById("maturity").value = "<?= $row["MATURITY"] ?>";
        document.getElementById("borrower_type").value = "<?= $row["BORROWER"] ?>";
        document.getElementById("product_type").value = "<?= $row["PRODUCT_TYPE"] ?>";
        document.getElementById("country").value = "<?= $row["COUNTRY"] ?>";
        document.getElementById("city").value = "<?= $row["CITY"] ?>";
        document.getElementById("state").value = "<?= $row["STATE"] ?>";
        document.getElementById("zipcode").value = "<?= $row["POSTAL_CODE"] ?>";
        document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
        document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
        document.getElementById("lien_position").value = "<?= $row["LIEN_POSITION"] ?>";
        document.getElementById("judicialized").value = "<?= $row["JUDICIALIZED"] ?>";
        document.getElementById("borrower_details").value = "<?= $row["BORROWER_DETAILS"] ?>";
        document.getElementById("original_amount").value = "<?= $row["ORIGINAL_AMOUNT"] ?>";
        document.getElementById("asking_price").value = "<?= $row["ASKING_PRICE"] ?>";
        document.getElementById("market_value").value = "<?= $row["MARKET_VALUE"] ?>";
        document.getElementById("ratio_ob").value = "<?= $row["RATIO_OB"] ?>";
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