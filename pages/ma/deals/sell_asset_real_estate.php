<div class="sell_asset_real_estate hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of Real Estate</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control re_type" name="re_type">
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
  <div class="re_type_category_container">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Type of <span class="dynamic_category"></span></span>
      </div>
      <div class="col-md-9 col-sm-12 input-container input-group">
        <select class="form-control re_type_category" name="re_type_category">
          <option value="" selected disabled>Choose type of <span class="dynamic_category"></span></option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Subject of deal</span></span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control deal_subject re_deal_subject" name="subject">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control asset_status re_asset_status" name="asset_status">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control asset_status re_condition_status" name="asset_condition">
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
    <div class="col-md-2 col-sm-12 input-container input-group">
      <input id="datepicker" type="number" name="construction_year" class="form-control re_construction_year datepicker" placeholder="Type a year">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Total surface approx.</span></span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <div class="selector">
        <div class="price-slider">
          <div class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
          </div>
          <span data-currency="sqm" class="min-price slider-price re_surface_area_min">0</span>
          <span class="seperator">-</span>
          <span data-currency="sqm" data-max="10000" class="max-price slider-price re_surface_area_max">0</span>
        </div>
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
          <select class="form-control hq_country re_hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <div class="location_container_city">
            <select class="form-control hq_city re_hq_city" name="hq_city">
              <option value="" selected disabled>Choose a city</option>
            </select>
            <i style="font-size: 10px;">(Optional)</i></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <button type="button" name="button" class="btn btn-add-custom form-control add-location">+ Add a location</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Default Currency</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control default_currency re_default_currency" name="company_type">
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
      <span>Asset value</span>
      <span class="deal-subhead">(Choose one)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
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
            <input type="radio" name="asset_value" class="deal-radio re_asset_value">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control re_asset_value_val" value="fixed" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="range" class="deal-radio re_asset_value">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control re_asset_value_sel" name="asset_value_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500'000</option>
            <option value="500000|1000000">from 500'000 to 1 million</option>
            <option value="1000000|10000000">from 1 to 10 million</option>
            <option value="10000000|50000000">from 10 to 50 million</option>
            <option value="50000000|250000000">from 50 to 250 million</option>
            <option value="250000000|1000000000">over 250 million</option>
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
    <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
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
          <input type="number" class="form-control re_investment_val" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" value="range" class="deal-radio re_investment_type">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control re_investment_val_sel" name="investment_required_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500'000</option>
            <option value="500000|1000000">from 500'000 to 1 million</option>
            <option value="1000000|10000000">from 1 to 10 million</option>
            <option value="10000000|50000000">from 10 to 50 million</option>
            <option value="50000000|250000000">from 50 to 250 million</option>
            <option value="250000000|1000000000">over 250 million</option>
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
          <input type="number" name="yearly_return" min="0" max="100" class="form-control re_yearly_return" placeholder="Insert a value">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control re_vendor_type" name="vendor_type">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="general_description" rows="3" class="form-control re_general_description" maxlength="124" placeholder="Type a description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Key Elements</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="key_elements" rows="3" class="form-control re_key_elements" maxlength="124" placeholder="Urban Masterpiece, Modern industrial design, Newly Renovated, Luxury residence, Picking solutions..."></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Image</span>
      <span class="deal-subhead">(Max 5MB)</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <div class="input-group">
        <input type="text" class="sell_re_image-list" hidden value="">
        <input type="file" name="files[]" class="adImage sell_re_image" multiple="false">
      </div>
    </div>
  </div>
</div>
