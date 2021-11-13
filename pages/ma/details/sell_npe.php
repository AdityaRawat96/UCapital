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
              <h3><b>Sell <?=$row['NPE_TYPE']; ?></b></h3><br>
              <span class="blue-box-rounded" style="background-color: #D7DBEC; color: black; font-weight: bold;"> Asking Price:
                <?=number_shorten($row['ASKING_PRICE'])." ".add_currency_symbol($row['CURRENCY']); ?>
              </span><hr><br>
              <h3>Description</h3><hr>
              <p class="p-desc10">
                <?=$row['DESCRIPTION']; ?>
              </p><br><br>
              <h3>Borrower details</h3><hr>
              <p class="p-desc10">
                <?=$row['BORROWER_DETAIL']; ?>
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
                    <td> Loan/Product Type: </td>
                    <td> <?=$row['PRODUCT_TYPE'] ? $row['PRODUCT_TYPE'] : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Original Amount: </td>
                    <td> <?=$row['ORG_AMOUNT'] ? number_shorten($row['ORG_AMOUNT'])." ".add_currency_symbol($row['CURRENCY']) : "-";  ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Asking Price: </td>
                    <td> <?=$row['ASKING_PRICE'] ? number_shorten($row['ASKING_PRICE'])." ".add_currency_symbol($row['CURRENCY']) : "-"; ?> </td>
                  </tr>
                  <tr class="profile-investor-heading">
                    <td> Market Value: </td>
                    <td> <?=$row['MARKET_VALUE'] ? number_shorten($row['MARKET_VALUE'])." ".add_currency_symbol($row['CURRENCY']) : "-"; ?> </td>
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

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
