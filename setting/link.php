<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "db_developer";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}