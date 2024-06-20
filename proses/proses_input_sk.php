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

// Periksa apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ambil data dari form
  $name = isset($_POST['NAMA']) ? htmlentities($_POST['NAMA']) : "";
  $keterangan = isset($_POST['KET']) ? htmlentities($_POST['KET']) : "";
  $file = $_FILES['FILE'];

  // Validasi file
  if ($file['error'] === UPLOAD_ERR_OK) {
    // Generate nama file unik
    $file_name = uniqid() . '_' . basename($file['name']);

    // Path untuk menyimpan file di direktori
    $upload_path = "../berkas/" . $file_name; // Gunakan "berkas/" sesuai instruksi

    // Pindahkan file ke direktori
    if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
      $message = '<script>alert("Gagal memindahkan file. Periksa perizinan direktori.");</script>';
      echo $message;
      exit;
    }

    // Simpan data ke database (termasuk path file)
    $query = mysqli_query($conn, "INSERT INTO tb_sk (NO_SK, NAMA, FILE, KET) VALUES ('$no', '$name', '$file_name', '$keterangan')");

    if ($query) {
      $message = '<script>alert("Data berhasil dimasukkan"); window.location="../skkgb"</script>';
    } else {
      $message = '<script>alert("Data gagal dimasukkan")</script>';
    }
  } else {
    // Tampilkan pesan kesalahan
    $message = '<script>alert("Terjadi kesalahan saat mengunggah file.")</script>';
  }
}
echo $message;
?>