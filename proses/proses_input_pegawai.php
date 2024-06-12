<?php
include "connect.php";
$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : 0;
//$nip = (isset($_POST['NIP'])) ? htmlentities($_POST['NIP']) : "";
$name = (isset($_POST['Nama'])) ? htmlentities($_POST['Nama']) : "";
$username = (isset($_POST['Email'])) ? htmlentities($_POST['Email']) : "";
$jabatan = (isset($_POST['Jabatan'])) ? htmlentities($_POST['Jabatan']) : "";
$gajiterkini = (isset($_POST['GajiTerkini'])) ? str_replace(['Rp', '.', ','], '', $_POST['GajiTerkini']) : "";
$tanggalkgb = (isset($_POST['TanggalKGB'])) ? date('Y-m-d H:i:s', strtotime($_POST['TanggalKGB'])) : '0000-00-00 00:00:00';
//$tanggalkgb = (isset($_POST['TanggalKGB'])) ? htmlentities($_POST['TanggalKGB']) : "";
$nowa = (isset($_POST['NoWA'])) ? htmlentities($_POST['NoWA']) : "";
$HakAkses = (isset($_POST['HakAkses'])) ? htmlentities($_POST['HakAkses']) : "";
$password = md5('Password');

if (!empty($_POST['input_pegawai_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_pegawai (NIP, Nama, Email, Jabatan, GajiTerkini, TanggalKGB, NoWA, HakAkses, Password) 
values('$nip','$name', '$username', '$jabatan', '$gajiterkini', '$tanggalkgb', '$nowa', '$HakAkses', '$password')");
    if ($query) {
        $message = '<script>alert("Data berhasil dimasukkan");
                    window.location="../pegawai"</script>
                    </script>';
    } else {
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    }
}
echo $message;
?>