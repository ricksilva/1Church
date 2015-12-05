<?php
$conn = mysqli_connect($settings[host], $settings[username], $settings[password], $settings[dbname]);
if ($conn->connect_error) {
die("<div class='row'>Connection failed: " . $conn->connect_error . "</div>");
}