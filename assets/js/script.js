var tempItemList = [];

$(document).ready(function(){

  if ($(window).width() < 768) {
    $(".input-serach").attr("placeholder", "Search")
  }else{
    $(".input-serach").attr("placeholder", "Search for Investors Sector Deal")
  }

  //Sidebar-navigation
  $("."+location.href.split("pages")[1].split("/")[1]+"-nav").addClass("menu-open");
  $("."+location.href.split("pages")[1].split("/")[1]+"-nav").addClass("menu-is-opening");
  $("."+location.href.split("pages")[1].split("/")[1]+"-treeview").css("display", "block");
  $("."+location.href.split("pages")[1].split("/")[2].split(".php")[0]+"-sub-nav").addClass("active-manu-in");
  if(typeof ma_action !== 'undefined'){
    $(".ma-detail-type").html(ma_action);
    $("."+ma_action.toLowerCase()+"-sub-nav").addClass("active-manu-in");
  }

  $('#email').keypress(function(e){
    $("#incorrectCredentials").css("display", "none");
    $('#username').removeClass('is-invalid');
  });

  $('#password').keypress(function(e){
    $("#incorrectCredentials").css("display", "none");
  });

  $(document.body).on('click', '.bookmark-investor' ,function(e){
    e.preventDefault();
    bookmark('investor', $(this));
  })

  $(document.body).on('click', '.bookmark-ma' ,function(e){
    e.preventDefault();
    bookmark('ma', $(this));
  })

  $(document.body).on('click', '.bookmark-advisor' ,function(e){
    e.preventDefault();
    bookmark('advisor', $(this));
  })

  $(".favorite-bookmark").on('click', function(e){
    $("."+$(this).data("type")+"-card-"+$(this).data("id")).fadeOut();
  })

  $(".subcategories > li").on('click', function(){
    if($(this).hasClass('selected')){
      $(this).removeClass('selected')
    }else{
      $(this).addClass('selected')
    }
  });

  $("#asset").on('click', function(){
    $("#ma_type").val('asset');
    $(".asset-options").fadeIn(0);
    $(".company-options").fadeOut(0);
  });

  $("#company").on('click', function(){
    $("#ma_type").val('company');
    $(".asset-options").fadeOut(0);
    $(".company-options").fadeIn(0);
  });

  $("#adImage").on('click', function(){
    $("#imageError").fadeOut();
  });

  $(document.body).on('click', '.clickable-filter' ,function(){
    var searchQuery = $(this).data('clickfilter').trim();
    $(".searchable").each(function(){
      if($(this).data("search") == searchQuery){
        if(!$(this).hasClass('selected')){
          $(this).addClass('selected');
        }
      }
    });
    applyFilter();
  });

  $(".password_visibility").on("click", function(){
    if($(this).hasClass("pass_visible")){
      $(this).removeClass("pass_visible");
      $(this).html('<i class="fas fa-eye"></i>');
      $(this).closest(":has(input)").find("input:first").attr("type", "password");
    }else{
      $(this).addClass("pass_visible")
      $(this).html('<i class="fas fa-eye-slash"></i>');
      $(this).closest(":has(input)").find("input:first").attr("type", "text");
    }
  })

});

function showRealEstateOptions(){
  $("#realstate-options-group").fadeIn();
}
function hideRealEstateOptions(){
  $("#realstate-options-group").fadeOut();
}

function checkPicture(){
  if($('#adImage-list').val() == '[]' || $('#adImage-list').val() == ""){
    $("#imageError").fadeIn();
    $("#imageError").focus();
  }else{
    uploadAd();
  }
}

