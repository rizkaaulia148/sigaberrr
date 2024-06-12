<?php
include "connect.php";

$no = isset($_POST['NO']) ? intval($_POST['NO']) : 0;
$name = isset($_POST['NAMA']) ? htmlentities($_POST['NAMA']) : "";
$gajiterkini = isset($_POST['GAJI']) ? str_replace(['Rp', '.', ','], '', $_POST['GAJI']) : "";
$tanggalkgb = (isset($_POST['TANGGALKGB']) && $_POST['TANGGALKGB'] != '') ? date('Y-m-d H:i:s', strtotime($_POST['TANGGALKGB'])) : NULL;

if (!empty($_POST['input_pegawai_validate'])) {
    $query = mysqli_query($conn, "UPDATE tb_listkgb SET NAMA='$name', GAJI='$gajiterkini', TANGGALKGB='$tanggalkgb' WHERE NO='$no'");
    if (!$query) {
        $message = '<script>alert("Data gagal diupdate")</script>';
    } else {
        $message = '<script>alert("Data berhasil diupdate");
                    window.location="../listkgb"</script>
                    </script>';
    }
}
echo $message;
?>