<?php

function addSection($heading, $urls) {
    echo "\t\t<section>\n";
    echo "\t\t\t<h1>$heading</h1>\n";

    foreach ($urls as $url) {
        if ($url[0] == '!') {
            $url = substr($url, 1);
            echo "<span class=\"expired\">$url</span><br>\n";
        } else {
            echo "<a href=\"http://$url\">$url</a><br>\n";
        }
    }

    echo "\t\t</section>\n\n";
}


$p = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master';

$url_file = "$p/urls.txt";
$urls = file($url_file, FILE_IGNORE_NEW_LINES);
$live_file = "$p/live.txt";
$live = file($live_file, FILE_IGNORE_NEW_LINES);
$forum_file = "$p/forums.txt";
$forums = file($forum_file, FILE_IGNORE_NEW_LINES);
$social_file = "$p/social.txt";
$social = file($social_file, FILE_IGNORE_NEW_LINES);
$music_file = "$p/music.txt";
$music = file($music_file, FILE_IGNORE_NEW_LINES);
$twitter_acct_file = "$p/twitter_accts.txt";
$twitter_accts = file($twitter_acct_file, FILE_IGNORE_NEW_LINES);

$thread = 'https://forum.waypoint.vice.com/t/4695';
$discord = 'http://whereiswaypoint.info/groups';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <title>Waypoint redirects</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400&subset=latin-ext">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<?php
addSection('Waypoint', $urls);
addSection('Live', $live);
addSection('Forums', $forums);
addSection('Social', $social);
addSection('Music', $music);
?>
        <section>
            <h1>Twitter</h1>
<?php
foreach ($twitter_accts as $twitter_acct) {
    echo "<a href=\"https://twitter.com/$twitter_acct\">@$twitter_acct</a><br>\n";
}
?>
        </section>

        <section>
            <h1>Info</h1>
            <span class="small">
                Compiled by <a href="<?= $thread ?>">this forum thread</a>
                and <a href="<?= $discord ?>">the Discord channel</a><br>
            </span>
        </section>
    </body>
</html>
