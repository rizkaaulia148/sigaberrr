<?php
include "connect.php";
$nip = (isset($_POST['N0_SK'])) ? htmlentities($_POST['N0_SK']) : "";

if (!empty($_POST['input_sk_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_sk WHERE N0_SK='$nosk' ");
    if (!$query) {
        $message = '<script>alert("Data gagal dihapus")</script>';
    } else {
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../skkgb"</script>
                    </script>';
    }
}
echo $message;
?>