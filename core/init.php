<?php
$db = new mysqli("localhost", "root", "root", "ecommerce");
if($db->connect_errno) {
    echo "Database connection failed with follinw errors: " . $db->connect_error;
    die();
}

