<?php
header('Content-Type:text/plain');

$all = '';

$p = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master';
$files = array(
    "$p/urls.txt",
    "$p/live.txt",
    "$p/forums.txt",
    "$p/social.txt",
    "$p/music.txt"
);

foreach($files as $file) $all .= file_get_contents($file);

echo $all;
?>
