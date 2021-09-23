<?php
session_start();
include('../../assets/php/connection.php');

if(isset($_POST['feed_id'])){
  $feed_id = $_POST['feed_id'];
}

$feed_category = "";

$result= mysqli_query($con, " SELECT * FROM news_feeds WHERE id='$feed_id'")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));
$feed_array = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $feed = (object) array();

    $feed_category = $row['category'];

    $feed->id = $row['id'];
    $feed->title = $row['title'];
    $feed->description = $row['description'];
    $feed->image = $row['image'];
    $feed->url = $row['url'];
    $feed->name = $row['name'];
    $feed->category = $row['category'];
    $feed->country = $row['country'];
    $feed->img_type = $row['img_type'];
    $feed->is_insight = $row['is_insight'];
    $feed->feed_timestamp = $row['feed_timestamp'];

    $feed_array[$index] = $feed;
    $index++;

    unset($feed);
  }
}


$result= mysqli_query($con, " SELECT * FROM news_feeds WHERE category='$feed_category'")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $feed = (object) array();

    $feed->id = $row['id'];
    $feed->title = $row['title'];
    $feed->description = $row['description'];
    $feed->image = $row['image'];
    $feed->url = $row['url'];
    $feed->name = $row['name'];
    $feed->category = $row['category'];
    $feed->country = $row['country'];
    $feed->img_type = $row['img_type'];
    $feed->is_insight = $row['is_insight'];
    $feed->feed_timestamp = $row['feed_timestamp'];

    $feed_array[$index] = $feed;
    $index++;

    unset($feed);
  }
}

echo json_encode($feed_array);
exit();
?>
