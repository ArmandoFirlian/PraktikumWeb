<!-- filepath: c:\xampp\htdocs\prakweb\proses.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikumwebb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>