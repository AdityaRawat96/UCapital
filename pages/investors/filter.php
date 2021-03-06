<!-- Start Advance Filter -->
<div class="modal fade" id="advancedFilters" data-filter="investor">
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
              <li> <a href="#investorName" data-toggle="tab" class="add-active active"> Name of the investor </a> </li>
              <li> <a href="#PrimaryInvestor" data-toggle="tab"> Primary Investor Type </a> </li>
              <li> <a href="#preferredInvestment" data-toggle="tab"> Preferred Investment Type </a> </li>
              <li> <a href="#preferredInvestmentAmount" data-toggle="tab"> Preferred Investment Amount </a> </li>
              <li> <a href="#AUM" data-toggle="tab"> A.U.M. </a> </li>
              <li> <a href="#Preferredindustry" data-toggle="tab"> Preferred industry </a> </li>
              <li> <a href="#PreferredVerticals" data-toggle="tab"> Preferred Verticals </a> </li>
              <li> <a href="#Where" data-toggle="tab"> Preferred Geography </a> </li>
              <li> <a href="#investmentProfessionals" data-toggle="tab"> No. of Investment Professionals </a> </li>
            </ul>
          </div>

          <div class="col-md-9">
            <div class="tab-content pl-3">
              <div class="tab-pane active" id="investorName">
                <div class="input-group">
                  <input type="text" class="form-control filter_search_query" placeholder="Search..">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="searchFilter($(this));">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div><br>
                <div class="form-group mt-1 mb-4" id="investorNameType">
                  <ul class="engery654 subcategories investorNameSearch">
                  </ul>
                </div>
              </div>

              <div class="tab-pane" id="preferredInvestment">
                <div class="input-group">
                  <input type="text" class="form-control filter_search_query" placeholder="Search..">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="searchFilter($(this));">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div><br>
                <div class="form-group mt-1 mb-4" id="preferredInvestmentType">
                  <ul class="engery654 subcategories preferredinvestmenttypesSearch">
                  </ul>
                </div>
              </div>

              <div class="tab-pane" id="preferredInvestmentAmount">
                <div class="form-group mt-1 mb-4" id="preferredInvestmentAmountType">
                  <ul class="engery654 subcategories">
                    <li class="searchable" data-search="preferred investment amount Less than 1 million" data-count="(X < 10000000)">Preferred investment amount Less than 1 million</li>
                    <li class="searchable" data-search="1 million &#x3c; preferred investment amount &#x3c; 10 million" data-count="(X >= 1000000 && X < 10000000)">1 million &#x3c; preferred investment amount &#x3c; 10 million</li>
                    <li class="searchable" data-search="10 million &#x3c; preferred investment amount &#x3c; 50 million" data-count="(X >= 10000000 && X < 500000000)">10 million &#x3c; preferred investment amount &#x3c; 50 million</li>
                    <li class="searchable" data-search="preferred investment amount &#x3e; 50 million" data-count="(X >= 500000000)">preferred investment amount &#x3e; 50 million</li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane" id="PreferredVerticals">
                <div class="input-group">
                  <input type="text" class="form-control filter_search_query" placeholder="Search..">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="searchFilter($(this));">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div><br>
                <div class="form-group mt-1 mb-4" id="PreferredVerticalsType">
                  <ul class="engery654 subcategories preferredVerticalsSearch">
                  </ul>
                </div>
              </div>

              <div class="tab-pane" id="PrimaryInvestor">
                <div class="form-group mt-1 mb-4 subcategories_container" id="pebuyout">
                  <label class="font-name"> PE/Buyout Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Investment Bank" data-container="pebuyout_container">Investment Bank</li>
                    <li class="primary_investor_sub searchable" data-search="Limited Partner" data-container="pebuyout_container">Limited Partner</li>
                    <li class="primary_investor_sub searchable" data-search="PE/Buyout" data-container="pebuyout_container">PE/Buyout</li>
                    <li class="primary_investor_sub searchable" data-search="Merchant Banking Firm" data-container="pebuyout_container">Merchant Banking Firm</li>
                    <li class="primary_investor_sub searchable" data-search="Growth/Expansion" data-container="pebuyout_container">Growth/Expansion</li>
                    <li class="primary_investor_sub searchable" data-search="Lender/Debt Provider" data-container="pebuyout_container">Lender/Debt Provider</li>
                    <li class="primary_investor_sub searchable" data-search="Other Private Equity" data-container="pebuyout_container">Other Private Equity</li>
                    <li class="primary_investor_sub searchable" data-search="Mezzanine" data-container="pebuyout_container">Mezzanine</li>
                  </ul>
                </div>

                <div class="form-group mt-1 mb-4 subcategories_container" id="venturecapital">
                  <label class="font-name"> Venture Capital Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Accelleretor/incubator" data-container="venturecapital_container"> Accelleretor/incubator </li>
                    <li class="primary_investor_sub searchable" data-search="Angel Group" data-container="venturecapital_container"> Angel Group </li>
                    <li class="primary_investor_sub searchable" data-search="Corporate V. E." data-container="venturecapital_container"> Corporate Venture Capital </li>
                    <li class="primary_investor_sub searchable" data-search="Not-for-profit Venture Capital" data-container="venturecapital_container"> Not-for-profit Venture Capital </li>
                    <li class="primary_investor_sub searchable" data-search="Angel (individual)" data-container="venturecapital_container"> Angel (individual) </li>
                    <li class="primary_investor_sub searchable" data-search="Business Development Company" data-container="venturecapital_container"> Business Development Company </li>
                    <li class="primary_investor_sub searchable" data-search="Corporate Development" data-container="venturecapital_container"> Corporate Development </li>
                    <li class="primary_investor_sub searchable" data-search="SBIC" data-container="venturecapital_container"> SBIC </li>
                  </ul>
                </div>

                <div class="form-group mt-1 mb-4 subcategories_container" id="assetmanager">
                  <label class="font-name"> Asset Manager Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Asset Manager" data-container="assetmanager_container">Asset Manager</li>
                    <li class="primary_investor_sub searchable" data-search="Fund of Funds" data-container="assetmanager_container">Fund of Funds</li>
                    <li class="primary_investor_sub searchable" data-search="Family Office" data-container="assetmanager_container">Family Office</li>
                    <li class="primary_investor_sub searchable" data-search="Hedge Fund" data-container="assetmanager_container">Hedge Fund</li>
                    <li class="primary_investor_sub searchable" data-search="Sovereign Wealth Fund" data-container="assetmanager_container">Sovereign Wealth Fund</li>
                    <li class="primary_investor_sub searchable" data-search="Mutual Fund" data-container="assetmanager_container">Mutual Fund</li>
                  </ul>
                </div>

                <div class="form-group mt-1 mb-4 subcategories_container" id="realestate">
                  <label class="font-name"> Real Estate Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Real Estate" data-container="realestate_container">Real Estate</li>
                  </ul>
                </div>

                <div class="form-group mt-1 mb-4 subcategories_container" id="corporation">
                  <label class="font-name"> Corporation Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Corporation" data-container="corporation_container">Corporation</li>
                    <li class="primary_investor_sub searchable" data-search="PE-Backed Company" data-container="corporation_container">PE-Backed Company</li>
                    <li class="primary_investor_sub searchable" data-search="VC-Backed Company" data-container="corporation_container">VC-Backed Company</li>
                    <li class="primary_investor_sub searchable" data-search="Infrastructure" data-container="corporation_container">Infrastructure</li>
                    <li class="primary_investor_sub searchable" data-search="Holding Company" data-container="corporation_container">Holding Company</li>
                  </ul>
                </div>

                <div class="form-group mt-1 mb-4 subcategories_container" id="other">
                  <label class="font-name"> Other Types: </label>
                  <ul class="engery654 subcategories">
                    <li class="primary_investor_sub searchable" data-search="Government" data-container="other_container">Government</li>
                    <li class="primary_investor_sub searchable" data-search="Other" data-container="other_container">Other</li>
                    <li class="primary_investor_sub searchable" data-search="Impact Investing" data-container="other_container">Impact Investing</li>
                    <li class="primary_investor_sub searchable" data-search="Secondary Buyer" data-container="other_container">Secondary Buyer</li>
                    <li class="primary_investor_sub searchable" data-search="University" data-container="other_container">University</li>
                    <li class="primary_investor_sub searchable" data-search="Fundless Sponsor" data-container="other_container">Fundless Sponsor</li>
                  </ul>
                </div>
              </div>



              <div class="tab-pane" id="AUM">
                <div class="form-group mt-1 mb-4" id="aumType">
                  <ul class="engery654 subcategories">
                    <li class="searchable" data-search="AUM Less than 10 million" data-count="(X < 10000000)">AUM Less than 10 million</li>
                    <li class="searchable" data-search="10 million &#x3c; AUM &#x3c; 50 million" data-count="(X >= 10000000 && X < 50000000)">10 million &#x3c; AUM &#x3c; 50 million</li>
                    <li class="searchable" data-search="50 million &#x3c; AUM &#x3c; 200 million" data-count="(X >= 50000000 && X < 200000000)">50 million &#x3c; AUM &#x3c; 200 million</li>
                    <li class="searchable" data-search="200 million &#x3c; AUM &#x3c; 1 billion" data-count="(X >= 200000000 && X < 1000000000)">200 million &#x3c; AUM &#x3c; 1 billion</li>
                    <li class="searchable" data-search="AUM &#x3e; 1 billion" data-count="(X >= 1000000000)">AUM &#x3e; 1 billion</li>
                  </ul>
                </div>
              </div>



              <div class="tab-pane" id="Preferredindustry">
                <div class="input-group">
                  <input type="text" class="form-control filter_search_query" placeholder="Search..">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="searchFilter($(this));">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div><br>
                <div class="form-group mt-1 mb-4" id="PreferredindustryType">
                  <ul class="engery654 subcategories">
                    <li class="searchable" data-search="3D Printing">3D Printing</li>
                    <li class="searchable" data-search="Accessories">Accessories</li>
                    <li class="searchable" data-search="Accounting">Accounting</li>
                    <li class="searchable" data-search="AdTech">AdTech</li>
                    <li class="searchable" data-search="Advanced Manufacturing">Advanced Manufacturing</li>
                    <li class="searchable" data-search="Aerospace and Defense">Aerospace and Defense</li>
                    <li class="searchable" data-search="Agricultural Chemicals">Agricultural Chemicals</li>
                    <li class="searchable" data-search="Agriculture">Agriculture</li>
                    <li class="searchable" data-search="AgTech">AgTech</li>
                    <li class="searchable" data-search="Air">Air</li>
                    <li class="searchable" data-search="Alternative Energy Equipment">Alternative Energy Equipment</li>
                    <li class="searchable" data-search="Aluminum Mining">Aluminum Mining</li>
                    <li class="searchable" data-search="Animal Husbandry">Animal Husbandry</li>
                    <li class="searchable" data-search="Animal Textiles">Animal Textiles</li>
                    <li class="searchable" data-search="Apparel and Accessories">Apparel and Accessories</li>
                    <li class="searchable" data-search="Application Software">Application Software</li>
                    <li class="searchable" data-search="Application Specific Semiconductors">Application Specific Semiconductors</li>
                    <li class="searchable" data-search="Aquaculture">Aquaculture</li>
                    <li class="searchable" data-search="Artificial Intelligence & Machine Learning">Artificial Intelligence & Machine Learning</li>
                    <li class="searchable" data-search="Financial Institution">Financial Institution</li>
                    <li class="searchable" data-search="AudioTech">AudioTech</li>
                    <li class="searchable" data-search="Audit and Tax Services (B2B)">Audit and Tax Services (B2B)</li>
                    <li class="searchable" data-search="Audit and Tax Services (B2C)">Audit and Tax Services (B2C)</li>
                    <li class="searchable" data-search="Augmented Reality">Augmented Reality</li>
                    <li class="searchable" data-search="Automation/Workflow Software">Automation/Workflow Software</li>
                    <li class="searchable" data-search="Automotive Insurance">Automotive Insurance</li>
                    <li class="searchable" data-search="Automotive">Automotive</li>
                    <li class="searchable" data-search="Autonomous cars">Autonomous cars</li>
                    <li class="searchable" data-search="B2B Payments">B2B Payments</li>
                    <li class="searchable" data-search="Beauty">Beauty</li>
                    <li class="searchable" data-search="Beverages">Beverages</li>
                    <li class="searchable" data-search="Big Data">Big Data</li>
                    <li class="searchable" data-search="Biotechnology">Biotechnology</li>
                    <li class="searchable" data-search="BPO/Outsource Services">BPO/Outsource Services</li>
                    <li class="searchable" data-search="Broadcasting">Broadcasting</li>
                    <li class="searchable" data-search="Brokerage">Brokerage</li>
                    <li class="searchable" data-search="Building Products">Building Products</li>
                    <li class="searchable" data-search="Buildings and Property">Buildings and Property</li>
                    <li class="searchable" data-search="Business Equipment and Supplies">Business Equipment and Supplies</li>
                    <li class="searchable" data-search="Business Products and Services (B2B)">Business Products and Services (B2B)</li>
                    <li class="searchable" data-search="Business/Productivity Software">Business/Productivity Software</li>
                    <li class="searchable" data-search="Cable Service Providers">Cable Service Providers</li>
                    <li class="searchable" data-search="Cannabis">Cannabis</li>
                    <li class="searchable" data-search="Capital Markets/Institutions">Capital Markets/Institutions</li>
                    <li class="searchable" data-search="Car-Sharing">Car-Sharing</li>
                    <li class="searchable" data-search="Casinos and Gaming">Casinos and Gaming</li>
                    <li class="searchable" data-search="Catalog Retail">Catalog Retail</li>
                    <li class="searchable" data-search="Chemicals and Gases">Chemicals and Gases</li>
                    <li class="searchable" data-search="CleanTech">CleanTech</li>
                    <li class="searchable" data-search="Clinics/Outpatient Services">Clinics/Outpatient Services</li>
                    <li class="searchable" data-search="Clothing">Clothing</li>
                    <li class="searchable" data-search="CloudTech & DevOps">CloudTech & DevOps</li>
                    <li class="searchable" data-search="Coal and Consumable Fuels Equipment">Coal and Consumable Fuels Equipment</li>
                    <li class="searchable" data-search="Coal Mining">Coal Mining</li>
                    <li class="searchable" data-search="Commercial Banks">Commercial Banks</li>
                    <li class="searchable" data-search="Commercial Products">Commercial Products</li>
                    <li class="searchable" data-search="Commercial Services">Commercial Services</li>
                    <li class="searchable" data-search="Commercial Transportation">Commercial Transportation</li>
                    <li class="searchable" data-search="Commercial/Professional Insurance">Commercial/Professional Insurance</li>
                    <li class="searchable" data-search="Communication Software">Communication Software</li>
                    <li class="searchable" data-search="Communications and Networking">Communications and Networking</li>
                    <li class="searchable" data-search="Computer Hardware">Computer Hardware</li>
                    <li class="searchable" data-search="Computers">Computers</li>
                    <li class="searchable" data-search="Conglomerates">Conglomerates</li>
                    <li class="searchable" data-search="Connectivity Products">Connectivity Products</li>
                    <li class="searchable" data-search="Construction (Non-Wood)">Construction (Non-Wood)</li>
                    <li class="searchable" data-search="Construction and Engineering">Construction and Engineering</li>
                    <li class="searchable" data-search="Construction Technology">Construction Technology</li>
                    <li class="searchable" data-search="Consulting Services (B2B)">Consulting Services (B2B)</li>
                    <li class="searchable" data-search="Consumer Durables">Consumer Durables</li>
                    <li class="searchable" data-search="Consumer Finance">Consumer Finance</li>
                    <li class="searchable" data-search="Consumer Non-Durables">Consumer Non-Durables</li>
                    <li class="searchable" data-search="Consumer Products and Services (B2C)">Consumer Products and Services (B2C)</li>
                    <li class="searchable" data-search="Containers and Packaging">Containers and Packaging</li>
                    <li class="searchable" data-search="Cruise Lines">Cruise Lines</li>
                    <li class="searchable" data-search="Cryptocurrency/Blockchain">Cryptocurrency/Blockchain</li>
                    <li class="searchable" data-search="Cultivation">Cultivation</li>
                    <li class="searchable" data-search="Cybersecurity">Cybersecurity</li>
                    <li class="searchable" data-search="Database Software">Database Software</li>
                    <li class="searchable" data-search="Decision/Risk Analysis">Decision/Risk Analysis</li>
                    <li class="searchable" data-search="Department Stores">Department Stores</li>
                    <li class="searchable" data-search="Diagnostic Equipment">Diagnostic Equipment</li>
                    <li class="searchable" data-search="Digital Health">Digital Health</li>
                    <li class="searchable" data-search="Discovery Tools (Healthcare)">Discovery Tools (Healthcare)</li>
                    <li class="searchable" data-search="Distributors (Healthcare)">Distributors (Healthcare)</li>
                    <li class="searchable" data-search="Distributors/Wholesale (B2C)">Distributors/Wholesale (B2C)</li>
                    <li class="searchable" data-search="Distributors/Wholesale">Distributors/Wholesale</li>
                    <li class="searchable" data-search="Drug Delivery">Drug Delivery</li>
                    <li class="searchable" data-search="Drug Discovery">Drug Discovery</li>
                    <li class="searchable" data-search="E-Commerce">E-Commerce</li>
                    <li class="searchable" data-search="EdTech">EdTech</li>
                    <li class="searchable" data-search="Education and Training Services (B2B)">Education and Training Services (B2B)</li>
                    <li class="searchable" data-search="Educational and Training Services (B2C)">Educational and Training Services (B2C)</li>
                    <li class="searchable" data-search="Educational Software">Educational Software</li>
                    <li class="searchable" data-search="Elder and Disabled Care">Elder and Disabled Care</li>
                    <li class="searchable" data-search="Electric Utilities">Electric Utilities</li>
                    <li class="searchable" data-search="Electrical Equipment">Electrical Equipment</li>
                    <li class="searchable" data-search="Electronic Components">Electronic Components</li>
                    <li class="searchable" data-search="Electronic Equipment and Instruments">Electronic Equipment and Instruments</li>
                    <li class="searchable" data-search="Electronics (B2C)">Electronics (B2C)</li>
                    <li class="searchable" data-search="Energy Equipment">Energy Equipment</li>
                    <li class="searchable" data-search="Energy Exploration">Energy Exploration</li>
                    <li class="searchable" data-search="Energy Infrastructure">Energy Infrastructure</li>
                    <li class="searchable" data-search="Energy Marketing">Energy Marketing</li>
                    <li class="searchable" data-search="Energy Production">Energy Production</li>
                    <li class="searchable" data-search="Energy Refining">Energy Refining</li>
                    <li class="searchable" data-search="Energy Services">Energy Services</li>
                    <li class="searchable" data-search="Energy Storage">Energy Storage</li>
                    <li class="searchable" data-search="Energy Traders and Brokers">Energy Traders and Brokers</li>
                    <li class="searchable" data-search="Energy Transportation">Energy Transportation</li>
                    <li class="searchable" data-search="Energy">Energy</li>
                    <li class="searchable" data-search="Enterprise Systems (Healthcare)">Enterprise Systems (Healthcare)</li>
                    <li class="searchable" data-search="Entertainment Software">Entertainment Software</li>
                    <li class="searchable" data-search="Environmental Services (B2B)">Environmental Services (B2B)</li>
                    <li class="searchable" data-search="Ephemeral Content">Ephemeral Content</li>
                    <li class="searchable" data-search="eSports">eSports</li>
                    <li class="searchable" data-search="Exploration">Exploration</li>
                    <li class="searchable" data-search="FemTech">FemTech</li>
                    <li class="searchable" data-search="Fiberoptic Equipment">Fiberoptic Equipment</li>
                    <li class="searchable" data-search="Financial Services">Financial Services</li>
                    <li class="searchable" data-search="Financial Software">Financial Software</li>
                    <li class="searchable" data-search="FinTech">FinTech</li>
                    <li class="searchable" data-search="Food Products">Food Products</li>
                    <li class="searchable" data-search="FoodTech">FoodTech</li>
                    <li class="searchable" data-search="Footwear">Footwear</li>
                    <li class="searchable" data-search="Forestry Development/Harvesting">Forestry Development/Harvesting</li>
                    <li class="searchable" data-search="Forestry Processing">Forestry Processing</li>
                    <li class="searchable" data-search="Forestry">Forestry</li>
                    <li class="searchable" data-search="Gaming">Gaming</li>
                    <li class="searchable" data-search="Gas Utilities">Gas Utilities</li>
                    <li class="searchable" data-search="General Merchandise Stores">General Merchandise Stores</li>
                    <li class="searchable" data-search="General Purpose Semiconductors">General Purpose Semiconductors</li>
                    <li class="searchable" data-search="Gold Mining">Gold Mining</li>
                    <li class="searchable" data-search="Government">Government</li>
                    <li class="searchable" data-search="Healthcare Devices and Supplies">Healthcare Devices and Supplies</li>
                    <li class="searchable" data-search="Healthcare Services">Healthcare Services</li>
                    <li class="searchable" data-search="Healthcare Technology Systems">Healthcare Technology Systems</li>
                    <li class="searchable" data-search="Healthcare">Healthcare</li>
                    <li class="searchable" data-search="HealthTech">HealthTech</li>
                    <li class="searchable" data-search="Holding Companies">Holding Companies</li>
                    <li class="searchable" data-search="Home Furnishings">Home Furnishings</li>
                    <li class="searchable" data-search="Horticulture">Horticulture</li>
                    <li class="searchable" data-search="Hospitals/Inpatient Services">Hospitals/Inpatient Services</li>
                    <li class="searchable" data-search="Hotels and Leisure">Hotels and Leisure</li>
                    <li class="searchable" data-search="Hotels and Resorts">Hotels and Resorts</li>
                    <li class="searchable" data-search="Household Appliances">Household Appliances</li>
                    <li class="searchable" data-search="Household Products">Household Products</li>
                    <li class="searchable" data-search="HR Tech">HR Tech</li>
                    <li class="searchable" data-search="Human Capital Services">Human Capital Services</li>
                    <li class="searchable" data-search="Impact Investing">Impact Investing</li>
                    <li class="searchable" data-search="Industrial Chemicals">Industrial Chemicals</li>
                    <li class="searchable" data-search="Industrial Supplies and Parts">Industrial Supplies and Parts</li>
                    <li class="searchable" data-search="Industrials">Industrials</li>
                    <li class="searchable" data-search="Information Services (B2C)">Information Services (B2C)</li>
                    <li class="searchable" data-search="Information Technology">Information Technology</li>
                    <li class="searchable" data-search="Infrastructure">Infrastructure</li>
                    <li class="searchable" data-search="Insurance Brokers">Insurance Brokers</li>
                    <li class="searchable" data-search="Insurance">Insurance</li>
                    <li class="searchable" data-search="InsurTech">InsurTech</li>
                    <li class="searchable" data-search="International Banks">International Banks</li>
                    <li class="searchable" data-search="Internet of Things">Internet of Things</li>
                    <li class="searchable" data-search="Internet Retail">Internet Retail</li>
                    <li class="searchable" data-search="Internet Service Providers">Internet Service Providers</li>
                    <li class="searchable" data-search="Internet Software">Internet Software</li>
                    <li class="searchable" data-search="Investment Banks">Investment Banks</li>
                    <li class="searchable" data-search="Iron and Steel Mining">Iron and Steel Mining</li>
                    <li class="searchable" data-search="IT Consulting and Outsourcing">IT Consulting and Outsourcing</li>
                    <li class="searchable" data-search="IT Services">IT Services</li>
                    <li class="searchable" data-search="Laboratory Services (Healthcare)">Laboratory Services (Healthcare)</li>
                    <li class="searchable" data-search="Legal Services (B2B)">Legal Services (B2B)</li>
                    <li class="searchable" data-search="Legal Services (B2C)">Legal Services (B2C)</li>
                    <li class="searchable" data-search="Leisure Facilities">Leisure Facilities</li>
                    <li class="searchable" data-search="Life and Health Insurance">Life and Health Insurance</li>
                    <li class="searchable" data-search="Life Sciences">Life Sciences</li>
                    <li class="searchable" data-search="Logistics">Logistics</li>
                    <li class="searchable" data-search="LOHAS & Wellness">LOHAS & Wellness</li>
                    <li class="searchable" data-search="Luxury Goods">Luxury Goods</li>
                    <li class="searchable" data-search="Machinery (B2B)">Machinery (B2B)</li>
                    <li class="searchable" data-search="Managed Care">Managed Care</li>
                    <li class="searchable" data-search="Manufacturing">Manufacturing</li>
                    <li class="searchable" data-search="Marine">Marine</li>
                    <li class="searchable" data-search="Marketing Tech">Marketing Tech</li>
                    <li class="searchable" data-search="Materials and Resources">Materials and Resources</li>
                    <li class="searchable" data-search="Media and Information Services (B2B)">Media and Information Services (B2B)</li>
                    <li class="searchable" data-search="Media">Media</li>
                    <li class="searchable" data-search="Medical Records Systems">Medical Records Systems</li>
                    <li class="searchable" data-search="Medical Supplies">Medical Supplies</li>
                    <li class="searchable" data-search="Metal Containers and Packaging">Metal Containers and Packaging</li>
                    <li class="searchable" data-search="Metals">Metals</li>
                    <li class="searchable" data-search="Micro-Mobility">Micro-Mobility</li>
                    <li class="searchable" data-search="Minerals and Mining">Minerals and Mining</li>
                    <li class="searchable" data-search="Mobile Commerce">Mobile Commerce</li>
                    <li class="searchable" data-search="Mobile">Mobile</li>
                    <li class="searchable" data-search="Mobility Tech">Mobility Tech</li>
                    <li class="searchable" data-search="Monitoring Equipment">Monitoring Equipment</li>
                    <li class="searchable" data-search="Mortgage Tech">Mortgage Tech</li>
                    <li class="searchable" data-search="Movies">Movies</li>
                    <li class="searchable" data-search="Multi-line Chemicals">Multi-line Chemicals</li>
                    <li class="searchable" data-search="Multi-line Insurance">Multi-line Insurance</li>
                    <li class="searchable" data-search="Multi-line Mining">Multi-line Mining</li>
                    <li class="searchable" data-search="Multimedia and Design Software">Multimedia and Design Software</li>
                    <li class="searchable" data-search="Music and Entertainment">Music and Entertainment</li>
                    <li class="searchable" data-search="Nanotechnology">Nanotechnology</li>
                    <li class="searchable" data-search="National Banks">National Banks</li>
                    <li class="searchable" data-search="Network Management Software">Network Management Software</li>
                    <li class="searchable" data-search="Office Electronics">Office Electronics</li>
                    <li class="searchable" data-search="Office Services (B2B)">Office Services (B2B)</li>
                    <li class="searchable" data-search="Oil & Gas">Oil & Gas</li>
                    <li class="searchable" data-search="Oil and Gas Equipment">Oil and Gas Equipment</li>
                    <li class="searchable" data-search="Oncology">Oncology</li>
                    <li class="searchable" data-search="Operating Systems Software">Operating Systems Software</li>
                    <li class="searchable" data-search="Other Agriculture">Other Agriculture</li>
                    <li class="searchable" data-search="Other Apparel">Other Apparel</li>
                    <li class="searchable" data-search="Other Business Products and Services">Other Business Products and Services</li>
                    <li class="searchable" data-search="Other Capital Markets/Institutions">Other Capital Markets/Institutions</li>
                    <li class="searchable" data-search="Other Chemicals and Gases">Other Chemicals and Gases</li>
                    <li class="searchable" data-search="Other Commercial Banks">Other Commercial Banks</li>
                    <li class="searchable" data-search="Other Commercial Products">Other Commercial Products</li>
                    <li class="searchable" data-search="Other Commercial Services">Other Commercial Services</li>
                    <li class="searchable" data-search="Other Communications and Networking">Other Communications and Networking</li>
                    <li class="searchable" data-search="Other Consumer Durables">Other Consumer Durables</li>
                    <li class="searchable" data-search="Other Consumer Non-Durables">Other Consumer Non-Durables</li>
                    <li class="searchable" data-search="Other Consumer Products and Services">Other Consumer Products and Services</li>
                    <li class="searchable" data-search="Other Containers and Packaging">Other Containers and Packaging</li>
                    <li class="searchable" data-search="Other Devices and Supplies">Other Devices and Supplies</li>
                    <li class="searchable" data-search="Other Energy Services">Other Energy Services</li>
                    <li class="searchable" data-search="Other Energy">Other Energy</li>
                    <li class="searchable" data-search="Other Equipment">Other Equipment</li>
                    <li class="searchable" data-search="Other Financial Services">Other Financial Services</li>
                    <li class="searchable" data-search="Other Forestry">Other Forestry</li>
                    <li class="searchable" data-search="Other Hardware">Other Hardware</li>
                    <li class="searchable" data-search="Other Healthcare Services">Other Healthcare Services</li>
                    <li class="searchable" data-search="Other Healthcare Technology Systems">Other Healthcare Technology Systems</li>
                    <li class="searchable" data-search="Other Healthcare">Other Healthcare</li>
                    <li class="searchable" data-search="Other Information Technology">Other Information Technology</li>
                    <li class="searchable" data-search="Other Insurance">Other Insurance</li>
                    <li class="searchable" data-search="Other IT Services">Other IT Services</li>
                    <li class="searchable" data-search="Other Materials">Other Materials</li>
                    <li class="searchable" data-search="Other Media">Other Media</li>
                    <li class="searchable" data-search="Other Metals">Other Metals</li>
                    <li class="searchable" data-search="Other Pharmaceuticals and Biotechnology">Other Pharmaceuticals and Biotechnology</li>
                    <li class="searchable" data-search="Other Restaurants">Other Restaurants</li>
                    <li class="searchable" data-search="Other Retail">Other Retail</li>
                    <li class="searchable" data-search="Other Semiconductors">Other Semiconductors</li>
                    <li class="searchable" data-search="Other Services (B2C Non-Financial)">Other Services (B2C Non-Financial)</li>
                    <li class="searchable" data-search="Other Software">Other Software</li>
                    <li class="searchable" data-search="Other Textiles">Other Textiles</li>
                    <li class="searchable" data-search="Other Transportation">Other Transportation</li>
                    <li class="searchable" data-search="Other Utilities">Other Utilities</li>
                    <li class="searchable" data-search="Outcome Management (Healthcare)">Outcome Management (Healthcare)</li>
                    <li class="searchable" data-search="Paper Containers and Packaging">Paper Containers and Packaging</li>
                    <li class="searchable" data-search="Paper/Soft Products">Paper/Soft Products</li>
                    <li class="searchable" data-search="Parts and Peripherals">Parts and Peripherals</li>
                    <li class="searchable" data-search="Personal Products">Personal Products</li>
                    <li class="searchable" data-search="Pet Technology">Pet Technology</li>
                    <li class="searchable" data-search="Pharmaceuticals and Biotechnology">Pharmaceuticals and Biotechnology</li>
                    <li class="searchable" data-search="Pharmaceuticals">Pharmaceuticals</li>
                    <li class="searchable" data-search="Plastic Containers and Packaging">Plastic Containers and Packaging</li>
                    <li class="searchable" data-search="Practice Management (Healthcare)">Practice Management (Healthcare)</li>
                    <li class="searchable" data-search="Precious Metals and Minerals Mining">Precious Metals and Minerals Mining</li>
                    <li class="searchable" data-search="Printing Services (B2B)">Printing Services (B2B)</li>
                    <li class="searchable" data-search="Private Equity">Private Equity</li>
                    <li class="searchable" data-search="Production and Refining">Production and Refining</li>
                    <li class="searchable" data-search="Property and Casualty Insurance">Property and Casualty Insurance</li>
                    <li class="searchable" data-search="Publishing">Publishing</li>
                    <li class="searchable" data-search="Radio and Television">Radio and Television</li>
                    <li class="searchable" data-search="Rail">Rail</li>
                    <li class="searchable" data-search="Raw Materials (Non-Wood)">Raw Materials (Non-Wood)</li>
                    <li class="searchable" data-search="Real Estate Investment Trusts (REITs)">Real Estate Investment Trusts (REITs)</li>
                    <li class="searchable" data-search="Real Estate Services (B2C)">Real Estate Services (B2C)</li>
                    <li class="searchable" data-search="Real Estate Technology">Real Estate Technology</li>
                    <li class="searchable" data-search="Recreational Goods">Recreational Goods</li>
                    <li class="searchable" data-search="Regional Banks">Regional Banks</li>
                    <li class="searchable" data-search="Re-Insurance">Re-Insurance</li>
                    <li class="searchable" data-search="Restaurant Technology">Restaurant Technology</li>
                    <li class="searchable" data-search="Restaurants and Bars">Restaurants and Bars</li>
                    <li class="searchable" data-search="Restaurants">Restaurants</li>
                    <li class="searchable" data-search="Retail">Retail</li>
                    <li class="searchable" data-search="Ridesharing">Ridesharing</li>
                    <li class="searchable" data-search="Road">Road</li>
                    <li class="searchable" data-search="Robotics and Drones">Robotics and Drones</li>
                    <li class="searchable" data-search="SaaS">SaaS</li>
                    <li class="searchable" data-search="Security Services (B2B)">Security Services (B2B)</li>
                    <li class="searchable" data-search="Semiconductors">Semiconductors</li>
                    <li class="searchable" data-search="Services (Non-Financial)">Services (Non-Financial)</li>
                    <li class="searchable" data-search="Social Content">Social Content</li>
                    <li class="searchable" data-search="Social/Platform Software">Social/Platform Software</li>
                    <li class="searchable" data-search="Software Development Applications">Software Development Applications</li>
                    <li class="searchable" data-search="Software">Software</li>
                    <li class="searchable" data-search="Space Technology">Space Technology</li>
                    <li class="searchable" data-search="Specialized Finance">Specialized Finance</li>
                    <li class="searchable" data-search="Specialty Chemicals">Specialty Chemicals</li>
                    <li class="searchable" data-search="Specialty Retail">Specialty Retail</li>
                    <li class="searchable" data-search="Storage (IT)">Storage (IT)</li>
                    <li class="searchable" data-search="Supply Chain Tech">Supply Chain Tech</li>
                    <li class="searchable" data-search="Surgical Devices">Surgical Devices</li>
                    <li class="searchable" data-search="Synthetic Textiles">Synthetic Textiles</li>
                    <li class="searchable" data-search="Systems and Information Management">Systems and Information Management</li>
                    <li class="searchable" data-search="Telecommunications Service Providers">Telecommunications Service Providers</li>
                    <li class="searchable" data-search="Textiles">Textiles</li>
                    <li class="searchable" data-search="Therapeutic Devices">Therapeutic Devices</li>
                    <li class="searchable" data-search="Thrifts and Mortgage Finance">Thrifts and Mortgage Finance</li>
                    <li class="searchable" data-search="TMT">TMT</li>
                    <li class="searchable" data-search="Transportation">Transportation</li>
                    <li class="searchable" data-search="Utilities">Utilities</li>
                    <li class="searchable" data-search="Vertical Market Software">Vertical Market Software</li>
                    <li class="searchable" data-search="Virtual Reality">Virtual Reality</li>
                    <li class="searchable" data-search="Water Utilities">Water Utilities</li>
                    <li class="searchable" data-search="Wearables & Quantified Self">Wearables & Quantified Self</li>
                    <li class="searchable" data-search="Wireless Communications Equipment">Wireless Communications Equipment</li>
                    <li class="searchable" data-search="Wireless Service Providers">Wireless Service Providers</li>

                  </ul>
                </div>
              </div>


              <div class="tab-pane" id="investmentProfessionals">
                <div class="form-group mt-1 mb-4" id="investmentProfessionalsType">
                  <ul class="engery654 subcategories">
                    <li class="searchable" data-search="No. of Investment Professionals Less than 10" data-count="(X < 10)">Less than 10</li>
                    <li class="searchable" data-search="10 &#x3c; No. of Investment Professionals &#x3c; 50" data-count="(X >= 10 && X <= 50)">From 10 to 50</li>
                    <li class="searchable" data-search="No. of Investment Professionals &#x3e; 50" data-count="(X > 50)">Above 50</li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane" id="Where">
                <div class="input-group">
                  <input type="text" class="form-control filter_search_query" placeholder="Search..">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="searchFilter($(this));">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div><br>
                <div class="form-group mt-1 mb-4" id="whereType">
                  <ul class="engery654 subcategories">
                    <li class="searchable" data-search="Afghanistan">Afghanistan</li>
                    <li class="searchable" data-search="Albania">Albania</li>
                    <li class="searchable" data-search="Algeria">Algeria</li>
                    <li class="searchable" data-search="American Samoa">American Samoa</li>
                    <li class="searchable" data-search="Andorra">Andorra</li>
                    <li class="searchable" data-search="Angola">Angola</li>
                    <li class="searchable" data-search="Argentina">Argentina</li>
                    <li class="searchable" data-search="Australia">Australia</li>
                    <li class="searchable" data-search="Austria">Austria</li>
                    <li class="searchable" data-search="Bahamas">Bahamas</li>
                    <li class="searchable" data-search="Bahrain">Bahrain</li>
                    <li class="searchable" data-search="Bangladesh">Bangladesh</li>
                    <li class="searchable" data-search="Barbados">Barbados</li>
                    <li class="searchable" data-search="Belarus">Belarus</li>
                    <li class="searchable" data-search="Belgium">Belgium</li>
                    <li class="searchable" data-search="Belize">Belize</li>
                    <li class="searchable" data-search="Benin">Benin</li>
                    <li class="searchable" data-search="Bermuda">Bermuda</li>
                    <li class="searchable" data-search="Bolivia">Bolivia</li>
                    <li class="searchable" data-search="Bosnia and Herzegovina">Bosnia and Herzegovina</li>
                    <li class="searchable" data-search="Botswana">Botswana</li>
                    <li class="searchable" data-search="Brazil">Brazil</li>
                    <li class="searchable" data-search="British Virgin Islands">British Virgin Islands</li>
                    <li class="searchable" data-search="Brunei">Brunei</li>
                    <li class="searchable" data-search="Bulgaria">Bulgaria</li>
                    <li class="searchable" data-search="Burkina Faso">Burkina Faso</li>
                    <li class="searchable" data-search="Cambodia">Cambodia</li>
                    <li class="searchable" data-search="Cameroon">Cameroon</li>
                    <li class="searchable" data-search="Canada">Canada</li>
                    <li class="searchable" data-search="Cayman Islands">Cayman Islands</li>
                    <li class="searchable" data-search="Central African Republic">Central African Republic</li>
                    <li class="searchable" data-search="Chile">Chile</li>
                    <li class="searchable" data-search="China">China</li>
                    <li class="searchable" data-search="Colombia">Colombia</li>
                    <li class="searchable" data-search="Congo">Congo</li>
                    <li class="searchable" data-search="Costa Rica">Costa Rica</li>
                    <li class="searchable" data-search="Croatia">Croatia</li>
                    <li class="searchable" data-search="Cuba">Cuba</li>
                    <li class="searchable" data-search="Curacao">Curacao</li>
                    <li class="searchable" data-search="Cyprus">Cyprus</li>
                    <li class="searchable" data-search="Czech Republic">Czech Republic</li>
                    <li class="searchable" data-search="Denmark">Denmark</li>
                    <li class="searchable" data-search="Dominican Republic">Dominican Republic</li>
                    <li class="searchable" data-search="Ecuador">Ecuador</li>
                    <li class="searchable" data-search="Egypt">Egypt</li>
                    <li class="searchable" data-search="El Salvador">El Salvador</li>
                    <li class="searchable" data-search="Eritrea">Eritrea</li>
                    <li class="searchable" data-search="Estonia">Estonia</li>
                    <li class="searchable" data-search="Ethiopia">Ethiopia</li>
                    <li class="searchable" data-search="Faroe Islands">Faroe Islands</li>
                    <li class="searchable" data-search="Fiji">Fiji</li>
                    <li class="searchable" data-search="Finland">Finland</li>
                    <li class="searchable" data-search="France">France</li>
                    <li class="searchable" data-search="Gabon">Gabon</li>
                    <li class="searchable" data-search="Germany">Germany</li>
                    <li class="searchable" data-search="Ghana">Ghana</li>
                    <li class="searchable" data-search="Gibraltar">Gibraltar</li>
                    <li class="searchable" data-search="Greece">Greece</li>
                    <li class="searchable" data-search="Greenland">Greenland</li>
                    <li class="searchable" data-search="Guatemala">Guatemala</li>
                    <li class="searchable" data-search="Honduras">Honduras</li>
                    <li class="searchable" data-search="Hong Kong">Hong Kong</li>
                    <li class="searchable" data-search="Hungary">Hungary</li>
                    <li class="searchable" data-search="Iceland">Iceland</li>
                    <li class="searchable" data-search="India">India</li>
                    <li class="searchable" data-search="Indonesia">Indonesia</li>
                    <li class="searchable" data-search="Iran">Iran</li>
                    <li class="searchable" data-search="Iraq">Iraq</li>
                    <li class="searchable" data-search="Ireland">Ireland</li>
                    <li class="searchable" data-search="Israel">Israel</li>
                    <li class="searchable" data-search="Italy">Italy</li>
                    <li class="searchable" data-search="Ivory Coast">Ivory Coast</li>
                    <li class="searchable" data-search="Jamaica">Jamaica</li>
                    <li class="searchable" data-search="Japan">Japan</li>
                    <li class="searchable" data-search="Jordan">Jordan</li>
                    <li class="searchable" data-search="Kazakhstan">Kazakhstan</li>
                    <li class="searchable" data-search="Kenya">Kenya</li>
                    <li class="searchable" data-search="Kuwait">Kuwait</li>
                    <li class="searchable" data-search="Kyrgyzstan">Kyrgyzstan</li>
                    <li class="searchable" data-search="Laos">Laos</li>
                    <li class="searchable" data-search="Latvia">Latvia</li>
                    <li class="searchable" data-search="Lebanon">Lebanon</li>
                    <li class="searchable" data-search="Liberia">Liberia</li>
                    <li class="searchable" data-search="Libya">Libya</li>
                    <li class="searchable" data-search="Liechtenstein">Liechtenstein</li>
                    <li class="searchable" data-search="Lithuania">Lithuania</li>
                    <li class="searchable" data-search="Luxembourg">Luxembourg</li>
                    <li class="searchable" data-search="Macau">Macau</li>
                    <li class="searchable" data-search="Macedonia">Macedonia</li>
                    <li class="searchable" data-search="Madagascar">Madagascar</li>
                    <li class="searchable" data-search="Malaysia">Malaysia</li>
                    <li class="searchable" data-search="Mali">Mali</li>
                    <li class="searchable" data-search="Malta">Malta</li>
                    <li class="searchable" data-search="Marshall Islands">Marshall Islands</li>
                    <li class="searchable" data-search="Mauritius">Mauritius</li>
                    <li class="searchable" data-search="Mexico">Mexico</li>
                    <li class="searchable" data-search="Monaco">Monaco</li>
                    <li class="searchable" data-search="Mongolia">Mongolia</li>
                    <li class="searchable" data-search="Morocco">Morocco</li>
                    <li class="searchable" data-search="Mozambique">Mozambique</li>
                    <li class="searchable" data-search="Myanmar">Myanmar</li>
                    <li class="searchable" data-search="Namibia">Namibia</li>
                    <li class="searchable" data-search="Nepal">Nepal</li>
                    <li class="searchable" data-search="Netherlands">Netherlands</li>
                    <li class="searchable" data-search="New Zealand">New Zealand</li>
                    <li class="searchable" data-search="Nicaragua">Nicaragua</li>
                    <li class="searchable" data-search="Niger">Niger</li>
                    <li class="searchable" data-search="Nigeria">Nigeria</li>
                    <li class="searchable" data-search="Norway">Norway</li>
                    <li class="searchable" data-search="Oman">Oman</li>
                    <li class="searchable" data-search="Pakistan">Pakistan</li>
                    <li class="searchable" data-search="Palestine">Palestine</li>
                    <li class="searchable" data-search="Panama">Panama</li>
                    <li class="searchable" data-search="Papua New Guinea">Papua New Guinea</li>
                    <li class="searchable" data-search="Peru">Peru</li>
                    <li class="searchable" data-search="Philippines">Philippines</li>
                    <li class="searchable" data-search="Poland">Poland</li>
                    <li class="searchable" data-search="Portugal">Portugal</li>
                    <li class="searchable" data-search="Qatar">Qatar</li>
                    <li class="searchable" data-search="Reunion">Reunion</li>
                    <li class="searchable" data-search="Romania">Romania</li>
                    <li class="searchable" data-search="Russia">Russia</li>
                    <li class="searchable" data-search="Rwanda">Rwanda</li>
                    <li class="searchable" data-search="Samoa">Samoa</li>
                    <li class="searchable" data-search="Saudi Arabia">Saudi Arabia</li>
                    <li class="searchable" data-search="Senegal">Senegal</li>
                    <li class="searchable" data-search="Serbia">Serbia</li>
                    <li class="searchable" data-search="Sierra Leone">Sierra Leone</li>
                    <li class="searchable" data-search="Singapore">Singapore</li>
                    <li class="searchable" data-search="Slovakia">Slovakia</li>
                    <li class="searchable" data-search="Slovenia">Slovenia</li>
                    <li class="searchable" data-search="Somalia">Somalia</li>
                    <li class="searchable" data-search="South Africa">South Africa</li>
                    <li class="searchable" data-search="South Korea">South Korea</li>
                    <li class="searchable" data-search="Spain">Spain</li>
                    <li class="searchable" data-search="Sri Lanka">Sri Lanka</li>
                    <li class="searchable" data-search="Sudan">Sudan</li>
                    <li class="searchable" data-search="Swaziland">Swaziland</li>
                    <li class="searchable" data-search="Sweden">Sweden</li>
                    <li class="searchable" data-search="Switzerland">Switzerland</li>
                    <li class="searchable" data-search="Taiwan">Taiwan</li>
                    <li class="searchable" data-search="Tanzania">Tanzania</li>
                    <li class="searchable" data-search="Thailand">Thailand</li>
                    <li class="searchable" data-search="Togo">Togo</li>
                    <li class="searchable" data-search="Tunisia">Tunisia</li>
                    <li class="searchable" data-search="Turkey">Turkey</li>
                    <li class="searchable" data-search="Uganda">Uganda</li>
                    <li class="searchable" data-search="Ukraine">Ukraine</li>
                    <li class="searchable" data-search="United Arab Emirates">United Arab Emirates</li>
                    <li class="searchable" data-search="United Kingdom">United Kingdom</li>
                    <li class="searchable" data-search="United States">United States</li>
                    <li class="searchable" data-search="Uruguay">Uruguay</li>
                    <li class="searchable" data-search="Uzbekistan">Uzbekistan</li>
                    <li class="searchable" data-search="Venezuela">Venezuela</li>
                    <li class="searchable" data-search="Vietnam">Vietnam</li>
                    <li class="searchable" data-search="Zambia">Zambia</li>
                    <li class="searchable" data-search="Zimbabwe">Zimbabwe</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="applyFilter()">Apply</button>
      </div>

    </div>
  </div>
</div>

<!-- End Advance Filter -->
