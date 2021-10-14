<!-- Start Advance Filter -->
<div class="modal fade" id="advancedFilters" data-filter="ma">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Advanced Filters</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">

          <div class="col-md-3">
            <ul class="listing-add-post1 nav nav-pills">
              <li> <a href="#dealType" data-toggle="tab" class="active"> Type </a> </li>

              <!--Company -->
              <div class="company_tabs hidden_tab_head">
                <li> <a href="#Where_company" data-toggle="tab"> Location </a> </li>
                <li> <a href="#Sector_company" data-toggle="tab"> Preferred Sector </a> </li>
                <li> <a href="#Industry_company" data-toggle="tab"> Preferred Industry </a> </li>
                <li> <a href="#TechnologyOperation_company" data-toggle="tab"> Objective </a> </li>
                <li> <a href="#InvestmentRequired_company" data-toggle="tab"> Investment Size </a> </li>
                <li> <a href="#Revenue_company" data-toggle="tab"> Preferred Revenue </a> </li>
                <li> <a href="#EbitdaMargin_company" data-toggle="tab"> Ebitda Margin </a> </li>
                <li> <a href="#Publisher_company" data-toggle="tab"> Publisher </a> </li>
                <li> <a href="#AUM_company" data-toggle="tab"> AUM </a> </li>
                <li> <a href="#PreferredInvestmentAmount_company" data-toggle="tab"> Preferred Investment Amount </a> </li>
                <!-- <li> <a href="#Investments_company" data-toggle="tab"> Investments </a> </li> -->
              </div>

              <!--Asset -->
              <div class="asset_tabs hidden_tab_head">
                <li> <a href="#Where_asset" data-toggle="tab"> HQ Location </a> </li>
                <li> <a href="#Subject_asset" data-toggle="tab"> Subject </a> </li>
                <li> <a href="#Status_asset" data-toggle="tab"> Status </a> </li>
                <li> <a href="#Condition_asset" data-toggle="tab"> Condition </a> </li>
                <li> <a href="#TotalSurface_asset" data-toggle="tab"> Total surface approx. </a> </li>
                <li> <a href="#Value_asset" data-toggle="tab"> Value </a> </li>
                <li> <a href="#Publisher_asset" data-toggle="tab"> Publisher </a> </li>
                <li> <a href="#AUM_asset" data-toggle="tab"> AUM </a> </li>
                <!-- <li> <a href="#Investments_asset" data-toggle="tab"> Investments </a> </li> -->
              </div>
            </ul>
          </div>

          <div class="col-md-9">
            <div class="tab-content pl-3">

              <div class="tab-pane active" id="dealType">
                <h1>Type</h1><br>
                <button type="button" name="button" class="btn btn-deal-custom show_section_tabs">
                  <input type="radio" name="offer" class="deal-radio offer" value="asset"> Asset
                </button>
                <button type="button" name="button" class="btn btn-deal-custom show_section_tabs">
                  <input type="radio" name="offer" class="deal-radio offer" value="company"> Company
                </button><br><br>

                <div class="company_type_section hidden_deal_container">
                  <select class="form-control offer_type_selector company_type" name="company_type">
                    <option value="" selected disabled>Choose type of company</option>
                    <option value="Business Company">Business Company</option>
                    <option value="Start Up">Start Up</option>
                  </select>
                </div>
                <div class="asset_type_section hidden_deal_container">
                  <select class="form-control offer_type_selector asset_type" name="asset_type">
                    <option value="" selected disabled>Choose type of asset</option>
                    <option value="real_estate">Real Estate</option>
                    <option value="npe">NPE</option>
                    <option value="credits">Credits</option>
                  </select>
                </div>
                <br><br>
                <div class="type_category_section type_category_real_estate">
                  <div class="row">
                    <div class="col-12">
                      <h4>Choose type of Real Estate</h4><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary all_selector_checkbox_main" type="checkbox" value="All"><span class="category_checkbox_label">All</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Building"><span class="category_checkbox_label">Building</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Resort"><span class="category_checkbox_label">Resort</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Hotel"><span class="category_checkbox_label">Hotel</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Private House"><span class="category_checkbox_label">Private House</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Land"><span class="category_checkbox_label">Land</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="all_selector_checkbox type_category_checkbox_primary" type="checkbox" value="Residential"><span class="category_checkbox_label">Residential (all)</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Single-family homes"><span class="category_checkbox_label_sub">Single-family homes</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Multi-family homes"><span class="category_checkbox_label_sub">Multi-family homes</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Apartments"><span class="category_checkbox_label_sub">Apartments</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Condos"><span class="category_checkbox_label_sub">Condos</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Private House"><span class="category_checkbox_label_sub">Private House</span><br>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="all_selector_checkbox type_category_checkbox_primary" type="checkbox" value="Commercial"><span class="category_checkbox_label">Commercial (all)</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Office"><span class="category_checkbox_label_sub">Office</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Retail"><span class="category_checkbox_label_sub">Retail</span><br>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="all_selector_checkbox type_category_checkbox_primary" type="checkbox" value="Industrial"><span class="category_checkbox_label">Industrial (all)</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Manufacturing"><span class="category_checkbox_label_sub">Manufacturing</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Storage and Distribution"><span class="category_checkbox_label_sub">Storage and Distribution</span><br>
                      <input class="type_category_checkbox_secondary" type="checkbox" value="Flex space"><span class="category_checkbox_label_sub">Flex space</span><br>
                    </div>
                  </div>
                </div>
                <div class="type_category_section type_category_npl">
                  <div class="row">
                    <div class="col-12">
                      <h4>Choose type of NPL</h4><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <input class="all_selector_checkbox_main type_category_checkbox_primary" type="checkbox" value="All"><span class="category_checkbox_label">All</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Past due"><span class="category_checkbox_label">Past due</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Unlikely to pay"><span class="category_checkbox_label">Unlikely to pay</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="NPL"><span class="category_checkbox_label">NPL</span>
                    </div>
                  </div>
                </div>
                <div class="type_category_section type_category_credits">
                  <div class="row">
                    <div class="col-12">
                      <h4>Choose type of Credit</h4><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary all_selector_checkbox_main" type="checkbox" value="All"><span class="category_checkbox_label">All</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Past due"><span class="category_checkbox_label">Past due</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Unlikely to pay"><span class="category_checkbox_label">Unlikely to pay</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="NPL"><span class="category_checkbox_label">NPL</span>
                    </div>
                  </div>
                </div>
                <div class="type_category_section type_category_start_up">
                  <div class="row">
                    <div class="col-12">
                      <h4>Choose type of Startup</h4><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary all_selector_checkbox_main" type="checkbox" value="All"><span class="category_checkbox_label">All</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Pre-seed Stage"><span class="category_checkbox_label">Pre-seed Stage</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Seed Stage"><span class="category_checkbox_label">Seed Stage</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Early Stage"><span class="category_checkbox_label">Early Stage</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Growth Stage"><span class="category_checkbox_label">Growth Stage</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Expansion Phase"><span class="category_checkbox_label">Expansion Phase</span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input class="type_category_checkbox_primary" type="checkbox" value="Exit Phase"><span class="category_checkbox_label">Exit Phase</span>
                    </div>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
                function getPropertyType() {
                  var secondary_category_type = [];
                  var category_object = [];
                  $(".type_category_checkbox_primary:visible").each(function() {
                    var elem = $(this);
                    if (elem.prop("checked")) {
                      if (elem.val() == "All") {
                        return category_object;
                      } else {
                        secondary_category_type = [];
                        elem.siblings(".type_category_checkbox_secondary:checked").each(function() {
                          secondary_category_type.push($(this).val());
                        });
                        if (secondary_category_type.length == 0)
                          secondary_category_type.push("");
                        var key = elem.val();
                        category_object.push({
                          [key]: secondary_category_type
                        });
                      }
                    }
                  });

                  return category_object;
                }
              </script>

              <?php

              include 'filters/buy_company_business.php';
              include 'filters/buy_asset_real_estate.php';

              ?>

            </div>
          </div>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="appyDealFilter()">Apply</button>
      </div>

      <script type="text/javascript">
        function appyDealFilter() {
          var filter_data = [];
          if ($(".deal-radio:checked").val()) {
            $("." + $(".deal-radio:checked").val() + "_tabs a").each(function() {

              var table_name = $($(this).attr("href")).data("column");

              var table_data = [];
              $($(this).attr("href")).find(".selected").each(function() {
                if ($(this).data("search") == undefined) {
                  return false;
                }
                table_data.push($(this).data("search"));
                console.log($(this).data("search"))

              });
              $($(this).attr("href")).find("input:checked").each(function() {
                if ($(this).val() == "All") {
                  return false;
                }
                table_data.push($(this).val());

              });

              filter_data.push({
                [table_name]: table_data
              });
            });
            var propertyType = getPropertyType();
            filter_data.push({
              "propertyType": propertyType
            });
            console.log(filter_data);
          }
          var assetType = '';
          if ($(".offer:checked").val() == "asset") {
            assetType = $(".asset_type option:checked").val();
          } else {
            assetType = $(".company_type option:checked").val()
          }

          $.ajax({
            type: 'POST',
            url: '../../assets/php/getBuyFilterData.php',
            data: {
              action: "buy",
              filterData: filter_data,
              deal: $(".offer:checked").val(),
              assetType: assetType
            },
            success: function(data) {
              console.log("\n")
              console.log(data);
            },
            error: function(request, status, error) {
              console.log(error);
              console.log(request.responseText);
            }
          });
        }
      </script>

    </div>
  </div>
</div>

<!-- End Advance Filter -->
