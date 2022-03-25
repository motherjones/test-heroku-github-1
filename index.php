<?php
header("Access-Control-Allow-Origin: *");

if(stripos($_SERVER['HTTP_REFERER'], "airtable.com") === false)) {
    echo "Unacceptable domain";
    die();
}
else {
    echo "I am here. I am born. I am crying. I am... free...";    
}
?>