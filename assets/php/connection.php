<?php

define('BASE_URL', 'http://localhost/UCapital/');

//DB Configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ucapital');
define('DB_PORT', '3306');

//Email Configuration
define('EMAIL_HOST', 'mail.structalpha.com');
define('EMAIL_PORT', 587);
define('EMAIL_USERNAME', 'administrator@structalpha.com');
define('EMAIL_PASSWORD', 'V%V2-C6cBWV$');
define('EMAIL_NAME', 'Ucapital');

//Google-Map API
define('MAP_API', 'AIzaSyAXtg6dVLr7xRZNCB2JZ-BrxNR8Mq0-HR4');

//Pusher Configuration
define('PUSHER_APP_ID', '1239880');
define('PUSHER_APP_KEY', '994a4a55e0cd6dbaf6e1');
define('PUSHER_APP_SECRET', 'aa457f9ce111d33fa5f9');
define('PUSHER_APP_CLUSTER', 'ap2');
define('PUSHER_APP_CHANNEL', 'UCapital-channel');
define('PUSHER_APP_EVENT', 'chat-event');

//Social APIs
//Twitter
define('TWITTER_AUTH_BEARER', 'Bearer AAAAAAAAAAAAAAAAAAAAAKI5SgEAAAAAs9Wc2Jxk%2BVMf8ehrbOx3LnCknk8%3DUw0LZzGJEN9hE8eSlChS4EbZ5k1zDgrLbIGeN7qRkmDWCLMqov');



$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)
or die("Unable to connect to the database server!");
$db = mysqli_select_db($con, DB_NAME)
or die("Unable to connect to the database server!");

