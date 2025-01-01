<?php
// Define an associative array of URLs with their names
$urls = [
    "tfc-guam" => "https://game-trips.serv00.net/streams/tfc-guam.m3u8",
    "a2z" => "https://raw.githubusercontent.com/tv-noyzkie/streams/refs/heads/main/cig-a2z.m3u8",
    "5" => "https://game-trips.serv00.net/streams/5.m3u8",
    "onesports" => "https://game-trips.serv00.net/streams/onesports.m3u8",
    "cinema-one-global" => "https://game-trips.serv00.net/streams/cinemaone-global.m3u8",
    "cinemo-global" => "https://game-trips.serv00.net/streams/cinemo.m3u8",
    "myx-intl" => "https://game-trips.serv00.net/streams/myx-intl.m3u8",
    "teleradyo" => "https://game-trips.serv00.net/streams/teleradyo.m3u8",
    "anc-global" => "https://game-trips.serv00.net/streams/anc-global.m3u8",
    "bbc1" => "https://d20opqftbkv2z0.cloudfront.net/live11/bbcone/bitrate1-clear.isml/live.m3u8",
    "bbc2" => "https://d20opqftbkv2z0.cloudfront.net/live13/bbctwo/bitrate1-clear.isml/live.m3u8",
    "bbc3" => "https://d20opqftbkv2z0.cloudfront.net/live15/bbcthree/bitrate1-clear.isml/live.m3u8",
    "dmax" => "https://game-trips.serv00.net/streams/dmax.m3u8",
    "id" => "https://game-trips.serv00.net/streams/id.m3u8",
    "id-russiafeed" => "https://game-trips.serv00.net/streams/id-russiafeed.m3u8",
    "laff" => "https://game-trips.serv00.net/streams/laff.m3u8",
    "laff-more" => "https://game-trips.serv00.net/streams/laff-more.m3u8",
    "lotus-macau" => "http:///cdn3.z5cable.com/live/disk1/Lotus/HLSv3-FTA/Lotus.m3u8",
    "free-movie" => "https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg01553-blueantmediaasi-freemovies-dash-sooka-sooka/index.mpd",
    "holly-act-mov" => "https://game-trips.serv00.net/streams/ahm.m3u8",
    "hbo" => "http://103.110.110.11:8081/live/hbo/playlist.m3u8",
    "moviesphereau" => "https://game-trips.serv00.net/streams/moviesphereau.m3u8",
    "pixl" => "https://frndlymsl.akamaized.net/hls/live/2006426/pixlmsl/pixlmsl/playlist.m3u8?hdnts=st=1606053234~exp=3216054041~acl=*~hmac=208d261d9f98d76a5ac30aa2ce51751f88ee50cfc24812b7cbea8b0397489a07",
    "sonypix" => "http://103.49.69.156:8000/play/a02o/index.m3u8",
    "baby-first" => "https://streams.sofast.tv/ptnr-yupptv/title-BABYFIRST-ENG_YuppTV/v1/master/611d79b11b77e2f571934fd80ca1413453772ac7/c8d16110-566c-4e95-a1df-55d175e9e201/manifest.m3u8",
    "cartoonito" => "http:///cdn3.z5cable.com/live/disk1/Boomerang/HLSv3-FTA/Boomerang.m3u8",
    "cartoon-net" => "http:///cdn3.z5cable.com/live/disk1/Cartoon_Network/HLSv3-FTA/Cartoon_Network.m3u8",
    "cartoon-net2" => "http://103.110.110.11:8081/live/cartoon/playlist.m3u8",
    "cbeebies" => "http:///cdn3.z5cable.com/live/disk1/Cbeebies/HLSv3-FTA/Cbeebies.m3u8",
    "kartoon" => "https://game-trips.serv00.net/streams/kartoon.m3u8",
    "jjw" => "https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg01553-blueantmediaasi-jellyjam-dash-sooka-test-sooka/index.mpd",
    "moonbug" => "https://moonbug-rokuus.amagi.tv/playlist.m3u8",
    "mrbean" => "https://game-trips.serv00.net/streams/mrbean.m3u8",
    "nickjr" => "https://game-trips.serv00.net/streams/nickjr.m3u8",
    "nick-uk" => "https://d20opqftbkv2z0.cloudfront.net/live12/nickelodeon/bitrate1-clear.isml/live.m3u8",
    "nickjr-uk" => "https://d20opqftbkv2z0.cloudfront.net/live13/nickjr/bitrate1-clear.isml/live.m3u8",
    "nicktoons" => "https://game-trips.serv00.net/streams/nicktoons.m3u8",
    "nicktns2" => "https://game-trips.serv00.net/streams/nicktoons2.m3u8",
    "nicktoons-uk" => "https://d20opqftbkv2z0.cloudfront.net/live13/nicktoons/bitrate1-clear.isml/live.m3u8",
    "pbskids" => "https://pbs2-pull-secure.akamaized.net/pbs2/stream.m3u8",
    "ryan-friends" => "https://game-trips.serv00.net/streams/ryan-friends.m3u8",
    "zoomoo" => "https://game-trips.serv00.net/streams/zoomoo.m3u8",
    "fight-sports" => "https://game-trips.serv00.net/streams/fightsports.m3u8",
    "red-bull" => "https://game-trips.serv00.net/streams/rbtv.m3u8",
    "trace-sport" => "https://game-trips.serv00.net/streams/tracesport.m3u8",
    "w-sports" => "https://game-trips.serv00.net/streams/w-sports.m3u8",
    "iheart-80s" => "https://game-trips.serv00.net/streams/iheart80s.m3u8",
    "iheart-90s" => "https://game-trips.serv00.net/streams/iheart90s.m3u8",
    "now-70s" => "https://game-trips.serv00.net/streams/now70s.m3u8",
    "now-80s" => "https://game-trips.serv00.net/streams/now80s.m3u8",
    "now-rock" => "https://game-trips.serv00.net/streams/nowrock.m3u8",
    "traceuk" => "https://game-trips.serv00.net/streams/traceuk.m3u8",
    "trace-urban" => "https://game-trips.serv00.net/streams/trace-urban.m3u8",
    "ani-planet" => "https://game-trips.serv00.net/streams/ap.m3u8",
    "ap-russiafeed" => "https://game-trips.serv00.net/streams/ap-russiafeed.m3u8",
    "disc-hd" => "https://game-trips.serv00.net/streams/dhd.m3u8",
    "disc-asia" => "http:///cdn3.z5cable.com/live/disk1/Discovery_Asia/HLSv3-FTA/Discovery_Asia.m3u8",
    "disc-sci" => "https://game-trips.serv00.net/streams/sci.m3u8",
    "disc-turbo" => "https://game-trips.serv00.net/streams/turbo.m3u8",
    "love-nat4k" => "https://d18dyiwu97wm6q.cloudfront.net/playlist2160p.m3u8",
    "ngw" => "https://game-trips.serv00.net/streams/natgeowild.m3u8",
    "ftv" => "https://game-trips.serv00.net/streams/ftv.m3u8",
    "ftv-midnight" => "https://game-trips.serv00.net/streams/ftvmidnight.m3u8",
    "food-net" => "https://game-trips.serv00.net/streams/fn.m3u8",
    "hgtv" => "https://game-trips.serv00.net/streams/hgtv.m3u8",
    "petclubtv" => "https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg01076-lightningintern-petclub-astro-dash-sooka/index.mpd",
    "tastemade" => "https://game-trips.serv00.net/streams/tastemade.m3u8",
    "tlc" => "https://game-trips.serv00.net/streams/tlc.m3u8",
    "trvl-chan" => "https://game-trips.serv00.net/streams/tc.m3u8",
    "nhk" => "http:///cdn3.z5cable.com/live/disk1/NHK_World/HLSv3-FTA/NHK_World.m3u8",
    "nhk-alt" => "https://game-trips.serv00.net/streams/nhkworldalt.m3u8",
    "nhk-prem" => "http:///cdn3.z5cable.com/live/disk1/NHK_World_Premium/HLSv3-FTA/NHK_World_Premium.m3u8",
    "nippon" => "https://game-trips.serv00.net/streams/nipponnews.m3u8",
    "cig.arirang" => "https://game-trips.serv00.net/streams/cig-arirang.m3u8",
    "arirang" => "https://game-trips.serv00.net/streams/arirang.m3u8",
    "arirang-kr" => "https://game-trips.serv00.net/streams/arirangkr.m3u8",
    "arirang-un" => "https://game-trips.serv00.net/streams/arirangun.m3u8",
    "arirang-radio" => "https://game-trips.serv00.net/streams/arirangradio.m3u8",
    "kbsw" => "https://game-trips.serv00.net/streams/kbsw.m3u8",
    "kbsw-alt" => "https://game-trips.serv00.net/streams/kbswalt.m3u8",
    "kbs-korea" => "http:///cdn3.z5cable.com/live/disk1/KBS_World_24/HLSv3-FTA/KBS_World_24.m3u8",
    "kctv" => "https://tv.nknews.org/tvdash/stream.mpd",
    "mbc-korea" => "https://game-trips.serv00.net/streams/mbc-korea.m3u8",
    "mediacorp" => "https://game-trips.serv00.net/streams/mediacorp.m3u8",
    "aljazeera" => "https://game-trips.serv00.net/streams/aljazeera.m3u8",
    "bbc-news" => "https://game-trips.serv00.net/streams/bbcnews.m3u8",
    "bbc-news-na" => "https://game-trips.serv00.net/streams/bbcnewsna.m3u8",
    "bbc-news-asia" => "http://112.72.4.108/live/disk1/BBC_News/HLSv3-FTA/BBC_News.m3u8",
    "bloomberg" => "http://112.72.4.108/live/disk1/Bloomberg/HLSv3-FTA/Bloomberg.m3u8",
    "cna" => "https://game-trips.serv00.net/streams/cna.m3u8",
    "cnn-us" => "https://game-trips.serv00.net/streams/cnnus.m3u8",
    "cgtn" => "https://english-livews.cgtn.com/hls/yypdyyctzbhd/playlist.m3u8?wsApp=HLS",
    "cgtn-doc" => "https://english-livetx.cgtn.com/hls/yypdjlctzb_hd.m3u8",
    "dw" => "https://game-trips.serv00.net/streams/dweng.m3u8",
    "hln" => "https://game-trips.serv00.net/streams/hlnus.m3u8",
    "seatoday" => "https://hls.seatoday.com/hls_hd/seatoday.m3u8",
    "trt-world" => "https://game-trips.serv00.net/streams/trtworld.m3u8",
    "usa-today" => "https://cdn-ue1-prod.tsv2.amagi.tv/linear/amg00731-gannettcoinc-usatodaynews-plex/playlist.m3u8",
    "wion" => "https://d7x8z4yuq42qn.cloudfront.net/index_7.m3u8",
    "axhidive" => "https://game-trips.serv00.net/streams/animexhidive.m3u8",
    "crunchyroll" => "https://game-trips.serv00.net/streams/crunchyroll.m3u8",
    "asian-crush" => "https://game-trips.serv00.net/streams/asian-crush.m3u8",
    "retro-crush" => "https://game-trips.serv00.net/streams/retro-crush.m3u8",
    "super-anime" => "https://game-trips.serv00.net/streams/super-anime.m3u8",
    "gctv" => "http://45.32.115.103/live/livestream/index.m3u8",
    "cctn" => "http://122.55.252.134:8443/live/bba5b536faeacb9b56a3239f1ee8e3b3/1.m3u8",
    "dzbb-audio" => "https://stream.gmanews.tv/ioslive/livestream/playlist.m3u8",
    "wbtv-motorheads" => "https://game-trips.serv00.net/streams/wb-motorheads.m3u8",
    "indi.lovenature" => "https://game-trips.serv00.net/streams/lovenature.m3u8",
    "indi.nbatv" => "https://game-trips.serv00.net/streams/nbatv.m3u8",
    "indi.spotv" => "https://game-trips.serv00.net/streams/spotv.m3u8",
    "indi.spotv2" => "https://game-trips.serv00.net/streams/spotv2.m3u8",
    "" => ""
    // Add more URLs as needed
];

// Function to check if a URL is reachable
function is_url_reachable($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ($http_code >= 200 && $http_code < 300);
}

// Get the key name from the query string
$keyName = $_GET['id'] ?? '';

// Check if the key name exists in the URLs array
if (array_key_exists($keyName, $urls)) {
    // Get the corresponding URL
    $url = $urls[$keyName];

    // Check if the URL is reachable
    if (is_url_reachable($url)) {
        // Redirect to the specified URL
        header("Location: $url");
        exit();
    } else {
        // Set the content type to plain text for error message
        header('Content-Type: text/plain');
        // Output an error message
        echo "Error: URL is not reachable.";
    }
} else {
    // Set the content type to plain text for error message
    header('Content-Type: text/plain');
    // Output an error message
    echo "Error: URL not found.";
}
?>