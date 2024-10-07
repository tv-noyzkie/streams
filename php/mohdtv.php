<?php
  $accounts = array(
    "smarttv585cde000d4a" => "69446748",
    "ALLChannels681def0087c7" => "81216685",
    "ALLChannelsda2c0b027dc2" => "13019318",
    "voby4882" => "23413584",
    "voby4926" => "96772658580cde0058ea0cde0058ea96",
    "ALLChannels681def058dbf" => "99512984",
    "ALLChannels681def177dc1" => "37595508",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    // add more here!
  );

  $username = array_rand($accounts);
  $password = $accounts[$username];

  function encode_array($accounts) {
    return base64_encode(serialize($accounts));
  }

  function decode_array($accounts) {
    return unserialize(base64_decode($accounts));
  }

  header("Location: http://vo01.mohdtv.com:8880"  . "/" . urlencode($username) . "/" . urlencode($password) . "/" . $_GET["id"] . "");
  // http"//gametrips.serv00.net/mohdtv.php?id=IDNumberHere
?>
