<?php
session_start();
if (empty($_SESSION['username_sigaber'])) {
    header('location:login');
}
?>

<!doctype html>
<html lang="en">

<style>
    .bi {
        font-size: 2rem;
        margin: 0 5px;
        color: #000;
    }

    .social-icon {
        font-size: 1rem;
        margin: 0 10px;
        color: #000;
    }

    .fixed-bottom {
        font-size: 1rem;
        background-color: #D9D9D9;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGaBer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 500px">
    <!-- Header-->
    <?php include "menu.php"; ?>
    <!-- End Header-->
    </nav>
    <div class="container-lg">
        <div class="row">
            <!-- Content -->
            <?php
            include $page;
            ?>
            <!-- End Content -->
        </div>
        <!-- Footer -->
        <div class="fixed-bottom text-center mb-2">
            <span>Site designed by Rizka Aulia. App by <a href="https://icons8.com/">icons8</a>.</span>
        </div>
        <!-- End Footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>