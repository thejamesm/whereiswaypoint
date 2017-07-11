<?php
header('Content-Type:text/plain');

$all = '';
$files = array(
    'urls.txt',
    'live.txt',
    'forums.txt',
    'social.txt',
    'music.txt'
);

foreach($files as $file) $all .= file_get_contents($file);

echo $all;
?>
