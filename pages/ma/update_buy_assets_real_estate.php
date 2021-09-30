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

    <div class="buy_asset_real_estate">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Type of Real Estate</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
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
                <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control deal_subject re_deal_subject_buy" name="deal_subject" id="deal_subject">
                    <option value="" selected disabled>Choose the subject</span></option>
                    <option value="totality buying">Totality Buying</option>
                    <option value="looking for co-investors">looking for Co-Investors</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Status of the asset</span></span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control asset_status re_asset_status_buy" name="asset_status" id="asset_status">
                    <option value="" selected disabled>Choose the status</span></option>
                    <option value="Existing property">Existing property</option>
                    <option value="Under construction">Under construction</option>
                    <option value="Planned Only">Planned Only</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Condition of the asset</span></span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control re_surface_area_buy" id="surface_area" placeholder="Type a value">
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
            <div class="col-md-9 col-sm-12 input-container">
                <div class="row location_holder">
                    <div class="col-md-8 col-sm-12 location_container">
                        <select class="form-control hq_country re_hq_country_buy" name="hq_country" id="country">
                            <option value="" selected disabled>Choose a country</option>
                        </select>
                        <select class="form-control hq_city re_hq_city_buy" name="hq_city" id="city">
                            <option value="" selected disabled>Choose a city</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 deal-heading">
            <span>Default Currency</span>
        </div>
        <div class="col-md-4 col-sm-12 input-container">
            <select class="form-control default_currency re_default_currency_buy" name="company_type" id="default_currency">
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
            <span>Asset value</span>
            <span class="deal-subhead">(Choose one)</span>
        </div>
        <div class="col-md-4 col-sm-12 input-container">
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
                    <span class="input-group-text">.00</span>
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
                        <option value="0|500000">from 0 to 500k</option>
                        <option value="500000|1000000">from 500k to 1 million</option>
                        <option value="1000000|10000000">from 1 to 10 million</option>
                        <option value="10000000|50000000">from 10 to 50 million</option>
                        <option value="50000000|100000000">over 50 million</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 deal-heading">
            <span>Who I am</span>
        </div>
        <div class="col-md-9 col-sm-12 input-container">
            <select class="form-control default_currency re_who_i_am_buy" name="who_i_am" id="who_i_am">
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
            <input type="number" name="aum" value="" id="aum" class="form-control re_aum_buy" placeholder="Enter a value">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 deal-heading">
            <span>General Description</span>
        </div>
        <div class="col-md-9 col-sm-12 input-container">
            <textarea name="general_description" rows="3" id="description" class="form-control re_general_description_buy" placeholder="Type a description"></textarea>
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
        response['re_type'] = $(".re_type_buy").val();
        response['re_type_category'] = $(".re_type_category_buy").val();
        response['re_deal_subject'] = $(".re_deal_subject_buy").val();
        response['re_asset_status'] = $(".re_asset_status_buy").val();
        response['re_condition_status'] = $(".re_condition_status_buy").val();
        response['re_surface_area'] = $(".re_surface_area_buy").val();
        response['re_hq_country'] = $(".re_hq_country_buy").val();
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
            }
        });
    }

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
        document.getElementById("default_currency").value = "<?= $row["CURRENCY"] ?>";
        document.getElementById("who_i_am").value = "<?= $row["WHO_I_AM"] ?>";
        document.getElementById("aum").value = "<?= $row["AUM"] ?>";
        document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
        $("input[name=asset_value][value=<?= $row["ASSET_VAL_TYPE"] ?>]").attr('checked', 'checked');
        if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "fixed") {
            document.getElementById("asset_value").value = "<?= $row["ASSET_VAL_MIN"] ?>";
        } else if ("<?= $row["ASSET_VAL_TYPE"] ?>" == "range") {
            document.getElementById("asset_value_range").value = "<?= $row["ASSET_VAL_MIN"] . '|' . $row["ASSET_VAL_MAX"] ?>";
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