<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $pageIndex = "";
  if(isset($_GET['id'])){
    $feed_id = $_GET['id'];

    ?>

    <div class="news_loader">
      <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
        <animateTransform
        attributeName="transform"
        attributeType="XML"
        type="rotate"
        dur="1s"
        from="0 50 50"
        to="360 50 50"
        repeatCount="indefinite" />
      </path>
    </svg>
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- content-header -->



    <section class="content">
      <div class="container-fluid">
        <br>
        <div class="news_category">
          <a href="index.php?index="><span class="news_category_tabs active">All</span></a>
          <a href="index.php?index=Private Equity"><span class="news_category_tabs">Private Equity</span></a>
          <a href="index.php?index=Venture Capital"><span class="news_category_tabs">Venture Capital</span></a>
          <a href="index.php?index=IPO"><span class="news_category_tabs">IPO</span></a>
          <a href="index.php?index=M%26A"><span class="news_category_tabs">M&A</span></a>
          <a href="index.php?index=Real Estate"><span class="news_category_tabs">Real Estate</span></a>
        </div><hr>

        <div class="content_">
          <div class="row">
            <div class="col-12">
              <img src="" alt="" class="feed_head_image"><br><br>
              <h3 class="feed_title"></h3><br>
              <small class="feed_timestamp"></small><br>
              <div class="feed_description">
              </div><br>
              <a href="#" class="readmoreLink" target="_blank">
                <button type="button" name="button" class="our-back-btn commercialista-contact-btn">Read More</button>
              </a>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-12">
              <h3>Related News</h3><br>
            </div>
          </div>
          <div class="row">
            <div class="latest_news_container row col-12">

            </div>
          </div><br><br>
          <div class="row">
            <center>
              <ul class="pagination paginationList">
              </ul>
            </center>
          </div><br><br>
        </div>

      </div><!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->

  <?php

}


include '../elements/footer.php';
?>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>

<script type="text/javascript">

var feed_id = '<?=$feed_id; ?>';

if('<?=$pageIndex; ?>' != ""){
  console.log('<?=$pageIndex; ?>')
  var feed_tabs = document.getElementsByClassName("news_category_tabs");
  for(tabs in feed_tabs){
    if(feed_tabs[tabs].innerHTML != undefined){
      feed_tabs[tabs].classList.remove("active");
      if(feed_tabs[tabs].innerHTML.replace("&amp;", "&") == '<?=$pageIndex; ?>'){
        feed_tabs[tabs].classList.add("active");
      }
    }
  }

}

GetFeeds();

function urlExists(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      callback(xhr.status < 400);
    }
  };
  xhr.open('HEAD', url);
  xhr.send();
}

function GetFeeds(){
  $.ajax({
    type: 'POST',
    url: "../../assets/php/getFeed.php",
    data: {
      feed_id: feed_id
    },
    success: function(data) {
      obj = jQuery.parseJSON(data);
      showNews(obj)
    }
  });
}

function showNews(feeddata){

  feeddata.forEach(function(newsfeed){
    if(newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)){
      newsfeed.image = newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)[1];
    }
    if(newsfeed.id == feed_id){
      if(newsfeed.img_type == 2){
        $(".feed_head_image").attr("src", newsfeed.image);
      }else if(newsfeed.img_type == 1){
        $(".feed_head_image").attr("src", newsfeed.image);
      }else{
        $(".feed_head_image").attr("src", "../../dist/img/news.png");
      }

      $(".feed_title").html(newsfeed.title);
      $(".feed_description").html(newsfeed.description);
      $(".feed_timestamp").html(newsfeed.pubDate);
      if(newsfeed.url){
        urlExists(newsfeed.url, function(exists) {
          if(exists){
            $(".readmoreLink").attr("href", newsfeed.url);
          }else{
            $(".readmoreLink").remove();
          }
        });
      }else{
        $(".readmoreLink").remove();
      }
    }else{

      if(newsfeed.img_type == 2){
        $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
      }else if(newsfeed.img_type == 1){
        $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
      }else{
        $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
      }
    }
  });

  $('.paginationList').rpmPagination({
    domElement: '.pagination-item',
    limit: 10,
  });
  $(".news_loader").fadeOut();
  $(".content_").fadeIn();

}

function feed_detail(feedurl){
  location.href = feedurl;
}


</script>
<?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
