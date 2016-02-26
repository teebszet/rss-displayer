<?php
// googlefeeds.php
//
// copied directly from the docs

$_GET['rss_url']:

$url = "https://ajax.googleapis.com/ajax/services/feed/find?" .
       "v=1.0&q=Official%20Google%20Blog&userip=INSERT-USER-IP";

// sendRequest
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, $rss_url);
$body = curl_exec($ch);
curl_close($ch);

// now, process the JSON string
$json = json_decode($body);
// now have some fun with the results...
echo $json;

?>
