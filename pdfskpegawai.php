<?php
include "proses/connect.php";

// Pastikan session 'username_sigaber' sudah ter-set dan terdefinisi
session_start();
if (!isset($_SESSION['username_sigaber'])) {
    echo "Session tidak terdefinisi. Silakan login terlebih dahulu.";
    exit;
}

// Ambil NIP pegawai dari session
$username = $_SESSION['username_sigaber'];
$queryPegawai = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE Email = '$username'");
$rowPegawai = mysqli_fetch_array($queryPegawai);

if (!$rowPegawai) {
    echo "Data pegawai tidak ditemukan.";
    exit;
}

$nipPegawai = $rowPegawai['NIP'];

// Query untuk mengambil file SK terbaru dari tb_sk berdasarkan NIP pegawai dan NO_SK terbaru
$querySK = mysqli_query($conn, "SELECT FILE FROM tb_sk WHERE NIP = '$nipPegawai' ORDER BY NO_SK DESC LIMIT 1");
$rowSK = mysqli_fetch_assoc($querySK);

// Periksa apakah file SK ditemukan
if ($rowSK && isset($rowSK['FILE'])) {
    $file_path = "berkas/" . $rowSK['FILE'];

    // Cek apakah file ada di direktori
    if (file_exists($file_path)) {
        // Baca konten file PDF
        $file_content = file_get_contents($file_path);

        // Tampilkan file PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . basename($file_path) . '"');
        echo $file_content;
    } else {
        echo "File SK tidak ditemukan.";
    }
} else {
    echo "File SK belum tersedia, silahkan hubungi pihak Tata Usaha.";
}
?>