function uploadAd(){

  var formData = {
    action: $('.ad-form input[name="action"]:checked').val(),
    type:$('.ad-form input[name="category"]:checked').val(),
  }

  if($('.ad-form input[name="category"]:checked').val() == "Asset"){
    formData.category = $('.ad-form input[name="assetType"]:checked').val();
    if($('.ad-form input[name="assetType"]:checked').val() == "Real Estate"){
      formData.realestate = $("#realestate-selected").val();
    }
  }else{
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

  console.log(formData)

  $.ajax({
    type: 'POST',
    url: '../../assets/php/ad_post.php',
    data: formData,
    success: function(response) {
      console.log(response)
      if ( response.trim() == "success" ){
        swal("Success!", "Post added!", "success")
        .then((value) => {
          location.reload();
        });
      }else {
        swal("Error!", "An unexpected error occurred, please try again!", "error");
      }
    }
  });

}


function loginFunction(){
  var remember="";
  if($('#remember').is(":checked"))
  remember = "1";
  else
  remember = "0";

  $.ajax({
    type: 'POST',
    url: '../../assets/php/login.php',
    data: {
      email: $('#email').val(),
      password: $('#password').val(),
      remember: remember
    },
    success: function(response) {
      if ( response.trim() == "success" ){
        window.location.href='../../pages/news/';
      }else {
        $("#incorrectCredentials").fadeIn();
        $('.loader').fadeOut();
        $('#password').focus();
      }
    }
  });
}


function logout(){

  swal({
    title: "Are you sure?",
    text: "You want to logout!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      window.open("../../assets/php/logout.php", "_self");
    }
  });

}


function registrationFunction(){

  $.ajax({
    type: 'POST',
    url: '../../assets/php/register.php',
    data: {
      first_name: $('#first_name').val(),
      last_name: $('#last_name').val(),
      email: $('#email').val(),
      password: $('#password').val(),
    },
    success: function(response) {
      console.log(response);
      if ( response.trim() == "success" ){
        $('.loader').fadeOut();
        swal("Success!", "Registration Successful!", "success")
        .then((value) => {
          window.location.href='../../pages/auth/login.php';
        });
      }else if( response.trim() == "email" ){
        $('#email').focus();
        $('.loader').fadeOut();
        swal("Error!", "Email ID already registered!", "error");
      }else{
        $('.loader').fadeOut();
        swal("Error!", "An error occurred, please try again!", "error");
      }
    }
  });
}

function advisorRegistrationFunction(){

  $.ajax({
    type: 'POST',
    url: '../../assets/php/advisorRegister.php',
    data: {
      advisor_id: $("#advisor_id").val(),
      first_name: $('#first_name').val(),
      last_name: $('#last_name').val(),
      email: $('#email').val(),
      password: $('#password').val(),
    },
    success: function(response) {
      console.log(response);
      if ( response.trim() == "success" ){
        $('.loader').fadeOut();
        swal("Success!", "Registration Successful!", "success")
        .then((value) => {
          window.location.href='../../pages/auth/login.php';
        });
      }else if( response.trim() == "email" ){
        $('#email').focus();
        $('.loader').fadeOut();
        swal("Error!", "Email ID already registered!", "error");
      }else{
        $('.loader').fadeOut();
        swal("Error!", "An error occurred, please try again!", "error");
      }
    }
  });
}

function bookmark(type, elem){
  elem.html('<div class="spinner-border"></div>');
  console.log(elem.data('id'))
  if(elem.hasClass('bookmark-active')){
    $.ajax({
      type: 'POST',
      url: '../../assets/php/remove-bookmark.php',
      data: {
        type: type,
        id: elem.data('id'),
      },
      success: function(response) {
        console.log(response)
        elem.html('<i class="fas fa-bookmark fa-2x"></i>');
        if ( response.trim() == "success" ){
          elem.removeClass('bookmark-active');
        }
      }
    });
  }else{
    $.ajax({
      type: 'POST',
      url: '../../assets/php/add-bookmark.php',
      data: {
        type: type,
        id: elem.data('id'),
      },
      success: function(response) {
        console.log(response)
        elem.html('<i class="fas fa-bookmark fa-2x"></i>');
        if ( response.trim() == "success" ){
          elem.addClass('bookmark-active');
        }
      }
    });
  }
}

