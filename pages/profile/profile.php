<?php
$published_buy_deal = array();
$published_sell_deal = array();
$sql = "(SELECT
real_estate.ID,
real_estate.DEAL,
real_estate.ASSET_TYPE,
real_estate.DEAL_SUBJECT AS SUBJECT,
real_estate.REAL_ESTATE_TYP AS SUBJECT_TYPE,
'-' AS SECTOR,
'-' AS INDUSTRY,
real_estate.COUNTRY,
real_estate.CITY,
real_estate.OFFER,
real_estate.IMAGE,
real_estate.KEY_ELEMENTS,
real_estate.ASSET_TYPE
FROM real_estate where USER_ID = $user_id)
UNION ALL( SELECT
npe.ID,
npe.DEAL,
npe.ASSET_TYPE,
npe.DEAL AS SUBJECT,
'NPE' AS SUBJECT_TYPE,
'-' AS SECTOR,
'-' AS INDUSTRY,
npe.COUNTRY,
npe.CITY,
npe.OFFER,
npe.IMAGE,
'-' AS KEY_ELEMENTS,
npe.ASSET_TYPE
FROM npe where USER_ID = $user_id)
UNION ALL( SELECT
credit.ID,
credit.DEAL,
credit.ASSET_TYPE,
credit.DEAL AS SUBJECT,
'Credit' AS SUBJECT_TYPE,
'-' AS SECTOR,
'-' AS INDUSTRY,
credit.COUNTRY,
credit.CITY,
credit.OFFER,
credit.IMAGE,
'-' AS KEY_ELEMENTS,
credit.ASSET_TYPE
FROM credit where USER_ID = $user_id)
UNION ALL ( SELECT
business_company.ID,
business_company.DEAL,
business_company.ASSET_TYPE,
business_company.COMPANY_TYPE AS SUBJECT,
business_company.ASSET_TYPE AS SUBJECT_TYPE,
business_company.SECTOR,
business_company.INDUSTRY,
business_company.COUNTRY,
business_company.CITY,
business_company.OFFER,
business_company.IMAGE,
business_company.KEY_ELEMENTS,
business_company.ASSET_TYPE
FROM business_company where USER_ID = $user_id)";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    if ($row["DEAL"] == "buy") {
      array_push($published_buy_deal, $row);
    } else {
      array_push($published_sell_deal, $row);
    }
  }
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
              <li> <a href="#published_sell_deal" data-toggle="tab" class="active"> Published Sell deal </a> </li>
              <li> <a href="#published_buy_deal" data-toggle="tab"> Published Buy deal </a> </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="published_sell_deal">
                <div class="row">
                  <?php
                  foreach ($published_sell_deal as $deal) {
                  ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item">
                      <a href="ma-detail.php?ma=<?= $deal['ID']; ?>">
                        <div class="card mb-4 cart-custom-redious our-shadow">
                          <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                          <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                          <span class="right-tag-batch">
                            <span class="bookmark
                            <?php
                            if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                              if (in_array($deal['ID'], $company_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                              if (in_array($deal['ID'], $re_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                              if (in_array($deal['ID'], $credits_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                              if (in_array($deal['ID'], $npe_ids)) {
                                echo " bookmark-active ";
                              }
                            }
                            ?>
                            bookmark-<?= strtolower(str_replace(" ", "_", $deal['ASSET_TYPE'])); ?>" data-id="<?= $deal['ID']; ?>"> <i class="fas fa-bookmark fa-2x"></i> </span>
                          </span>
                          <div class="d-flex flex-column justify-content-end p-2">
                            <span><i> <?= $deal['COUNTRY'] . ", " . $deal['CITY']; ?> </i></span>
                            <span class="deal-card-heading"><?= $deal['SUBJECT']; ?> <b><?= $deal['SUBJECT_TYPE']; ?></b></span>
                            <div class="listing">
                              <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: <?= $deal['SECTOR']; ?> </span><br>
                              <span><i class="fas fa-chart-line"></i> &nbsp; <?= $deal['INDUSTRY']; ?></span>
                              <hr>
                              <span>Key Elements: <?= $deal['KEY_ELEMENTS']; ?></span><br><br>
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <button type="button" name="button" class="btn form-control our-back-btn edit-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="sell" onclick="editAd('<?= $deal['ID'] ?>','<?= $deal['ASSET_TYPE'] ?>','sell')">Edit</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <button type="button" name="button" class="btn form-control button-red-border delete-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="sell">Delete Ad</button>
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
              <div class="tab-pane" id="published_buy_deal">
                <div class="row">
                  <?php
                  foreach ($published_buy_deal as $deal) {
                  ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 inline-block ma_card pagination-item">
                      <a href="ma-detail.php?ma=<?= $deal['ID']; ?>">
                        <div class="card mb-4 cart-custom-redious our-shadow">
                          <img class="card-img-top ma-img" src="../../assets/uploads/<?= $deal['IMAGE']; ?>" alt="image">
                          <span class="left-tag-card our-back"> <?= $deal['OFFER']; ?> </span>
                          <span class="right-tag-batch">
                            <span class="bookmark
                            <?php
                            if (strtolower($deal['ASSET_TYPE']) == "business company" || strtolower($deal['ASSET_TYPE']) == "start up") {
                              if (in_array($deal['ID'], $company_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "real estate") {
                              if (in_array($deal['ID'], $re_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "credits") {
                              if (in_array($deal['ID'], $credits_ids)) {
                                echo " bookmark-active ";
                              }
                            } else if (strtolower($deal['ASSET_TYPE']) == "npe") {
                              if (in_array($deal['ID'], $npe_ids)) {
                                echo " bookmark-active ";
                              }
                            }
                            ?>
                            bookmark-<?= strtolower(str_replace(" ", "_", $deal['ASSET_TYPE'])); ?>" data-id="<?= $deal['ID']; ?>"> <i class="fas fa-bookmark fa-2x"></i> </span>
                          </span>
                          <div class="d-flex flex-column justify-content-end p-2">
                            <span><i> <?= $deal['COUNTRY'] . ", " . $deal['CITY']; ?> </i></span>
                            <span class="deal-card-heading"><?= $deal['SUBJECT']; ?> <b><?= $deal['SUBJECT_TYPE']; ?></b></span>
                            <div class="listing">
                              <span><i class="fas fa-chart-pie"></i> &nbsp; Sector: <?= $deal['SECTOR']; ?> </span><br>
                              <span><i class="fas fa-chart-line"></i> &nbsp; <?= $deal['INDUSTRY']; ?></span>
                              <hr>
                              <span>Key Elements: <?= $deal['KEY_ELEMENTS']; ?></span><br><br>
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <button type="button" name="button" class="btn form-control our-back-btn edit-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="sell" onclick="editAd('<?= $deal['ID'] ?>','<?= $deal['ASSET_TYPE'] ?>','buy')">Edit</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <button type="button" name="button" class="btn form-control button-red-border delete-deal-profile" data-id="<?= $deal['ID'] ?>" data-type="<?= $deal['ASSET_TYPE'] ?>" data-deal="sell">Delete Ad</button>
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
    if (deal == "buy") {
      if (asset == "Real Estate") {
        url = "./../ma/update_buy_assets_real_estate.php";
      } else if (asset == "NPE") {
        url = "./../ma/update_buy_assets_npe.php";
      } else if (asset == "Credits") {
        url = "./../ma/update_buy_assets_credits.php";
      } else if (asset == "Business Company") {
        url = "./../ma/update_buy_business_company.php";
      } else if (asset == "Start Up") {
        url = "./../ma/update_buy_start_up.php";
      }
    } else {
      if (asset == "Real Estate") {
        url = "./../ma/update_sell_assets_real_estate.php";
      } else if (asset == "NPE") {
        url = "./../ma/update_sell_assets_npe.php";
      } else if (asset == "Credits") {
        console.log("Credits");
        url = "./../ma/update_sell_assets_credits.php";
      } else if (asset == "Business Company") {
        url = "./../ma/update_sell_business_company.php";
      } else if (asset == "Start Up") {
        url = "./../ma/update_sell_start_up.php";
      }
    }
    let p = new URLSearchParams();
    p.set("id", id);
    url += "?" + p.toString();
    window.open(url);
  }

  function deleteAd(id, asset, deal) {
    $.ajax({
      type: 'POST',
      url: "./../../assets/php/deleteAd.php",
      data: {
        id: id,
        asset: asset,
        deal: deal
      },
      success: function(data) {
        alert("deleted");
      }
    });
  }
</script>