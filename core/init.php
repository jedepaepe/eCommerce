<?php
$db = new mysqli("localhost", "root", "root", "ecommerce");
if($db->connect_errno) {
    treatDbError($db, "Database connection failed with follinw errors: " . $db->connect_error);
}