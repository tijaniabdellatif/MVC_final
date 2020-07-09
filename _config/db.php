<?php

// $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
require_once '_classes/Database.php';
$DB = new Database(DB_HOST,DB_NAME,DB_USER,DB_PASS);
$DB->setFetchMode(PDO::FETCH_ASSOC);