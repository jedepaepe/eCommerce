<?php
$db = new mysqli("localhost", "root", "root", "ecommerce");
if($db->connect_errno) {
    treatDbError($db, "Database connection failed with follinw errors: " . $db->connect_error);
}

require_once $_SERVER['DOCUMENT_ROOT'].'/eCommerce/config.php';
require_once BASEURL.'/helpers/helpers.php';