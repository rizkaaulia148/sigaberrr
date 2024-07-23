<?php
include "connect.php";
$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : 0;
$name = (isset($_POST['Nama'])) ? htmlentities($_POST['Nama']) : "";
$username = (isset($_POST['Email'])) ? htmlentities($_POST['Email']) : "";
$jabatan = (isset($_POST['Jabatan'])) ? htmlentities($_POST['Jabatan']) : "";
$golongan = (isset($_POST['Golongan'])) ? htmlentities($_POST['Golongan']) : "";
$alamat = (isset($_POST['Alamat'])) ? htmlentities($_POST['Alamat']) : "";
$nowa = (isset($_POST['NoWA'])) ? htmlentities($_POST['NoWA']) : "";
$HakAkses = (isset($_POST['HakAkses'])) ? htmlentities($_POST['HakAkses']) : "";
$password = (isset($_POST['Password'])) ? md5(htmlentities($_POST['Password'])) : "";

if (!empty($_POST['input_pegawai_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_pegawai (NIP, Nama, Email, Jabatan, Golongan, Alamat, NoWA, HakAkses, Password) 
values('$nip','$name', '$username', '$jabatan', '$golongan', '$alamat', '$nowa', '$HakAkses', '$password')");
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