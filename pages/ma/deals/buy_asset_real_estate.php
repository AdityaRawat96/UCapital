<div class="buy_asset_real_estate hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of Real Estate</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control re_type re_type_buy" name="re_type">
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
        <select class="form-control re_type_category re_type_category_buy" name="re_type_category">
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
      <select class="form-control deal_subject re_deal_subject_buy" name="subject">
        <option value="" selected disabled>Choose the subject</span></option>
        <option value="totality buying">Totality Buying</option>
        <option value="Looking for Co-Investors">looking for Co-Investors</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Status of the asset</span></span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control asset_status re_asset_status_buy" name="asset_status">
        <option value="" selected disabled>Choose the status</span></option>
        <option value="Existing property">Existing property</option>
        <option value="Under Construction">Under Construction</option>
        <option value="Planned Only">Planned Only</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Condition of the asset</span></span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control asset_status re_condition_status_buy" name="asset_condition">
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
    <div class="col-md-9 col-sm-12 input-container">
      <div class="selector">
        <div class="price-slider">
          <div class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
          </div>
          <span data-currency="sqm" class="min-price slider-price re_surface_area_buy_min">0</span>
          <span class="seperator">-</span>
          <span data-currency="sqm" data-max="10000" class="max-price slider-price re_surface_area_buy_max">0</span>
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
          <select class="form-control hq_country re_hq_country_buy" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <div class="location_container_city">
            <select class="form-control hq_city re_hq_city_buy" name="hq_city">
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
      <select class="form-control default_currency re_default_currency_buy" name="company_type">
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
            <input type="radio" name="asset_value" value="undisclosed" class="deal-radio re_asset_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="fixed" class="deal-radio re_asset_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control re_asset_value_val_buy" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="range" class="deal-radio re_asset_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control re_asset_value_sel_buy" name="asset_value_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500,000</option>
            <option value="500000|1000000">from 500,000 to 1M</option>
            <option value="1000000|10000000">from 1M to 10M</option>
            <option value="10000000|50000000">from 10M to 50M</option>
            <option value="50000000|250000000">from 50M to 250M</option>
            <option value="250000000|1000000000">over 250M</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Who I am</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control deal_option_visibility_trigger re_who_i_am_buy" name="who_i_am">
        <option value="" selected disabled>Select an option</option>
        <option value="Professional">Professional</option>
        <option value="Corporation">Corporation</option>
        <option value="Private Equity">Private Equity</option>
        <option value="Venture Capital">Venture Capital</option>
        <option value="Financial Institution">Financial Institution</option>
      </select>
    </div>
  </div>
  <div class="option_visibility_target">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>AUM<br><i style="font-size: 10px;">(Optional)</i></span>
      </div>
      <div class="col-md-4 col-sm-12 input-container input-group">
        <input type="number" name="aum" value="" class="form-control re_aum_buy" placeholder="Enter a value">
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Number of Investments<br><i style="font-size: 10px;">(Optional)</i></span>
      </div>
      <div class="col-md-4 col-sm-12 input-container input-group">
        <input type="number" name="number_of_investments" value="" class="form-control re_number_of_investments_buy" placeholder="Enter a value">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Preferred Investment Amount<br><i style="font-size: 10px;">(Optional)</i></span>
        <span class="deal-subhead">(Multiple Choice)</span>
      </div>
      <div class="col-md-9 col-sm-12 input-container">
        <input type="checkbox" name="investment_size" class="re_investment_amount_buy" value="0|1000000"> Less than 1M<br>
        <input type="checkbox" name="investment_size" class="re_investment_amount_buy" value="1000000|10000000"> From 1M to 10M<br>
        <input type="checkbox" name="investment_size" class="re_investment_amount_buy" value="10000000|50000000"> From 10M to 50M<br>
        <input type="checkbox" name="investment_size" class="re_investment_amount_buy" value="50000000|1000000000"> More than 50M<br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>What are we looking for</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="looking_for" rows="3" class="form-control re_looking_for_buy" placeholder="co-investor, Institutional investor, individual, corporation"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>General Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="general_description" rows="3" class="form-control re_general_description_buy" placeholder="Type a description"></textarea>
    </div>
  </div>
</div>
