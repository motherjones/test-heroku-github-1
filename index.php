<?php
//header("Access-Control-Allow-Origin: https://devblock---m-jk-s-l-h9w3-t-l-fp5--6ne2rr3.airtableblocks.com");
header("Access-Control-Allow-Origin: https://block---m-jk-s-l-h9w3-t-l-fp5--v298nmq.airtableblocks.com");
//header("Access-Control-Allow-Origin: http://util.motherjones.net");
//header("Access-Control-Allow-Origin: https://devblock--c-nr54c3l2-r-ek-df--rhw50x6.airtableblocks.com");

//https://devblock--c-nr54c3l2-r-ek-df--rhw50x6.airtableblocks.com
//http://util.motherjones.net
//https://devblock---m-jk-s-l-h9w3-t-l-fp5--6ne2rr3.airtableblocks.com


/* security flaw may exist here */
$source = $_REQUEST['tweet_url'];

$source_s = rawurlencode($source);

$explode_array = explode("%2F", $source_s);

$int = count($explode_array);

$tweet_id = $explode_array[$int - 1];

$tweet = getenv("bearer_token");

$curl_code = "Authorization: Bearer " . $tweet;

$get_tweet = "https://api.twitter.com/2/tweets?ids=" . $tweet_id . "&tweet.fields=public_metrics&expansions=attachments.media_keys&media.fields=public_metrics";

$ch = curl_init($get_tweet);

//$ch = curl_init('https://api.twitter.com/2/tweets/search/recent?query=from:motherjones');
//$ch = curl_init('https://api.twitter.com/2/tweets/1392923520435331072');

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    $curl_code,
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, array(true));

$response = curl_exec($ch);

$tweet_array = json_decode($response, true);

$includes = $tweet_array["includes"];
$media = $includes["media"][0];

$metrics = $media["public_metrics"];
$view_count = $metrics["view_count"];

echo json_encode($metrics);

//echo "This is some string to test this api connection";

curl_close($ch);
 ?>
