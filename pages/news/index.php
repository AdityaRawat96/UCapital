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
        <a href="?index=VC"><span class="news_category_tabs">VC</span></a>
        <a href="?index=IPO"><span class="news_category_tabs">IPO</span></a>
        <a href="?index=M%26A"><span class="news_category_tabs">M&A</span></a>
        <a href="?index=RE"><span class="news_category_tabs">RE</span></a>
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

    </div><!-- container-fluid -->
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->

<?php

include '../elements/footer.php';
?>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>

<script type="text/javascript">

if('<?=$pageIndex; ?>' != ""){
  var feed_tabs = document.getElementsByClassName("news_category_tabs");
  for(tabs in feed_tabs){
    if(feed_tabs[tabs].innerHTML != undefined){
      feed_tabs[tabs].classList.remove("active");
      if(feed_tabs[tabs].innerHTML == '<?=$pageIndex; ?>'){
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
    {name:'PE Hub',category:'Private Equity',country:'US',link:'https://www.pehub.com/feed/',},
    {name:'Private Equity International',category:'Private equity',country:'US',link:'https://www.privateequityinternational.com/feed/',},
    {name:'Unquote',category:'Private Equity',country:'EU',link:'https://www.unquote.com/feeds/rss',},
    {name:'AltAssets Private Equity',category:'Private Equity',country:'US',link:'https://www.altassets.net/feed',},
    {name:'Private Equity News',category:'Private Equity',country:'US',link:'https://www.penews.com/rss/?x=1',},
    {name:'Private Equity Professional ',category:'Private Equity',country:'US',link:'https://peprofessional.com/feed/',},
    {name:'The New York Times',category:'Private Equity',country:'US',link:'https://www.nytimes.com/svc/collections/v1/publish/http://www.nytimes.com/topic/subject/private-equity/rss.xml',},
    {name:'The Guardian',category:'Private Equity',country:'US',link:'https://www.theguardian.com/business/privateequity/rss',},
    {name:'TechCrunch',category:'Private Equity',country:'US',link:'https://techcrunch.com/tag/private-equity/feed/?guccounter=1&guce_referrer=aHR0cHM6Ly9ibG9nLmZlZWRzcG90LmNvbS8&guce_referrer_sig=AQAAAAhcfEL9xG4_5oNO9VhFsSiJNLXvXc2YJhdN0ts-H7Noew7c0_7PRrNGbti026ASwD1yD0uFOu0DugZ8_eA144eHcrpuygC30hFHieFbK_oH1RAOg3-TNJNYhGKDqaFjZFNT9nHJnOqAvKuwGDE85gB32y4HX5BWEPQVCENbbQMu',},
    {name:'Private Equity Insights',category:'Private Equity',country:'US',link:'https://pe-insights.com/feed/',},
    {name:'Private Equity Wire',category:'Private Equity',country:'UK',link:'https://www.privateequitywire.co.uk/dailynews.xml',},
    {name:'Private Equity Info',category:'Private Equity',country:'US',link:'https://blog.privateequityinfo.com/index.php/feed/',},
    {name:'Invest Europe',category:'Private Equity',country:'EU',link:'https://www.investeurope.eu/rss',},
    {name:'Entreprenerur',category:'VC',country:'Europe',link:'https://www.entrepreneur.com/topic/venture-capital.rss',},
    {name:'NVCA',category:'VC',country:'US',link:'https://nvca.org/feed/',},
    {name:'Growth Business',category:'VC',country:'UK',link:'https://www.growthbusiness.co.uk/funding/venture-capital/feed/',},
    {name:'Playfair Capital',category:'VC',country:'UK',link:'https://medium.com/feed/playfair-capital-blog',},
    {name:'Venture Capital Journal',category:'VC',country:'US',link:'https://www.venturecapitaljournal.com/feed/',},
    {name:'Sifted',category:'VC',country:'Europe',link:'https://sifted.eu/feed/?post_type=article',},
    {name:'Money Control',category:'IPO',country:'US',link:'https://www.moneycontrol.com/rss/iponews.xml',},
    {name:'Seeking Alpha',category:'IPO',country:'US',link:'https://seekingalpha.com/tag/ipo-analysis.xml',},
    {name:'The Economic Times',category:'IPO',country:'India',link:'https://economictimes.indiatimes.com/markets/ipos/fpos/rssfeeds/14655708.cms',},
    {name:'Kalkine Media',category:'IPO',country:'Australia',link:'https://kalkinemedia.com/au/news/feed',},
    {name:'RTTNews ',category:'IPO',country:'US',link:'https://www.rttnews.com/RSS/IPO.xml',},
    {name:'ClickIPO',category:'IPO',country:'US',link:'https://clickipo.com/blog/feed/',},
    {name:'CNBC',category:'IPO',country:'US',link:'https://www.cnbc.com/id/10000666/device/rss',},
    {name:'IPO Central',category:'IPO',country:'US',link:'https://ipocentral.in/feed/',},
    {name:'invezz',category:'IPO',country:'Italia',link:'https://invezz.com/it/notizie/azioni/ipo/feed/',},
    {name:'IPO Group',category:'IPO',country:'USA',link:'http://www.ipoguru.in/feed/',},
    {name:'Entrepreneur',category:'IPO',country:'USA',link:'https://www.entrepreneur.com/topic/ipo.rss',},
    {name:'Nasdaq',category:'IPO',country:'USA',link:'https://www.nasdaq.com/feed/rssoutbound?category=IPOs',},
    {name:'Reuters',category:'M&A',country:'UKNWN',link:'https://www.reutersagency.com/feed/?best-topics=deals&post_type=best',},
    {name:'The New York Times',category:'M&A',country:'US',link:'https://www.nytimes.com/svc/collections/v1/publish/http://www.nytimes.com/topic/subject/mergers-acquisitions-and-divestitures/rss.xml',},
    {name:'The Guardian',category:'M&A',country:'UK',link:'https://www.theguardian.com/business/mergers-and-acquisitions/rss',},
    {name:'Deal Room',category:'M&A',country:'US',link:'https://dealroom.net/blog/rss.xml',},
    {name:'PRWeb',category:'M&A',country:'UKNWN',link:'https://www.prweb.com/rss.htm',},
    {name:'The Economic Times',category:'RE',country:'India',link:'https://economictimes.indiatimes.com/wealth/real-estate/rssfeeds/48997582.cms',},
    {name:'The New york times',category:'RE',country:'US',link:'https://rss.nytimes.com/services/xml/rss/nyt/RealEstate.xml',},
    {name:'Zillow Porchlight RSS Feed',category:'RE',country:'UKNWN',link:'https://www.zillow.com/blog/feed/',},
    {name:'Redfine',category:'RE',country:'US',link:'https://www.redfin.com/blog/feed/',},
    {name:'Realestate.com.au',category:'RE',country:'Australia',link:'https://www.realestate.com.au/news/feed/',},
    {name:'The New York Times',category:'RE',country:'US',link:'https://www.nytimes.com/svc/collections/v1/publish/https://www.nytimes.com/section/realestate/rss.xml',},
    {name:'CNBC',category:'RE',country:'US',link:'https://www.cnbc.com/id/10000115/device/rss',},
    {name:'Forbes',category:'RE',country:'US',link:'https://www.forbes.com/real-estate/feed/',},
    {name:'Los Angeles Times',category:'RE',country:'US',link:'https://www.latimes.com/business/realestate/rss2.0.xml',},
    {name:'Europe Real Estate',category:'RE',country:'EU',link:'https://europe-re.com/rss-feed/news/',},
    {name:'Huffinton post',category:'RE',country:'US',link:'https://www.huffpost.com/topic/real-estate/feed',},
    {name:'Zillow Porchlight RSS Feed',category:'RE',country:'US',link:'https://www.zillow.com/blog/feed/',},
    {name:'Trulia\'s blog',category:'RE',country:'US',link:'https://www.trulia.com/blog/feed/',},
    {name:'Property Week',category:'RE',country:'UK',link:'https://www.propertyweek.com/8871.rss',},
    {name:'Realtor',category:'RE',country:'US',link:'https://www.realtor.com/news/feed/',},

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
            timestamp: content_timestamp,
            img_type: img_type,
            is_insight: is_insight
          }
          feeddata.push(content);
        }
      });

      counter++;
      if(counter == sizej-1){
        showNews(feeddata)
      }
    }).fail(function() {
      counter++;
      if(counter == sizej-1){
        showNews(feeddata)
      }
    });

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
      if(newsfeed.is_insight){
        insight_counter++;
        if(newsfeed.img_type == 2){
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image[1]+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
        }else if(newsfeed.img_type == 1){
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
        }else{
          $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
        }
      }else{
        if(newsfeed.img_type == 2){
          $(".carousel-inner").append('<div class="carousel-item" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image[1]+'" alt="feed image" class="img-fluid"><div class="carousel-caption"><h3>'+newsfeed.title+'</h3></div></div>')
          $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="'+carousel_counter+'"></li>');
          carousel_counter++;
        }else if(newsfeed.img_type == 1){
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }else{
          $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
        }
      }

    });
  }else{
    feeddata.forEach(function(newsfeed){
      if('<?=$pageIndex; ?>' == newsfeed.category){
        if(newsfeed.is_insight){
          insight_counter++;
          if(newsfeed.img_type == 2){
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image[1]+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
          }else if(newsfeed.img_type == 1){
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
          }else{
            $(".insight_news_container").append('<div class="col-md-6 col-sm-12 insight_news_feed" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid"><span class="insight_news_feed_text">'+newsfeed.title+'</span><br><small>'+newsfeed.pubDate+'</small></div>');
          }
        }else{
          if(newsfeed.img_type == 2){
            $(".carousel-inner").append('<div class="carousel-item" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image[1]+'" alt="feed image" class="img-fluid"><div class="carousel-caption"><h3>'+newsfeed.title+'</h3></div></div>')
            $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="'+carousel_counter+'"></li>');
            carousel_counter++;
          }else if(newsfeed.img_type == 1){
            $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="'+newsfeed.image+'" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
          }else{
            $(".latest_news_container").append('<div class="pagination-item latest_news_feed col-md-6 col-sm-12" onclick="feed_detail('+"'"+'news.php?category='+encodeURIComponent(newsfeed.category)+'&feedurl='+encodeURIComponent(newsfeed.url)+'&posttitle='+encodeURIComponent(newsfeed.title)+"'"+')"><img src="../../dist/img/news.png" alt="" class="img-fluid latest_news_feed_image"><div class="latest_news_feed_content"><span class="news_feed_category">'+newsfeed.category+'</span><br><small>'+newsfeed.pubDate+'</small><br><span class="latest_news_text">'+newsfeed.title+'</span></div></div>')
          }
        }
      }
    });
  }

  if(carousel_counter == 0){
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

  if(insight_counter == 0){
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
