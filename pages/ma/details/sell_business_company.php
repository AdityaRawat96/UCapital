<div class="row">
  <div class="col-md-12">
    <div class="card">

      <div class="merger_image_container" style="background-image: url('../../assets/uploads/<?=$row['IMAGE']; ?>')">
        <span class="merger-tag-bookmark">
          <span class="bookmark bookmark-<?=str_replace(" ", "_", $ma_type); ?> <?php if(in_array($row['ID'], $category_favorites)){echo 'bookmark-active';} ?>" data-id="<?=$row['ID']?>">
            <i class="fas fa-bookmark fa-2x"></i>
          </span>
        </span>
        <small class="merger-tag-top">
          <?=$row['ASSET_TYPE']; ?>
        </small>
        <span class="merger-tag-bottom">
          Contact here
        </span>
      </div>

      <div class="card-body-investor-details2">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <span> <i class="fas fa-map-marker-alt"></i> <?=generateLocationTags($row['COUNTRY'], $row['CITY']); ?> </span><br>
          </div>
          <div class="col-md-6 col-sm-12">
            <span class="float-right"> </span><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7"><br><br>
            <div class="investor-details-founded">
              <h3><b><?=generateCardTitle($row['ASSET_TYPE'], $row['DEAL'], $row['COMPANY_TYPE'], $row['ASSET_TYPE'], $row['SUB_COMPANY_TYPE']); ?></b></h3><br>
              <span class="blue-box-rounded" style="background-color: #D7DBEC; color: black; font-weight: bold;"> Investment required:
                <?php
                if($row['INVESTMENT_TYPE'] == "undisclosed"){
                  echo "Undisclosed";
                }else if($row['INVESTMENT_TYPE'] == "fixed"){
                  echo number_shorten($row['INVESTMENT_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                }else if($row['INVESTMENT_TYPE'] == "range"){
                  if($row['INVESTMENT_MAX'] == 1000000000){
                    echo "Over ".number_shorten($row['INVESTMENT_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                  }else if($row['INVESTMENT_MIN'] == 0){
                    echo "Less than ".number_shorten($row['INVESTMENT_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                  }else{
                    echo "From ".number_shorten($row['INVESTMENT_MIN'])." To ".number_shorten($row['INVESTMENT_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                  }
                }
                ?>
              </span><hr><br>
              <h3>General description</h3><hr>
              <p class="p-desc10">
                <?=$row['DESCRIPTION']; ?>
              </p><br><br><br>
              <h3>Company business</h3><hr>
              <p class="p-desc10">
                <?=$row['COMPANY_BUSINESS']; ?>
              </p><br><br><br>
              <h3>Sector</h3><hr>
              <?php
              if($row['SECTOR'] != null && $row['SECTOR'] != ""){
                $Preferred_Industry = explode(",", trim($row['SECTOR']));
                foreach ($Preferred_Industry as $pi) {
                  ?>
                  <span class="blue-box-rounded"><?=$pi; ?></span>
                  <?php
                }
              }
              ?>
              <br><br><br>
              <h3>Industry</h3><hr>
              <?php
              if($row['INDUSTRY'] != null && $row['INDUSTRY'] != ""){
                $Preferred_Industry = explode(",", trim($row['INDUSTRY']));
                foreach ($Preferred_Industry as $pi) {
                  ?>
                  <span class="blue-box-rounded"><?=$pi; ?></span>
                  <?php
                }
              }
              ?>
              <br><br><br>
            </div>
          </div>

          <div class="col-md-5"><br><br>
            <div class="card">
              <div class="card-header" style="background-color: #001F3B; color: white;">
                <h5><b>FINANCIAL DATA</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Company Value: </td>
                    <td>
                      <?php
                      if($row['COMPANY_VAL_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }else if($row['COMPANY_VAL_TYPE'] == "fixed"){
                        echo number_shorten($row['COMPANY_VAL_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                      }else if($row['COMPANY_VAL_TYPE'] == "range"){
                        if($row['COMPANY_VAL_MAX'] == 1000000000){
                          echo "Over ".number_shorten($row['COMPANY_VAL_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                        }else if($row['COMPANY_VAL_MIN'] == 0){
                          echo "Less than ".number_shorten($row['COMPANY_VAL_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }else{
                          echo "From ".number_shorten($row['COMPANY_VAL_MIN'])." To ".number_shorten($row['COMPANY_VAL_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Revenue: </td>
                    <td>
                      <?php
                      if($row['ACTUAL_REVENUE_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }else if($row['ACTUAL_REVENUE_TYPE'] == "fixed"){
                        echo number_shorten($row['ACTUAL_REVENUE_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                      }else if($row['ACTUAL_REVENUE_TYPE'] == "range"){
                        if($row['ACTUAL_REVENUE_MAX'] == 1000000000){
                          echo "Over ".number_shorten($row['ACTUAL_REVENUE_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                        }else if($row['ACTUAL_REVENUE_MIN'] == 0){
                          echo "Less than ".number_shorten($row['ACTUAL_REVENUE_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }else{
                          echo "From ".number_shorten($row['ACTUAL_REVENUE_MIN'])." To ".number_shorten($row['ACTUAL_REVENUE_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> EBITDA Margin: </td>
                    <td>
                      <?php
                      if($row['EBITDA_MARGIN_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }else if($row['EBITDA_MARGIN_TYPE'] == "fixed"){
                        echo number_shorten($row['EBIDTA_MARGIN'])."%";
                      }else if($row['EBITDA_MARGIN_TYPE'] == "range"){
                        if($row['ACTUAL_REVENUE_MAX'] == 100){
                          echo "Over ".number_shorten($row['EBIDTA_MARGIN'])."%";
                        }else if($row['EBIDTA_MARGIN'] == 0){
                          echo "Less than ".number_shorten($row['EBITDA_MARGIN_MAX'])."%";
                        }else{
                          echo "From ".number_shorten($row['EBIDTA_MARGIN'])." To ".number_shorten($row['EBITDA_MARGIN_MAX'])."%";
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Scalability: </td>
                    <td>
                      <?php
                      if($row['SCALABILITY'] == "Yes"){
                        echo "Yes, Area - ".$row['SCALABILITY_AREA'];
                      }else{
                        echo "No";
                      }
                      ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #001F3B; color: white;">
                <h5><b>COMPANY INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Foundation Year: </td>
                    <td> <?=$row['FOUNDATION_YEAR'] ? $row['FOUNDATION_YEAR'] : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Number of Employees: </td>
                    <td>
                      <?php
                      echo shorten_number_range("range", $row['NUM_OF_EMPLOYEE_MIN'], $row['NUM_OF_EMPLOYEE_MAX']);
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Area of activity: </td>
                    <td> <?=$row['AREA_OF_ACTIVITY'] ? $row['AREA_OF_ACTIVITY'] : "-";  ?> </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #001F3B; color: white;">
                <h5><b>FORECAST PER YEAR</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Revenue Estimates (1 Year): </td>
                    <td>
                      <?=shorten_number_range_2($row['FORECAST_REVENUE_Y1_SEL'], $row['FORECAST_REVENUE_Y1'], 1000000000, " ".add_currency_symbol($row['CURRENCY'])); ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Ebitda Margin Estimates (1 Year): </td>
                    <td>
                      <?=shorten_number_range_2($row['FORECAST_EBITDA_Y1_SEL'], $row['FORECAST_EBITDA_Y1'], 100, "%"); ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Revenue Estimates (2 Year): </td>
                    <td>

                      <?=shorten_number_range_2($row['FORECAST_REVENUE_Y2_SEL'], $row['FORECAST_REVENUE_Y2'], 1000000000, " ".add_currency_symbol($row['CURRENCY'])); ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Ebitda Margin Estimates (2 Year): </td>
                    <td>
                      <?=shorten_number_range_2($row['FORECAST_EBITDA_Y2_SEL'], $row['FORECAST_EBITDA_Y2'], 100, "%"); ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Revenue Estimates (3 Year): </td>
                    <td>

                      <?=shorten_number_range_2($row['FORECAST_REVENUE_Y3_SEL'], $row['FORECAST_REVENUE_Y3'], 1000000000, " ".add_currency_symbol($row['CURRENCY'])); ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Ebitda Margin Estimates (3 Year): </td>
                    <td>
                      <?=shorten_number_range_2($row['FORECAST_EBITDA_Y2_SEL'], $row['FORECAST_EBITDA_Y2'], 100, "%"); ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
