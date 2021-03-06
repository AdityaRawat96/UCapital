<div class="sell_asset_npe hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of NPE</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control npe_type" name="npe_type" style="width: 100%;" data-placeholder="Choose type of NPE" multiple="multiple">
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
      <select class="form-control product_type npe_product_type" name="product_type" style="width: 100%;" data-placeholder="Choose type of Loan/Product" multiple="multiple">
        <option value="Secured">Secured</option>
        <option value="Unsecured">Unsecured</option>
      </select>
    </div>
  </div>
  <div class="collateral_type_container">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Collateral</span>
      </div>
      <div class="col-md-9 col-sm-12 input-container input-group">
        <select class="form-control collateral_type npe_collateral_type" name="collateral_type">
          <option value="" selected disabled>Choose type of Collateral</option>
          <option value="Real Estate">Real Estate</option>
          <option value="Cash">Cash</option>
          <option value="Inventory">Inventory</option>
          <option value="Invoice">Invoice</option>
          <option value="Blanket liens">Blanket liens</option>
        </select>
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
          <select class="form-control hq_country npe_hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <div class="location_container_city">
            <select class="form-control hq_city npe_hq_city" name="hq_city">
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
      <span>Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="general_description" rows="3" class="form-control npe_description" placeholder="Type a description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Default Currency</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control default_currency npe_default_currency" name="company_type">
        <option data-value="???" selected value='Euro'>Euro</option>
        <option data-value="$" value='Dollar'>Dollar</option>
        <option data-value="C$" value='Canadian Dollar'>Canadian Dollar</option>
        <option data-value="??" value='Pound'>Pound</option>
        <option data-value="A$" value='Australian Dollar'>Australian Dollar</option>
        <option data-value="??" value='Yen'>Yen</option>
        <option data-value="SEK" value='Swedish Krona'>Swedish Krona</option>
        <option data-value="DKK" value='Danish Krona'>Danish Krona</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Original Amount</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <input type="number" name="original_amount" value="" class="form-control npe_original_amount" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Asking Price</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <input type="number" name="asking_price" value="" class="form-control npe_asking_price" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Market Value</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <input type="number" name="market_value" value="" class="form-control npe_market_value" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Lien Position<br><i style="font-size: 10px;">(Optional)</i></span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control lien_position npe_lien_position" name="lien_position">
        <option value="" selected disabled>Choose lien position</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Judicialized<br><i style="font-size: 10px;">(Optional)</i></span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control judicialized npe_judicialized" name="judicialized">
        <option value="" selected disabled>Choose an option</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Ratio<br><i style="font-size: 10px;">(Optional)</i></span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control ratio npe_ratio" name="ratio">
        <option value="" selected disabled>Choose an option</option>
        <option value="Rate">Rate</option>
        <option value="Discounted Ratio">Discounted Ratio</option>
        <option value="Surface">Surface</option>
      </select>
    </div>
  </div>
</div>
