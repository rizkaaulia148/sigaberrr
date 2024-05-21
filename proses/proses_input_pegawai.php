<?php
include "bagian_connect.php";
$name = (isset($_POST['Nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['Email'])) ? htmlentities($_POST['Email']) : "";
$jabatan = (isset($_POST['Jabatan'])) ? htmlentities($_POST['Jabatan']) : "";
$gajiterkini = (isset($_POST['GajiTerkini'])) ? htmlentities($_POST['GajiTerkini']) : "";
$tanggalkgb = (isset($_POST['TanggalKGB'])) ? htmlentities($_POST['TanggalKGB']) : "";
$nowa = (isset($_POST['NoWA'])) ? htmlentities($_POST['NoWA']) : "";
$HakAkses = (isset($_POST['HakAkses'])) ? htmlentities($_POST['HakAkses']) : "";
$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE username='$Email'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Username yang dimasukkan telah ada");
        window.location="../user"</script>
        </script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_pegawai(nama,username,level,nohp,alamat,password) 
        values('$name', '$username', '$jabatan', '$gajiterkini', '$tanggalkgb', '$nowa', '$HakAkses' '$password' )");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukkan");
            window.location="../user"</script>
            </script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }
    }
}
echo $message;
?>