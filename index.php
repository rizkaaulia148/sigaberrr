<?php
session_start();

if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'listkgb') {
    $page = "listkgb.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'skkgb') {
    $page = "skkgb.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pegawai') {
    if ($_SESSION['level_sigaber'] == 1) {
        $page = "pegawai.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'about') {
    $page = "about.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'alurKGB') {
    $page = "alurkgb.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    $page = "home.php";
    include "main.php";
}
?>