<?php
include "connect.php";
$no = (isset($_POST['NO'])) ? htmlentities($_POST['NO']) : "";

if (!empty($_POST['input_pegawai_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_listkgb WHERE NO='$no' ");
    if (!$query) {
        $message = '<script>alert("Data gagal dihapus")</script>';
    } else {
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../listkgb"</script>
                    </script>';
    }
}
echo $message;
?>