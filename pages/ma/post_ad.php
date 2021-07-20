<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1"> <img src="../../dist/img/new/m-a-breadcum.svg"> M & A ></a></li>
              <li class="breadcrumb-item active text-custom-2"> Post AD LITE </li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="card p-3"><br>
          <div class="row">
            <div class="col-md-2 col-sm-12">
              <ul class="listing-add-post1 nav nav-pills asset-options">
                <li> <a href="#"> What </a> </li>
                <li> <a href="#"> Type </a> </li>
                <li> <a href="#assetValue"> Value </a> </li>
                <li> <a href="#location"> Where </a> </li>
                <li> <a href="#title"> Description </a> </li>
              </ul>
              <ul class="listing-add-post1 nav nav-pills company-options">
                <li> <a href="#"> What </a> </li>
                <li> <a href="#"> Type </a> </li>
                <li> <a href="#sector"> Sector </a> </li>
                <li> <a href="#industry"> Industry </a> </li>
                <li> <a href="#revenue"> Revenue & Ebitda </a> </li>
                <li> <a href="#location"> Where </a> </li>
                <li> <a href="#title"> Description </a> </li>
              </ul>
            </div>
            <div class="col-md-10 col-sm-12">
              <form class="ad-form" action="index.html" method="post">
                <span>What do you want to do?</span><br><br>
                <div class="input-group btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-custom">
                    <input type="radio" name="action" autocomplete="off" value="Buy"> Buy
                  </label>
                  <label class="btn btn-custom">
                    <input type="radio" name="action" autocomplete="off" value="Sell"> Sell
                  </label>
                </div><br><br>
                <div class="input-group btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-custom">
                    <input type="radio" name="category" id="asset" autocomplete="off" value="Asset"> Asset
                  </label>
                  <label class="btn btn-custom">
                    <input type="radio" name="category" id="company" autocomplete="off" value="Company"> Company
                  </label>
                  <input type="hidden" id="ma_type" value="" hidden>
                </div><br><br>

                <!-- Assets Sction Start -->
                <section  class="asset-options">

                  <div class="input-group btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-custom">
                      <input type="radio" name="assetType" autocomplete="off" onclick="hideRealEstateOptions()" value="Company"> Company
                    </label>
                    <label class="btn btn-custom">
                      <input type="radio" name="assetType" autocomplete="off" onclick="hideRealEstateOptions()" value="Credits"> Credits
                    </label>
                    <label class="btn btn-custom">
                      <input type="radio" name="assetType" autocomplete="off" onclick="hideRealEstateOptions()" value="NPL"> NPL
                    </label>
                    <label class="btn btn-custom">
                      <input type="radio" name="assetType" id="realestate" autocomplete="off" onclick="showRealEstateOptions()" value="Real Estate"> Real Estate
                    </label>
                  </div><br><br>

                  <div class="form-group" id="realstate-options-group">
                    <label>Type of Real Estate</label>
                    <select class="form-control select2" style="width: 100%;" name="realestate" id="realestate-selected">
                      <option value="Residential">Residential</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Indusrial">Indusrial</option>
                      <option value="Land">Land</option>
                    </select>
                  </div><br>

                </section>
                <!-- Assets Sction End -->


                <!-- Company Sction Start -->
                <section class="company-options">

                  <div class="input-group btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-custom">
                      <input type="radio" name="companyType" autocomplete="off" value="Business"> Business
                    </label>
                    <label class="btn btn-custom">
                      <input type="radio" name="companyType" autocomplete="off" value="Start up"> Start up
                    </label>
                  </div><br><br>

                </section>
                <!-- Company Sction End -->


                <!-- Common Sction Start -->
                <section class="common-section">

                  <div class="form-group">
                    <label for="exampleInputFile">Value</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <div class="custom-file">
                        <input type="number" class="form-control" name="value" id="assetValue">
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div><br>

                  <div class="input-group">
                    <label>Industry </label>
                    <select class="select2" multiple="multiple" data-placeholder="Select Industries (Max 3)" style="width: 100%;" name="industry" id="industry">
                      <option value="Accessories">Accessories</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Aerospace and Defense">Aerospace and Defense</option>
                      <option value="Agricultural Chemicals">Agricultural Chemicals</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Air">Air</option>
                      <option value="Alternative Energy Equipment">Alternative Energy Equipment</option>
                      <option value="Aluminum Mining">Aluminum Mining</option>
                      <option value="Animal Husbandry">Animal Husbandry</option>
                      <option value="Animal Textiles">Animal Textiles</option>
                      <option value="Apparel and Accessories">Apparel and Accessories</option>
                      <option value="Application Software">Application Software</option>
                      <option value="Application Specific Semiconductors">Application Specific Semiconductors</option>
                      <option value="Aquaculture">Aquaculture</option>
                      <option value="Asset Management">Asset Management</option>
                      <option value="Audit and Tax Services (B2B)">Audit and Tax Services (B2B)</option>
                      <option value="Audit and Tax Services (B2C)">Audit and Tax Services (B2C)</option>
                      <option value="Automation/Workflow Software">Automation/Workflow Software</option>
                      <option value="Automotive">Automotive</option>
                      <option value="Automotive Insurance">Automotive Insurance</option>
                      <option value="Beverages">Beverages</option>
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
                      <option value="Capital Markets/Institutions">Capital Markets/Institutions</option>
                      <option value="Casinos and Gaming">Casinos and Gaming</option>
                      <option value="Catalog Retail">Catalog Retail</option>
                      <option value="Chemicals and Gases">Chemicals and Gases</option>
                      <option value="Clinics/Outpatient Services">Clinics/Outpatient Services</option>
                      <option value="Clothing">Clothing</option>
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
                      <option value="Consulting Services (B2B)">Consulting Services (B2B)</option>
                      <option value="Consumer Durables">Consumer Durables</option>
                      <option value="Consumer Finance">Consumer Finance</option>
                      <option value="Consumer Non-Durables">Consumer Non-Durables</option>
                      <option value="Consumer Products and Services (B2C)">Consumer Products and Services (B2C)</option>
                      <option value="Containers and Packaging">Containers and Packaging</option>
                      <option value="Cruise Lines">Cruise Lines</option>
                      <option value="Cultivation">Cultivation</option>
                      <option value="Database Software">Database Software</option>
                      <option value="Decision/Risk Analysis">Decision/Risk Analysis</option>
                      <option value="Department Stores">Department Stores</option>
                      <option value="Diagnostic Equipment">Diagnostic Equipment</option>
                      <option value="Discovery Tools (Healthcare)">Discovery Tools (Healthcare)</option>
                      <option value="Distributors (Healthcare)">Distributors (Healthcare)</option>
                      <option value="Distributors/Wholesale">Distributors/Wholesale</option>
                      <option value="Distributors/Wholesale (B2C)">Distributors/Wholesale (B2C)</option>
                      <option value="Drug Delivery">Drug Delivery</option>
                      <option value="Drug Discovery">Drug Discovery</option>
                      <option value="Education and Training Services (B2B)">Education and Training Services (B2B)</option>
                      <option value="Educational and Training Services (B2C)">Educational and Training Services (B2C)</option>
                      <option value="Educational Software">Educational Software</option>
                      <option value="Elder and Disabled Care">Elder and Disabled Care</option>
                      <option value="Electric Utilities">Electric Utilities</option>
                      <option value="Electrical Equipment">Electrical Equipment</option>
                      <option value="Electronic Components">Electronic Components</option>
                      <option value="Electronic Equipment and Instruments">Electronic Equipment and Instruments</option>
                      <option value="Electronics (B2C)">Electronics (B2C)</option>
                      <option value="Energy">Energy</option>
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
                      <option value="Enterprise Systems (Healthcare)">Enterprise Systems (Healthcare)</option>
                      <option value="Entertainment Software">Entertainment Software</option>
                      <option value="Environmental Services (B2B)">Environmental Services (B2B)</option>
                      <option value="Exploration">Exploration</option>
                      <option value="Fiberoptic Equipment">Fiberoptic Equipment</option>
                      <option value="Financial Services">Financial Services</option>
                      <option value="Financial Software">Financial Software</option>
                      <option value="Food Products">Food Products</option>
                      <option value="Footwear">Footwear</option>
                      <option value="Forestry">Forestry</option>
                      <option value="Forestry Development/Harvesting">Forestry Development/Harvesting</option>
                      <option value="Forestry Processing">Forestry Processing</option>
                      <option value="Gas Utilities">Gas Utilities</option>
                      <option value="General Merchandise Stores">General Merchandise Stores</option>
                      <option value="General Purpose Semiconductors">General Purpose Semiconductors</option>
                      <option value="Gold Mining">Gold Mining</option>
                      <option value="Government">Government</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="Healthcare Devices and Supplies">Healthcare Devices and Supplies</option>
                      <option value="Healthcare Services">Healthcare Services</option>
                      <option value="Healthcare Technology Systems">Healthcare Technology Systems</option>
                      <option value="Holding Companies">Holding Companies</option>
                      <option value="Home Furnishings">Home Furnishings</option>
                      <option value="Horticulture">Horticulture</option>
                      <option value="Hospitals/Inpatient Services">Hospitals/Inpatient Services</option>
                      <option value="Hotels and Leisure">Hotels and Leisure</option>
                      <option value="Hotels and Resorts">Hotels and Resorts</option>
                      <option value="Household Appliances">Household Appliances</option>
                      <option value="Household Products">Household Products</option>
                      <option value="Human Capital Services">Human Capital Services</option>
                      <option value="Industrial Chemicals">Industrial Chemicals</option>
                      <option value="Industrial Supplies and Parts">Industrial Supplies and Parts</option>
                      <option value="Information Services (B2C)">Information Services (B2C)</option>
                      <option value="Information Technology">Information Technology</option>
                      <option value="Infrastructure">Infrastructure</option>
                      <option value="Insurance">Insurance</option>
                      <option value="Insurance Brokers">Insurance Brokers</option>
                      <option value="International Banks">International Banks</option>
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
                      <option value="Logistics">Logistics</option>
                      <option value="Luxury Goods">Luxury Goods</option>
                      <option value="Machinery (B2B)">Machinery (B2B)</option>
                      <option value="Managed Care">Managed Care</option>
                      <option value="Marine">Marine</option>
                      <option value="Materials and Resources">Materials and Resources</option>
                      <option value="Media">Media</option>
                      <option value="Media and Information Services (B2B)">Media and Information Services (B2B)</option>
                      <option value="Medical Records Systems">Medical Records Systems</option>
                      <option value="Medical Supplies">Medical Supplies</option>
                      <option value="Metal Containers and Packaging">Metal Containers and Packaging</option>
                      <option value="Metals">Metals</option>
                      <option value="Minerals and Mining">Minerals and Mining</option>
                      <option value="Monitoring Equipment">Monitoring Equipment</option>
                      <option value="Movies">Movies</option>
                      <option value="Multi-line Chemicals">Multi-line Chemicals</option>
                      <option value="Multi-line Insurance">Multi-line Insurance</option>
                      <option value="Multi-line Mining">Multi-line Mining</option>
                      <option value="Multimedia and Design Software">Multimedia and Design Software</option>
                      <option value="Music and Entertainment">Music and Entertainment</option>
                      <option value="National Banks">National Banks</option>
                      <option value="Network Management Software">Network Management Software</option>
                      <option value="Office Electronics">Office Electronics</option>
                      <option value="Office Services (B2B)">Office Services (B2B)</option>
                      <option value="Oil and Gas Equipment">Oil and Gas Equipment</option>
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
                      <option value="Other Energy">Other Energy</option>
                      <option value="Other Energy Services">Other Energy Services</option>
                      <option value="Other Equipment">Other Equipment</option>
                      <option value="Other Financial Services">Other Financial Services</option>
                      <option value="Other Forestry">Other Forestry</option>
                      <option value="Other Hardware">Other Hardware</option>
                      <option value="Other Healthcare">Other Healthcare</option>
                      <option value="Other Healthcare Services">Other Healthcare Services</option>
                      <option value="Other Healthcare Technology Systems">Other Healthcare Technology Systems</option>
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
                      <option value="Pharmaceuticals">Pharmaceuticals</option>
                      <option value="Pharmaceuticals and Biotechnology">Pharmaceuticals and Biotechnology</option>
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
                      <option value="Recreational Goods">Recreational Goods</option>
                      <option value="Regional Banks">Regional Banks</option>
                      <option value="Re-Insurance">Re-Insurance</option>
                      <option value="Restaurants">Restaurants</option>
                      <option value="Restaurants and Bars">Restaurants and Bars</option>
                      <option value="Retail">Retail</option>
                      <option value="Road">Road</option>
                      <option value="Security Services (B2B)">Security Services (B2B)</option>
                      <option value="Semiconductors">Semiconductors</option>
                      <option value="Services (Non-Financial)">Services (Non-Financial)</option>
                      <option value="Social Content">Social Content</option>
                      <option value="Social/Platform Software">Social/Platform Software</option>
                      <option value="Software">Software</option>
                      <option value="Software Development Applications">Software Development Applications</option>
                      <option value="Specialized Finance">Specialized Finance</option>
                      <option value="Specialty Chemicals">Specialty Chemicals</option>
                      <option value="Specialty Retail">Specialty Retail</option>
                      <option value="Storage (IT)">Storage (IT)</option>
                      <option value="Surgical Devices">Surgical Devices</option>
                      <option value="Synthetic Textiles">Synthetic Textiles</option>
                      <option value="Systems and Information Management">Systems and Information Management</option>
                      <option value="Telecommunications Service Providers">Telecommunications Service Providers</option>
                      <option value="Textiles">Textiles</option>
                      <option value="Therapeutic Devices">Therapeutic Devices</option>
                      <option value="Thrifts and Mortgage Finance">Thrifts and Mortgage Finance</option>
                      <option value="Transportation">Transportation</option>
                      <option value="Utilities">Utilities</option>
                      <option value="Vertical Market Software">Vertical Market Software</option>
                      <option value="Water Utilities">Water Utilities</option>
                      <option value="Wireless Communications Equipment">Wireless Communications Equipment</option>
                      <option value="Wireless Service Providers">Wireless Service Providers</option>
                    </select>
                  </div><br>

                </section>
                <!-- Common Sction End -->


                <!-- Company Sction Start -->
                <section class="company-options">

                  <div class="input-group">
                    <label>Sector</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select Sectors (Max 3)" style="width: 100%;" name="sector" required id="sector">
                      <option value="Information Technology">Information Technology</option>
                      <option value="Business Products and Services (B2B)">Business Products and Services (B2B)</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="Consumer Products and Services (B2C)">Consumer Products and Services (B2C)</option>
                      <option value="Energy">Energy</option>
                      <option value="Financial Services">Financial Services</option>
                      <option value="Materials and Resources">Materials and Resources</option>
                    </select>
                  </div><br>

                  <div class="form-group">
                    <label>Revenue</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <div class="custom-file">
                        <input type="number" class="form-control" name="revenue" required id="revenue">
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label>Ebitda</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="ebitda" required id="ebitda">
                    </div>
                  </div><br>


                  <div class="input-group">
                    <label>Current Finance Status </label>
                    <select class="select2" style="width: 100%;" name="financeStatus" required id="financeStatus">
                      <option value="Corporate Backed or Acquired">Corporate Backed or Acquired</option>
                      <option value="Pending Transaction">Pending Transaction</option>
                      <option value="Corporation">Corporation</option>
                      <option value="Formerly PE Backed">Formerly PE Backed</option>
                      <option value="Venture Capital Backed">Venture Capital Backed</option>
                      <option value="Private Equity Backed">Private Equity Backed</option>
                      <option value="Failed Transaction">Failed Transaction</option>
                      <option value="Accelerator/Incubator Backed">Accelerator/Incubator Backed</option>
                      <option value="Angel Backed">Angel Backed</option>
                      <option value="Formerly Angel backed">Formerly Angel backed</option>
                      <option value="Private Debt Financed">Private Debt Financed</option>
                    </select>
                  </div><br>


                  <div class="input-group">
                    <label>Foundation Year </label>
                    <select class="select2" style="width: 100%;" name="foundationYear" required id="foundationYear">
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                    </select>
                  </div><br>


                </section>
                <!-- Company Sction End -->

                <!-- Common Sction Start -->
                <section class="common-section">
                  <div class="input-group">
                    <label>HQ Location</label>
                    <select class="form-control select2" style="width: 100%;" name="location" required id="location">
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Virgin Islands">British Virgin Islands</option>
                      <option value="Brunei">Brunei</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Congo">Congo</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Curacao">Curacao</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran">Iran</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Ivory Coast">Ivory Coast</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Laos">Laos</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libya">Libya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macau">Macau</option>
                      <option value="Macedonia">Macedonia</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palestine">Palestine</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russia">Russia</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Samoa">Samoa</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Serbia">Serbia</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Korea">South Korea</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tanzania">Tanzania</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Togo">Togo</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                  </div><br><br>

                  <div class="form-group">
                    <label> Title <small> (max 62 characters) </small> </label>
                    <div class="input-group">
                      <input type="text" class="form-control" maxlength="62" name="title" required id="title">
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label class="font-name"> Description  <small> (max 124 characters) </small> </label>
                    <div class="input-group">
                      <textarea class="input-text-area-sectoin" maxlength="124" rows="5" name="description" required id="description"></textarea>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label>Image</label>
                    <div class="input-group">
                      <input type="text" id="adImage-list" hidden value="">
                      <input type="file" name="files[]" class="adImage" id="adImage" multiple="false" >
                    </div>
                  </div><br>
                  <small style="color:red; display: none;" id="imageError">Image field is required</small><br>

                  <div class="form-group">
                    <label>Attachments</label>
                    <div class="input-group">
                      <input type="text" id="adAttachments-list" hidden value="">
                      <input type="file" name="files[]" class="adAttachments" id="adAttachments" multiple="multiple" >
                    </div>
                  </div><br>

                </section>
                <!-- Common Sction End -->

                <br>
                <br>
                <br>
                <div class="form-group mb-5">
                  <button type="submit" name="button" class="btn btn-primary">Publish</button>
                </div>
              </form>


            </div>
          </div>

        </div>
        <!-- container-fluid -->
      </section>
      <!-- content -->
    </div>
    <!-- content-wrapper -->


    <?php
    include '../elements/footer.php';
    ?>
    <link href="../../plugins/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="../../plugins/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">

    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="../../plugins/filer/js/jquery.filer.min.js"></script>

    <script type="text/javascript">

    var folderTimestamp = '<?php echo time(); ?>';
    var folderName = 'MergerAcquisition/' + folderTimestamp;


    $(document).ready(function(){
      $('.ad-form').validate({
        submitHandler: function () {
          checkPicture();
        },
        rules: {
          action: {
            required: true
          },
          category: {
            required: true
          },
          assetType: {
            required: true
          },
          realestate: {
            required: true
          },
          value: {
            required: true,
            digits: true
          },
          companyType: {
            required: true
          },
          sector: {
            required: true
          },
          industry: {
            required: true
          },
          revenue: {
            required: true,
            digits: true
          },
          ebitda: {
            required: true,
            digits: true
          },
          financeStatus: {
            required: true
          },
          foundationYear: {
            required: true
          },
          location: {
            required: true
          },
          title: {
            required: true,
            maxlength: 62,
          },
          description: {
            required: true,
            maxlength: 124,
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.input-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    })

    $(function () {
      $(".select2").select2({
        maximumSelectionLength: 3,
        formatSelectionTooBig: function (limit) {
          // Callback
          return 'Only 3 selections are allowed!';
        }
      });
      initFiler('adImage');
      initFilerAttachments('adAttachments');
    });


    function initFiler(filerID){

      var uploadedFiles = [];
      $("#"+filerID).filer({
        limit: 1,
        maxSize: 5,
        extensions: ["jpg", "png", "gif"],
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
          box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
          item: '<li class="jFiler-item">\
          <div class="jFiler-item-container">\
          <div class="jFiler-item-inner">\
          <div class="jFiler-item-thumb">\
          <div class="jFiler-item-status"></div>\
          <div class="jFiler-item-thumb-overlay">\
          <div class="jFiler-item-info">\
          <div style="display:table-cell;vertical-align: middle;">\
          <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
          <span class="jFiler-item-others">{{fi-size2}}</span>\
          </div>\
          </div>\
          </div>\
          {{fi-image}}\
          </div>\
          <div class="jFiler-item-assets jFiler-row">\
          <ul class="list-inline pull-left">\
          <li>{{fi-progressBar}}</li>\
          </ul>\
          <ul class="list-inline pull-right">\
          <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
          </ul>\
          </div>\
          </div>\
          </div>\
          </li>',
          itemAppend: '<li class="jFiler-item">\
          <div class="jFiler-item-container">\
          <div class="jFiler-item-inner">\
          <div class="jFiler-item-thumb">\
          <div class="jFiler-item-status"></div>\
          <div class="jFiler-item-thumb-overlay">\
          <div class="jFiler-item-info">\
          <div style="display:table-cell;vertical-align: middle;">\
          <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
          <span class="jFiler-item-others">{{fi-size2}}</span>\
          </div>\
          </div>\
          </div>\
          {{fi-image}}\
          </div>\
          <div class="jFiler-item-assets jFiler-row">\
          <ul class="list-inline pull-left">\
          <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
          </ul>\
          <ul class="list-inline pull-right">\
          <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
          </ul>\
          </div>\
          </div>\
          </div>\
          </li>',
          progressBar: '<div class="bar"></div>',
          itemAppendToEnd: false,
          canvasImage: true,
          removeConfirmation: true,
          _selectors: {
            list: '.jFiler-items-list',
            item: '.jFiler-item',
            progressBar: '.bar',
            remove: '.jFiler-item-trash-action'
          }
        },
        dragDrop: {
          dragEnter: null,
          dragLeave: null,
          drop: null,
          dragContainer: null,
        },
        uploadFile: {
          url: "../../plugins/filer/php/ajax_upload_file.php",
          data: {
            folderName: folderName,
          },
          type: 'POST',
          enctype: 'multipart/form-data',
          synchron: true,
          beforeSend: function(){},
          success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
            var parent = itemEl.find(".jFiler-jProgressBar").parent(),
            new_file_name = JSON.parse(data),
            filerKit = inputEl.prop("jFiler");
            filerKit.files_list[id].name = new_file_name;
            uploadedFiles.push(new_file_name);
            $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
            itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
              $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
            });
          },
          error: function(el){
            var parent = el.find(".jFiler-jProgressBar").parent();
            el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
              $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
            });
          },
          statusCode: null,
          onProgress: null,
          onComplete: null
        },
        files: null,
        addMore: false,
        allowDuplicates: true,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
          var filerKit = inputEl.prop("jFiler"),
          file_name = filerKit.files_list[id].name;
          uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
            return value != file_name;
          });
          $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
          $.post('../../plugins/filer/php/ajax_remove_file.php?folderName='+folderName, {file: file_name});
        },
        onEmpty: null,
        options: null,
        dialogs: {
          alert: function(text) {
            return alert(text);
          },
          confirm: function (text, callback) {
            confirm(text) ? callback() : null;
          }
        },
        captions: {
          button: "Choose Files",
          feedback: "Choose files To Upload",
          feedback2: "files were chosen",
          drop: "Drop file here to Upload",
          removeConfirmation: "Are you sure you want to remove this file?",
          errors: {
            filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
            filesType: "Only Images are allowed to be uploaded.",
            filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
            filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
          }
        }
      });

    }


    function initFilerAttachments(filerID){

      var uploadedFiles = [];
      $("#"+filerID).filer({
        limit: 5,
        maxSize: 50,
        extensions: ["jpg", "png", "gif", "jpeg", "pdf", "mp4"],
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
          box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
          item: '<li class="jFiler-item">\
          <div class="jFiler-item-container">\
          <div class="jFiler-item-inner">\
          <div class="jFiler-item-thumb">\
          <div class="jFiler-item-status"></div>\
          <div class="jFiler-item-thumb-overlay">\
          <div class="jFiler-item-info">\
          <div style="display:table-cell;vertical-align: middle;">\
          <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
          <span class="jFiler-item-others">{{fi-size2}}</span>\
          </div>\
          </div>\
          </div>\
          {{fi-image}}\
          </div>\
          <div class="jFiler-item-assets jFiler-row">\
          <ul class="list-inline pull-left">\
          <li>{{fi-progressBar}}</li>\
          </ul>\
          <ul class="list-inline pull-right">\
          <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
          </ul>\
          </div>\
          </div>\
          </div>\
          </li>',
          itemAppend: '<li class="jFiler-item">\
          <div class="jFiler-item-container">\
          <div class="jFiler-item-inner">\
          <div class="jFiler-item-thumb">\
          <div class="jFiler-item-status"></div>\
          <div class="jFiler-item-thumb-overlay">\
          <div class="jFiler-item-info">\
          <div style="display:table-cell;vertical-align: middle;">\
          <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
          <span class="jFiler-item-others">{{fi-size2}}</span>\
          </div>\
          </div>\
          </div>\
          {{fi-image}}\
          </div>\
          <div class="jFiler-item-assets jFiler-row">\
          <ul class="list-inline pull-left">\
          <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
          </ul>\
          <ul class="list-inline pull-right">\
          <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
          </ul>\
          </div>\
          </div>\
          </div>\
          </li>',
          progressBar: '<div class="bar"></div>',
          itemAppendToEnd: false,
          canvasImage: true,
          removeConfirmation: true,
          _selectors: {
            list: '.jFiler-items-list',
            item: '.jFiler-item',
            progressBar: '.bar',
            remove: '.jFiler-item-trash-action'
          }
        },
        dragDrop: {
          dragEnter: null,
          dragLeave: null,
          drop: null,
          dragContainer: null,
        },
        uploadFile: {
          url: "../../plugins/filer/php/ajax_upload_file.php",
          data: {
            folderName: folderName,
          },
          type: 'POST',
          enctype: 'multipart/form-data',
          synchron: true,
          beforeSend: function(){},
          success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
            console.log(data);
            var parent = itemEl.find(".jFiler-jProgressBar").parent(),
            new_file_name = JSON.parse(data),
            filerKit = inputEl.prop("jFiler");
            filerKit.files_list[id].name = new_file_name;
            uploadedFiles.push(new_file_name);
            $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
            itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
              $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
            });
          },
          error: function(el){
            var parent = el.find(".jFiler-jProgressBar").parent();
            el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
              $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
            });
          },
          statusCode: null,
          onProgress: null,
          onComplete: null
        },
        files: null,
        addMore: false,
        allowDuplicates: true,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
          var filerKit = inputEl.prop("jFiler"),
          file_name = filerKit.files_list[id].name;
          uploadedFiles = jQuery.grep(uploadedFiles, function(value) {
            return value != file_name;
          });
          $("#"+filerID+"-list").val(JSON.stringify(uploadedFiles))
          $.post('../../plugins/filer/php/ajax_remove_file.php?folderName='+folderName, {file: file_name});
        },
        onEmpty: null,
        options: null,
        dialogs: {
          alert: function(text) {
            return alert(text);
          },
          confirm: function (text, callback) {
            confirm(text) ? callback() : null;
          }
        },
        captions: {
          button: "Choose Files",
          feedback: "Choose files To Upload",
          feedback2: "files were chosen",
          drop: "Drop file here to Upload",
          removeConfirmation: "Are you sure you want to remove this file?",
          errors: {
            filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
            filesType: "Only Images are allowed to be uploaded.",
            filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
            filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
          }
        }
      });

    }

    </script>
    <?php
  }else{
    ?>
    <script>window.open('../../','_self')</script>
    <?php
  }
  ?>
