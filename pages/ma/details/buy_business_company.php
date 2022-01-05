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
              <h3><b>
                <?=generateCardTitle($row['ASSET_TYPE'], $row['DEAL'], $row['WANT_TO_DO'], $row['ASSET_TYPE'], $row['SUB_COMPANY_TYPE']); ?></b></h3><br>
              <span class="blue-box-rounded" style="background-color: #D7DBEC; color: black; font-weight: bold;"> Investment size:
                <?=number_shorten($row['INVESTMENT_SIZE'])." ".add_currency_symbol($row['CURRENCY']); ?>
              </span><hr><br>
              <h3>General description</h3><hr>
              <p class="p-desc10">
                <?=$row['DESCRIPTION']; ?>
              </p><br><br><br>
              <h3>What are we looking for</h3><hr>
              <p class="p-desc10">
                <?=$row['LOOKING_FOR']; ?>
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
              <div class="card-header" style="background-color: #136DAE; color: white;">
                <h5><b>INVESTOR INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Who is looking for: </td>
                    <td> <?=$row['WHO_I_AM'] ? $row['WHO_I_AM'] : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> AUM: </td>
                    <td> <?=$row['AUM'] ? number_shorten($row['AUM'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Number of investments: </td>
                    <td> <?=$row['NUM_OF_INVESTMENT'] ? number_shorten($row['NUM_OF_INVESTMENT']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred investment amount: </td>
                    <td> <?=$row['PREF_INVESTMENT_AMOUNT'] ? number_shorten($row['PREF_INVESTMENT_AMOUNT'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                </table>
              </div>
            </div>


            <div class="card">
              <div class="card-header" style="background-color: #136DAE; color: white;">
                <h5><b>FINANCIAL PREFERRED</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Preferred Revenue: </td>
                    <td>
                      <?php
                      if($row['ACTUAL_REVENUE_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }else if($row['ACTUAL_REVENUE_TYPE'] == "fixed"){
                        echo number_shorten($row['ACTUAL_REVENUE_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                      }else if($row['ACTUAL_REVENUE_TYPE'] == "range"){
                        if($row['ACTUAL_REVENUE_MAX'] == 1000000000){
                          echo "Over ".number_shorten($row['ACTUAL_REVENUE_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                        }else{
                          echo "From ".number_shorten($row['ACTUAL_REVENUE_MIN'])." To ".number_shorten($row['ACTUAL_REVENUE_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred EBITDA Margin: </td>
                    <td> <?=$row['EBIDTA_MARGIN'] ? $row['EBIDTA_MARGIN']."%" : "-"; ?> </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #136DAE; color: white;">
                <h5><b>FINANCIAL PROJECTIONS</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Preferred Revenue Estimates (1 Year): </td>
                    <td> <?=$row['FORECAST_REVENUE_Y1'] ? number_shorten($row['FORECAST_REVENUE_Y1'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred Ebitda Margin Estimates (1 Year): </td>
                    <td> <?=$row['FORECAST_EBITDA_Y1'] ? number_shorten($row['FORECAST_EBITDA_Y1'])."%" : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred Revenue Estimates (2 Year): </td>
                    <td> <?=$row['FORECAST_REVENUE_Y2'] ? number_shorten($row['FORECAST_REVENUE_Y2'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred Ebitda Margin Estimates (2 Year): </td>
                    <td> <?=$row['FORECAST_EBITDA_Y2'] ? number_shorten($row['FORECAST_EBITDA_Y2'])."%" : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred Revenue Estimates (3 Year): </td>
                    <td> <?=$row['FORECAST_REVENUE_Y3'] ? number_shorten($row['FORECAST_REVENUE_Y3'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Preferred Ebitda Margin Estimates (3 Year): </td>
                    <td> <?=$row['FORECAST_EBITDA_Y3'] ? number_shorten($row['FORECAST_EBITDA_Y3'])."%" : "-";  ?> </td>
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
