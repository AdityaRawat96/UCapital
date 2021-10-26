<div class="buy_asset_npe hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of NPE</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control npe_type npe_type_buy" name="npe_type" id="npe_type" style="width: 100%;" data-placeholder="Choose type of NPE" multiple="multiple">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control product_type npe_product_type_buy" name="product_type" id="product_type" style="width: 100%;" data-placeholder="Choose type of Loan/Product" multiple="multiple">
        <option value="Secured">Secured</option>
        <option value="Unsecured">Unsecured</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Location</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <div class="row location_holder">
        <div class="col-md-8 col-sm-12 location_container">
          <select class="form-control hq_country npe_hq_country_buy" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <select class="form-control hq_city npe_hq_city_buy" name="hq_city">
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
      <span>Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="general_description" rows="3" class="form-control npe_description_buy" placeholder="Type a description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Default Currency</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control default_currency npe_default_currency_buy" name="company_type">
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
      <span>Value</span>
      <span class="deal-subhead">(Choose one)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="undisclosed" class="deal-radio npe_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Any" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="fixed" class="deal-radio npe_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control npe_value_val_buy" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="asset_value" value="range" class="deal-radio npe_value_buy">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control npe_value_sel_buy" name="asset_value_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500k</option>
            <option value="500000|1000000">from 500k to 1 million</option>
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
      <span>Lien Position</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container  input-group">
      <select class="form-control lien_position npe_lien_position_buy" name="lien_position">
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
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control judicialized npe_judicialized_buy" name="judicialized">
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
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="borrower_details" rows="3" class="form-control npe_borrower_details_buy" placeholder="Type borrower details"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Ratio</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control ratio npe_ratio_buy" name="ratio">
        <option value="" selected disabled>Choose an option</option>
        <option value="OB">OB</option>
        <option value="Rate">Rate</option>
        <option value="Discounted Ratio">Discounted Ratio</option>
        <option value="Surface">Surface</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Who I am</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control deal_option_visibility_trigger npe_who_i_am" name="who_i_am">
        <option value="" selected disabled>Select an option</option>
        <option value="Individual">Individual</option>
        <option value="Corporation">Corporation</option>
        <option value="PE Fund">PE Fund</option>
        <option value="VC Fund">VC Fund</option>
        <option value="Asset Management">Asset Management</option>
      </select>
    </div>
  </div>
  <div class="option_visibility_target">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>AUM</span>
      </div>
      <div class="col-md-4 col-sm-12 input-container input-group">
        <input type="number" name="aum" value="" class="form-control npe_aum_buy" placeholder="Enter a value">
      </div>
    </div>
  </div>
</div>
