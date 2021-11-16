var tempItemList = [];

function generateCardTitle(type, deal, title_1, title_2, title3 = null){
  var generated_title = "";
  if(deal == "sell"){
    if(type == "business company" || type == "start up"){
      if(title_1 == "Fundraising"){
        generated_title += title_1 + " for a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Sell minority"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Sell majority"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Sell totality"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "IPO"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Partnership"){
        generated_title += title_1 + " for a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Collaboration"){
        generated_title += title_1 + " for a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Joint venture"){
        generated_title += title_1 + " for a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Debt Raising"){
        generated_title += title_1 + " for a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }
    }else if(type == "real estate"){
      if(title_1 == "Totality Selling"){
        generated_title += title_1 + " of a <b>" + title_2 + "</b>";
      }else if(title_1 == "Looking for Co-Investors"){
        generated_title += title_1 + " for a <b>" + title_2 + "</b>";
      }else if(title_1 == "Looking for Investors"){
        generated_title += title_1 + " <b>" + title_2 + "</b>";
      }
    }else if(type == "credits"){
      generated_title += title_1 + " <b>" + title_2 + "</b>";
    }else if(type == "npe"){
      generated_title += title_1 + " <b>" + title_2 + "</b>";
    }
  }else{
    if(type == "business company" || type == "start up"){
      if(title_1 == "Buy majority"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Buy totality"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Partnership"){
        generated_title += title_1 + " with a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Collaboration"){
        generated_title += title_1 + " with a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Joint venture"){
        generated_title += title_1 + " with a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }else if(title_1 == "Lending"){
        generated_title += title_1 + " of a <b>" + title_2 + (title3 ? (", " + title3) : "") + "</b>";
      }
    }else if(type == "real estate"){
      generated_title += title_1.substr(0,1).toUpperCase()+title_1.substr(1) + " of a <b>" + title_2 + "</b>";
    }else if(type == "credits"){
      generated_title += title_1 + " <b>" + title_2 + ", " + title3 + "</b>";
    }else if(type == "npe"){
      generated_title += title_1 + " <b>" + title_2 + "</b>";
    }
  }

  return generated_title;
}

function generateLocationTags(countries, cities){
  var country_list = countries.split("|");
  var city_list = cities.split("|");
  var output_string = "";
  for(var i = 0; i < country_list.length; i++){
    if(country_list[i] == "All"){
      output_string += "<span class='location-tag-span'>Global</span>";
    }else{
      if(city_list[i]){
        output_string += "<span class='location-tag-span'>"+city_list[i] + " - " + country_list[i]+"</span>";
      }else{
        output_string += "<span class='location-tag-span'>"+ country_list[i]+"</span>";
      }
    }
  }
  return output_string;
}

function generateLocationTitle(who_i_am, countries, cities){
  var country_list = countries.split("|");
  var city_list = cities.split("|");
  var output_string = "<span class='location-card-subheading'><b>" + who_i_am + "</b> searching in ";
  if(country_list[0] == "All"){
    output_string += "<b>Global</b></span>";
  }else{
    if(city_list[0]){
      output_string += "<b>"+city_list[0] + ", " + country_list[0]+"</b></span>";
    }else{
      output_string += "<b>"+ country_list[0]+"</b></span>";
    }
  }
  return output_string;
}

function formatDealValue(type, min, max, currency){
  var SI_SYMBOL = ["", ",000", "mln", "B", "G", "T", "P", "E"];
  var formatted_currency = "";

  var currency_symbol = "";
  if(currency == "Euro"){
    currency_symbol = "€";
  }else if(currency == "Dollar"){
    currency_symbol = "$";
  }else if(currency == "Canadian Dollar"){
    currency_symbol = "C$";
  }else if(currency == "Pound"){
    currency_symbol = "£";
  }else if(currency == "Australian Dollar"){
    currency_symbol = "A$";
  }else if(currency == "Yen"){
    currency_symbol = "¥";
  }else if(currency == "Swedish Krona"){
    currency_symbol = "SEK";
  }else if(currency == "Danish Krona"){
    currency_symbol = "DKK";
  }

  if(type == "undisclosed"){
    formatted_currency = "Undisclosed";
  }else if(type == "fixed"){
    var tier = Math.log10(Math.abs(min)) / 3 | 0;
    var scaled = min;
    var suffix = SI_SYMBOL[tier];
    var scale = Math.pow(10, tier * 3);
    if(tier != 0){
      scaled = min / scale;
    }
    formatted_currency = scaled + suffix + " " + currency_symbol;
  }else if(type == "range"){
    if(min == 0){
      var scaled1 = 0;
      var suffix1 = "";

      var tier2 = Math.log10(Math.abs(max)) / 3 | 0;
      var scaled2 = max;
      var suffix2 = SI_SYMBOL[tier2];
      var scale2 = Math.pow(10, tier2 * 3);
      if(tier2 != 0){
        scaled2 = max / scale2;
      }
      formatted_currency = scaled1 + " - " + scaled2 + suffix2 + " " + currency_symbol;
    }else if(max == 1000000000){
      var tier1 = Math.log10(Math.abs(min)) / 3 | 0;
      var scaled1 = min;
      var suffix1 = SI_SYMBOL[tier1];
      var scale1 = Math.pow(10, tier1 * 3);
      if(tier1 != 0){
        scaled1 = min / scale1;
      }
      formatted_currency = "Above " + scaled1 + suffix1 + " " + currency_symbol;
    }else{
      var tier1 = Math.log10(Math.abs(min)) / 3 | 0;
      var scaled1 = min;
      var suffix1 = SI_SYMBOL[tier1];
      var scale1 = Math.pow(10, tier1 * 3);
      if(tier1 != 0){
        scaled1 = min / scale1;
      }
      var tier2 = Math.log10(Math.abs(max)) / 3 | 0;
      var scaled2 = max;
      var suffix2 = SI_SYMBOL[tier2];
      var scale2 = Math.pow(10, tier2 * 3);
      if(tier2 != 0){
        scaled2 = max / scale2;
      }
      formatted_currency = scaled1 +  suffix1 + " - " + scaled2 + suffix2 + " " + currency_symbol;
    }
  }

  formatted_currency = formatted_currency.replace(".", ",");

  return formatted_currency;
}

function load_section(button_val) {
  var section_name = $(".deal_type:checked").val();
  var offer_type = $(".offer:checked").val();
  if (section_name != undefined) {
    $(".offer_section").fadeIn(0);
  }
  $(".hidden_deal_container").fadeOut(0);
  $("." + $(".offer:checked").val() + "_type_section").fadeIn(0);
}

$(document).ready(function () {
  $(".default_currency").on("change", function () {
    $(".span-currency-icon").html(
      $(this).find("option:selected").data("value")
    );
  });

  $(".deal_option_visibility_trigger").on("change", function () {
    $(".option_visibility_target").find("input[type='checkbox']").prop("checked", false);
    $(".option_visibility_target").find("input[type='number']").val("");
    if($(this).val() == "Private Equity" || $(this).val() == "Venture Capital" || $(this).val() == "Financial Institution"){
      $(".option_visibility_target").fadeIn(0);
    }else{
      $(".option_visibility_target").fadeOut(0);
    }
  });

  $(".listing-add-post1 li a").click(function () {
    var target_temp = $(this).attr("href");
    $(".listing-add-post1 li a").each(function () {
      if ($(this).attr("href") != target_temp) {
        $(this).removeClass("active");
      }
    });
  });

  $(".all_selector_checkbox").change(function () {
    if ($(this).prop("checked")) {
      $(this).siblings("input[type='checkbox']").prop("checked", true);
    } else {
      $(this).siblings("input[type='checkbox']").prop("checked", false);
    }
  });

  $(".all_selector_checkbox_main").change(function () {
    if ($(this).prop("checked")) {
      $(this)
      .parent()
      .parent()
      .parent()
      .find("input[type='checkbox']")
      .prop("checked", true);
    } else {
      $(this)
      .parent()
      .parent()
      .parent()
      .find("input[type='checkbox']")
      .prop("checked", false);
    }
  });

  $(".offer_type_selector").change(function () {
    show_hidden_options($(this));
  });

  $(".btn-deal-custom").on("click", function () {
    $(this).find(".deal-radio").prop("checked", true);
    $(".btn-deal-custom").removeClass("selected");
    $('.btn-deal-custom input[type="radio"]:checked')
    .parents(".btn-deal-custom")
    .addClass("selected");
    load_section($(this).find(".offer").val());

    var section_string =
    $(".deal_type:checked").val() +
    "_" +
    $(".offer:checked").val() +
    "_" +
    $(".offer_type_selector").val();
    section_string = section_string.replace(" ", "_");
    section_string = section_string.toLowerCase();
    $(".hidden_deal_container_main").fadeOut(0);
    $("." + section_string).fadeIn(0);
    $(".type_category_section").fadeOut(0);
    console.log(section_string);
  });

  $(".show_section_tabs").on("click", function () {
    $(".hidden_tab_head").fadeOut(0);
    $("." + $(this).find(".offer").val() + "_tabs").fadeIn(0);
  });

  if ($(window).width() < 768) {
    $(".input-serach").attr("placeholder", "Search");
  } else {
    $(".input-serach").attr("placeholder", "Search for Investors Sector Deal");
  }

  //Sidebar-navigation
  $("." + location.href.split("pages")[1].split("/")[1] + "-nav").addClass(
    "menu-open"
  );
  $("." + location.href.split("pages")[1].split("/")[1] + "-nav").addClass(
    "menu-is-opening"
  );
  $("." + location.href.split("pages")[1].split("/")[1] + "-treeview").css(
    "display",
    "block"
  );
  $(
    "." +
    location.href.split("pages")[1].split("/")[2].split(".php")[0] +
    "-sub-nav"
  ).addClass("active-manu-in");
  if (typeof ma_action !== "undefined") {
    $(".ma-detail-type").html(ma_action);
    $("." + ma_action.toLowerCase() + "-sub-nav").addClass("active-manu-in");
  }

  $("#email").keypress(function (e) {
    $("#incorrectCredentials").css("display", "none");
    $("#username").removeClass("is-invalid");
  });

  $("#password").keypress(function (e) {
    $("#incorrectCredentials").css("display", "none");
  });

  $(document.body).on("click", ".edit-deal-profile", function (e) {
    e.preventDefault();
    editAd($(this).data("id"), $(this).data("type"), $(this).data("deal"));
  });
  $(document.body).on("click", ".delete-deal-profile", function (e) {
    e.preventDefault();
    deleteAd($(this).data("id"), $(this).data("type"), $(this).data("deal"));
  });

  $(document.body).on("click", ".bookmark-investor", function (e) {
    e.preventDefault();
    bookmark("investor", $(this));
  });

  $(document.body).on("click", ".bookmark-business_company", function (e) {
    e.preventDefault();
    bookmark("company", $(this));
  });

  $(document.body).on("click", ".bookmark-start_up", function (e) {
    e.preventDefault();
    bookmark("company", $(this));
  });

  $(document.body).on("click", ".bookmark-real_estate", function (e) {
    e.preventDefault();
    bookmark("real estate", $(this));
  });

  $(document.body).on("click", ".bookmark-credits", function (e) {
    e.preventDefault();
    bookmark("credits", $(this));
  });

  $(document.body).on("click", ".bookmark-npe", function (e) {
    e.preventDefault();
    bookmark("npe", $(this));
  });

  $(document.body).on("click", ".bookmark-advisor", function (e) {
    e.preventDefault();
    bookmark("advisor", $(this));
  });

  $(".favorite-bookmark").on("click", function (e) {
    $("." + $(this).data("type") + "-card-" + $(this).data("id")).fadeOut(0);
  });

  $(document.body).on("click", ".subcategories > li", function (e) {
    if ($(this).hasClass("select_all_filter")) {
      if ($(this).hasClass("selected")) {
        $(this).removeClass("selected");
        $(this).siblings(".searchable").removeClass("selected");
      } else {
        $(this).addClass("selected");
        $(this).siblings(".searchable").addClass("selected");
      }
    } else {
      if ($(this).hasClass("selected")) {
        $(this).removeClass("selected");
      } else {
        $(this).addClass("selected");
      }
    }
  });

  $("#advancedFilters").on("click", 'input[type="checkbox"]', function (e) {
    var elem = $(this);
    if (elem.val() != "All") {
      elem
      .parent()
      .parent()
      .find('input[type="checkbox"]:checked')
      .each(function () {
        if ($(this).val() == "All") {
          $(this).prop("checked", false);
        }
      });
    }
  });

  $("#AreaOfActivityType li").each(function () {
    if ($(this).hasClass("selected")) {
      location.push($(this).html().trim().toLowerCase());
    }
  });

  $("#AreaOfActivityType li").each(function () {
    if ($(this).hasClass("selected")) {
      location.push($(this).html().trim().toLowerCase());
    }
  });

  $("#asset").on("click", function () {
    $("#ma_type").val("asset");
    $(".asset-options").fadeIn(0);
    $(".company-options").fadeOut(0);
  });

  $("#company").on("click", function () {
    $("#ma_type").val("company");
    $(".asset-options").fadeOut(0);
    $(".company-options").fadeIn(0);
  });

  $("#adImage").on("click", function () {
    $("#imageError").fadeOut(0);
  });

  $(document.body).on("click", ".clickable-filter", function () {
    var searchQuery = $(this).data("clickfilter").trim();
    $(".searchable").each(function () {
      if ($(this).data("search") == searchQuery) {
        if (!$(this).hasClass("selected")) {
          $(this).addClass("selected");
        }
      }
    });
    applyFilter();
  });

  $(".password_visibility").on("click", function () {
    if ($(this).hasClass("pass_visible")) {
      $(this).removeClass("pass_visible");
      $(this).html('<i class="fas fa-eye"></i>');
      $(this)
      .closest(":has(input)")
      .find("input:first")
      .attr("type", "password");
    } else {
      $(this).addClass("pass_visible");
      $(this).html('<i class="fas fa-eye-slash"></i>');
      $(this).closest(":has(input)").find("input:first").attr("type", "text");
    }
  });
});

function show_hidden_options(elem) {
  var section_string =
  $(".deal_type:checked").val() +
  "_" +
  $(".offer:checked").val() +
  "_" +
  elem.val();
  section_string = section_string.replace(" ", "_");
  section_string = section_string.toLowerCase();
  $(".hidden_deal_container_main").fadeOut(0);
  $("." + section_string).fadeIn(0);
  $(".type_category_section").fadeOut(0);
  $(".type_category_" + elem.val().replace(" ", "_").toLowerCase()).fadeIn(0);
}

function showRealEstateOptions() {
  $("#realstate-options-group").fadeIn(0);
}
function hideRealEstateOptions() {
  $("#realstate-options-group").fadeOut(0);
}

function checkPicture() {
  if ($("#adImage-list").val() == "[]" || $("#adImage-list").val() == "") {
    $("#imageError").fadeIn(0);
    $("#imageError").focus();
  } else {
    uploadAd();
  }
}

function uploadAd() {
  var formData = {
    action: $('.ad-form input[name="action"]:checked').val(),
    type: $('.ad-form input[name="category"]:checked').val(),
  };

  if ($('.ad-form input[name="category"]:checked').val() == "Asset") {
    formData.category = $('.ad-form input[name="assetType"]:checked').val();
    if ($('.ad-form input[name="assetType"]:checked').val() == "Real Estate") {
      formData.realestate = $("#realestate-selected").val();
    }
  } else {
    formData.category = $('.ad-form input[name="companyType"]:checked').val();
    formData.sector = $("#sector").val();
    formData.revenue = $("#revenue").val();
    formData.ebitda = $("#ebitda").val();
    formData.finance_status = $("#financeStatus").val();
    formData.foundation_year = $("#foundationYear").val();
  }
  formData.value = $("#assetValue").val();
  formData.industry = $("#industry").val();
  formData.location = $("#location").val();
  formData.title = $("#title").val();
  formData.description = $("#description").val();
  formData.image_folder = folderTimestamp;
  formData.image = $("#adImage-list").val();
  formData.attachments = $("#adAttachments-list").val();

  console.log(formData);

  $.ajax({
    type: "POST",
    url: "../../assets/php/ad_post.php",
    data: formData,
    success: function (response) {
      console.log(response);
      if (response.trim() == "success") {
        swal("Success!", "Post added!", "success").then((value) => {
          location.reload();
        });
      } else {
        swal(
          "Error!",
          "An unexpected error occurred, please try again!",
          "error"
        );
      }
    },
  });
}

function verificationFunction() {
  $.ajax({
    type: "POST",
    url: "../../../assets/php/verify.php",
    data: {
      user_id: $("#user_id").val(),
      mobile: $("#phone").val(),
      country: $("#country").find("option:selected").text(),
      city: $("#city").val(),
      operator: $("#operator").val(),
    },
    success: function (response) {
      console.log(response);
      if (response.trim() == "success") {
        $(".loader").fadeOut(0);
        window.location.href = "../../../pages/news/index.php";
      } else {
        $(".loader").fadeOut(0);
        swal("Error!", "An error occurred, please try again!", "error");
      }
    },
  });
}

function loginFunction() {
  var remember = "";
  if ($("#remember").is(":checked")) remember = "1";
  else remember = "0";

  $.ajax({
    type: "POST",
    url: "../../assets/php/login.php",
    data: {
      email: $("#email").val(),
      password: $("#password").val(),
      remember: remember,
    },
    success: function (response) {
      console.log(response);
      if (response.trim() == "success") {
        window.location.href = "../../pages/news/";
      } else if (response.trim() == "unverified") {
        $("#unverifiedAccount").fadeIn(0);
        $(".loader").fadeOut(0);
        $("#password").focus();
      } else if (response.trim() == "registration") {
        window.location.href = "../../pages/auth/verify/registration.php";
      } else {
        $("#incorrectCredentials").fadeIn(0);
        $(".loader").fadeOut(0);
        $("#password").focus();
      }
    },
  });
}

function logout() {
  swal({
    title: "Are you sure?",
    text: "You want to logout!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      window.open("../../assets/php/logout.php", "_self");
    }
  });
}

