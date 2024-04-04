<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGaBer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
    <!-- Header-->
    <?php include "menu.php"; ?>
    <!-- End Header-->
    </nav>
    <div class="container-lg">
        <div class="row">
            <!-- Content -->
            <?php
            if (isset($_GET['x']) && $_GET['x'] == 'home') {
                include "home.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'listkgb') {
                include "listkgb.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'skkgb') {
                include "skkgb.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'pegawai') {
                include "pegawai.php";
            }
            ?>
            <!-- End Content -->
        </div>
        <!-- Footer -->
        <div class="fixed-bottom text-center mb-2">
            Copyright 2024 Rizka Aulia
        </div>
        <!-- End Footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>