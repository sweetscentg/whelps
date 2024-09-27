<?php
$mysqli = new mysqli("localhost", "root", "", "whelps_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$current_timestamp = date('Y-m-d H:i:s');
$mysqli->query("INSERT INTO visitor_count (dateCreated, count) VALUES ('$current_timestamp', 1)");

$mysqli->close();
?>