function registrationFunction() {
  $.ajax({
    type: "POST",
    url: "../../assets/php/register.php",
    data: {
      first_name: $("#first_name").val(),
      last_name: $("#last_name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
    },
    success: function (response) {
      console.log(response);
      if (response.trim() == "success") {
        $(".loader").fadeOut(0);
        window.location.href = "../../pages/auth/registration_success.php";
      } else if (response.trim() == "email") {
        $("#email").focus();
        $(".loader").fadeOut(0);
        swal("Error!", "Email ID already registered!", "error");
      } else {
        $(".loader").fadeOut(0);
        swal("Error!", "An error occurred, please try again!", "error");
      }
    },
  });
}

function advisorRegistrationFunction() {
  $.ajax({
    type: "POST",
    url: "../../assets/php/advisorRegister.php",
    data: {
      advisor_id: $("#advisor_id").val(),
      first_name: $("#first_name").val(),
      last_name: $("#last_name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
    },
    success: function (response) {
      console.log(response);
      if (response.trim() == "success") {
        $(".loader").fadeOut(0);
        swal("Success!", "Registration Successful!", "success").then(
          (value) => {
            window.location.href = "../../pages/auth/login.php";
          }
        );
      } else if (response.trim() == "email") {
        $("#email").focus();
        $(".loader").fadeOut(0);
        swal("Error!", "Email ID already registered!", "error");
      } else {
        $(".loader").fadeOut(0);
        swal("Error!", "An error occurred, please try again!", "error");
      }
    },
  });
}

function bookmark(type, elem) {
  elem.html('<div class="spinner-border"></div>');
  console.log(elem.data("id"));
  if (elem.hasClass("bookmark-active")) {
    $.ajax({
      type: "POST",
      url: "../../assets/php/remove-bookmark.php",
      data: {
        type: type,
        id: elem.data("id"),
      },
      success: function (response) {
        console.log(response);
        elem.html('<i class="fas fa-bookmark fa-2x"></i>');
        if (response.trim() == "success") {
          elem.removeClass("bookmark-active");
        }
      },
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../../assets/php/add-bookmark.php",
      data: {
        type: type,
        id: elem.data("id"),
      },
      success: function (response) {
        console.log(response);
        elem.html('<i class="fas fa-bookmark fa-2x"></i>');
        if (response.trim() == "success") {
          elem.addClass("bookmark-active");
        }
      },
    });
  }
}

function applyFilter() {
  refreshFilters();

  var investorname_filter = true;
  var preferredinvestmenttype_filter = true;
  var preferredverticals_filter = true;
  var primaryinvestortype_filter = true;
  var preferredindustrytype_filter = true;
  var location_filter = true;
  var aum_filter = true;
  var investmentprofessionals_filter = true;

  var investorname = [];
  var preferredinvestmenttype = [];
  var preferredverticals = [];
  var primary_investor_type = [];
  var preferrerd_industry_type = [];
  var location = [];
  var aumcondition = "";
  var investmentprofessionals = "";

  $("#investorNameType li").each(function () {
    if ($(this).hasClass("selected")) {
      investorname.push($(this).html().trim().toLowerCase());
    }
  });

  $("#preferredInvestmentType li").each(function () {
    if ($(this).hasClass("selected")) {
      preferredinvestmenttype.push($(this).html().trim().toLowerCase());
    }
  });

  $("#PreferredVerticalsType li").each(function () {
    if ($(this).hasClass("selected")) {
      preferredverticals.push($(this).html().trim().toLowerCase());
    }
  });

  $(".primary_investor_sub.selected").each(function () {
    primary_investor_type.push($(this).html().trim().toLowerCase());
  });

  $("#PreferredindustryType li").each(function () {
    if ($(this).hasClass("selected")) {
      preferrerd_industry_type.push($(this).html().trim().toLowerCase());
    }
  });

  $("#whereType li").each(function () {
    if ($(this).hasClass("selected")) {
      location.push($(this).html().trim().toLowerCase());
    }
  });

  $("#aumType li").each(function () {
    if ($(this).hasClass("selected")) {
      aumcondition += $(this).data("count").trim() + " || ";
    }
  });

  $("#investmentProfessionalsType li").each(function () {
    if ($(this).hasClass("selected")) {
      investmentprofessionals += $(this).data("count").trim() + " || ";
    }
  });

  if (investorname.length === 0) {
    investorname_filter = false;
  }
  if (preferredinvestmenttype.length === 0) {
    preferredinvestmenttype_filter = false;
  }
  if (preferredverticals.length === 0) {
    preferredverticals_filter = false;
  }
  if (primary_investor_type.length === 0) {
    primaryinvestortype_filter = false;
  }
  if (preferrerd_industry_type.length === 0) {
    preferredindustrytype_filter = false;
  }
  if (location.length === 0) {
    location_filter = false;
  }
  if (aumcondition == "") {
    aum_filter = false;
  }
  if (investmentprofessionals == "") {
    investmentprofessionals_filter = false;
  }

  if (
    !investorname_filter &&
    !preferredinvestmenttype_filter &&
    !preferredverticals_filter &&
    !primaryinvestortype_filter &&
    !preferredindustrytype_filter &&
    !location_filter &&
    !aum_filter &&
    !investmentprofessionals_filter
  ) {
    refreshFilters();
    showResults();
  } else {
    for (var i = 0; i < obj.length; i++) {
      var cond1 = true;
      var cond2 = true;
      var cond3 = true;
      var cond4 = true;
      var cond5 = true;
      var cond6 = true;
      var cond7 = true;
      var cond8 = true;

      if (investorname_filter) {
        if ($.inArray(obj[i].name.trim().toLowerCase(), investorname) == -1) {
          cond1 = false;
        }
      }
      if (preferredinvestmenttype_filter && cond1) {
        var preferredinvestmenttypes_temp = obj[i].preferredinvestmenttypes
        .trim()
        .toLowerCase();
        var preferredinvestment = preferredinvestmenttypes_temp.split(",");
        if (
          !preferredinvestment.some((item) =>
          preferredinvestmenttype.includes(item)
        )
      ) {
        cond2 = false;
      }
    }
    if (preferredverticals_filter && cond1 && cond2) {
      var preferredverticals_temp =
      obj[i].Preferred_Verticals.trim().toLowerCase();
      var preferredvertical = preferredverticals_temp.split(",");
      if (
        !preferredvertical.some((item) => preferredverticals.includes(item))
      ) {
        cond3 = false;
      }
    }
    if (primaryinvestortype_filter && cond1 && cond2 && cond3) {
      if (
        $.inArray(obj[i].primaryinvestortype.trim(), primary_investor_type) ==
        -1
      ) {
        cond4 = false;
      }
    }
    if (preferredindustrytype_filter && cond1 && cond2 && cond3 && cond4) {
      var ind_temp = obj[i].preferredindustry.trim();
      var industries = ind_temp.split(",");
      if (
        !industries.some((item) => preferrerd_industry_type.includes(item))
      ) {
        cond5 = false;
      }
    }
    if (location_filter && cond1 && cond2 && cond3 && cond4 && cond5) {
      if ($.inArray(obj[i].where.trim(), location) == -1) {
        cond6 = false;
      }
    }
    if (aum_filter && cond1 && cond2 && cond3 && cond4 && cond5 && cond6) {
      if (obj[i].aum != null && obj[i].aum != "") {
        var aumcondition_temp = aumcondition.substring(
          0,
          aumcondition.length - 3
        );
        aumcondition_temp = aumcondition_temp.replace(/\X/g, obj[i].aum);
        if (!eval(aumcondition_temp)) {
          cond7 = false;
        }
      } else {
        cond7 = false;
      }
    }
    if (
      investmentprofessionals_filter &&
      cond1 &&
      cond2 &&
      cond3 &&
      cond4 &&
      cond5 &&
      cond6 &&
      cond7 &&
      cond8
    ) {
      if (
        obj[i].investmentprofessionals != null &&
        obj[i].investmentprofessionals != ""
      ) {
        var investmentprofessionals_temp = investmentprofessionals.substring(
          0,
          investmentprofessionals.length - 3
        );
        investmentprofessionals_temp = investmentprofessionals_temp.replace(
          /\X/g,
          obj[i].investmentprofessionals
        );
        if (!eval(investmentprofessionals_temp)) {
          cond8 = false;
        }
      } else {
        cond8 = false;
      }
    }

    if (
      cond1 &&
      cond2 &&
      cond3 &&
      cond4 &&
      cond5 &&
      cond6 &&
      cond7 &&
      cond8
    ) {
      var elementData = "";
      elementData +=
      '<div class="col-md-3 col-sm-6 investor_card pagination-item"><a href="investor-detail.php?investor=' +
      obj[i].id +
      '" class="card investor-category-l-4"><div class="card-header"><span class="right-investor-batch"><span class="bookmark bookmark-investor';
      if (obj[i].favorite) {
        elementData += " bookmark-active";
      }
      elementData +=
      '" data-id="' +
      obj[i].id +
      '"><i class="fas fa-bookmark fa-2x"></i></span></span><img src="../../dist/img/investor/1.jpg" alt="1" class="investor-images-set"></div><div class="card-body"><h6 class="card-title-heading-set">' +
      obj[i].name +
      '</h6><p class="card-text-location10"> <i class="fas fa-map-marker-alt"></i>' +
      obj[i].location +
      "</p></div></a></div>";
      $(".itemsList").append(elementData);
    }
  }
  $(".paginationList").rpmPagination({
    domElement: ".pagination-item",
    limit: 48,
  });
}
addToSearch();
}

function addToSearch() {
  $(".selected").each(function () {
    var searchQuery = $(this).data("search");
    var searchExisting = [];
    $(".searchedItem").each(function () {
      searchExisting.push($(this).data("query"));
    });
    if ($.inArray(searchQuery, searchExisting) == -1) {
      $(".searchItems").append(
        '<span class="searchedItem" data-query="' +
        searchQuery +
        '"><span class="searchClear" onclick="clearSearch(' +
        "'" +
        searchQuery +
        "'" +
        ')">X</span><span class="searchText">' +
        searchQuery +
        "</span></span>"
      );
    }
  });

  if ($(".searchItems").find(".searchedItem").length > 0) {
    $(".our-trans-btn").fadeIn(0);
  } else {
    $(".our-trans-btn").fadeOut(0);
  }
}

function clearSearch(remove_query) {
  $(".searchable").each(function () {
    if ($(this).data("search") == remove_query) {
      if (itemType == "ma") {
        if ($(this).prop("checked") == true) {
          $(this).prop("checked", false);
        }
        if ($(this).parent()[0].nodeName.toLowerCase() === "select") {
          $(this).parent().val("");
        }
      } else {
        if ($(this).hasClass("selected")) {
          $(this).removeClass("selected");
        }
        if ($(this).data("container")) {
          var elemTag = $(this).data("container");
          var categ = $("#" + elemTag).data("category");
          var counterSelected = 0;
          $("#" + categ + " .primary_investor_sub").each(function () {
            if ($(this).hasClass("selected")) {
              counterSelected++;
            }
          });
          if (counterSelected == 0) {
            $("#" + elemTag).click();
          }
        }
      }
    }
  });

  $(".searchedItem").each(function () {
    if ($(this).data("query") == remove_query) {
      $(this).remove();
    }
  });

  if (itemType == "ma") {
    appyDealFilter();
  } else {
    applyFilter();
  }
}

function clearFilters() {
  $(".our-trans-btn").fadeOut(0);
  $("#searchText").html("");
  $("#searchIndicators").val("");
  $("#searchIndicators").fadeIn(1);
  $(".searchedItem").fadeOut(1);
  $(".searchable").each(function () {
    $(this).removeClass("selected");
  });
  refreshFilters();
  showResults();
}

function refreshFilters() {
  $(".itemsList").html("");
  $(".searchItems").html("");
}

function addSeachFilter(searchQuery) {
  $(".searchable").each(function () {
    var elem = $(this);
    if (elem.data("search") == searchQuery) {
      if (itemType == "ma") {
        if (elem.prop("checked") == false) {
          elem.click();
        }
        if (elem.parent()[0].nodeName.toLowerCase() === "select") {
          elem.parent().val(elem.val());
          show_hidden_options(elem.parent());
        }
      } else {
        if (!elem.hasClass("selected")) {
          elem.addClass("selected");
        }
        if (elem.data("container")) {
          var elemTag = elem.data("container");
          $("#" + elemTag).click();
        }
      }
    }
  });

  var searchExisting = [];
  $(".searchedItem").each(function () {
    searchExisting.push($(this).data("query"));
  });
  if ($.inArray(searchQuery, searchExisting) == -1) {
    $(".searchItems").append(
      '<span class="searchedItem" data-query="' +
      searchQuery +
      '"><span class="searchClear" onclick="clearSearch(' +
      "'" +
      searchQuery +
      "'" +
      ')">X</span><span class="searchText">' +
      searchQuery +
      "</span></span>"
    );
  }
  $("#searchIndicators").val("");

  if (itemType == "ma") {
    appyDealFilter();
  } else {
    applyFilter();
  }
}

function showResults() {
  $(".itemsList").html("");
  if (itemType == "investors") {
    for (var i = offset; i < offset + 48; i++) {
      if (obj[i]) {
        var elementData = "";
        elementData +=
        '<div class="col-md-3 col-sm-6 investor_card pagination-item"><a href="investor-detail.php?investor=' +
        obj[i].id +
        '" class="card investor-category-l-4"><div class="card-header"><span class="right-investor-batch"><span class="bookmark bookmark-investor';
        if (obj[i].favorite) {
          elementData += " bookmark-active";
        }
        elementData +=
        '" data-id="' +
        obj[i].id +
        '"><i class="fas fa-bookmark fa-2x"></i></span></span><img src="../../dist/img/investor/1.jpg" alt="1" class="investor-images-set"></div><div class="card-body"><h6 class="card-title-heading-set">' +
        obj[i].name +
        '</h6><p class="card-text-location10"> <i class="fas fa-map-marker-alt"></i>' +
        obj[i].location +
        "</p></div></a></div>";
        $(".itemsList").append(elementData);
      }
    }
  } else if (itemType == "ma") {
    for (var i = offset; i < offset + 48; i++) {
      if (obj[i]) {
        var elementData = "";
        elementData +=
        '<div class="col-md-3 col-sm-5 inline-block ma_card pagination-item"><div class="card mb-4 cart-custom-redious our-shadow"> <img class="card-img-top ma-img" src="../../assets/uploads/MergerAcquisition/' +
        obj[i].image_folder +
        "/" +
        obj[i].image +
        '" alt="image"> <span class="left-tag-card our-back"> ' +
        obj[i].type +
        ' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-ma';
        if (obj[i].favorite) {
          elementData += " bookmark-active";
        }
        elementData +=
        '" data-id="' +
        obj[i].id +
        '"> <i class="fas fa-bookmark fa-2x"></i> </span> </span><div class="d-flex flex-column justify-content-end p-2"><h5 class="card-heading text-dark"> ' +
        obj[i].title +
        '</h5><p class="card-descripatoin pb-1 pt-1"> ' +
        obj[i].description +
        '</p><div class="listing"> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="' +
        obj[i].location +
        '"> <span> <i class="fas fa-map-marker-alt"></i> ' +
        obj[i].location +
        ' </span> </a> <a class="our-color listing-card-tag1"> <span><i class="fas fa-dollar-sign"></i> ' +
        obj[i].value +
        ' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="' +
        obj[i].industry_visible +
        '"> <span><i class="fas fa-chart-pie"></i> ' +
        obj[i].industry_visible +
        ' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="' +
        obj[i].category +
        '"> <span><i class="fas fa-chart-line"></i>' +
        obj[i].category +
        '</span> </a> <a href="ma-detail.php?ma=' +
        obj[i].id +
        '" class="contact-here-sectin564"> More Info <i class="fas fa-chevron-right"></i></a></div></div></div></div>';
        $(".itemsList").append(elementData);
      }
    }
  } else if (itemType == "advisors") {
    for (var i = offset; i < offset + 48; i++) {
      if (obj[i]) {
        var elementData = "";
        elementData +=
        '<div class="col-md-4 col-sm-6 pagination-item"><div class="card advisor-category-l-4"><div class="card-header"> <span class="right-investor-batch"> <span class="bookmark bookmark-advisor';
        if (obj[i].favorite) {
          elementData += " bookmark-active";
        }
        elementData +=
        '" data-id="' +
        obj[i].id +
        '"> <i class="fas fa-bookmark fa-2x"></i> </span> </span><center> <img src="../../assets/uploads/Advisor/' +
        obj[i].folder_name +
        "/" +
        obj[i].profile_picture +
        '" alt="1" class="profile-advisor-category12"></center></div><div class="card-body"><p class="studio-commercialista"> ' +
        obj[i].studio_name +
        '</p><hr><p class="studio-commercialista-second"> <i class="far fa-star"></i> ' +
        obj[i].interests +
        '</p> <a href="advisor-detail.php?advisor=' +
        obj[i].id +
        '" class="advisor-category-contact-34"> More Info > </a></div></div></div>';
        $(".itemsList").append(elementData);
      }
    }
  }

  $(".paginationList").rpmPagination({
    domElement: ".pagination-item",
    limit: 48,
    currentPage: currentPage,
    total: obj.length,
    link: "index.php",
    refresh: true,
  });
}

$(document).ready(function () {
  $(".filter_search_query").on("keyup", function () {
    if ($(this).val().length > 2) {
      $(this).siblings(".input-group-btn").find(".btn").trigger("click");
    } else {
      $(this)
      .siblings(".input-group-btn")
      .find(".btn")
      .parent()
      .parent()
      .parent()
      .find(".searchable")
      .each(function () {
        $(this).removeClass("hide_search");
      });
    }
  });
});

function searchFilter(elem) {
  $(".searchable").removeClass("hide_search");
  var filter_search_query = elem
  .parent()
  .parent()
  .find(".filter_search_query")
  .val()
  .toLocaleLowerCase();
  if (filter_search_query != "") {
    elem
    .parent()
    .parent()
    .parent()
    .find(".searchable")
    .each(function () {
      if (
        $(this).html().toLocaleLowerCase().indexOf(filter_search_query) == -1
      ) {
        $(this).addClass("hide_search");
      }
    });
  }
}
