<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'event_calendar';

// Membuat koneksi ke database
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}