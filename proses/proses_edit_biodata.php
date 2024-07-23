<?php
include "connect.php";

// Ambil nilai dari $_POST
$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : "";
$name = (isset($_POST['Nama'])) ? $_POST['Nama'] : "";
$username = (isset($_POST['Email'])) ? $_POST['Email'] : "";
$jabatan = (isset($_POST['Jabatan'])) ? $_POST['Jabatan'] : "";
$alamat = (isset($_POST['Alamat'])) ? $_POST['Alamat'] : "";
$Golongan = (isset($_POST['Golongan'])) ? $_POST['Golongan'] : "";
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
    $query = mysqli_query($conn, "UPDATE tb_pegawai SET Nama='$name', Email='$username', Jabatan='$jabatan', Alamat='$alamat', Golongan='$Golongan', NoWA='$nowa' WHERE NIP='$nip'");

    if ($query) {
        $message = '<script>alert("Data berhasil diupdate"); window.location="../biodata";</script>';
    } else {
        $message = '<script>alert("Data gagal diupdate"); window.location="../biodata";</script>';
    }
}

echo $message;
?>