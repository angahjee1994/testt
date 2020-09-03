<?php
$streamSite = "http://oxax.tv/pley?kes=6-62fa7b8eb56267a2074e192de9958a4c";
function writeFile($url, $channel) {
$File = $channel.".strm";
$Handle = fopen($File, 'w');
fwrite($Handle, $url);
fclose($Handle);
}
$input = @file_get_contents($streamSite) or die("Please try again later: $url");
preg_match("/(http.*?wmsAuthSign\=[^\&\">]+)/", $input, $matches);

echo $matches[1];
