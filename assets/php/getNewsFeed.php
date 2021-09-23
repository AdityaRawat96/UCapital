<?php
session_start();
include('../../assets/php/connection.php');

if(isset($_POST['search_query'])){
  $search_query = $_POST['search_query'];
  $result= mysqli_query($con, " SELECT * FROM news_feeds WHERE title LIKE '%$search_query%' OR description LIKE '%$search_query%'")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
}else{
  $result= mysqli_query($con, " SELECT * FROM news_feeds")
  or die('An error occurred! Unable to process this request. '. mysqli_error($con));
}
$feed_array = array();
$index = 0;

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_array($result)){

    $feed = (object) array();

    $feed->id = $row['id'];
    $feed->title = $row['title'];
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
