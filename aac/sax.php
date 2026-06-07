<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$file=$_GET['file'].".html";
echo(file_get_contents("https://assets.cec.uk.com/aac/video/$file"));
die();
?>