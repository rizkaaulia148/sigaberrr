<?php
include "connect.php";

$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : "";
$name = (isset($_POST['Nama'])) ? htmlentities($_POST['Nama']) : "";
$username = (isset($_POST['Email'])) ? htmlentities($_POST['Email']) : "";
$jabatan = (isset($_POST['Jabatan'])) ? htmlentities($_POST['Jabatan']) : "";
$gajiterkini = (isset($_POST['GajiTerkini'])) ? str_replace(['Rp', '.', ','], '', $_POST['GajiTerkini']) : "";
$tanggalkgb = (isset($_POST['TanggalKGB'])) ? date('Y-m-d H:i:s', strtotime($_POST['TanggalKGB'])) : '0000-00-00 00:00:00';
$nowa = (isset($_POST['NoWA'])) ? htmlentities($_POST['NoWA']) : "";
$HakAkses = (isset($_POST['HakAkses'])) ? htmlentities($_POST['HakAkses']) : "";

// Ambil nilai password dari form
$password = (isset($_POST['Password'])) ? $_POST['Password'] : "";

// Jika password tidak kosong, maka hash password baru
if (!empty($password)) {
    $hashed_password = md5($password); // Ganti dengan hash yang sesuai (contoh: bcrypt, Argon2, dsb.)
    $query = "UPDATE tb_pegawai SET Nama='$name', Email='$username', Jabatan='$jabatan', GajiTerkini='$gajiterkini', TanggalKGB='$tanggalkgb', NoWA='$nowa', HakAkses='$HakAkses', Password='$hashed_password' WHERE NIP='$nip'";
} else {
    // Jika tidak ada perubahan password, maka gunakan password yang sudah ada di database
    $query = "UPDATE tb_pegawai SET Nama='$name', Email='$username', Jabatan='$jabatan', GajiTerkini='$gajiterkini', TanggalKGB='$tanggalkgb', NoWA='$nowa', HakAkses='$HakAkses' WHERE NIP='$nip'";
}

$result = mysqli_query($conn, $query);
if (!$result) {
    $message = '<script>alert("Data gagal diupdate")</script>';
} else {
    $message = '<script>alert("Data berhasil diupdate");
                window.location="../pegawai"</script>';
}

echo $message;
?>