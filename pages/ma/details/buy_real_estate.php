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
              <h3 style="text-transform: capitalize;"><b><?=$row['DEAL_SUBJECT']; ?> <?=$row['REAL_ESTATE_TYP']; ?></b></h3><br><br><br>
              <h3>General asset description</h3><hr>
              <p class="p-desc10">
                <?=$row['DESCRIPTION']; ?>
              </p>
              <br><br><br>
            </div>
          </div>

          <div class="col-md-5"><br><br>
            <div class="card">
              <div class="card-header" style="background-color: #151A61; color: white;">
                <h5><b>DEAL INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Type of Real Estate: </td>
                    <td> <?=$row['REAL_ESTATE_SUB_CAT_TYPE'] ? ($row['REAL_ESTATE_TYP'].", ".$row['REAL_ESTATE_SUB_CAT_TYPE']) : $row['REAL_ESTATE_TYP'];  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Status of the asset: </td>
                    <td> <?=$row['ASSET_STATUS'] ? $row['ASSET_STATUS'] : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Condition of the asset: </td>
                    <td> <?=$row['ASSET_CONDITION'] ? $row['ASSET_CONDITION'] : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Total surface approx.: </td>
                    <td> <?=$row['TOTAL_SURFACE'] ? $row['TOTAL_SURFACE'] : "-"; ?> </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #151A61; color: white;">
                <h5><b>FINANCIAL INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> Value: </td>
                    <td>
                      <?php
                      if($row['ASSET_VAL_TYPE'] == "undisclosed"){
                        echo "Undisclosed";
                      }else if($row['ASSET_VAL_TYPE'] == "fixed"){
                        echo number_shorten($row['ASSET_VAL_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                      }else if($row['ASSET_VAL_TYPE'] == "range"){
                        if($row['ASSET_VAL_MAX'] == 1000000000){
                          echo "Over ".number_shorten($row['ASSET_VAL_MIN'])." ".add_currency_symbol($row['CURRENCY']);
                        }else{
                          echo "From ".number_shorten($row['ASSET_VAL_MIN'])." To ".number_shorten($row['ASSET_VAL_MAX'])." ".add_currency_symbol($row['CURRENCY']);
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Vendor Type </td>
                    <td>
                      <?=$row['WHO_I_AM']; ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header" style="background-color: #151A61; color: white;">
                <h5><b>INVESTOR INFO</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-investor-pro6">
                  <tr class="profile-investor-heading">
                    <td> AUM: </td>
                    <td> <?=$row['AUM'] ? $row['AUM'] : "-";  ?> </td>
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
