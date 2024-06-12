<?php
include "connect.php";

// Mendapatkan nilai NO tertinggi dari tabel
$query_max_no = mysqli_query($conn, "SELECT MAX(NO) as max_no FROM tb_listkgb");
$row = mysqli_fetch_assoc($query_max_no);
$max_no = $row['max_no'];

if ($max_no == 0) {
    $no = 1; // Jika nilai "NO" 1 tidak ada, atur nilai "NO" menjadi 1
} else {
    $no = $max_no + 1; // Jika nilai "NO" 1 sudah ada, atur nilai "NO" menjadi nilai tertinggi + 1
}

$name = isset($_POST['NAMA']) ? htmlentities($_POST['NAMA']) : "";
$gajiterkini = isset($_POST['GAJI']) ? str_replace(['Rp', '.', ','], '', $_POST['GAJI']) : "";
$tanggalkgb = (isset($_POST['TANGGALKGB']) && $_POST['TANGGALKGB'] != '') ? date('Y-m-d H:i:s', strtotime($_POST['TANGGALKGB'])) : NULL;

if (!empty($_POST['input_list_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_listkgb (NO, NAMA, GAJI, TANGGALKGB) 
    VALUES ('$no', '$name', '$gajiterkini', " . ($tanggalkgb ? "'$tanggalkgb'" : "NULL") . ")");

    if ($query) {
        $message = '<script>alert("Data berhasil dimasukkan"); window.location="../listkgb"</script>';
    } else {
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    }
}
echo $message;
?>