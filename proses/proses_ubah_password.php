<?php
session_start();
include "connect.php";

$nip = (isset($_POST['NIP'])) ? intval($_POST['NIP']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
$passwordlama = (isset($_POST['passwordlama'])) ? md5(htmlentities($_POST['passwordlama'])) : "";
$passwordbaru = (isset($_POST['passwordbaru'])) ? md5(htmlentities($_POST['passwordbaru'])) : "";
$ulangipasswordbaru = (isset($_POST['ulangipasswordbaru'])) ? md5(htmlentities($_POST['ulangipasswordbaru'])) : "";

if (!empty($_POST['ubah_password_validate'])) {
    // Gunakan prepared statement untuk mencegah SQL Injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM tb_pegawai WHERE Email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $_SESSION['username_sigaber'], $passwordlama);
    mysqli_stmt_execute($stmt);
    $hasil = mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($hasil) {
        if ($passwordbaru === $ulangipasswordbaru) {
            // Gunakan prepared statement untuk update data
            $stmt = mysqli_prepare($conn, "UPDATE tb_pegawai SET Password=? WHERE Email = ?");
            mysqli_stmt_bind_param($stmt, "ss", $passwordbaru, $_SESSION['username_sigaber']);
            if (mysqli_stmt_execute($stmt)) {
                $message = '<script>alert("Password berhasil diganti");
                             window.history.back()</script>';
            } else {
                $message = '<script>alert("Password gagal diganti. Silahkan coba lagi.");
                            window.history.back()</script>';
            }
            mysqli_stmt_close($stmt);
        } else {
            $message = '<script>alert("Password baru tidak sama. Silahkan coba lagi.");
                        window.history.back()</script>';
        }
    } else {
        $message = '<script>alert("Password lama tidak sesuai. Silahkan coba lagi.");
                    window.history.back()</script>';
    }
} else {
    header('location:../home');
}
echo $message;
?>