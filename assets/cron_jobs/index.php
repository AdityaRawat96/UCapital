<?php
error_reporting(E_ALL ^ E_WARNING);

include '../php/connection.php';

$feed_array = array();
$index = 0;

$feed_data = json_decode(FEED_LINKS, true);
$feed_data = json_decode($feed_data, true);

$snapTime = time();
$one_month_before_timestamp = $snapTime - ((60*60*24*30) - 120);

$node_count = count($feed_data);
$curl_arr = array();
$master = curl_multi_init();

$category_array = array();

for($i = 0; $i < $node_count; $i++){
  $category = (object) array();
  $category->name = $feed_data[$i]["category"];
  $category->timestamp = $one_month_before_timestamp;
  $category->count = 0;
  if (!in_array($category, $category_array)){
    array_push($category_array, $category);
  }
  unset($category);

  $url = $feed_data[$i]["link"];
  $curl_arr[$i] = curl_init($url);
  curl_setopt($curl_arr[$i], CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl_arr[$i], CURLOPT_HEADER, 0);
  curl_multi_add_handle($master, $curl_arr[$i]);
}

foreach ($category_array as $category) {
  $result= mysqli_query($con, "SELECT category, COUNT(*) AS count, MAX(feed_timestamp) As max FROM news_feeds GROUP BY category")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
  if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){
      $category_item = getCategory($row["category"]);
      $category_item->timestamp = (int) $row["max"];
      $category_item->count = (int) $row["count"];
    }
  }
}

do {
  curl_multi_exec($master,$running);
} while($running > 0);

echo "Results: <br>";

for($i = 0; $i < $node_count; $i++)
{
  $results = curl_multi_getcontent($curl_arr[$i]);
  try {
    $doc = new SimpleXmlElement($results, LIBXML_NOCDATA);
  } catch (\Exception $e) {
    echo "error <br>";
  }

  if(isset($doc->channel)){
    parseRSS($doc, $feed_data[$i]);
  }
  if(isset($doc->entry)){
    parseAtom($doc, $feed_data[$i]);
  }
}

echo 'Done <br>';

foreach ($feed_array as $feed) {
  $db_title = $feed->title;
  $db_description = $feed->description;
  $db_image = $feed->image;
  $db_url = $feed->url;
  $db_name = $feed->name;
  $db_category = $feed->category;
  $db_country = $feed->country;
  $db_img_type = $feed->img_type;
  $db_is_insight = $feed->is_insight ? $feed->is_insight : 0;
  $db_feed_timestamp = $feed->feed_timestamp;
  $sql_insert = "INSERT INTO news_feeds (
    title,
    description,
    image,
    url,
    name,
    category,
    country,
    img_type,
    is_insight,
    feed_timestamp
  ) VALUES (
    '$db_title',
    '$db_description',
    '$db_image',
    '$db_url',
    '$db_name',
    '$db_category',
    '$db_country',
    '$db_img_type',
    '$db_is_insight',
    '$db_feed_timestamp'
  )";
  $con->query($sql_insert);
}


foreach ($category_array as $category_item) {
  if($category_item->count > 100){
    $item_remove = $category_item->count - 100;
    $delete_sql = "DELETE
    FROM news_feeds
    WHERE category = '$category_item->name'
    ORDER BY feed_timestamp ASC
    LIMIT $item_remove";
    if(!$con->query($delete_sql)){
      echo mysqli_error($con);
    }
  }
}


function parseRSS($xml, $feed_details){
  global $index;
  global $feed_array;
  global $con;
  global $one_month_before_timestamp;
  $cnt = count($xml->channel->item);
  for($i=0; $i<$cnt; $i++){

    $pubDate = $xml->channel->item[$i]->pubDate;
    $feed_timestamp = strtotime($pubDate);
    $title 	= $xml->channel->item[$i]->title;
    $feed_description = $xml->channel->item[$i]->description;
    $feed_link = $xml->channel->item[$i]->link;

    $category_item = getCategory($feed_details["category"]);
    if($category_item->timestamp < $feed_timestamp && $title != "" && $feed_description != ""){
      $category_item->count = $category_item->count + 1;
      $feed_image 	= $xml->channel->item[$i]->image->url;
      $is_insight = false;
      $img_type = 1;
      if(!$feed_image){
        $feed_image = preg_match('/<img[^>]+src="?([^"\s]+)"?\s*\/>/', $feed_description, $out) ? $out[0] : '';
        $img_type = 2;
        if(!$feed_image){
          if(isset($feed_details["logo"])){
            $feed_image = "../../assets/images/news/".$feed_details["logo"];
          }else{
            $feed_image = "../../dist/img/news.png";
          }
          $img_type = 0;
        }
      }

      $feed = (object) array();

      $feed->title = $con->real_escape_string($title);
      $feed->description = $con->real_escape_string($feed_description);
      $feed->image = $con->real_escape_string($feed_image);
      $feed->url = $con->real_escape_string($feed_link);
      $feed->name = $feed_details["name"];
      $feed->category = $feed_details["category"];
      $feed->country = $feed_details["country"];
      $feed->img_type = $img_type;
      $feed->feed_timestamp = $feed_timestamp;

      $feed_description = preg_replace('/<img[^>]*>/', '', $feed_description);
      if(strlen($feed_description) > 5000){
        $is_insight = true;
        echo "insight <br>";
      }

      $feed->is_insight = $is_insight;

      $feed_array[$index] = $feed;
      $index++;

      unset($feed);
    }

  }
}

function parseAtom($xml, $feed_details){
  global $index;
  global $feed_array;
  global $con;
  global $one_month_before_timestamp;
  $cnt = count($xml->entry);
  for($i=0; $i<$cnt; $i++){

    $pubDate 	= $xml->entry->pubDate;
    $feed_timestamp = strtotime($pubDate);
    $title 	= $xml->entry->title;
    $feed_description	= strip_tags($xml->entry->content);
    $feed_link = $xml->entry->link;

    $category_item = getCategory($feed_details["category"]);
    if($category_item->timestamp < $feed_timestamp && $title != "" && $feed_description != ""){
      $feed_image 	= $xml->entry->image->url;
      $is_insight = false;
      $img_type = 1;
      if(!$feed_image){
        $feed_image = preg_match('/<img[^>]+src="?([^"\s]+)"?\s*\/>/', $feed_description, $out) ? $out[0] : '';
        $img_type = 2;
        if(!$feed_image){
          if(isset($feed_details["logo"])){
            $feed_image = "../../assets/images/news/".$feed_details["logo"];
          }else{
            $feed_image = "../../dist/img/news.png";
          }
          $img_type = 0;
        }
      }


      $feed = (object) array();

      $feed->title = $con->real_escape_string($title);
      $feed->description = $con->real_escape_string($feed_description);
      $feed->image = $con->real_escape_string($feed_image);
      $feed->url = $con->real_escape_string($feed_link);
      $feed->name = $feed_details["name"];
      $feed->category = $feed_details["category"];
      $feed->country = $feed_details["country"];
      $feed->img_type = $img_type;
      $feed->feed_timestamp = $feed_timestamp;

      $feed_description = preg_replace('/<img[^>]*>/', '', $feed_description);
      if(strlen($feed_description) > 5000){
        $is_insight = true;
        echo "insight <br>";
      }

      $feed->is_insight = $is_insight;

      $feed_array[$index] = $feed;
      $index++;

      unset($feed);
    }

  }
}

function getCategory($category_name){
  global $category_array;
  foreach ($category_array as $category_item) {
    if($category_item->name == $category_name){
      return $category_item;
      break;
    }
  }
}


?>
