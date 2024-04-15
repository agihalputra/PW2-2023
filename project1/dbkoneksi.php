<?php
// Konfigurasi database
$host = '127.0.0.1'; // Ganti sesuai dengan host Anda
$dbname = 'dbpuskesmas'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = 'password_baru'; // Ganti dengan kata sandi database Anda

$dsn = "mysql:host=$host;port=3308;dbname=$dbname";

// Buat koneksi Database
$dbh = new PDO($dsn, $user, $pass);
