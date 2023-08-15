<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'datapemesanan';

$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    // echo 'connected successfully ';
}
// Kode untuk membuat koneksi database

?>