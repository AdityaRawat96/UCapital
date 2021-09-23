<?php
session_start();
if(isset($_SESSION['email'])){
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';

  $pageIndex = "";
  if(isset($_GET['index'])){
    $pageIndex = $_GET['index'];
  }

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
        <a href="?index="><span class="news_category_tabs active">All</span></a>
        <a href="?index=Private Equity"><span class="news_category_tabs">Private Equity</span></a>
        <a href="?index=Venture Capital"><span class="news_category_tabs">Venture Capital</span></a>
        <a href="?index=IPO"><span class="news_category_tabs">IPO</span></a>
        <a href="?index=M%26A"><span class="news_category_tabs">M&A</span></a>
        <a href="?index=Real Estate"><span class="news_category_tabs">Real Estate</span></a>
      </div><hr>

      <div class="content_">
        <div class="row">
          <div class="col-md-6 col-sm-12 carousel_news_section">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
              </ul>
              <div class="carousel-inner">

              </div>
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 insight_news_section">
            <div class="row">
              <div class="col-12">
                <h3>Insight News</h3>
              </div>
            </div>
            <div class="row insight_news_container">

            </div>
          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-8 col-sm-12 news_container">
            <div class="row">
              <div class="col-12">
                <h3>Latest News</h3><br>
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
          <div class="col-md-4 col-sm-12 tweets_container">
            <div class="row">
              <div class="col-12">
                <h3>Latest Tweets</h3><br>
              </div>
              <div class="col-12">
                <div class="row related_tweet_container">

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

<?php

include '../elements/footer.php';
?>

<style media="screen">

.avator {
  border-radius:100px;
  width:48px;
  margin-right: 15px;
}

.tweet-wrap {
  width:100%;
  background: #fff;
  margin: 5px 0px;
  border-radius:3px;
  padding: 30px;
  border-bottom: 1px solid #e6ecf0;
  border-top: 1px solid #e6ecf0;
}

.tweet-header {
  display: flex;
  align-items:flex-start;
  font-size:14px;
}
.tweet-header-info {
  font-weight:bold;
}
.tweet-header-info span {
  color:#657786;
  font-weight:normal;
  margin-left: 5px;
}
.tweet-header-info p {
  font-weight:normal;
  margin-top: 5px;

}
.tweet-img-wrap {
  padding-left: 60px;
}

.tweet-info-counts {
  display: flex;
  margin-left: 60px;
  margin-top: 10px;
}
.tweet-info-counts div {
  display: flex;
  margin-right: 20px;
}
.tweet-info-counts div svg {
  color:#657786;
  margin: 0px;
  margin-right: 10px;
  width: 20px;
  height: 20px;
}
.related_tweet_container a{
  text-decoration: none;
  color: black;
}
@media screen and (max-width:430px){
  .tweet-header {
    flex-direction:column;
  }
  .tweet-header img {
    margin-bottom: 20px;
  }
  .tweet-header-info p {
    margin-bottom: 30px;
  }
  .tweet-img-wrap {
    padding-left: 0;
  }
  .tweet-info-counts {
    display: flex;
    margin-left: 0;
  }
  .tweet-info-counts div {
    margin-right: 10px;
  }
}
</style>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>

<script type="text/javascript">

if('<?=$pageIndex; ?>' != ""){
  var feed_tabs = document.getElementsByClassName("news_category_tabs");
  for(tabs in feed_tabs){
    if(feed_tabs[tabs].innerHTML != undefined){
      feed_tabs[tabs].classList.remove("active");
      if(feed_tabs[tabs].innerHTML.replace("&amp;", "&") == '<?=$pageIndex; ?>'){
        feed_tabs[tabs].classList.add("active");
      }
    }
  }

  var tweet_query = ('<?=$pageIndex; ?>').replaceAll(" ", "");
  if(tweet_query == "M&A"){
    tweet_query = "mergerandacquisition"
  }

  $.ajax({
    type: 'GET',
    url: '../../assets/php/getTweets.php',
    data: {
      search_query : tweet_query,
    },
    success: function(response) {
      if(response != null && response != "failed"){
        var obj = JSON.parse(response)
        var tweet_users = obj.includes.users;
        var tweets = obj.data;

        for(tweet in tweets){
          for(users in tweet_users){
            if(tweet_users[users].id == tweets[tweet].author_id){
              var tweet_public_metrics = tweets[tweet].public_metrics;
              var tweet_timestamp = tweets[tweet].created_at;
              var profile_image_url = tweet_users[users].profile_image_url ? tweet_users[users].profile_image_url : "../../dist/img/avatar0.png"

              $(".related_tweet_container").append('<div class="col-sm-12"><a href="https://twitter.com/'+tweet_users[users].username+'/status/'+tweets[tweet].id+'" target="_blank"><div class="tweet-wrap"> <div class="tweet-header"> <img src="'+profile_image_url+'" alt="" class="avator"> <div class="tweet-header-info"> '+tweet_users[users].name+' <span>@'+tweet_users[users].username+'</span><span>. '+tweet_timestamp+' </span> <p>'+tweets[tweet].text+'</p></div></div><div class="tweet-img-wrap"> </div><div class="tweet-info-counts"> <div class="comments"> <svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> <div class="comment-count">'+tweet_public_metrics.reply_count+'</div></div><div class="retweets"> <svg class="feather feather-repeat sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg> <div class="retweet-count">'+tweet_public_metrics.retweet_count+'</div></div><div class="likes"> <svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> <div class="likes-count"> '+tweet_public_metrics.like_count+' </div></div></div></div></a></div>');

              break;
            }
          }

        }
      }
    }
  });
  $(".tweets_container").removeClass("containerHidden");
  $(".news_container").removeClass("col-md-12");
  $(".news_container").addClass("col-md-8");
}else{
  $(".tweets_container").addClass("containerHidden");
  $(".news_container").removeClass("col-md-8");
  $(".news_container").addClass("col-md-12");
}


var d = new Date();
d.setMonth(d.getMonth() - 1);
d.setHours(0, 0, 0, 0);
var timestamp_1m = d/1000|0;

var feeddata = [];

GetFeeds();

function GetFeeds(){
  $.ajax({
    type: 'POST',
    url: "../../assets/php/getNewsFeed.php",
    success: function(data) {
      obj = jQuery.parseJSON(data);
      showNews(obj)
    }
  });

}

function showNews(feeddata){
  var carousel_counter = 0;
  var insight_counter = 0;
  feeddata.sort(function(a, b) {
    return parseFloat(b.timestamp) - parseFloat(a.timestamp);
  });
  if('<?=$pageIndex; ?>' == ""){
    feeddata.forEach(function(newsfeed){
      if(newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)){
        newsfeed.image = newsfeed.image.match(/<img[^>]+src="?([^"\s]+)"?\s*\/>/)[1];
      }
      if(newsfeed.is_insight == 1){
        insight_counter++;
        if(newsfeed.img_type == 2){
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
        }else if(newsfeed.img_type == 1){
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
        }else{
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
        }
      }else{
        if(newsfeed.img_type == 2){
          $(".carousel-inner").append('<div class="carousel-item" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="feed image" class="img-fluid"><div class="carousel-caption"><h3>'+newsfeed.title+'</h3></div></div>')
          $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="'+carousel_counter+'"></li>');
          carousel_counter++;
        }else if(newsfeed.img_type == 1){
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }else{
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'"  alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }
      }

    });
  }else{
    feeddata.forEach(function(newsfeed){
      if('<?=$pageIndex; ?>' == newsfeed.category){
        if(newsfeed.is_insight == 1){
          insight_counter++;
          if(newsfeed.img_type == 2){
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
          }else if(newsfeed.img_type == 1){
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
          }else{
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'"  alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small></div>');
          }
        }else{
          if(newsfeed.img_type == 2){
            $(".carousel-inner").append('<div class="carousel-item" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="feed image" class="img-fluid"><div class="carousel-caption"><h3>'+newsfeed.title+'</h3></div></div>')
            $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="'+carousel_counter+'"></li>');
            carousel_counter++;
          }else if(newsfeed.img_type == 1){
            $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
          }else{
            $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?id='+newsfeed.id+"'"+')"><img src="'+newsfeed.image+'"  alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+new Date(newsfeed.feed_timestamp*100)+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
          }
        }
      }
    });
  }

  if(carousel_counter == 0 || !('<?=$pageIndex; ?>' == "" || '<?=$pageIndex; ?>' == "all")){
    $(".carousel_news_section").remove();
    $(".insight_news_section").removeClass("col-md-6");
    var insight_feeds = document.getElementsByClassName('insight_news_feed');
    for(var indexfeed = 0; indexfeed < insight_feeds.length; indexfeed++){
      insight_feeds[indexfeed].classList.remove('col-md-6');
      insight_feeds[indexfeed].classList.add('col-md-3');
    }
  }else{
    $('.carousel-item').first().addClass('active');
    $('.carousel-indicators > li').first().addClass('active');
    $('#myCarousel').carousel();
  }

  if(insight_counter == 0 || !('<?=$pageIndex; ?>' == "" || '<?=$pageIndex; ?>' == "all")){
    $(".insight_news_section").remove();
    $(".carousel_news_section").removeClass("col-md-6");
  }


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
