<?php
include "connect.php";

// Mendapatkan nilai NO tertinggi dari tabel
$query_max_no = mysqli_query($conn, "SELECT MAX(NO_SK) as max_no FROM tb_sk");
$row = mysqli_fetch_assoc($query_max_no);
$max_no = $row['max_no'];

if ($max_no == 0) {
  $no = 1; // Jika nilai "NO" 1 tidak ada, atur nilai "NO" menjadi 1
} else {
  $no = $max_no + 1; // Jika nilai "NO" 1 sudah ada, atur nilai "NO" menjadi nilai tertinggi + 1
}


$name = isset($_POST['NAMA']) ? htmlentities($_POST['NAMA']) : "";
$file = isset($_POST['FILE']) ? htmlentities($_POST['FILE']) : "";
$keterangan = isset($_POST['KET']) ? htmlentities($_POST['KET']) : "";

if (!empty($_POST['input_list_validate'])) {
  $query = mysqli_query($conn, "INSERT INTO tb_sk (NO_SK, NAMA, FILE, KET) 
    VALUES ('$no', '$name', '$file', '$keterangan')");

  if ($query) {
    $message = '<script>alert("Data berhasil dimasukkan"); window.location="../skkgb"</script>';
  } else {
    $message = '<script>alert("Data gagal dimasukkan")</script>';
  }
}
echo $message;
?>