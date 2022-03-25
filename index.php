<?php
header("Access-Control-Allow-Origin: http://util.motherjones.net");

$traceback = $_SERVER['HTTP_REFERER'];

/*if(stripos($_SERVER['HTTP_REFERER'],"airtableblocks.com") === true)) {
    $traceback = $_SERVER['HTTP_REFERER'];
}*/

echo $traceback;

 ?>