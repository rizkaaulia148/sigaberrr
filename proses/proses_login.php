<?php
session_start();
include "connect.php";

$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['submit_validate'])) {
    if (empty($username) || empty($password)) {
        echo "<script>
                alert('Silahkan mengisi informasi login anda');
                window.location = '../login';
              </script>";
    } else {
        $query = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE email = '$username' AND Password = '$password'");
        $hasil = mysqli_fetch_array($query);

        if ($hasil) {
            $_SESSION['username_sigaber'] = $username;
            $_SESSION['level_sigaber'] = $hasil['HakAkses'];
            header('Location: ../home');
        } else {
            echo "<script>
                    alert('Username atau password yang anda masukan salah');
                    window.location = '../login';
                  </script>";
        }
    }
}
?>