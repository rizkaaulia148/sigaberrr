<?php
include "proses/connect.php";

// Ambil nilai NO_SK dari parameter URL
$no_sk = $_GET['no_sk'];

// Query untuk mengambil data file dari tabel tb_sk berdasarkan NO_SK
$query = mysqli_query($conn, "SELECT FILE FROM tb_sk WHERE NO_SK = '$no_sk'");
$row = mysqli_fetch_assoc($query);

// Periksa apakah ada file yang ditemukan
if ($row['FILE']) {
    $file_path = "berkas/" . $row['FILE'];

    // Baca konten file PDF
    $file_content = file_get_contents($file_path);

    // Tampilkan file PDF
    header('Content-Type: application/pdf');
    echo $file_content;
} else {
    echo "File tidak ditemukan.";
}
?>