<?php
//Token
$url1 = "http://oxax.tv/pl.js?_=1598047040498";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"User-Agent: User-Agent=Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36&Referer=https://tviplayer.iol.pt"
  )
);

$context = stream_context_create($options);
$token = file_get_contents($url1, false, $context);

//Link
$url2 = file_get_contents("http://oxax.tv/vivid-red.html");

preg_match_all(
     '/((?<="videoUrl":").*?m3u8)/',

    $url2,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[1];

}

//WMS
$wms = "?wmsAuthSign=";

//Final
header('Location:' .$link.$wms.$token);
exit;
?>