function applyFilter(){

  refreshFilters();

  if($("#advancedFilters").data('filter') == "ma"){
    var category_filter = true;
    var realestate_filter = true;
    var value_filter = true;
    var industry_filter = true;
    var sector_filter = true;
    var revenue_filter = true;
    var ebitda_filter = true;
    var financialstatus_filter = true;
    var foundationyear_filter = true;
    var location_filter = true;

    var category = [];
    var realestate = [];
    var value = "";
    var industry = [];
    var sector = [];
    var revenue = "";
    var ebitda = "";
    var financialstatus = [];
    var foundationyear = [];
    var location = [];

    $('#assetType li').each(function(){
      if($(this).hasClass('selected')){
        category.push($(this).html().trim().toLowerCase());
      }
    });
    $('#companyType li').each(function(){
      if($(this).hasClass('selected')){
        category.push($(this).html().trim().toLowerCase());
      }
    });
    $('#realestateType li').each(function(){
      if($(this).hasClass('selected')){
        realestate.push($(this).html().trim().toLowerCase());
      }
    });
    $('#sectorType li').each(function(){
      if($(this).hasClass('selected')){
        sector.push($(this).html().trim().toLowerCase());
      }
    });
    $("#revenueType li").each(function(){
      if($(this).hasClass('selected')){
        revenue += $(this).data("count").trim() + " || ";
      }
    });
    $("#ebitdaType li").each(function(){
      if($(this).hasClass('selected')){
        ebitda += $(this).data("count").trim() + " || ";
      }
    });
    $('#financeStatusType li').each(function(){
      if($(this).hasClass('selected')){
        financialstatus.push($(this).html().trim().toLowerCase());
      }
    });
    $('#foundationYearType li').each(function(){
      if($(this).hasClass('selected')){
        foundationyear.push($(this).html().trim().toLowerCase());
      }
    });
    $("#valueType li").each(function(){
      if($(this).hasClass('selected')){
        value += $(this).data("count").trim() + " || ";
      }
    });
    $('#IndustryType li').each(function(){
      if($(this).hasClass('selected')){
        industry.push($(this).html().trim().toLowerCase());
      }
    });
    $('#whereType li').each(function(){
      if($(this).hasClass('selected')){
        location.push($(this).html().trim().toLowerCase());
      }
    });

    if(category.length === 0){
      category_filter = false;
    }
    if(realestate.length === 0){
      realestate_filter = false;
    }
    if(industry.length === 0){
      industry_filter = false;
    }
    if(sector.length === 0){
      sector_filter = false;
    }
    if(financialstatus.length === 0){
      financialstatus_filter = false;
    }
    if(foundationyear.length === 0){
      foundationyear_filter = false;
    }
    if(location.length === 0){
      location_filter = false;
    }
    if(value == ""){
      value_filter = false;
    }
    if(revenue == ""){
      revenue_filter = false;
    }
    if(ebitda == ""){
      ebitda_filter = false;
    }

    if(!category_filter && !realestate_filter && !industry_filter && !sector_filter && !financialstatus_filter && !foundationyear_filter && !location_filter && !value_filter && !revenue_filter && !ebitda_filter){
      refreshFilters();
      showResults();
    }else{
      for(var i = 0; i < obj.length; i++){
        var cond1 = true;
        var cond2 = true;
        var cond3 = true;
        var cond4 = true;
        var cond5 = true;
        var cond6 = true;
        var cond7 = true;
        var cond8 = true;
        var cond9 = true;
        var cond10 = true;

        if(category_filter){
          if ( $.inArray(obj[i].category.trim().toLowerCase(), category) == -1 ) {
            cond1 = false;
          }
        }
        if(realestate_filter && cond1){
          if ( $.inArray(obj[i].realestate.trim().toLowerCase(), realestate) == -1 ) {
            cond2 = false;
          }
        }
        if(industry_filter && cond1 && cond2){
          cond3 = obj[i].industry ? industry.some(r=> obj[i].industry.split(",").includes(r)) : false;
        }
        if(sector_filter && cond1 && cond2 && cond3){
          cond4 = obj[i].sector ? sector.some(r=> obj[i].sector.split(",").includes(r)) : false;
        }
        if(financialstatus_filter && cond1 && cond2 && cond3 && cond4){
          if ( $.inArray(obj[i].financialstatus.trim(), financialstatus) == -1 ) {
            cond5 = false;
          }
        }
        if(foundationyear_filter && cond1 && cond2 && cond3 && cond4 && cond5){
          if ( $.inArray(obj[i].foundationyear.toString().trim().toLowerCase(), foundationyear) == -1 ) {
            cond6 = false;
          }
        }
        if(location_filter && cond1 && cond2 && cond3 && cond4 && cond5 && cond6){
          if ( $.inArray(obj[i].location.trim().toLowerCase(), location) == -1 ) {
            cond7 = false;
          }
        }
        if(value_filter && cond1 && cond2 && cond3 && cond4 && cond5 && cond6 && cond7){
          if(obj[i].value != null &&  obj[i].value != ""){
            var value_temp = value.substring(0, value.length - 3);
            value_temp = value_temp.replace(/\X/g, obj[i].value);
            if(!eval(value_temp)) {
              cond8 = false;
            }
          }else{
            cond8 = false;
          }
        }
        if(revenue_filter && cond1 && cond2 && cond3 && cond4 && cond5 && cond6 && cond7 && cond8){
          if(obj[i].revenue != null &&  obj[i].revenue != ""){
            var revenue_temp = revenue.substring(0, revenue.length - 3);
            revenue_temp = revenue_temp.replace(/\X/g, obj[i].revenue);
            if(!eval(revenue_temp)) {
              cond9 = false;
            }
          }else{
            cond9 = false;
          }
        }
        if(ebitda_filter && cond1 && cond2 && cond3 && cond4 && cond5 && cond6 && cond7 && cond8 && cond9){
          if(obj[i].ebitda != null &&  obj[i].ebitda != ""){
            var ebitda_temp = ebitda.substring(0, ebitda.length - 3);
            ebitda_temp = ebitda_temp.replace(/\X/g, obj[i].ebitda);
            if(!eval(ebitda_temp)) {
              cond10 = false;
            }
          }else{
            cond10 = false;
          }
        }

        if(cond1 && cond2 && cond3 && cond4 && cond5 && cond6 && cond7 && cond8 && cond9 && cond10){
          var elementData = "";
          elementData += '<div class="col-md-3 col-sm-5 inline-block ma_card pagination-item"><div class="card mb-4 cart-custom-redious our-shadow"> <img class="card-img-top ma-img" src="../../assets/uploads/MergerAcquisition/'+obj[i].image_folder+'/'+obj[i].image+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].type+' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-ma';
          if(obj[i].favorite){
            elementData += ' bookmark-active';
          }
          elementData += '" data-id="'+obj[i].id+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span><div class="d-flex flex-column justify-content-end p-2"><h5 class="card-heading text-dark"> '+obj[i].title+'</h5><p class="card-descripatoin pb-1 pt-1"> '+obj[i].description+'</p><div class="listing"> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].location+'"> <span> <i class="fas fa-map-marker-alt"></i> '+obj[i].location+' </span> </a> <a class="our-color listing-card-tag1"> <span><i class="fas fa-dollar-sign"></i> '+obj[i].value+' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].industry_visible+'"> <span><i class="fas fa-chart-pie"></i> '+obj[i].industry_visible+' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].category+'"> <span><i class="fas fa-chart-line"></i>'+obj[i].category+'</span> </a> <a href="ma-detail.php?ma='+obj[i].id+'" class="contact-here-sectin564"> Contact here <i class="fas fa-chevron-right"></i></a></div></div></div></div>';
          $(".itemsList").append(elementData);
        }
      }
      $('.paginationList').rpmPagination({
        domElement: '.pagination-item',
        limit: 48,
      });
    }
  }else if($("#advancedFilters").data('filter') == "investor"){

    var primaryinvestortype_filter = true;
    var preferredindustrytype_filter = true;
    var location_filter = true;
    var aum_filter = true;
    var totalinvestments_filter = true;
    var preferredinvestmentamount_filter = true;

    var primary_investor_type =[];
    var preferrerd_industry_type = [];
    var location = [];
    var aumcondition = "";
    var totalInvestments = "";
    var preferredInvestmentAmount = "";

    $('.primary_investor_sub.selected').each(function () {
      primary_investor_type.push($(this).html().trim().toLowerCase());
    });

    $('#PreferredindustryType li').each(function(){
      if($(this).hasClass('selected')){
        preferrerd_industry_type.push($(this).html().trim().toLowerCase());
      }
    });

    $('#whereType li').each(function(){
      if($(this).hasClass('selected')){
        location.push($(this).html().trim().toLowerCase());
      }
    });

    $("#aumType li").each(function(){
      if($(this).hasClass('selected')){
        aumcondition += $(this).data("count").trim() + " || ";
      }
    });

    $("#totalInvestmentsType li").each(function(){
      if($(this).hasClass('selected')){
        totalInvestments += $(this).data("count").trim() + " || ";
      }
    });

    $("#preferredInvestmentAmountType li").each(function(){
      if($(this).hasClass('selected')){
        preferredInvestmentAmount += $(this).data("count").trim() + " || ";
      }
    });


    if(primary_investor_type.length === 0){
      primaryinvestortype_filter = false;
    }
    if(preferrerd_industry_type.length === 0){
      preferredindustrytype_filter = false;
    }
    if(location.length === 0){
      location_filter = false;
    }
    if(aumcondition == ""){
      aum_filter = false;
    }
    if(totalInvestments == ""){
      totalinvestments_filter = false;
    }
    if(preferredInvestmentAmount == ""){
      preferredinvestmentamount_filter = false;
    }

    if(!primaryinvestortype_filter && !preferredindustrytype_filter && !location_filter && !aum_filter && !totalinvestments_filter && !preferredinvestmentamount_filter){
      refreshFilters();
      showResults();
    }else{
      for(var i = 0; i < obj.length; i++){
        var cond1 = true;
        var cond2 = true;
        var cond3 = true;
        var cond4 = true;
        var cond5 = true;
        var cond6 = true;
        if(primaryinvestortype_filter){
          if ( $.inArray(obj[i].primaryinvestortype.trim(), primary_investor_type) == -1 ) {
            cond1 = false;
          }
        }
        if(preferredindustrytype_filter && cond1){
          var ind_temp = obj[i].preferredindustry.trim() + "," + obj[i].Preferred_Verticals.trim();
          var industries = ind_temp.split(",");
          if(!industries.some(item => preferrerd_industry_type.includes(item))){
            cond2 = false;
          }
        }
        if(location_filter && cond1 && cond2){
          if ( $.inArray(obj[i].where.trim(), location) == -1 ) {
            cond3 = false;
          }
        }
        if(aum_filter && cond1 && cond2 && cond3){
          if(obj[i].aum != null &&  obj[i].aum != ""){
            var aumcondition_temp = aumcondition.substring(0, aumcondition.length - 3);
            aumcondition_temp = aumcondition_temp.replace(/\X/g, obj[i].aum);
            if(!eval(aumcondition_temp)) {
              cond4 = false;
            }
          }else{
            cond4 = false;
          }
        }
        if(totalinvestments_filter && cond1 && cond2 && cond3 && cond4){
          if(obj[i].totalinvestments != null &&  obj[i].totalinvestments != ""){
            var totalInvestments_temp = totalInvestments.substring(0, totalInvestments.length - 3);
            totalInvestments_temp = totalInvestments_temp.replace(/\X/g, obj[i].totalinvestments);
            if(!eval(totalInvestments_temp)) {
              cond5 = false;
            }
          }else{
            cond5 = false;
          }
        }
        if(preferredinvestmentamount_filter && cond1 && cond2 && cond3 && cond4 && cond5){
          if(obj[i].preferredinvestmentamount != null &&  obj[i].preferredinvestmentamount != ""){
            var preferredInvestmentAmount_temp = preferredInvestmentAmount.substring(0, preferredInvestmentAmount.length - 3);
            preferredInvestmentAmount_temp = preferredInvestmentAmount_temp.replace(/\X/g, obj[i].preferredinvestmentamount);
            if(!eval(preferredInvestmentAmount_temp)) {
              cond6 = false;
            }
          }else{
            cond6 = false;
          }
        }

        if(cond1 && cond2 && cond3 && cond4 && cond5 && cond6){
          var elementData = "";
          elementData += '<div class="col-md-3 col-sm-6 investor_card pagination-item"><a href="investor-detail.php?investor='+obj[i].id+'" class="card investor-category-l-4"><div class="card-header"><span class="right-investor-batch"><span class="bookmark bookmark-investor';
          if(obj[i].favorite){
            elementData += ' bookmark-active';
          }
          elementData += '" data-id="'+obj[i].id+'"><i class="fas fa-bookmark fa-2x"></i></span></span><img src="../../dist/img/investor/1.jpg" alt="1" class="investor-images-set"></div><div class="card-body"><h6 class="card-title-heading-set">'+obj[i].name+'</h6><p class="card-text-location10"> <i class="fas fa-map-marker-alt"></i>'+obj[i].location+'</p></div></a></div>';
          $(".itemsList").append(elementData);
        }
      }
      $('.paginationList').rpmPagination({
        domElement: '.pagination-item',
        limit: 48,
      });
    }
  }
  addToSearch();
}

