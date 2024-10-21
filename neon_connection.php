<?php

require 'vendor/autoload.php'; 

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db_connection = $_ENV['DB_CONNECTION'];
$db_host = $_ENV['DB_HOST'];
$db_port = $_ENV['DB_PORT'];
$db_name = $_ENV['DB_DATABASE'];
$db_username = $_ENV['DB_USERNAME'];
$db_password = $_ENV['DB_PASSWORD'];
$db_sslmode = $_ENV['DB_SSLMODE'];

$conn_string = "$db_connection://$db_username:$db_password@$db_host:$db_port/$db_name?sslmode=$db_sslmode";

// Connect to PostgreSQL
$conn = pg_connect($conn_string);

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
echo "Koneksi berhasil!";
