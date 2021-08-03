<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $pageIndex = "";
  if(isset($_GET['category']) && isset($_GET['feedurl']) && isset($_GET['posttitle'])){
    $category = $_GET['category'];
    $pageIndex = $category;
    $feedurl = $_GET['feedurl'];
    $posttitle = $_GET['posttitle'];

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


var d = new Date();
d.setMonth(d.getMonth() - 1);
d.setHours(0, 0, 0, 0);
var timestamp_1m = d/1000|0;

var feeddata = [];

GetFeeds();

function GetFeeds(){
  var urls = [
    {name:'',category:'<?=$category; ?>',country:'',link:'<?=$feedurl; ?>',},
  ];



  var counter = 0;
  var sizej = urls.length;

  urls.forEach(function(Query){

    $.get(Query.link, function (data) {
      $(data).find("item").each(function () {
        var el = $(this);

        var content_image = el.find("image").find("url").text();
        var content_description = el.find("description").text();
        var is_insight = false;
        var img_type = 1;
        if(!content_image){
          content_image = content_description.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/);
          img_type = 2;
          if(!content_image){
            content_image = "";
            img_type = 0;
          }
        }
        content_description = content_description.replace(/<img[^>]*>/,"");
        if(content_description.length > 5000){
          is_insight = true;
        }

        var pubDate = el.find("pubDate").text();
        var content_timestamp = new Date(pubDate).getTime() / 1000;

        if(content_timestamp > timestamp_1m){
          var content = {
            title: el.find("title").text(),
            description: content_description,
            image: content_image,
            pubDate: pubDate,
            url: Query.link,
            name: Query.name,
            category: Query.category,
            country: Query.country,
            link: el.find("link").text() ? el.find("link").text() : "",
            timestamp: content_timestamp,
            img_type: img_type,
            is_insight: is_insight
          }
          feeddata.push(content);
        }
      });

      showNews(feeddata)
    }).fail(function() {
      console.log("ERROR!!")
    });

  });
}

function showNews(feeddata){
  var carousel_counter = 0;
  var insight_counter = 0;
  feeddata.sort(function(a, b) {
    return parseFloat(b.timestamp) - parseFloat(a.timestamp);
  });
    feeddata.forEach(function(newsfeed){
      if('<?=$posttitle; ?>' == newsfeed.title){
        if(newsfeed.img_type == 2){
          $(".feed_head_image").attr("src", newsfeed.image[1]);
        }else if(newsfeed.img_type == 1){
          $(".feed_head_image").attr("src", newsfeed.image);
        }else{
          $(".feed_head_image").attr("src", "../../dist/img/news.png");
        }

        $(".feed_title").html(newsfeed.title);
        $(".feed_description").html(newsfeed.description);
        $(".feed_timestamp").html(newsfeed.pubDate);
        if(newsfeed.link != ""){
          $(".readmoreLink").attr("href", newsfeed.link);
        }else{
          $(".readmoreLink").remove();
        }
      }else{
        if(newsfeed.img_type == 2){
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image[1]+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }else if(newsfeed.img_type == 1){
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }else{
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
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
