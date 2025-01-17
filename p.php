<?php
$ch = curl_init("https://pushyimmaculateinestimable.com/vcq4xs05r?key=bc9fa40d5ff3ad26bd85dc7f48bcd508");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$content = curl_exec($ch);
curl_close($ch);
echo $content;
?>
