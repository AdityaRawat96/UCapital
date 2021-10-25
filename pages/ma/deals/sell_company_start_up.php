<div class="sell_company_start_up hidden_deal_container_main">
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>HQ Location</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <div class="row location_holder">
        <div class="col-md-8 col-sm-12 location_container">
          <select class="form-control hq_country su_hq_country" name="hq_country">
            <option value="" selected disabled>Choose a country</option>
          </select>
          <select class="form-control hq_city su_hq_city" name="hq_city">
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
      <span>Subject</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control su_company_type" name="subject">
        <option value="" selected disabled>Choose the subject</option>
        <option value="Fundraising">Fundraising</option>
        <option value="Sell minority">Sell minority</option>
        <option value="Sell majority">Sell majority</option>
        <option value="Sell totality">Sell totality</option>
        <option value="IPO">IPO</option>
        <option value="Partnership">Partnership</option>
        <option value="Collaboration">Collaboration</option>
        <option value="Joint venture">Joint venture</option>
        <option value="Debt Raising">Debt Raising</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Foundation year</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <input type="number" name="foundation_year" class="form-control su_foundation_year" placeholder="Type a year from 1900 to current year">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Default Currency</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <select class="form-control default_currency su_default_currency" name="default_currency">
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
      <span>Company value</span>
      <span class="deal-subhead">(Choose one)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="company_value" value="undisclosed" class="deal-radio su_company_value">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="company_value" value="fixed" class="deal-radio su_company_value">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control su_company_value_val" name="company_value_input" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="company_value" value="range" class="deal-radio su_company_value">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control su_company_value_sel" name="company_value_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500k</option>
            <option value="500000|1000000">from 500k to 1 million</option>
            <option value="1000000|10000000">from 1 to 10 million</option>
            <option value="10000000|50000000">from 10 to 50 million</option>
            <option value="50000000|1000000000">over 50 million</option>
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
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" value="undisclosed" class="deal-radio su_investment_required_value">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control" placeholder="Undisclosed" disabled style="background-color: white !important;">
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" value="fixed" class="deal-radio su_investment_required_value">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control su_investment_required_value_val" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="investment_required" value="range" class="deal-radio su_investment_required_value">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control su_investment_required_value_sel" name="investment_required_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|500000">from 0 to 500k</option>
            <option value="500000|1000000">from 500k to 1 million</option>
            <option value="1000000|10000000">from 1 to 10 million</option>
            <option value="10000000|50000000">from 10 to 50 million</option>
            <option value="50000000|1000000000">over 50 million</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Sector</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="form-control su_sector_sel" name="sector">
        <option value="" selected disabled>Choose Sector</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Business Products and Services (B2B)">Business Products and Services (B2B)</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Consumer Products and Services (B2C)">Consumer Products and Services (B2C)</option>
        <option value="Energy">Energy</option>
        <option value="Financial Services">Financial Services</option>
        <option value="Materials and Resources">Materials and Resources</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Industry</span>
      <span class="deal-subhead">(Multiple choice max 5)</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="industry su_industry_sel" multiple="multiple" data-placeholder="Select Industries" style="width: 100%;" name="industry" id="industry2">
        <option value="3D Printing">3D Printing</option>
        <option value="Accessories">Accessories</option>
        <option value="Accounting">Accounting</option>
        <option value="AdTech">AdTech</option>
        <option value="Advanced Manufacturing">Advanced Manufacturing</option>
        <option value="Aerospace and Defense">Aerospace and Defense</option>
        <option value="Agricultural Chemicals">Agricultural Chemicals</option>
        <option value="Agriculture">Agriculture</option>
        <option value="AgTech">AgTech</option>
        <option value="Air">Air</option>
        <option value="Alternative Energy Equipment">Alternative Energy Equipment</option>
        <option value="Aluminum Mining">Aluminum Mining</option>
        <option value="Animal Husbandry">Animal Husbandry</option>
        <option value="Animal Textiles">Animal Textiles</option>
        <option value="Apparel and Accessories">Apparel and Accessories</option>
        <option value="Application Software">Application Software</option>
        <option value="Application Specific Semiconductors">Application Specific Semiconductors</option>
        <option value="Aquaculture">Aquaculture</option>
        <option value="Artificial Intelligence & Machine Learning">Artificial Intelligence & Machine Learning</option>
        <option value="Asset Management">Asset Management</option>
        <option value="AudioTech">AudioTech</option>
        <option value="Audit and Tax Services (B2B)">Audit and Tax Services (B2B)</option>
        <option value="Audit and Tax Services (B2C)">Audit and Tax Services (B2C)</option>
        <option value="Augmented Reality">Augmented Reality</option>
        <option value="Automation/Workflow Software">Automation/Workflow Software</option>
        <option value="Automotive Insurance">Automotive Insurance</option>
        <option value="Automotive">Automotive</option>
        <option value="Autonomous cars">Autonomous cars</option>
        <option value="B2B Payments">B2B Payments</option>
        <option value="Beauty">Beauty</option>
        <option value="Beverages">Beverages</option>
        <option value="Big Data">Big Data</option>
        <option value="Biotechnology">Biotechnology</option>
        <option value="BPO/Outsource Services">BPO/Outsource Services</option>
        <option value="Broadcasting">Broadcasting</option>
        <option value="Brokerage">Brokerage</option>
        <option value="Building Products">Building Products</option>
        <option value="Buildings and Property">Buildings and Property</option>
        <option value="Business Equipment and Supplies">Business Equipment and Supplies</option>
        <option value="Business Products and Services (B2B)">Business Products and Services (B2B)</option>
        <option value="Business/Productivity Software">Business/Productivity Software</option>
        <option value="Cable Service Providers">Cable Service Providers</option>
        <option value="Cannabis">Cannabis</option>
        <option value="Capital Markets/Institutions">Capital Markets/Institutions</option>
        <option value="Car-Sharing">Car-Sharing</option>
        <option value="Casinos and Gaming">Casinos and Gaming</option>
        <option value="Catalog Retail">Catalog Retail</option>
        <option value="Chemicals and Gases">Chemicals and Gases</option>
        <option value="CleanTech">CleanTech</option>
        <option value="Clinics/Outpatient Services">Clinics/Outpatient Services</option>
        <option value="Clothing">Clothing</option>
        <option value="CloudTech & DevOps">CloudTech & DevOps</option>
        <option value="Coal and Consumable Fuels Equipment">Coal and Consumable Fuels Equipment</option>
        <option value="Coal Mining">Coal Mining</option>
        <option value="Commercial Banks">Commercial Banks</option>
        <option value="Commercial Products">Commercial Products</option>
        <option value="Commercial Services">Commercial Services</option>
        <option value="Commercial Transportation">Commercial Transportation</option>
        <option value="Commercial/Professional Insurance">Commercial/Professional Insurance</option>
        <option value="Communication Software">Communication Software</option>
        <option value="Communications and Networking">Communications and Networking</option>
        <option value="Computer Hardware">Computer Hardware</option>
        <option value="Computers">Computers</option>
        <option value="Conglomerates">Conglomerates</option>
        <option value="Connectivity Products">Connectivity Products</option>
        <option value="Construction (Non-Wood)">Construction (Non-Wood)</option>
        <option value="Construction and Engineering">Construction and Engineering</option>
        <option value="Construction Technology">Construction Technology</option>
        <option value="Consulting Services (B2B)">Consulting Services (B2B)</option>
        <option value="Consumer Durables">Consumer Durables</option>
        <option value="Consumer Finance">Consumer Finance</option>
        <option value="Consumer Non-Durables">Consumer Non-Durables</option>
        <option value="Consumer Products and Services (B2C)">Consumer Products and Services (B2C)</option>
        <option value="Containers and Packaging">Containers and Packaging</option>
        <option value="Cruise Lines">Cruise Lines</option>
        <option value="Cryptocurrency/Blockchain">Cryptocurrency/Blockchain</option>
        <option value="Cultivation">Cultivation</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Database Software">Database Software</option>
        <option value="Decision/Risk Analysis">Decision/Risk Analysis</option>
        <option value="Department Stores">Department Stores</option>
        <option value="Diagnostic Equipment">Diagnostic Equipment</option>
        <option value="Digital Health">Digital Health</option>
        <option value="Discovery Tools (Healthcare)">Discovery Tools (Healthcare)</option>
        <option value="Distributors (Healthcare)">Distributors (Healthcare)</option>
        <option value="Distributors/Wholesale (B2C)">Distributors/Wholesale (B2C)</option>
        <option value="Distributors/Wholesale">Distributors/Wholesale</option>
        <option value="Drug Delivery">Drug Delivery</option>
        <option value="Drug Discovery">Drug Discovery</option>
        <option value="E-Commerce">E-Commerce</option>
        <option value="EdTech">EdTech</option>
        <option value="Education and Training Services (B2B)">Education and Training Services (B2B)</option>
        <option value="Educational and Training Services (B2C)">Educational and Training Services (B2C)</option>
        <option value="Educational Software">Educational Software</option>
        <option value="Elder and Disabled Care">Elder and Disabled Care</option>
        <option value="Electric Utilities">Electric Utilities</option>
        <option value="Electrical Equipment">Electrical Equipment</option>
        <option value="Electronic Components">Electronic Components</option>
        <option value="Electronic Equipment and Instruments">Electronic Equipment and Instruments</option>
        <option value="Electronics (B2C)">Electronics (B2C)</option>
        <option value="Energy Equipment">Energy Equipment</option>
        <option value="Energy Exploration">Energy Exploration</option>
        <option value="Energy Infrastructure">Energy Infrastructure</option>
        <option value="Energy Marketing">Energy Marketing</option>
        <option value="Energy Production">Energy Production</option>
        <option value="Energy Refining">Energy Refining</option>
        <option value="Energy Services">Energy Services</option>
        <option value="Energy Storage">Energy Storage</option>
        <option value="Energy Traders and Brokers">Energy Traders and Brokers</option>
        <option value="Energy Transportation">Energy Transportation</option>
        <option value="Energy">Energy</option>
        <option value="Enterprise Systems (Healthcare)">Enterprise Systems (Healthcare)</option>
        <option value="Entertainment Software">Entertainment Software</option>
        <option value="Environmental Services (B2B)">Environmental Services (B2B)</option>
        <option value="Ephemeral Content">Ephemeral Content</option>
        <option value="eSports">eSports</option>
        <option value="Exploration">Exploration</option>
        <option value="FemTech">FemTech</option>
        <option value="Fiberoptic Equipment">Fiberoptic Equipment</option>
        <option value="Financial Services">Financial Services</option>
        <option value="Financial Software">Financial Software</option>
        <option value="FinTech">FinTech</option>
        <option value="Food Products">Food Products</option>
        <option value="FoodTech">FoodTech</option>
        <option value="Footwear">Footwear</option>
        <option value="Forestry Development/Harvesting">Forestry Development/Harvesting</option>
        <option value="Forestry Processing">Forestry Processing</option>
        <option value="Forestry">Forestry</option>
        <option value="Gaming">Gaming</option>
        <option value="Gas Utilities">Gas Utilities</option>
        <option value="General Merchandise Stores">General Merchandise Stores</option>
        <option value="General Purpose Semiconductors">General Purpose Semiconductors</option>
        <option value="Gold Mining">Gold Mining</option>
        <option value="Government">Government</option>
        <option value="Healthcare Devices and Supplies">Healthcare Devices and Supplies</option>
        <option value="Healthcare Services">Healthcare Services</option>
        <option value="Healthcare Technology Systems">Healthcare Technology Systems</option>
        <option value="Healthcare">Healthcare</option>
        <option value="HealthTech">HealthTech</option>
        <option value="Holding Companies">Holding Companies</option>
        <option value="Home Furnishings">Home Furnishings</option>
        <option value="Horticulture">Horticulture</option>
        <option value="Hospitals/Inpatient Services">Hospitals/Inpatient Services</option>
        <option value="Hotels and Leisure">Hotels and Leisure</option>
        <option value="Hotels and Resorts">Hotels and Resorts</option>
        <option value="Household Appliances">Household Appliances</option>
        <option value="Household Products">Household Products</option>
        <option value="HR Tech">HR Tech</option>
        <option value="Human Capital Services">Human Capital Services</option>
        <option value="Impact Investing">Impact Investing</option>
        <option value="Industrial Chemicals">Industrial Chemicals</option>
        <option value="Industrial Supplies and Parts">Industrial Supplies and Parts</option>
        <option value="Industrials">Industrials</option>
        <option value="Information Services (B2C)">Information Services (B2C)</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Infrastructure">Infrastructure</option>
        <option value="Insurance Brokers">Insurance Brokers</option>
        <option value="Insurance">Insurance</option>
        <option value="InsurTech">InsurTech</option>
        <option value="International Banks">International Banks</option>
        <option value="Internet of Things">Internet of Things</option>
        <option value="Internet Retail">Internet Retail</option>
        <option value="Internet Service Providers">Internet Service Providers</option>
        <option value="Internet Software">Internet Software</option>
        <option value="Investment Banks">Investment Banks</option>
        <option value="Iron and Steel Mining">Iron and Steel Mining</option>
        <option value="IT Consulting and Outsourcing">IT Consulting and Outsourcing</option>
        <option value="IT Services">IT Services</option>
        <option value="Laboratory Services (Healthcare)">Laboratory Services (Healthcare)</option>
        <option value="Legal Services (B2B)">Legal Services (B2B)</option>
        <option value="Legal Services (B2C)">Legal Services (B2C)</option>
        <option value="Leisure Facilities">Leisure Facilities</option>
        <option value="Life and Health Insurance">Life and Health Insurance</option>
        <option value="Life Sciences">Life Sciences</option>
        <option value="Logistics">Logistics</option>
        <option value="LOHAS & Wellness">LOHAS & Wellness</option>
        <option value="Luxury Goods">Luxury Goods</option>
        <option value="Machinery (B2B)">Machinery (B2B)</option>
        <option value="Managed Care">Managed Care</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Marine">Marine</option>
        <option value="Marketing Tech">Marketing Tech</option>
        <option value="Materials and Resources">Materials and Resources</option>
        <option value="Media and Information Services (B2B)">Media and Information Services (B2B)</option>
        <option value="Media">Media</option>
        <option value="Medical Records Systems">Medical Records Systems</option>
        <option value="Medical Supplies">Medical Supplies</option>
        <option value="Metal Containers and Packaging">Metal Containers and Packaging</option>
        <option value="Metals">Metals</option>
        <option value="Micro-Mobility">Micro-Mobility</option>
        <option value="Minerals and Mining">Minerals and Mining</option>
        <option value="Mobile Commerce">Mobile Commerce</option>
        <option value="Mobile">Mobile</option>
        <option value="Mobility Tech">Mobility Tech</option>
        <option value="Monitoring Equipment">Monitoring Equipment</option>
        <option value="Mortgage Tech">Mortgage Tech</option>
        <option value="Movies">Movies</option>
        <option value="Multi-line Chemicals">Multi-line Chemicals</option>
        <option value="Multi-line Insurance">Multi-line Insurance</option>
        <option value="Multi-line Mining">Multi-line Mining</option>
        <option value="Multimedia and Design Software">Multimedia and Design Software</option>
        <option value="Music and Entertainment">Music and Entertainment</option>
        <option value="Nanotechnology">Nanotechnology</option>
        <option value="National Banks">National Banks</option>
        <option value="Network Management Software">Network Management Software</option>
        <option value="Office Electronics">Office Electronics</option>
        <option value="Office Services (B2B)">Office Services (B2B)</option>
        <option value="Oil & Gas">Oil & Gas</option>
        <option value="Oil and Gas Equipment">Oil and Gas Equipment</option>
        <option value="Oncology">Oncology</option>
        <option value="Operating Systems Software">Operating Systems Software</option>
        <option value="Other Agriculture">Other Agriculture</option>
        <option value="Other Apparel">Other Apparel</option>
        <option value="Other Business Products and Services">Other Business Products and Services</option>
        <option value="Other Capital Markets/Institutions">Other Capital Markets/Institutions</option>
        <option value="Other Chemicals and Gases">Other Chemicals and Gases</option>
        <option value="Other Commercial Banks">Other Commercial Banks</option>
        <option value="Other Commercial Products">Other Commercial Products</option>
        <option value="Other Commercial Services">Other Commercial Services</option>
        <option value="Other Communications and Networking">Other Communications and Networking</option>
        <option value="Other Consumer Durables">Other Consumer Durables</option>
        <option value="Other Consumer Non-Durables">Other Consumer Non-Durables</option>
        <option value="Other Consumer Products and Services">Other Consumer Products and Services</option>
        <option value="Other Containers and Packaging">Other Containers and Packaging</option>
        <option value="Other Devices and Supplies">Other Devices and Supplies</option>
        <option value="Other Energy Services">Other Energy Services</option>
        <option value="Other Energy">Other Energy</option>
        <option value="Other Equipment">Other Equipment</option>
        <option value="Other Financial Services">Other Financial Services</option>
        <option value="Other Forestry">Other Forestry</option>
        <option value="Other Hardware">Other Hardware</option>
        <option value="Other Healthcare Services">Other Healthcare Services</option>
        <option value="Other Healthcare Technology Systems">Other Healthcare Technology Systems</option>
        <option value="Other Healthcare">Other Healthcare</option>
        <option value="Other Information Technology">Other Information Technology</option>
        <option value="Other Insurance">Other Insurance</option>
        <option value="Other IT Services">Other IT Services</option>
        <option value="Other Materials">Other Materials</option>
        <option value="Other Media">Other Media</option>
        <option value="Other Metals">Other Metals</option>
        <option value="Other Pharmaceuticals and Biotechnology">Other Pharmaceuticals and Biotechnology</option>
        <option value="Other Restaurants">Other Restaurants</option>
        <option value="Other Retail">Other Retail</option>
        <option value="Other Semiconductors">Other Semiconductors</option>
        <option value="Other Services (B2C Non-Financial)">Other Services (B2C Non-Financial)</option>
        <option value="Other Software">Other Software</option>
        <option value="Other Textiles">Other Textiles</option>
        <option value="Other Transportation">Other Transportation</option>
        <option value="Other Utilities">Other Utilities</option>
        <option value="Outcome Management (Healthcare)">Outcome Management (Healthcare)</option>
        <option value="Paper Containers and Packaging">Paper Containers and Packaging</option>
        <option value="Paper/Soft Products">Paper/Soft Products</option>
        <option value="Parts and Peripherals">Parts and Peripherals</option>
        <option value="Personal Products">Personal Products</option>
        <option value="Pet Technology">Pet Technology</option>
        <option value="Pharmaceuticals and Biotechnology">Pharmaceuticals and Biotechnology</option>
        <option value="Pharmaceuticals">Pharmaceuticals</option>
        <option value="Plastic Containers and Packaging">Plastic Containers and Packaging</option>
        <option value="Practice Management (Healthcare)">Practice Management (Healthcare)</option>
        <option value="Precious Metals and Minerals Mining">Precious Metals and Minerals Mining</option>
        <option value="Printing Services (B2B)">Printing Services (B2B)</option>
        <option value="Private Equity">Private Equity</option>
        <option value="Production and Refining">Production and Refining</option>
        <option value="Property and Casualty Insurance">Property and Casualty Insurance</option>
        <option value="Publishing">Publishing</option>
        <option value="Radio and Television">Radio and Television</option>
        <option value="Rail">Rail</option>
        <option value="Raw Materials (Non-Wood)">Raw Materials (Non-Wood)</option>
        <option value="Real Estate Investment Trusts (REITs)">Real Estate Investment Trusts (REITs)</option>
        <option value="Real Estate Services (B2C)">Real Estate Services (B2C)</option>
        <option value="Real Estate Technology">Real Estate Technology</option>
        <option value="Recreational Goods">Recreational Goods</option>
        <option value="Regional Banks">Regional Banks</option>
        <option value="Re-Insurance">Re-Insurance</option>
        <option value="Restaurant Technology">Restaurant Technology</option>
        <option value="Restaurants and Bars">Restaurants and Bars</option>
        <option value="Restaurants">Restaurants</option>
        <option value="Retail">Retail</option>
        <option value="Ridesharing">Ridesharing</option>
        <option value="Road">Road</option>
        <option value="Robotics and Drones">Robotics and Drones</option>
        <option value="SaaS">SaaS</option>
        <option value="Security Services (B2B)">Security Services (B2B)</option>
        <option value="Semiconductors">Semiconductors</option>
        <option value="Services (Non-Financial)">Services (Non-Financial)</option>
        <option value="Social Content">Social Content</option>
        <option value="Social/Platform Software">Social/Platform Software</option>
        <option value="Software Development Applications">Software Development Applications</option>
        <option value="Software">Software</option>
        <option value="Space Technology">Space Technology</option>
        <option value="Specialized Finance">Specialized Finance</option>
        <option value="Specialty Chemicals">Specialty Chemicals</option>
        <option value="Specialty Retail">Specialty Retail</option>
        <option value="Storage (IT)">Storage (IT)</option>
        <option value="Supply Chain Tech">Supply Chain Tech</option>
        <option value="Surgical Devices">Surgical Devices</option>
        <option value="Synthetic Textiles">Synthetic Textiles</option>
        <option value="Systems and Information Management">Systems and Information Management</option>
        <option value="Telecommunications Service Providers">Telecommunications Service Providers</option>
        <option value="Textiles">Textiles</option>
        <option value="Therapeutic Devices">Therapeutic Devices</option>
        <option value="Thrifts and Mortgage Finance">Thrifts and Mortgage Finance</option>
        <option value="TMT">TMT</option>
        <option value="Transportation">Transportation</option>
        <option value="Utilities">Utilities</option>
        <option value="Vertical Market Software">Vertical Market Software</option>
        <option value="Virtual Reality">Virtual Reality</option>
        <option value="Water Utilities">Water Utilities</option>
        <option value="Wearables & Quantified Self">Wearables & Quantified Self</option>
        <option value="Wireless Communications Equipment">Wireless Communications Equipment</option>
        <option value="Wireless Service Providers">Wireless Service Providers</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Company Business</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="company_business" rows="3" class="form-control su_company_business" placeholder="Business description"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Area of activity</span>
      <span class="deal-subhead">(Unlimited Choices)</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <select class="area_of_activity su_area_of_activity" multiple="multiple" data-placeholder="Choose country" style="width: 100%;" name="area_of_activity" id="area_of_activity_2">
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Scalability</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group-multiple-radio">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <button type="button" name="button" class="btn btn-deal-custom" style="width: 100%;">
            <input type="radio" name="scalability" value="Yes" class="deal-radio su_scalability"> Yes
          </button>
        </div>
        <div class="col-md-8 col-sm-12">
          <select class="form-control scalability_area su_scalability_area" name="scalability_area">
            <option value="" selected disabled>Which area</option>
            <option value="Global">Global</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <button type="button" name="button" class="btn btn-deal-custom" style="width: 100%;">
            <input type="radio" name="scalability" value="No" class="deal-radio su_scalability"> No
          </button>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="input-group input-group-nomargin">
            <div class="custom-file">
              <input type="number" class="form-control su_market_share" placeholder="Enter market share">
            </div>
            <div class="input-group-append">
              <span class="input-group-text">%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Number of employees</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container">
      <input type="radio" name="number_of_employees" class="su_number_of_employees" value="0|10"> Less than 10<br>
      <input type="radio" name="number_of_employees" class="su_number_of_employees" value="10|50"> From 10 to 50<br>
      <input type="radio" name="number_of_employees" class="su_number_of_employees" value="50|100"> From 50 to 100<br>
      <input type="radio" name="number_of_employees" class="su_number_of_employees" value="1000|1000000000"> More than 1000<br>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Actual Revenue</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="actual_revenue_required" value="fixed" class="deal-radio su_actual_revenue_type">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" class="form-control su_actual_revenue_val" placeholder="Type a value">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" name="actual_revenue_required" value="range" class="deal-radio su_actual_revenue_type">
          </span>
        </div>
        <div class="custom-file">
          <select class="form-control su_actual_revenue_sel" name="investment_required_range">
            <option value="" selected disabled>Select a range</option>
            <option value="0|1000000">&#60; 1 million</option>
            <option value="1000000|10000000">1 &#60; revenue &#60; 10 milion</option>
            <option value="10000000|50000000">10 &#60; revenue &#60; 50 million</option>
            <option value="50000000|1000000000"> &#62; 50 milion</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Actual Ebitda Margin</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group">
      <div class="input-group">
        <div class="custom-file">
          <input type="number" name="ebitda_margin" class="form-control su_ebidta_margin" placeholder="Insert a value from -100 to 100">
        </div>
        <div class="input-group-append">
          <span class="input-group-text">%</span>
        </div>
      </div>
    </div>
  </div>



  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Preferred Estimate Revenue</span>
      <span class="deal-subhead">(1 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_revenue_1_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_revenue_1" class="form-control su_for_rev_1" placeholder="Enter a value for 1st year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_revenue_1_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_revenue_1" class="form-control su_for_rev_1">
            <option value="" selected disabled>Select a value for 1st year</option>
            <option value="0|1000000">&#60; 1 million</option>
            <option value="1000000|10000000">1 &#60; revenue &#60; 10 milion</option>
            <option value="10000000|50000000">10 &#60; revenue &#60; 50 million</option>
            <option value="50000000|1000000000"> &#62; 50 milion</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Estimate Ebitda Margin</span>
      <span class="deal-subhead">(1 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_ebitda_1_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_ebitda_1" class="form-control su_for_ebd_1" placeholder="Enter a value for 1st year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">%</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_ebitda_1_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_ebitda_1" class="form-control su_for_ebd_1">
            <option value="" selected disabled>Select a value for 1st year</option>
            <option value="-100|-50">-100%&#60;ebitda margin&#60;-50%</option>
            <option value="-50|-25">-50%&#60;ebitda margin&#60;-25%</option>
            <option value="-25|0">-25%&#60;ebitda margin&#60;0%</option>
            <option value="0|10">0%&#60;ebitda margin&#60;10%</option>
            <option value="10|20">10%&#60;ebitda margin&#60;20%</option>
            <option value="20|40">20%&#60;ebitda margin&#60;40%</option>
            <option value="40|100">Over 40%</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">%</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Estimate Revenue</span>
      <span class="deal-subhead">(2 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_revenue_2_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_revenue_2" class="form-control su_for_rev_2" placeholder="Enter a value for 1st year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_revenue_2_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_revenue_2" class="form-control su_for_rev_2">
            <option value="" selected disabled>Select a value for 1st year</option>
            <option value="0|1000000">&#60; 1 million</option>
            <option value="1000000|10000000">1 &#60; revenue &#60; 10 milion</option>
            <option value="10000000|50000000">10 &#60; revenue &#60; 50 million</option>
            <option value="50000000|1000000000"> &#62; 50 milion</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Estimate Ebitda Margin</span>
      <span class="deal-subhead">(2 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_ebitda_2_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_ebitda_2" class="form-control su_for_ebd_2" placeholder="Enter a value for 1st year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">%</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_ebitda_2_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_ebitda_2" class="form-control su_for_ebd_2">
            <option value="" selected disabled>Select a value for 2nd year</option>
            <option value="-100|-50">-100%&#60;ebitda margin&#60;-50%</option>
            <option value="-50|-25">-50%&#60;ebitda margin&#60;-25%</option>
            <option value="-25|0">-25%&#60;ebitda margin&#60;0%</option>
            <option value="0|10">0%&#60;ebitda margin&#60;10%</option>
            <option value="10|20">10%&#60;ebitda margin&#60;20%</option>
            <option value="20|40">20%&#60;ebitda margin&#60;40%</option>
            <option value="40|100">Over 40%</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">%</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Estimate Revenue</span>
      <span class="deal-subhead">(3 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_revenue_3_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_revenue_3" class="form-control su_for_rev_3" placeholder="Enter a value for 1st year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_revenue_3_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_revenue_3" class="form-control su_for_rev_3">
            <option value="" selected disabled>Select a value for 3rd year</option>
            <option value="0|1000000">&#60; 1 million</option>
            <option value="1000000|10000000">1 &#60; revenue &#60; 10 milion</option>
            <option value="10000000|50000000">10 &#60; revenue &#60; 50 million</option>
            <option value="50000000|1000000000"> &#62; 50 milion</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">€</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Estimate Ebitda Margin</span>
      <span class="deal-subhead">(3 Year)</span>
    </div>
    <div class="col-md-4 col-sm-12 input-container input-group input-group-multiple-radio">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="fixed" name="forcast_ebitda_3_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <input type="number" name="forcast_ebitda_3" class="form-control su_for_ebd_3" placeholder="Enter a value for 3rd year">
        </div>
        <div class="input-group-append">
          <span class="input-group-text span-currency-icon">%</span>
        </div>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <input type="radio" value="range" name="forcast_ebitda_3_sell" class="deal-radio">
          </span>
        </div>
        <div class="custom-file">
          <select name="forcast_ebitda_3" class="form-control su_for_ebd_3">
            <option value="" selected disabled>Select a value for 3rd year</option>
            <option value="-100|-50">-100%&#60;ebitda margin&#60;-50%</option>
            <option value="-50|-25">-50%&#60;ebitda margin&#60;-25%</option>
            <option value="-25|0">-25%&#60;ebitda margin&#60;0%</option>
            <option value="0|10">0%&#60;ebitda margin&#60;10%</option>
            <option value="10|20">10%&#60;ebitda margin&#60;20%</option>
            <option value="20|40">20%&#60;ebitda margin&#60;40%</option>
            <option value="40|100">Over 40%</option>
          </select>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">%</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>General Description</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="general_description" rows="3" class="form-control su_description" placeholder="Who you are, What are you looking for..."></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Key Elements</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <textarea name="key_elements" rows="3" class="form-control su_key_elements" placeholder="Holder of patents, VC-backed, PE-backed, Artificial intelligence, ESG Compliant, Renewables, Digital Platform"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-12 deal-heading">
      <span>Image</span>
      <span class="deal-subhead">(Max 5MB)</span>
    </div>
    <div class="col-md-9 col-sm-12 input-container input-group">
      <div class="input-group">
        <input type="text" class="sell_su_image-list" hidden value="">
        <input type="file" name="files[]" class="adImage sell_su_image" multiple="false">
      </div>
    </div>
  </div>
</div>
