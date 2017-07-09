<?php
$url_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/urls.txt';
$forum_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/forums.txt';
$adjectives_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/adjectives.txt';
$adverbs_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/adverbs.txt';
$prefixes_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/prefixes.txt';
$prefixes_that_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/prefixes_that.txt';

$urls = file($url_file, FILE_IGNORE_NEW_LINES);
$forums = file($forum_file, FILE_IGNORE_NEW_LINES);
$urls = array_merge($urls, $forums);
$url = $urls[mt_rand(0, count($urls) - 1)];
$link = "<a href=\"http://$url\">$url</a>";

$adjectives = file($adjectives_file, FILE_IGNORE_NEW_LINES);
$adjective = $adjectives[mt_rand(0, count($adjectives) - 1)];

switch (mt_rand(0, 8)) {
    case 0:
        $prefixes = file($prefixes_file, FILE_IGNORE_NEW_LINES);
        $prefix = $prefixes[mt_rand(0, count($prefixes) - 1)];
        $string = "$prefix $link the $adjective Waypoint URL";
        break;
    case 1:
        $prefixes = file($prefixes_that_file, FILE_IGNORE_NEW_LINES);
        $prefix = $prefixes[mt_rand(0, count($prefixes) - 1)];
        $string = "$prefix that $link is the $adjective Waypoint URL";
        break;
    case 2:
        $adverbs = file($adverbs_file, FILE_IGNORE_NEW_LINES);
        $adverb = $adverbs[mt_rand(0, count($adverbs) - 1)];
        $string = "The Waypoint URL is $adverb $link";
        break;
    case 3:
        $adverbs = file($adverbs_file, FILE_IGNORE_NEW_LINES);
        $adverb = $adverbs[mt_rand(0, count($adverbs) - 1)];
        $string = "The $adjective Waypoint URL is $adverb $link";
        break;
    default:
        if (mt_rand(0, 1)) $string = "The $adjective URL for Waypoint is $link";
        else $string = "The $adjective Waypoint URL is $link";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <title>Where is Waypoint</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400&subset=latin-ext">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <?php echo $string; ?>

        </div>
    </body>
</html>
