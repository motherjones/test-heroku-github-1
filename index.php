<?php
header("Access-Control-Allow-Origin: http://util.motherjones.net");

if(stripos($_SERVER['HTTP_REFERER'],"motherjones.net")!==false)) {
    $traceback=$_SERVER['HTTP_REFERER'];
}

echo $traceback;
?>