$conPDO = new PDO ('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));

$feedLinks = '[
  {
    "name": "PE Hub",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.pehub.com/feed/"
  },
  {
    "name": "Private Equity International",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.privateequityinternational.com/feed/"
  },
  {
    "name": "Unquote",
    "category": "Private Equity",
    "country": "EU",
    "link": "https://www.unquote.com/feeds/rss"
  },
  {
    "name": "AltAssets Private Equity",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.altassets.net/feed"
  },
  {
    "name": "Private Equity News",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.penews.com/rss/?x=1"
  },
  {
    "name": "Private Equity Professional ",
    "category": "Private Equity",
    "country": "US",
    "link": "https://peprofessional.com/feed/"
  },
  {
    "name": "The New York Times",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.nytimes.com/svc/collections/v1/publish/http://www.nytimes.com/topic/subject/private-equity/rss.xml"
  },
  {
    "name": "The Guardian",
    "category": "Private Equity",
    "country": "US",
    "link": "https://www.theguardian.com/business/privateequity/rss",
    "logo": "guardian.png"
  },
  {
    "name": "TechCrunch",
    "category": "Private Equity",
    "country": "US",
    "link": "https://techcrunch.com/tag/private-equity/feed/?guccounter=1&guce_referrer=aHR0cHM6Ly9ibG9nLmZlZWRzcG90LmNvbS8&guce_referrer_sig=AQAAAAhcfEL9xG4_5oNO9VhFsSiJNLXvXc2YJhdN0ts-H7Noew7c0_7PRrNGbti026ASwD1yD0uFOu0DugZ8_eA144eHcrpuygC30hFHieFbK_oH1RAOg3-TNJNYhGKDqaFjZFNT9nHJnOqAvKuwGDE85gB32y4HX5BWEPQVCENbbQMu"
  },
  {
    "name": "Private Equity Insights",
    "category": "Private Equity",
    "country": "US",
    "link": "https://pe-insights.com/feed/"
  },
  {
    "name": "Private Equity Wire",
    "category": "Private Equity",
    "country": "UK",
    "link": "https://www.privateequitywire.co.uk/dailynews.xml"
  },
  {
    "name": "Private Equity Info",
    "category": "Private Equity",
    "country": "US",
    "link": "https://blog.privateequityinfo.com/index.php/feed/"
  },
  {
    "name": "Invest Europe",
    "category": "Private Equity",
    "country": "EU",
    "link": "https://www.investeurope.eu/rss"
  },
  {
    "name": "Entreprenerur",
    "category": "Venture Capital",
    "country": "Europe",
    "link": "https://www.entrepreneur.com/topic/venture-capital.rss"
  },
  {
    "name": "NVCA",
    "category": "Venture Capital",
    "country": "US",
    "link": "https://nvca.org/feed/"
  },
  {
    "name": "Growth Business",
    "category": "Venture Capital",
    "country": "UK",
    "link": "https://www.growthbusiness.co.uk/funding/venture-capital/feed/"
  },
  {
    "name": "Playfair Capital",
    "category": "Venture Capital",
    "country": "UK",
    "link": "https://medium.com/feed/playfair-capital-blog"
  },
  {
    "name": "Venture Capital Journal",
    "category": "Venture Capital",
    "country": "US",
    "link": "https://www.venturecapitaljournal.com/feed/"
  },
  {
    "name": "Sifted",
    "category": "Venture Capital",
    "country": "Europe",
    "link": "https://sifted.eu/feed/?post_type=article"
  },
  {
    "name": "Money Control",
    "category": "IPO",
    "country": "US",
    "link": "https://www.moneycontrol.com/rss/iponews.xml"
  },
  {
    "name": "Seeking Alpha",
    "category": "IPO",
    "country": "US",
    "link": "https://seekingalpha.com/tag/ipo-analysis.xml"
  },
  {
    "name": "The Economic Times",
    "category": "IPO",
    "country": "India",
    "link": "https://economictimes.indiatimes.com/markets/ipos/fpos/rssfeeds/14655708.cms"
  },
  {
    "name": "Kalkine Media",
    "category": "IPO",
    "country": "Australia",
    "link": "https://kalkinemedia.com/au/news/feed"
  },
  {
    "name": "RTTNews ",
    "category": "IPO",
    "country": "US",
    "link": "https://www.rttnews.com/RSS/IPO.xml"
  },
  {
    "name": "ClickIPO",
    "category": "IPO",
    "country": "US",
    "link": "https://clickipo.com/blog/feed/"
  },
  {
    "name": "CNBC",
    "category": "IPO",
    "country": "US",
    "link": "https://www.cnbc.com/id/10000666/device/rss"
  },
  {
    "name": "IPO Central",
    "category": "IPO",
    "country": "US",
    "link": "https://ipocentral.in/feed/"
  },
  {
    "name": "invezz",
    "category": "IPO",
    "country": "Italia",
    "link": "https://invezz.com/it/notizie/azioni/ipo/feed/"
  },
  {
    "name": "IPO Group",
    "category": "IPO",
    "country": "USA",
    "link": "http://www.ipoguru.in/feed/"
  },
  {
    "name": "Entrepreneur",
    "category": "IPO",
    "country": "USA",
    "link": "https://www.entrepreneur.com/topic/ipo.rss"
  },
  {
    "name": "Nasdaq",
    "category": "IPO",
    "country": "USA",
    "link": "https://www.nasdaq.com/feed/rssoutbound?category=IPOs"
  },
  {
    "name": "Reuters",
    "category": "M&A",
    "country": "UKNWN",
    "link": "https://www.reutersagency.com/feed/?best-topics=deals&post_type=best"
  },
  {
    "name": "The New York Times",
    "category": "M&A",
    "country": "US",
    "link": "https://www.nytimes.com/svc/collections/v1/publish/http://www.nytimes.com/topic/subject/mergers-acquisitions-and-divestitures/rss.xml"
  },
  {
    "name": "The Guardian",
    "category": "M&A",
    "country": "UK",
    "link": "https://www.theguardian.com/business/mergers-and-acquisitions/rss"
  },
  {
    "name": "Deal Room",
    "category": "M&A",
    "country": "US",
    "link": "https://dealroom.net/blog/rss.xml"
  },
  {
    "name": "PRWeb",
    "category": "M&A",
    "country": "UKNWN",
    "link": "https://www.prweb.com/rss.htm"
  },
  {
    "name": "The Economic Times",
    "category": "Real Estate",
    "country": "India",
    "link": "https://economictimes.indiatimes.com/wealth/real-estate/rssfeeds/48997582.cms"
  },
  {
    "name": "The New york times",
    "category": "Real Estate",
    "country": "US",
    "link": "https://rss.nytimes.com/services/xml/rss/nyt/RealEstate.xml"
  },
  {
    "name": "Zillow Porchlight RSS Feed",
    "category": "Real Estate",
    "country": "UKNWN",
    "link": "https://www.zillow.com/blog/feed/"
  },
  {
    "name": "Redfine",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.redfin.com/blog/feed/"
  },
  {
    "name": "Realestate.com.au",
    "category": "Real Estate",
    "country": "Australia",
    "link": "https://www.realestate.com.au/news/feed/"
  },
  {
    "name": "The New York Times",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.nytimes.com/svc/collections/v1/publish/https://www.nytimes.com/section/realestate/rss.xml"
  },
  {
    "name": "CNBC",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.cnbc.com/id/10000115/device/rss"
  },
  {
    "name": "Forbes",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.forbes.com/real-estate/feed/"
  },
  {
    "name": "Los Angeles Times",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.latimes.com/business/realestate/rss2.0.xml"
  },
  {
    "name": "Europe Real Estate",
    "category": "Real Estate",
    "country": "EU",
    "link": "https://europe-re.com/rss-feed/news/"
  },
  {
    "name": "Huffinton post",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.huffpost.com/topic/real-estate/feed"
  },
  {
    "name": "Zillow Porchlight RSS Feed",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.zillow.com/blog/feed/"
  },
  {
    "name": "Trulia\"s blog",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.trulia.com/blog/feed/"
  },
  {
    "name": "Property Week",
    "category": "Real Estate",
    "country": "UK",
    "link": "https://www.propertyweek.com/8871.rss"
  },
  {
    "name": "Realtor",
    "category": "Real Estate",
    "country": "US",
    "link": "https://www.realtor.com/news/feed/"
  }
]';


define('FEED_LINKS', json_encode($feedLinks));

?>
