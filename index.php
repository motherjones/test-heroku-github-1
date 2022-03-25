<?php
header("Access-Control-Allow-Origin: *");
if(stripos($_SERVER['HTTP_REFERER'],"motherjones.net")!==false)) {$traceback=$_SERVER['HTTP_REFERER'];}

echo $traceback;
?>