<div class="buy_asset_npe hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of NPE</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control npe_type" name="npe_type">
        <option value="" selected disabled>Choose type of NPE</option>
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
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control product_type" name="product_type">
        <option value="" selected disabled>Choose type of Loan/Product</option>
        <option value="Secured">Secured</option>
        <option value="Unsecured">Unsecured</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Location</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <div class="row location_holder">
        <div class="col-md-12 col-sm-12 location_container">
          <select class="form-control hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <select class="form-control hq_city" name="hq_city">
            <option value="" selected disabled>Choose a city</option>
          </select>
          <input type="text" name="state" value="" class="form-control" placeholder="Enter State">
          <input type="number" name="post_code" value="" class="form-control" placeholder="Enter Zip/Postal code">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <textarea name="description" rows="3" class="form-control" placeholder="Type a description"></textarea>
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
      <span>Value</span>
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
          <input type="number" class="form-control" placeholder="Any" disabled style="background-color: white !important;">
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
            <option value="">from 10 to 50 million</option>
            <option value="">over 50 million</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Lien Position</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control lien_position" name="lien_position">
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
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control judicialized" name="judicialized">
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
      <textarea name="borrower_details" rows="3" class="form-control" placeholder="Type borrower details"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Ratio</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control ratio" name="ratio">
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
</div>
