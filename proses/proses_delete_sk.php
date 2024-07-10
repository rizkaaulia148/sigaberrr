<?php
include "connect.php";
$nosk = (isset($_POST['NO_SK'])) ? htmlentities($_POST['NO_SK']) : "";

if (!empty($_POST['input_sk_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_sk WHERE NO_SK='$nosk' ");
    if (!$query) {
        $message = '<script>alert("Data gagal dihapus")</script>';
    } else {
        $message = '<script>alert("Data berhasil dihapus"); window.location="../skkgb"</script>';
    }
}
echo $message;
?>