function addToSearch(){
  $(".selected").each(function(){
    var searchQuery = $(this).data("search");
    var searchExisting = [];
    $('.searchedItem').each(function(){
      searchExisting.push($(this).data('query'));
    })
    if ( $.inArray(searchQuery, searchExisting) == -1 ) {
      $(".searchItems").append('<span class="searchedItem" data-query="'+searchQuery+'"><span class="searchClear" onclick="clearSearch('+"'"+searchQuery+"'"+')">X</span><span class="searchText">'+searchQuery+'</span></span>');
    }
  })

  if($(".searchItems").find(".searchedItem").length > 0){
      $(".our-trans-btn").fadeIn();
  }else{
      $(".our-trans-btn").fadeOut();
  }
}


function clearSearch(remove_query){
  $('.searchable').each(function () {
    if($(this).data("search") == remove_query){
      if($(this).hasClass("selected")){
        $(this).removeClass("selected");
      }
      if($(this).data("container")){
        var elemTag = $(this).data("container");
        var categ = $("#"+elemTag).data('category');
        var counterSelected = 0;
        $('#' + categ + ' .primary_investor_sub').each(function () {
          if($(this).hasClass('selected')){
            counterSelected++;
          }
        });
        if(counterSelected == 0){
          $("#"+elemTag).click();
        }
      }
    }
  });

  $('.searchedItem').each(function () {
    if($(this).data('query') == remove_query){
      $(this).remove();
    }
  });

  applyFilter();
}


