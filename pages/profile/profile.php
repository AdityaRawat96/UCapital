<?php
$published_buy_deal = array();
$published_sell_deal = array();
include('../../assets/php/getProfileData.php');

$result_buy = getBuyProfileData($con, $user_id, 0, 12);
foreach ($result_buy as $val) {
  array_push($published_buy_deal, $val);
}
$result_sell = getSellProfileData($con, $user_id, 0, 12);
foreach ($result_sell as $val) {
  array_push($published_sell_deal, $val);
}
$company_ids = array();
$npe_ids = array();
$credits_ids = array();
$re_ids = array();
$result = mysqli_query($con, " SELECT * FROM favorites WHERE user_id = '$user_id' ")
or die('An error occurred! Unable to process this request. ' . mysqli_error($con));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    if ($row['company_id'] != null && $row['company_id'] != '') {
      $company_ids = json_decode($row['company_id']);
    }
    if ($row['npe_id'] != null && $row['npe_id'] != '') {
      $npe_ids = json_decode($row['npe_id']);
    }
    if ($row['credits_id'] != null && $row['credits_id'] != '') {
      $credits_ids = json_decode($row['credits_id']);
    }
    if ($row['re_id'] != null && $row['re_id'] != '') {
      $re_ids = json_decode($row['re_id']);
    }
  }
}
$target_tab = "sell";
if(isset($_GET['target'])){
  if($_GET['target'] == "buy"){
    $target_tab = "buy";
  }else{
    $target_tab = "buy";
  }
}else{
  $target_tab = "buy";
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"> <img src="../../dist/img/new/pro.png"> Personal profile </a></li>
            <!-- <li class="breadcrumb-item active text-custom-2"> Details </li> -->
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- content-header -->

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-12">
          <div class="card profile-picture-page4">
            <div style="width: 100%; display: flex; flex-wrap: wrap;">

              <div>
                <img class="profile-img-image74 rounded-circle" src="
                <?php if ($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null) {
                  if (filter_var($_SESSION['profile_picture'], FILTER_VALIDATE_URL)) {
                    echo trim($_SESSION['profile_picture']);
                  } else {
                    echo '../../assets/profiles/' . $_SESSION['profile_picture'] . '?' . time();
                  }
                } else {
                  echo '../../dist/img/avatar0.png';
                } ?>
                " alt="User profile picture">
              </div>

              <div style="margin-left: 5vw; flex: 1;">
                <?php
                if ($_SESSION['user_type'] == 0) {
                  $user_type = "Super-Admin";
                } else if ($_SESSION['user_type'] == 1) {
                  $user_type = "Admin";
                } else if ($_SESSION['user_type'] == 2) {
                  $user_type = "Advisor";
                } else if ($_SESSION['user_type'] == 3) {
                  $user_type = "User";
                }
                ?>
                <div>
                  <span class="bg-danger today-timeline-aea" style="border-radius: 5px; padding: 5px;"> <?= $user_type; ?> </span>
                </div><br>
                <h3><b> <?= $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?> </b></h3>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <p class="contact-details-email-number"> <i class="far fa-envelope" style="color: #D7DBEC;"></i> <?= $_SESSION['email'] ?> </p>
                    <p class="contact-details-email-number"> <i class="fas fa-phone-alt" style="color: #D7DBEC;"></i> <?= $_SESSION['mobile'] ?> </p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <?php
                    if ($_SESSION['user_type'] == 2) {
                      $result = mysqli_query($con, " SELECT *  FROM advisors WHERE user_id='$user_id'")
                      or die('An error occurred! Unable to process this request. ' . mysqli_error($con));
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                          ?>
                          <p class="contact-details-email-number"> <i class="fas fa-briefcase" style="color: #D7DBEC;"></i> <?= $row['role'] . ", " . $row['company']; ?> </p>
                          <p class="contact-details-email-number"> <i class="fas fa-globe" style="color: #D7DBEC;"></i> <?= $row['website'] ?> </p>
                          <?php
                        }
                      }
                    } else {
                      $result = mysqli_query($con, " SELECT *  FROM users WHERE id='$user_id'")
                      or die('An error occurred! Unable to process this request. ' . mysqli_error($con));
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                          ?>
                          <p class="contact-details-email-number"> <i class="fas fa-briefcase" style="color: #D7DBEC;"></i> <?= $row['role'] . ", " . $row['company']; ?> </p>
                          <p class="contact-details-email-number"> <i class="fas fa-globe" style="color: #D7DBEC;"></i> <?= $row['website'] ?> </p>
                          <?php
                        }
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>

              <div>
                <div class="float-sm-right">
                  <a href="edit-profile.php" class="eidt-profile-btn our-border-btn" style="margin-top: 0px;"> <i class="fas fa-pencil-alt"></i> Edit Profile </a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card class-contact-info-settings">

            <ul class="listing-add-post1-profile nav nav-pills">
              <li> <a href="#published_sell_deal" data-toggle="tab" class="<?php if($target_tab == 'sell'){echo 'active';}?>"> Published Sell deal </a> </li>
              <li> <a href="#published_buy_deal" data-toggle="tab" class="<?php if($target_tab == 'buy'){echo 'active';}?>"> Published Buy deal </a> </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane <?php if($target_tab == 'sell'){echo 'active';}?>" id="published_sell_deal">
                <div class="row">
                  <?php
                  foreach ($published_sell_deal as $deal) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item ma-card-<?= $deal['ID'] . "-" . $deal['ASSET_TYPE'] . "-" . $deal['DEAL']; ?>">
                      <a href="../ma/ma-detail.php?type=<?= strtolower($deal['ASSET_TYPE']); ?>&id=<?= $deal['ID']; ?>">
                        <div class="card mb-4 cart-custom-redious our-shadow">
                          <div class="card-img-contain">
                            <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                            <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                            <span class="bottom-right-tag-card"><?= shorten_number_range($deal['VALUE_TYPE'], $deal['VALUE_MIN'], $deal['VALUE_MAX']) . " " . add_currency_symbol($deal['CURRENCY']); ?></span>
                            <span class="right-tag-batch">
                              <span class="bookmark
                              <?= " bookmark-" . str_replace(" ", "_", strtolower($deal['ASSET_TYPE'])); ?>
                              <?php
                              $detail_1_icon = "";
                              $detail_2_icon = "";
                              $detail_1_title = "";
                              $detail_2_title = "";
                              $detail_2_value = "";
                              $detail_2_title_end = "";
                              if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                                $detail_1_icon = " fa-chart-pie";
                                $detail_2_icon = " fa-industry";
                                $detail_1_title = "Sector: ";
                                $detail_2_title = "Industry: ";
                                $detail_2_value = $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $company_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                                $detail_1_icon = " fa-hammer";
                                $detail_2_icon = " fa-home";
                                $detail_1_title = "Status: ";
                                $detail_2_title = "Surface: ";
                                $detail_2_title_end = " sqm";
                                $detail_2_value = $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $re_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                                $detail_1_icon = " fa-receipt";
                                $detail_2_icon = " fa-calendar";
                                $detail_1_title = "Type: ";
                                $detail_2_title = "Maturity: ";
                                $detail_2_value = $deal['DETAIL_2'];
                                if (in_array($deal['ID'], $credits_ids)) {
                                  echo " bookmark-active ";
                                }
                              } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                                $detail_1_icon = " fa-receipt";
                                $detail_2_icon = " fa-money-bill-wave";
                                $detail_1_title = "Type: ";
                                $detail_2_title = "Market Value: ";
                                $detail_2_value = number_shorten($deal['DETAIL_2']) . " " . add_currency_symbol($deal['CURRENCY']);
                                if (in_array($deal['ID'], $npe_ids)) {
                                  echo " bookmark-active ";
                                }
                              }
                              ?>" <?= ' data-id="' . $deal['ID'] . '"'; ?>>
                              <i class="fas fa-bookmark fa-2x"></i>
                            </span>
                          </span>
                        </div>
                        <div class="d-flex flex-column justify-content-end p-2">
                          <span>
                            <i><?= generateLocationTags($deal['COUNTRY'], $deal['CITY']); ?></i>
                          </span>
                          <span class="deal-card-heading"><?= generateCardTitle(strtolower($deal['ASSET_TYPE']), $deal['DEAL'], $deal['TITLE_1'], $deal['TITLE_2'], $deal['DETAIL_3']); ?></span>
                          <div class="listing">
                            <span><i class="fas <?= $detail_1_icon; ?>"></i> &nbsp; <?= $detail_1_title . str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                            <span><i class="fas <?= $detail_2_icon; ?>"></i> &nbsp; <?= $detail_2_title . $detail_2_value . $detail_2_title_end; ?></span>
                            <hr>
                            <span>
                              <b>Key Elements:</b> <?= $deal['KEY_ELEMENTS']; ?>
                            </span>
                            <br><br>
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                <button type="button" name="button" class="btn form-control our-back-btn edit-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="<?= $deal['DEAL'] ?>" onclick="editAd('<?= $deal['ID'] . ',' . $deal['ASSET_TYPE'] . ',' . $deal['DEAL'] ?>')">Edit</button>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <button type="button" name="button" class="btn form-control button-red-border delete-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="<?= $deal['DEAL'] ?>">Delete Ad</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
            <div class="tab-pane <?php if($target_tab == 'buy'){echo 'active';}?>" id="published_buy_deal">
              <div class="row">
                <?php
                foreach ($published_buy_deal as $deal) {
                  ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item ma-card-<?= $deal['ID'] . "-" . $deal['ASSET_TYPE'] . "-" . $deal['DEAL']; ?>">
                    <a href="../ma/ma-detail.php?type=<?= strtolower($deal['ASSET_TYPE']); ?>&id=<?= $deal['ID']; ?>">
                      <div class="card mb-4 cart-custom-redious our-shadow">
                        <div class="card-img-contain">
                          <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                          <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                          <span class="right-tag-batch">
                            <span class="bookmark
                            <?= " bookmark-" . str_replace(" ", "_", strtolower($deal['ASSET_TYPE'])); ?>
                            <?php
                            $detail_1_icon = "";
                            $detail_2_icon = "";
                            $detail_1_title = "";
                            $detail_2_title = "";
                            $detail_2_value = "";
                            $detail_2_title_end = "";
                            if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                              $detail_1_icon = " fa-chart-pie";
                              $detail_2_icon = " fa-industry";
                              $detail_1_title = "Sector: ";
                              $detail_2_title = "Industry: ";
                              $detail_2_value = $deal['DETAIL_2'];
                              if (in_array($deal['ID'], $company_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                              $detail_1_icon = " fa-hammer";
                              $detail_2_icon = " fa-home";
                              $detail_1_title = "Status: ";
                              $detail_2_title = "Surface: ";
                              $detail_2_title_end = " sqm";
                              if ($deal['DETAIL_3'] != "-") {
                                $detail_2_value = "From " . $deal['DETAIL_2'] . " To " . $deal['DETAIL_3'];
                              } else {
                                $detail_2_value = $deal['DETAIL_2'];
                              }
                              if (in_array($deal['ID'], $re_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                              $detail_1_icon = " fa-receipt";
                              $detail_2_icon = " fa-money-bill-wave";
                              $detail_1_title = "Type: ";
                              $detail_2_title = "Value: ";
                              $detail_2_value = shorten_number_range($deal['VALUE_TYPE'], $deal['VALUE_MIN'], $deal['VALUE_MAX']) . " " . add_currency_symbol($deal['CURRENCY']);
                              if (in_array($deal['ID'], $credits_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                              $detail_1_icon = " fa-receipt";
                              $detail_2_icon = " fa-money-bill-wave";
                              $detail_1_title = "Type: ";
                              $detail_2_title = "Value: ";
                              $detail_2_value = shorten_number_range($deal['VALUE_TYPE'], $deal['VALUE_MIN'], $deal['VALUE_MAX']) . " " . add_currency_symbol($deal['CURRENCY']);
                              if (in_array($deal['ID'], $npe_ids)) {
                                echo " bookmark-active ";
                              }
                            }
                            ?>" <?= ' data-id="' . $deal['ID'] . '"'; ?>>
                            <i class="fas fa-bookmark fa-2x"></i>
                          </span>
                        </span>
                      </div>
                      <div class="d-flex flex-column justify-content-end p-2">
                        <span>
                          <i><?= generateLocationTitle($deal['SUB_TITLE_1'], $deal['COUNTRY'], $deal['CITY']); ?></i>
                        </span>
                        <span class="deal-card-heading"><?= generateCardTitle(strtolower($deal['ASSET_TYPE']), $deal['DEAL'], $deal['TITLE_1'], $deal['TITLE_2'], $deal['DETAIL_3']); ?></span>
                        <div class="listing">
                          <span><i class="fas <?= $detail_1_icon; ?>"></i> &nbsp; <?= $detail_1_title . str_replace("|", ", ", $deal['DETAIL_1']); ?> </span><br>
                          <span><i class="fas <?= $detail_2_icon; ?>"></i> &nbsp; <?= $detail_2_title . $detail_2_value . $detail_2_title_end; ?></span>
                          <hr>
                          <span>
                            <b>Key Elements:</b> <?= $deal['KEY_ELEMENTS']; ?>
                          </span>
                          <br><br>
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <button type="button" name="button" class="btn form-control our-back-btn edit-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="<?= $deal['DEAL'] ?>" onclick="editAd('<?= $deal['ID'] . ',' . $deal['ASSET_TYPE'] . ',' . $deal['DEAL'] ?>')">Edit</button>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <button type="button" name="button" class="btn form-control button-red-border delete-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="<?= $deal['DEAL'] ?>">Delete Ad</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- container-fluid -->
</section>
<!-- content -->
</div>
<!-- content-wrapper -->

<script>
function editAd(id, asset, deal) {
  console.log(id);
  console.log(asset);
  console.log(deal);
  let dealUrl = "";
  let p = new URLSearchParams();
  p.set("id", id);
  if (deal == "buy") {
    if (asset == "Real Estate") {
      dealUrl = "./../ma/update_buy_assets_real_estate.php";
    } else if (asset == "NPE") {
      dealUrl = "./../ma/update_buy_assets_npe.php";
    } else if (asset == "Credits") {
      dealUrl = "./../ma/update_buy_assets_credits.php";
    } else if (asset == "Business Company") {
      dealUrl = "./../ma/update_buy_business_company.php";
    } else if (asset == "Start Up") {
      dealUrl = "./../ma/update_buy_start_up.php";
    }
  } else {
    if (asset == "Real Estate") {
      dealUrl = "./../ma/update_sell_assets_real_estate.php";
    } else if (asset == "NPE") {
      dealUrl = "./../ma/update_sell_assets_npe.php";
    } else if (asset == "Credits") {
      dealUrl = "./../ma/update_sell_assets_credits.php";
    } else if (asset == "Business Company") {
      dealUrl = "./../ma/update_sell_business_company.php";
    } else if (asset == "Start Up") {
      dealUrl = "./../ma/update_sell_start_up.php";
    }
  }
  if (dealUrl != "") {
    window.open(dealUrl + "?" + p.toString());
  }
}

function deleteAd(id, asset, deal) {
  swal({
    title: "Are you sure?",
    text: "The post would be removed from the platform",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: "./../../assets/php/deleteAd.php",
        data: {
          id: id,
          asset: asset,
          deal: deal
        },
        success: function(data) {
          swal("Success!", "Post removed!", "success").then((value) => {
            $(".ma-card-" + id + "-" + asset + "-" + deal).remove();
          });
        }
      });
    }
  });
}
</script>
