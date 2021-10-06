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
    <div class="sell_asset_real_estate">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Type of Real Estate</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
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
                <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-2 col-sm-12 input-container">
                <input type="number" name="construction_year" id="foundation_year" class="form-control re_construction_year" placeholder="Type a year">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Total surface approx.</span></span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control re_surface_area" id="surface_area" placeholder="Type a value">
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
                        <select class="form-control hq_country re_hq_country" name="hq_country" id="country">
                            <option value="" selected disabled>Choose a country</option>
                        </select>
                        <select class="form-control hq_city re_hq_city" name="hq_city" id="city">
                            <option value="" selected disabled>Choose a city</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Default Currency</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control default_currency re_default_currency" name="company_type" id="currency">
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
            <div class="col-md-4 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control re_yearly_return" id="yearly_return" placeholder="Insert a value">
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
            <div class="col-md-9 col-sm-12 input-container">
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
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="general_description" rows="3" id="description" class="form-control re_general_description" placeholder="Type a description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Key Elements</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="key_elements" rows="3" id="keyElem" class="form-control re_key_elements" placeholder="Co-Investor, Institutional Investor, Individual, Corporation..."></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Image</span>
                <span class="deal-subhead">(Max 5MB)</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <div class="input-group">
                    <input type="text" id="adImage-list" hidden value="">
                    <input type="file" name="files[]" class="adImage" id="adImage" multiple="false">
                </div>
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