function clearFilters(){
  $(".our-trans-btn").fadeOut();
  $("#searchText").html("");
  $("#searchIndicators").val("");
  $("#searchIndicators").fadeIn(1);
  $(".searchedItem").fadeOut(1);
  $('.searchable').each(function () {
    $(this).removeClass("selected");
  });
  refreshFilters();
  showResults();
}

function refreshFilters(){
  $(".itemsList").html("");
  $('.searchItems').html('');
}

function addSeachFilter(searchQuery){
  $('.searchable').each(function () {
    if($(this).data("search") == searchQuery){
      if(!$(this).hasClass("selected")){
        $(this).addClass("selected");
      }
      if($(this).data("container")){
        var elemTag = $(this).data("container");
        $("#"+elemTag).click();
      }
    }
  });

  var searchExisting = [];
  $('.searchedItem').each(function(){
    searchExisting.push($(this).data('query'));
  })
  if ( $.inArray(searchQuery, searchExisting) == -1 ) {
    $(".searchItems").append('<span class="searchedItem" data-query="'+searchQuery+'"><span class="searchClear" onclick="clearSearch('+"'"+searchQuery+"'"+')">X</span><span class="searchText">'+searchQuery+'</span></span>');
  }
  $("#searchIndicators").val("");
  applyFilter();
}


