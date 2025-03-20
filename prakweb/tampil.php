<?php
include 'config.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 echo "Nama: " . $row["nama"] . " - Email: " .
$row["email"] . " - Umur: " . $row["umur"] . "<br>";
 }
} else {
 echo "Tidak ada data.";
}
$conn->close();
?>