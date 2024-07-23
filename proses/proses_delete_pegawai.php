<?php
include "connect.php";
$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : 0;

if (!empty($_POST['input_pegawai_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_pegawai WHERE NIP='$nip' ");
    if (!$query) {
        $message = '<script>alert("Data gagal dihapus")</script>';
    } else {
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../pegawai"</script>
                    </script>';
    }
}
echo $message;
?>