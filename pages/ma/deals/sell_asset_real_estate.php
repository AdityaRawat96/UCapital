<div class="sell_asset_real_estate hidden_deal_container_main">
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
        <option value="totality selling">Totality Selling</option>
        <option value="looking for co-investors">looking for Co-Investors</option>
        <option value="looking for investors">looking for Investors</option>
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
        <option value="existing property">Existing property</option>
        <option value="under construction ">Under construction </option>
        <option value="project">Project</option>
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
      <input type="number" name="construction_year" class="form-control" placeholder="Type a year">
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
      <span>Investment Required</span>
      <span class="deal-subhead">(Choose one)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" class="deal-radio">
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
            <input type="radio" name="investment_required" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control" name="investment_required_range">
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
      <span>Yearly Return</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <div class="input-group">
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Insert a value">
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
      <select class="form-control">
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
      <textarea name="general_description" rows="3" class="form-control" placeholder="Type a description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Key Elements</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <textarea name="key_elements" rows="3" class="form-control" placeholder="Co-Investor, Institutional Investor, Individual, Corporation..."></textarea>
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