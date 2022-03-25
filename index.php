<?php
header("Access-Control-Allow-Origin: $_SERVER['HTTP_REFERER']");

if(stripos($_SERVER['HTTP_REFERER'], "motherjones.net") === false)) {
    echo "Unacceptable domain";
    die();
}

echo $traceback;
?>