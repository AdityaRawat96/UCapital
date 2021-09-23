<?php
session_start();

include 'connection.php';

if(isset($_GET['search_query']) && isset($_SESSION['id'])){
  $url = "https://api.twitter.com/2/tweets/search/recent?max_results=10&tweet.fields=attachments,public_metrics,created_at&expansions=author_id&user.fields=name,username,profile_image_url,verified&query=%23".$_GET['search_query'];

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
     "Accept: application/json",
     "Authorization: ".TWITTER_AUTH_BEARER,
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  //for debug only!
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);

  echo $resp;
}else{
  echo "failed";
}

?>
