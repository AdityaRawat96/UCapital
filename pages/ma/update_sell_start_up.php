<?php
session_start();
if (isset($_SESSION['email'])) {
    include '../elements/header.php';
    include '../elements/navbar.php';
    include '../elements/sidebar.php';

    $id = $_GET["id"];
    $sql = "SELECT * FROM business_company where id=$id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    }
?>
    <div class="buy_company_start_up">
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Type of Start up</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control startup_type su_startup_type_buy" name="startup_type" id="startup_type">
                    <option value="" selected disabled>Choose type of Start up</option>
                    <option value="Pre-seed Stage">Pre-seed Stage</option>
                    <option value="Seed Stage">Seed Stage</option>
                    <option value="Early Stage">Early Stage</option>
                    <option value="Growth Stage">Growth Stage</option>
                    <option value="Expansion Phase">Expansion Phase</option>
                    <option value="Exit Phase">Exit Phase</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Location</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <div class="row location_holder">
                    <div class="col-md-8 col-sm-12 location_container">

                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="button" name="button" class="btn btn-add-custom form-control add-location">+ Add a location</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Sector</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control su_sector_buy" id="sector">
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
            <div class="col-md-9 col-sm-12 input-container">
                <select class="industry su_industry_buy" multiple="multiple" data-placeholder="Select Industries (Max 3)" style="width: 100%;" name="industry" id="industry">
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
                <span>Default Currency</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <select class="form-control default_currency su_default_currency_buy" name="company_type" id="currency">
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
                <span>Preferred Revenue</span>
                <span class="deal-subhead">(Choose one)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="preferred_revenue" value="undisclosed" class="deal-radio su_preferred_revenue_buy">
                        </span>
                    </div>
                    <div class="custom-file">
                        <input type="number" class="form-control" placeholder="Any" disabled style="background-color: white !important;">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="preferred_revenue" value="fixed" class="deal-radio su_preferred_revenue_buy">
                        </span>
                    </div>
                    <div class="custom-file">
                        <input type="number" class="form-control su_preferred_revenue_val_buy" id="preferred_revenue_val" placeholder="Type a value">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="radio" name="preferred_revenue" value="range" class="deal-radio su_preferred_revenue_buy">
                        </span>
                    </div>
                    <div class="custom-file">
                        <select class="form-control su_preferred_revenue_sel_buy" id="preferred_revenue_sel" name="preferred_revenue_range">
                            <option value="" selected disabled>Select a range</option>
                            <option value="0|1000000">&#60; 1 million</option>
                            <option value="1000000|10000000">1 &#60; revenue &#60; 10 million</option>
                            <option value="10000000|50000000">10 &#60; revenue &#60; 50 million</option>
                            <option value="50000000|1000000000">&#62; 50 million</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Ebitda Margin</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_ebidta_margin_buy" id="ebdita_margin" placeholder="Insert a value from -100 to 100">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Revenue</span>
                <span class="deal-subhead">(Y1Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_rev_1_buy" id="rev_y1y" placeholder="Enter a value for 1st year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text span-currency-icon">€</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Ebitda</span>
                <span class="deal-subhead">(Y1Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_ebd_1_buy" id="ebd_y1y" placeholder="Enter a value for 1st year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Revenue</span>
                <span class="deal-subhead">(Y2Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_rev_2_buy" id="rev_y2y" placeholder="Enter a value for 2nd year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text span-currency-icon">€</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Ebitda</span>
                <span class="deal-subhead">(Y2Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_ebd_2_buy" id="ebd_y2y" placeholder="Enter a value for 2nd year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Revenue</span>
                <span class="deal-subhead">(Y3Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_rev_3_buy" id="rev_y3y" placeholder="Enter a value for 3rd year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text span-currency-icon">€</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Forcast Ebitda</span>
                <span class="deal-subhead">(Y3Y)</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="number" class="form-control su_for_ebd_3_buy" id="ebd_y3y" placeholder="Enter a value for 3rd year">
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Investment Size</span>
                <span class="deal-subhead">(Multiple Choice)</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <input type="checkbox" name="investment_size" class="su_investment_required_value_buy" value="0|500000"> Less than 500k<br>
                <input type="checkbox" name="investment_size" class="su_investment_required_value_buy" value="500000|1000000"> From 500k to 1 mln<br>
                <input type="checkbox" name="investment_size" class="su_investment_required_value_buy" value="1000000|10000000"> From 1 mln to 10 mln<br>
                <input type="checkbox" name="investment_size" class="su_investment_required_value_buy" value="10000000|1000000000"> More than 10 mln<br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Who I am</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control default_currency su_who_i_am_buy" name="who_i_am" id="who_i_am">
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
                <input type="number" name="aum" value="" class="form-control su_aum" id="aum" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Number of Investments</span>
            </div>
            <div class="col-md-4 col-sm-12 input-container">
                <input type="number" name="number_of_investments" id="number_of_investments" value="" class="form-control su_number_of_investments" placeholder="Enter a value">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>Preferred Investment Amount</span>
                <span class="deal-subhead">(Multiple Choice)</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <input type="checkbox" name="investment_amount" class="su_preferred_investment_amount" value="0|1000000"> Less than 1 mln<br>
                <input type="checkbox" name="investment_amount" class="su_preferred_investment_amount" value="1000000|10000000"> From 1 to 10 mln<br>
                <input type="checkbox" name="investment_amount" class="su_preferred_investment_amount" value="10000000|50000000"> From 10 mln to 50 mln<br>
                <input type="checkbox" name="investment_amount" class="su_preferred_investment_amount" value="50000000|1000000000"> More than 50 mln<br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>What I want to do</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <select class="form-control what_i_want su_what_i_want" name="what_i_want" id="what_i_want">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Buy majority">Buy majority</option>
                    <option value="Buy totality">Buy totality</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Collaboration">Collaboration</option>
                    <option value="Joint venture">Joint venture</option>
                    <option value="Lending">Lending</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>General Description</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="general_description" rows="3" id="description" class="form-control su_description_buy" placeholder="Type a description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 deal-heading">
                <span>What are we looking for</span>
            </div>
            <div class="col-md-9 col-sm-12 input-container">
                <textarea name="looking_for" id="looking_for" rows="3" class="form-control su_looking_for" placeholder="Type a description"></textarea>
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
                    <input type="file" name="files[]" class="adImage su_image_buy" id="adImage" multiple="false">
                </div>
            </div>
        </div>
    </div>

    <input type="button" class="btn btn-success" value="Update" onclick="update()" style="width: 60%; margin-left: 20%;" />

    <?php
    include '../elements/footer.php';
    ?>

<?php
} else {
?>
    <script>
        window.open('../../', '_self')
    </script>
<?php
}
?>

<script>
    function update() {
        response = {};
        response['hq_country'] = $(".su_hq_country_buy option:selected").text();
        response['hq_city'] = $(".su_hq_city_buy").val();
        response['sector_sel'] = $(".su_sector_buy").val();
        response['startup_type'] = $(".su_startup_type_buy").val();


        var isIndustrySetted = false;
        var industry = '';
        $(".su_industry_buy").each(function() {
            isIndustrySetted = true;
            industry += $(this).val() + "|";
        });
        if (true)
            response['industry_sel'] = industry.substring(0, industry.length - 1);

        response['default_currency'] = $(".su_default_currency_buy").val();

        response['actual_revenue_type'] = $(".su_preferred_revenue_buy:checked").val();
        if ($(".su_preferred_revenue_buy:checked").val() === "undisclosed") {} else if ($(".su_preferred_revenue_buy:checked").val() === "fixed") {
            response['actual_revenue_min'] = $(".su_preferred_revenue_val_buy").val();
            response['actual_revenue_max'] = $(".su_preferred_revenue_val_buy").val();
        } else if ($(".su_preferred_revenue_buy:checked").val() === "range") {
            assetVal = $(".su_preferred_revenue_sel_buy").val();
            index = assetVal.lastIndexOf("|");
            response['actual_revenue_min'] = assetVal.substring(0, index);
            response['actual_revenue_max'] = assetVal.substring(index + 1);
        }

        response['ebidta_margin'] = $(".su_ebidta_margin_buy").val();
        response['for_rev_1'] = $(".su_for_rev_1_buy").val();
        response['for_ebd_1'] = $(".su_for_ebd_1_buy").val();
        response['for_rev_2'] = $(".su_for_rev_2_buy").val();
        response['for_ebd_2'] = $(".su_for_ebd_2_buy").val();
        response['for_rev_3'] = $(".su_for_rev_3_buy").val();
        response['for_ebd_3'] = $(".su_for_ebd_3_buy").val();
        response['who_i_am'] = $(".su_who_i_am_buy").val();
        response['aum'] = $(".su_aum").val();
        response['number_of_investments'] = $(".su_number_of_investments").val();
        response['what_i_want'] = $(".su_what_i_want").val();
        response['description'] = $(".su_description_buy").val();
        response['looking_for'] = $(".su_looking_for").val();
        response['image'] = $(".su_image_buy").val();

        var investmentAmount = "";
        var investmentSize = "";
        $(".su_investment_required_value_buy").each(function() {
            if ($(this).prop("checked")) {
                investmentSize += $(this).val() + ",";
            }
        });
        $(".su_preferred_investment_amount").each(function() {
            if ($(this).prop("checked")) {
                investmentAmount += $(this).val() + ",";
            }
        });
        investmentAmount = investmentAmount.length > 0 ? investmentAmount.substring(0, investmentAmount.length - 1) : investmentAmount;
        investmentSize = investmentSize.length > 0 ? investmentSize.substring(0, investmentSize.length - 1) : investmentSize;
        response['investment_size'] = investmentSize;
        response['investment_amount'] = investmentAmount;
        response["asset_type"] = "SU";
        console.log(response);

        $.ajax({
            type: 'POST',
            url: '../../assets/php/updateDeals.php',
            data: {
                dealData: response,
                id: <?= $id ?>
            },
            success: function(data) {
                console.log(data);
            }
        });


    }

    function setValues() {
        document.getElementById("sector").value = "<?= $row["SECTOR"] ?>";
        document.getElementById("currency").value = "<?= $row["CURRENCY"] ?>";
        document.getElementById("startup_type").value = "<?= $row["SUB_COMPANY_TYPE"] ?>";
        document.getElementById("ebdita_margin").value = "<?= $row["EBIDTA_MARGIN"] ?>";
        document.getElementById("rev_y1y").value = "<?= $row["FORECAST_REVENUE_Y1"] ?>";
        document.getElementById("ebd_y1y").value = "<?= $row["FORECAST_REVENUE_Y2"] ?>";
        document.getElementById("rev_y2y").value = "<?= $row["FORECAST_REVENUE_Y3"] ?>";
        document.getElementById("ebd_y2y").value = "<?= $row["FORECAST_EBITDA_Y1"] ?>";
        document.getElementById("rev_y3y").value = "<?= $row["FORECAST_EBITDA_Y2"] ?>";
        document.getElementById("ebd_y3y").value = "<?= $row["FORECAST_EBITDA_Y3"] ?>";
        document.getElementById("description").value = "<?= $row["DESCRIPTION"] ?>";
        document.getElementById("who_i_am").value = "<?= $row["WHO_I_AM"] ?>";
        document.getElementById("aum").value = "<?= $row["AUM"] ?>";
        document.getElementById("what_i_want").value = "<?= $row["WANT_TO_DO"] ?>";
        document.getElementById("looking_for").value = "<?= $row["LOOKING_FOR"] ?>";
        document.getElementById("number_of_investments").value = "<?= $row["NUM_OF_INVESTMENT"] ?>";

        $("input[name=preferred_revenue][value=<?= $row["ACTUAL_REVENUE_TYPE"] ?>]").attr('checked', 'checked');
        if ("<?= $row["ACTUAL_REVENUE_TYPE"] ?>" == "undisclosed") {} else if ("<?= $row["ACTUAL_REVENUE_TYPE"] ?>" == "fixed") {
            document.getElementById("preferred_revenue_val").value = "<?= $row["ACTUAL_REVENUE_MIN"] ?>";
        } else if ("<?= $row["ACTUAL_REVENUE_TYPE"] ?>" == "range") {
            document.getElementById("preferred_revenue_sel").value = "<?= $row["ACTUAL_REVENUE_MIN"] . '|' . $row["ACTUAL_REVENUE_MAX"] ?>";
        }

        var values = "<?= $row["INDUSTRY"] ?>";
        $.each(values.split(","), function(i, e) {
            $("#industry option[value='" + e + "']").prop("selected", true);
        });

        var investmentSize = "<?= $row["INVESTMENT_SIZE"] ?>";
        var investmentAmount = "<?= $row["PREF_INVESTMENT_AMOUNT"] ?>";
        console.log(investmentAmount);

        var investmentSizeArr = investmentSize.split(",");
        var investmentAmountArr = investmentAmount.split(",");

        for (var i = 0; i < investmentSizeArr.length; i++) {
            $('input[name="investment_size"][value="' + investmentSizeArr[i].toString() + '"]').prop("checked", true);
        }
        for (var i = 0; i < investmentAmountArr.length; i++) {
            $('input[name="investment_amount"][value="' + investmentAmountArr[i].toString() + '"]').prop("checked", true);
        }
    }
</script>

<script>
    var country_data;
    $(document).ready(function() {
        setValues();
        $.ajax({
            type: 'POST',
            url: "../../assets/php/getCountries.php",
            dataType: 'json',
            success: function(data) {
                country_data = data;
                var countryVal = "<?= $row['COUNTRY'] ?>";
                var cityVal = "<?= $row['CITY'] ?>";
                countryArr = countryVal.split(",");
                cityArr = cityVal.split(",");
                var location_container = $(".location_container");
                countryArr.forEach(function(element, index) {
                    var countryId = "";
                    location_container.append('<div class="col-md-8 col-sm-12 location_container"> <select class="form-control hq_country bc_hq_country_buy" name="hq_country"> <option value="" selected disabled>Choose a country</option> </select> <select class="form-control hq_city bc_hq_city_buy" name="hq_city"> <option value="" selected disabled>Choose a city</option> </select> <button class="btn btn-danger btn-location-remove"><i class="fas fa-times"></i></button> </div>');
                    country_data.forEach(country_data => {
                        location_container.find('.hq_country').last().append($('<option>', {
                            value: country_data.id,
                            text: country_data.country,
                            selected: country_data.country == element ? true : false
                        }));
                    });
                    countryId = location_container.find('.hq_country').last().val();
                    syncLoadCity(countryId, cityArr[index], location_container.find('.hq_city').last()).then(function(data) {}).catch(function(err) {
                        console.log(err)
                    })
                });
            }
        });
    });

    function syncLoadCity(countryId, cityVal, domElem) {
        console.log(cityVal);
        return new Promise(function(resolve, reject) {
            $.ajax({
                type: 'POST',
                url: "../../assets/php/getCities.php",
                dataType: 'json',
                data: {
                    country_id: countryId
                },
                success: function(data) {
                    data.forEach(element => {
                        domElem.append($('<option>', {
                            value: element.id,
                            text: element.city,
                            selected: element.city == cityVal ? true : false
                        }));
                    });

                    resolve()
                },
                error: function(err) {
                    reject(err)
                }
            });
        });
    }

    $("body").on("change", ".hq_country", function() {
        loadCities($(this));
    });

    function loadCities(elem) {
        $.ajax({
            type: 'POST',
            url: "../../assets/php/getCities.php",
            dataType: 'json',
            data: {
                country_id: elem.val()
            },
            success: function(data) {
                var city_selector = elem.siblings('.hq_city');
                city_selector.html("");
                city_selector.append($('<option>', {
                    value: "",
                    text: "Choose a city",
                    selected: true,
                    disabled: true
                }));
                $.each(data, function(index, element) {
                    city_selector.append($('<option>', {
                        value: element.city,
                        text: element.city
                    }));
                });
            }
        });
    }
</script>