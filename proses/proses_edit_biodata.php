<?php
include "connect.php";

// Ambil nilai dari $_POST
$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : "";
$name = (isset($_POST['Nama'])) ? $_POST['Nama'] : "";
$username = (isset($_POST['Email'])) ? $_POST['Email'] : "";
$jabatan = (isset($_POST['Jabatan'])) ? $_POST['Jabatan'] : "";
$gajiterkini = (isset($_POST['GajiTerkini'])) ? str_replace(['Rp', '.', ','], '', $_POST['GajiTerkini']) : "";
$tanggalkgb = (isset($_POST['TanggalKGB'])) ? date('Y-m-d H:i:s', strtotime($_POST['TanggalKGB'])) : '0000-00-00 00:00:00';
$nowa = (isset($_POST['NoWA'])) ? $_POST['NoWA'] : "";
$HakAkses = (isset($_POST['HakAkses'])) ? $_POST['HakAkses'] : "";

// Enkripsi password dengan md5 jika ada perubahan password
$password = '';
if (!empty($_POST['Password'])) {
    $password = md5($_POST['Password']);
}

$message = '';

if (!empty($_POST['input_pegawai_validate'])) {
    // Lakukan update ke database
    $query = mysqli_query($conn, "UPDATE tb_pegawai SET Nama='$name', Email='$username', Jabatan='$jabatan', GajiTerkini='$gajiterkini', TanggalKGB='$tanggalkgb', NoWA='$nowa' WHERE NIP='$nip'");

    if ($query) {
        $message = '<script>alert("Data berhasil diupdate"); window.location="../biodata";</script>';
    } else {
        $message = '<script>alert("Data gagal diupdate"); window.location="../biodata";</script>';
    }
}

echo $message;
?>