function showResults(){
  $(".itemsList").html("");
  if(itemType == "investors"){
    for(var i = offset; i < (offset+48); i++){
      if(obj[i]){
        var elementData = "";
        elementData += '<div class="col-md-3 col-sm-6 investor_card pagination-item"><a href="investor-detail.php?investor='+obj[i].id+'" class="card investor-category-l-4"><div class="card-header"><span class="right-investor-batch"><span class="bookmark bookmark-investor';
        if(obj[i].favorite){
          elementData += ' bookmark-active';
        }
        elementData += '" data-id="'+obj[i].id+'"><i class="fas fa-bookmark fa-2x"></i></span></span><img src="../../dist/img/investor/1.jpg" alt="1" class="investor-images-set"></div><div class="card-body"><h6 class="card-title-heading-set">'+obj[i].name+'</h6><p class="card-text-location10"> <i class="fas fa-map-marker-alt"></i>'+obj[i].location+'</p></div></a></div>';
        $(".itemsList").append(elementData);
      }
    }
  }else if(itemType == "ma"){
    for(var i = offset; i < (offset+48); i++){
      if(obj[i]){
        var elementData = "";
        elementData += '<div class="col-md-3 col-sm-5 inline-block ma_card pagination-item"><div class="card mb-4 cart-custom-redious our-shadow"> <img class="card-img-top ma-img" src="../../assets/uploads/MergerAcquisition/'+obj[i].image_folder+'/'+obj[i].image+'" alt="image"> <span class="left-tag-card our-back"> '+obj[i].type+' </span> <span class="right-tag-batch"> <span class="bookmark bookmark-ma';
        if(obj[i].favorite){
          elementData += ' bookmark-active';
        }
        elementData += '" data-id="'+obj[i].id+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span><div class="d-flex flex-column justify-content-end p-2"><h5 class="card-heading text-dark"> '+obj[i].title+'</h5><p class="card-descripatoin pb-1 pt-1"> '+obj[i].description+'</p><div class="listing"> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].location+'"> <span> <i class="fas fa-map-marker-alt"></i> '+obj[i].location+' </span> </a> <a class="our-color listing-card-tag1"> <span><i class="fas fa-dollar-sign"></i> '+obj[i].value+' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].industry_visible+'"> <span><i class="fas fa-chart-pie"></i> '+obj[i].industry_visible+' </span> </a> <a class="our-color listing-card-tag1 clickable-filter" data-clickfilter="'+obj[i].category+'"> <span><i class="fas fa-chart-line"></i>'+obj[i].category+'</span> </a> <a href="ma-detail.php?ma='+obj[i].id+'" class="contact-here-sectin564"> More Info <i class="fas fa-chevron-right"></i></a></div></div></div></div>';
        $(".itemsList").append(elementData);
      }
    }
  }else if(itemType == "advisors"){
    for(var i = offset; i < (offset+48); i++){
      if(obj[i]){
        var elementData = "";
        elementData += '<div class="col-md-4 col-sm-6 pagination-item"><div class="card advisor-category-l-4"><div class="card-header"> <span class="right-investor-batch"> <span class="bookmark bookmark-advisor';
        if(obj[i].favorite){
          elementData += ' bookmark-active';
        }
        elementData += '" data-id="'+obj[i].id+'"> <i class="fas fa-bookmark fa-2x"></i> </span> </span><center> <img src="../../assets/uploads/Advisor/'+obj[i].folder_name+'/'+obj[i].profile_picture+'" alt="1" class="profile-advisor-category12"></center></div><div class="card-body"><p class="studio-commercialista"> '+obj[i].studio_name+'</p><hr><p class="studio-commercialista-second"> <i class="far fa-star"></i> '+obj[i].interests+'</p> <a href="advisor-detail.php?advisor='+obj[i].id+'" class="advisor-category-contact-34"> More Info > </a></div></div></div>';
        $(".itemsList").append(elementData);
      }
    }
  }

  $('.paginationList').rpmPagination({
    domElement: '.pagination-item',
    limit: 48,
    currentPage: currentPage,
    total: obj.length,
    link: 'index.php',
    refresh: true,
  });
}

$(document).ready(function(){
  $(".filter_search_query").on("keyup", function(){
    if($(this).val().length > 2){
      $(this).siblings(".input-group-btn").find(".btn").trigger("click");
    }else{
      $(this).siblings(".input-group-btn").find(".btn").parent().parent().parent().find(".searchable").each(function(){
        $(this).removeClass("hide_search");
      });
    }
  })
})

function searchFilter(elem){

  $(".searchable").removeClass("hide_search");
  var filter_search_query = elem.parent().parent().find(".filter_search_query").val().toLocaleLowerCase()
  if(filter_search_query != ""){
    elem.parent().parent().parent().find(".searchable").each(function(){
      if($(this).html().toLocaleLowerCase().indexOf(filter_search_query) == -1){
        $(this).addClass("hide_search");
      }
    });
  }
}
