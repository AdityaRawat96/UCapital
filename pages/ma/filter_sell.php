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
              <div class="hidden_tab_content">
                <div class="company_tabs hidden_tab_head">
                  <li> <a href="#Where_company" data-toggle="tab"> HQ Location </a> </li>
                  <li> <a href="#TechnologyOperation_company" data-toggle="tab"> Typology of operation </a> </li>
                  <li> <a href="#Sector_company" data-toggle="tab"> Sector </a> </li>
                  <li> <a href="#Industry_company" data-toggle="tab"> Industry </a> </li>
                  <li> <a href="#AreaOfActivity_company" data-toggle="tab"> Area of activity </a> </li>
                  <li> <a href="#Employees_company" data-toggle="tab"> Number of employees </a> </li>
                  <li> <a href="#Value_company" data-toggle="tab"> Company Value </a> </li>
                  <li> <a href="#InvestmentRequired_company" data-toggle="tab"> Investment Required </a> </li>
                  <li> <a href="#Revenue_company" data-toggle="tab"> Actual Revenue </a> </li>
                  <li> <a href="#EbitdaMargin_company" data-toggle="tab"> Ebitda Margin </a> </li>
                </div>
              </div>

              <!--Asset -->
              <div class="hidden_tab_content">
                <div class="asset_tabs hidden_tab_head">
                  <li> <a href="#Where_asset" data-toggle="tab"> Location </a> </li>
                  <li> <a href="#Subject_asset" data-toggle="tab"> Subject </a> </li>
                  <li> <a href="#Status_asset" data-toggle="tab"> Status </a> </li>
                  <li> <a href="#TotalSurface_asset" data-toggle="tab"> Total surface approx. </a> </li>
                  <li> <a href="#Value_asset" data-toggle="tab"> Asset </a> </li>
                  <li> <a href="#InvestmentRequired_asset" data-toggle="tab"> Investment Required </a> </li>
                  <li> <a href="#YearlyReturn_asset" data-toggle="tab"> Yearly Return </a> </li>
                  <li> <a href="#VendorType_asset" data-toggle="tab"> Vendor Type </a> </li>
                </div>
              </div>
            </ul>
          </div>

          <div class="col-md-9">
            <div class="tab-content pl-3">

              <div class="tab-pane active" id="dealType">
                <h1>Type</h1><br>
                <button type="button" name="button" class="btn btn-deal-custom show_section_tabs">
                  <input type="radio" name="offer" class="deal-radio offer searchable" value="asset" data-search="asset"> Asset
                </button>
                <button type="button" name="button" class="btn btn-deal-custom show_section_tabs">
                  <input type="radio" name="offer" class="deal-radio offer searchable" value="company" data-search="company"> Company
                </button><br><br>

                <div class="company_type_section hidden_deal_container">
                  <select class="form-control offer_type_selector company_type" name="company_type">
                    <option value="" selected disabled>Choose type of company</option>
                    <option class="searchable" value="Business Company" data-search="Business Company">Business Company</option>
                    <option class="searchable" value="Start Up" data-search="Start Up">Start Up</option>
                  </select>
                </div>
                <div class="asset_type_section hidden_deal_container">
                  <select class="form-control offer_type_selector asset_type" name="asset_type">
                    <option value="" selected disabled>Choose type of asset</option>
                    <option class="searchable" data-search="Real Estate" value="real_estate">Real Estate</option>
                    <option class="searchable" data-search="NPE" value="npe">NPE</option>
                    <option class="searchable" data-search="Credits" value="credits">Credits</option>
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
              include 'filters/sell_company_business.php';
              include 'filters/sell_asset_real_estate.php';
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
        }
        var propertyType = getPropertyType();
        filter_data.push({
          "propertyType": propertyType
        });
        var assetType = '';
        if ($(".offer:checked").val() == "asset") {
          assetType = $(".asset_type option:checked").val();
        } else {
          assetType = $(".company_type option:checked").val()
        }

        $.ajax({
          type: 'POST',
          url: '../../assets/php/getSellFilterData.php',
          data: {
            action: "sell",
            filterData: filter_data,
            deal: $(".offer:checked").val(),
            assetType: assetType
          },
          success: function(data) {
            $(".itemsList").html("");
            if (data != "") {
              obj = jQuery.parseJSON(data);
              for (var i = 0; i < obj.length; i++) {
                var elementData = "";
                if(obj[i].ASSET_TYPE.toLowerCase() == "business company" || obj[i].ASSET_TYPE.toLowerCase() == "start up"){
                  elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
                  if(company_ids.includes(obj[i].ID)){
                    elementData += " bookmark-active";
                  }
                  elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-industry"></i> &nbsp;  Industry: '+obj[i].DETAIL_2+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
                  $(".itemsList").append(elementData);
                }else if(obj[i].ASSET_TYPE.toLowerCase() == "real estate"){
                  elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
                  if(re_ids.includes(obj[i].ID)){
                    elementData += " bookmark-active";
                  }
                  elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-hammer"></i> &nbsp; Status: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-home"></i> &nbsp;  Surface: '+obj[i].DETAIL_2+' smq</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
                  $(".itemsList").append(elementData);
                }else if(obj[i].ASSET_TYPE.toLowerCase() == "credits"){
                  elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
                  if(credits_ids.includes(obj[i].ID)){
                    elementData += " bookmark-active";
                  }
                  elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-receipt"></i> &nbsp; Type: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-calendar"></i> &nbsp;  Maturity: '+obj[i].DETAIL_2+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
                  $(".itemsList").append(elementData);
                }else if(obj[i].ASSET_TYPE.toLowerCase() == "npe"){
                  elementData += '<div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item"> <a href="ma-detail.php?type='+obj[i].ASSET_TYPE.toLowerCase()+'&id='+obj[i].ID+'"> <div class="card mb-4 cart-custom-redious our-shadow"> <div class="card-img-contain"><img class="card-img-top ma-img" src="../../assets/uploads/'+obj[i].IMAGE+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].OFFER+' </span> <span class="bottom-right-tag-card"> '+formatDealValue(obj[i].VALUE_TYPE, obj[i].VALUE_MIN, obj[i].VALUE_MAX, obj[i].CURRENCY) +' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-'+obj[i].ASSET_TYPE.replace(" ", "_").toLowerCase();
                  if(npe_ids.includes(obj[i].ID)){
                    elementData += " bookmark-active";
                  }
                  elementData += '" data-id="'+obj[i].ID+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span> </div><div class="d-flex flex-column justify-content-end p-2"> <span><i> '+generateLocationTags(obj[i].COUNTRY, obj[i].CITY)+' </i></span> <span class="deal-card-heading">'+generateCardTitle(obj[i].ASSET_TYPE.toLowerCase(), obj[i].DEAL, obj[i].TITLE_1, obj[i].TITLE_2, obj[i].DETAIL_3)+'</span> <div class="listing"> <span><i class="fas fa-receipt"></i> &nbsp; Type: '+obj[i].DETAIL_1.replaceAll("|", ", ")+' </span><br><span class="deal-card-subhead"><i class="fas fa-money-bill-wave"></i> &nbsp;  Market Value: '+formatDealValue("fixed", obj[i].DETAIL_2, obj[i].DETAIL_2, obj[i].CURRENCY)+'</span><hr> <span ><b>Key Elements:</b> '+obj[i].KEY_ELEMENTS+'</span><br></div></div></div></a> </div>';
                  $(".itemsList").append(elementData);
                }
              }
            }
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
