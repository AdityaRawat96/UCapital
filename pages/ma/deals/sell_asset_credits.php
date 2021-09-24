<div class="sell_asset_credits hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Default Currency</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control default_currency credit_default_currency" name="company_type">
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
      <span>Borrower</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control borrower_type credit_borrower_type" name="borrower_type">
        <option value="" selected disabled>Choose type of Borrower</option>
        <option value="Household" data-categories="Super Prime, Prime, Subprime">Household</option>
        <option value="Corporate" data-categories="Investment Grade, High Yeild, Leveraged Loans">Corporate</option>
      </select>
    </div>
  </div>
  <div class="borrower_type_category_container">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Type of <span class="dynamic_category_borrower"></span></span>
      </div>
      <div class="col-md-9 col-sm-12 input-container">
        <select class="form-control borrower_type_category credit_borrower_type_category" name="borrower_type_category">
          <option value="" selected disabled>Choose type of <span class="dynamic_category_borrower"></span></option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Type of Credit</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control credit_type" name="credit_type">
        <option value="" selected disabled>Choose type of Credit</option>
        <option value="Commercial">Commercial</option>
        <option value="Public Administration Receivables">Public Administration Receivables</option>
        <option value="Invoices">Invoices</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Typology</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control typology credit_typology" name="typology">
        <option value="" selected disabled>Choose Typology</option>
        <option value="Recourse">Recourse</option>
        <option value="Non-recourse">Non-recourse</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Maturity</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="date" name="maturity" value="" class="form-control credit_maturity">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Loan/Product type</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <select class="form-control product_type credit_product_type" name="product_type">
        <option value="" selected disabled>Choose type of Loan/Product</option>
        <option value="Secured">Secured</option>
        <option value="Unsecured">Unsecured</option>
        <option value="Enforceable">Enforceable</option>
      </select>
    </div>
  </div>
  <div class="collateral_type_container">
    <div class="row">
      <div class="col-md-3 col-sm-12 deal-heading">
        <span>Collateral</span>
      </div>
      <div class="col-md-9 col-sm-12 input-container">
        <select class="form-control collateral_type credit_collateral_type" name="collateral_type">
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
    <div class="col-md-9 col-sm-12 input-container">
      <div class="row location_holder">
        <div class="col-md-12 col-sm-12 location_container">
          <select class="form-control hq_country credit_hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <select class="form-control hq_city credit_hq_city" name="hq_city">
            <option value="" selected disabled>Choose a city</option>
          </select>
          <input type="text" name="state" value="" class="form-control credit_state" placeholder="Enter State">
          <input type="number" name="post_code" value="" class="form-control credit_post_code" placeholder="Enter Zip/Postal code">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Lien Position</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control lien_position credit_lien_position" name="lien_position">
        <option value="" selected disabled>Choose lien position</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>General Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <textarea name="general_description" rows="3" class="form-control credit_description" placeholder="Type a description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Original Amount</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="number" name="original_amount" value="" class="form-control credit_original_amount" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Asking Price</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="number" name="asking_price" value="" class="form-control credit_asking_price" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Market Value</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="number" name="market_value" value="" class="form-control credit_market_value" placeholder="Enter a value">
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Judicialized</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <select class="form-control judicialized credit_judicialized" name="judicialized">
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
      <textarea name="borrower_details" rows="3" class="form-control credit_borrower_details" placeholder="Type borrower details"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Ratio OB %</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="number" name="ratio_ob" value="" class="form-control credit_ratio_ob" placeholder="Enter a value between 0 and 100">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Rate</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="text" name="rate" value="" class="form-control credit_rate" placeholder="Enter a value">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Dicounted Ratio %</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container">
      <input type="number" name="discounted_ratio" value="" class="form-control credit_discounted_ratio" placeholder="Enter a value between 0 and 100">
    </div>
  </div>
</div>