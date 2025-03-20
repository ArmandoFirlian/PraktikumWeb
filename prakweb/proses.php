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

// Memeriksa apakah database berhasil dipilih
if (!$conn->select_db($dbname)) {
    die("Database selection failed: " . $conn->error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string($_POST['password']);

    $sql = "INSERT INTO user (username, password) VALUES ('$user', '$pass')";
    if ($conn->query($sql) === TRUE) {
        header("Location: mandot.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>