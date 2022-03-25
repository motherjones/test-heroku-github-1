<?php
header("Access-Control-Allow-Origin: *");

$traceback = $_SERVER['HTTP_REFERER'];


if(stripos($traceback, "motherjones.net")) {
    echo "I am here. I am born. I am crying. I am... free...";
}
else {
    echo "Not allowed";
}


?>