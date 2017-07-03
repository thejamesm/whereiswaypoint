<?php
$url_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/urls.txt';
$urls = file($url_file, FILE_IGNORE_NEW_LINES);
$forum_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/forums.txt';
$forums = file($forum_file, FILE_IGNORE_NEW_LINES);
$social_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/social.txt';
$socials = file($social_file, FILE_IGNORE_NEW_LINES);
$music_file = 'https://raw.githubusercontent.com/thejamesm/whereiswaypoint/master/music.txt';
$musics = file($music_file, FILE_IGNORE_NEW_LINES);

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
        <article>
            <h1>Waypoint</h1>
<?php
foreach ($urls as $url) {
    echo "<a href=\"http://$url\">$url</a><br>\n";
}
?>
        </article>

        <article>
            <h1>Forums</h1>
<?php
foreach ($forums as $forum) {
    echo "<a href=\"http://$forum\">$forum</a><br>\n";
}
?>
        </article>

        <article>
            <h1>Social</h1>
<?php
foreach ($socials as $social) {
        echo "<a href=\"http://$social\">$social</a><br>\n";
}
?>
        </article>

        <article>
            <h1>Music</h1>
<?php
foreach ($musics as $music) {
        echo "<a href=\"http://$music\">$music</a><br>\n";
}
?>
        </article>

        <article>
            <h1>Info</h1>
            <span class="small">
                By <a href="https://twitter.com/TheJamesM">@TheJamesM</a><br>
                Compiled by <a href="<?= $thread ?>">this forum thread</a>
                and <a href="<?= $discord ?>">the Discord channel</a>.
            </span>
        </article>
    </body>
</html>
