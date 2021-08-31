<?php 
header("Content_type: application/json");

require_once __DIR__ . "/database-seconda-milestone.php";

echo json_encode($database);
