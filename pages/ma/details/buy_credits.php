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
              <h3><b><?=generateCardTitle($row['ASSET_TYPE'], $row['DEAL'], 'Buying', $row['CREDIT_TYPE'], $row['PRODUCT_TYPE']); ?></b></h3><br>
              <span class="blue-box-rounded" style="background-color: #D7DBEC; color: black; font-weight: bold;"> Investment Size:
                <?=shorten_number_range($row['VALUE_TYPE'], $row['VALUE_MIN'], $row['VALUE_MAX'])." ".add_currency_symbol($row['CURRENCY']); ?>
              </span><hr><br>
              <h3>Description</h3><hr>
              <p class="p-desc10">
                <?=$row['DESCRIPTION']; ?>
              </p><br><br>
            </div>
          </div>

          <div class="col-md-5"><br><br>
            <div class="card">
              <div class="card-header" style="background-color: #001F3B; color: white;">
                <h5><b>DEAL INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Type of credit: </td>
                    <td> <?=$row['CREDIT_TYPE'] ? $row['CREDIT_TYPE'] : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Maturity: </td>
                    <td>
                      <?php
                      if($row['MATURITY_TYPE'] == "range"){
                        echo "From ".($row['MATURITY'] ? $row['MATURITY'] : "-")." To ".($row['MATURITY_TO'] ? $row['MATURITY_TO'] : "-");
                      }else if($row['MATURITY_TYPE'] == "fixed"){
                        echo $row['MATURITY'] ? $row['MATURITY'] : "-";
                      }else if($row['MATURITY_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Loan/product Type: </td>
                    <td> <?=$row['PRODUCT_TYPE'] ? $row['PRODUCT_TYPE'] : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Lien Position: </td>
                    <td> <?=$row['LIEN_POSITION'] ? $row['LIEN_POSITION'] : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Judicialized: </td>
                    <td> <?=$row['JUDICIALIZED'] ? $row['JUDICIALIZED'] : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Ratio: </td>
                    <td> <?=$row['RATIO'] ? $row['RATIO'] : "-"; ?> </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #001F3B; color: white;">
                <h5><b>INVESTOR TYPE</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Who i am: </td>
                    <td> <?=$row['WHO_I_AM'] ? $row['WHO_I_AM'] : "-";  ?> </td>
                  </tr>
                  <?php
                  if ($row['WHO_I_AM'] == "Private Equity" || $row['WHO_I_AM'] == "Venture Capital" || $row['WHO_I_AM'] == "Financial Institution") {
                    ?>
                    <tr class="profile-investor-heading">
                      <td> AUM: </td>
                      <td> <?=$row['AUM'] ? number_shorten($row['AUM'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                    </tr>
                    <tr class="profile-investor-heading">
                      <td> Number of Investments: </td>
                      <td> <?=$row['NUM_OF_INVESTMENT'] ? number_shorten($row['NUM_OF_INVESTMENT']) : "-";  ?> </td>
                    </tr>
                    <tr class="profile-investor-heading">
                      <td> Preferred Investment Amount: </td>
                      <td> <?=$row['PREF_INVESTMENT_AMOUNT'] ? number_shorten($row['PREF_INVESTMENT_AMOUNT'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
