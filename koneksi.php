<?php
$koneksi = mysqli_connect("localhost", "root", "", "perpustakaan_sadiva");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

        