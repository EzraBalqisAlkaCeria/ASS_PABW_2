<?php

$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'cendekia';
$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$query = "SELECT * FROM naskah";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    $manuscripts = array();
    while($row = $result->fetch_assoc()) {
        $manuscripts[] = $row;
    echo json_encode($manuscripts);
} else {
    echo "0 results";
}

$koneksi->close();
?>
