<div class="buy_asset_real_estate hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of Real Estate</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
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
      <div class="col-md-9 col-sm-12 input-container">
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
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control deal_subject" name="deal_subject">
        <option value="" selected disabled>Choose the subject</span></option>
        <option value="totality selling">Totality Buying</option>
        <option value="looking for co-investors">looking for Co-Investors</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Status of the asset</span></span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control asset_status" name="asset_status">
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
      <select class="form-control asset_status" name="asset_status">
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
          <input type="number" class="form-control" placeholder="Type a value">
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
          <select class="form-control hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <select class="form-control hq_city" name="hq_city">
            <option value="" selected disabled>Choose a city</option>
          </select>
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
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control default_currency" name="company_type">
        <option value="€" selected>Euro</option>
        <option value="$">Dollar</option>
        <option value="C$">Canadian Dollar</option>
        <option value="£">Pound</option>
        <option value="A">Australian Dollar</option>
        <option value="¥">Yen</option>
        <option value="SEK">Swedish Krona</option>
        <option value="DKK">Danish Krona</option>
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
            <input type="radio" name="asset_value" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control" name="asset_value_range">
            <option value="" selected disabled>Select a range</option>
            <option value="">from 0 to 500k</option>
            <option value="">from 500k to 1 million</option>
            <option value="">from 1 to 10 million</option>
            <option value="">from 10 to 50 million</option>
            <option value="">over 50 million</option>
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
      <select class="form-control default_currency" name="who_i_am">
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
      <input type="number" name="aum" value="" class="form-control" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>General Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <textarea name="general_description" rows="3" class="form-control" placeholder="Type a description"></textarea>
    </div>
  </div>
</div>
