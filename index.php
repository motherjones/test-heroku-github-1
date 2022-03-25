<?php
$traceback = $_SERVER['HTTP_REFERER'];
header("Access-Control-Allow-Origin: $traceback");

if(stripos($traceback, "motherjones.net") === false)) {
    echo "Unacceptable domain";
    die();
}

echo $traceback;
?>