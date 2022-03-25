<?php
if(stripos($_SERVER['HTTP_REFERER'],"motherjones.net")!==false)) {$traceback=$_SERVER['HTTP_REFERER'];}
header("Access-Control-Allow-Origin: $traceback");

echo $traceback;
?>