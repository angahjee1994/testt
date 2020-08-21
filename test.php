$streamSite = "http://oxax.tv/vivid-red.html";

function writeFile($url, $channel) {
        $File = $channel.".strm";
        $Handle = fopen($File, 'w');
        fwrite($Handle, $url);
        fclose($Handle);
}

  $input = @file_get_contents($streamSite) or die("Please try again later: $url");

  preg_match("/(http.*?wmsAuthSign\=[^\&\">]+)/", $input, $matches);
echo $matches[1];
