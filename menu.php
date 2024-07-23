<?php
// Simpan hak akses dari $hasil['HakAkses'] ke dalam variabel
$hakAkses = $hasil['HakAkses'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>SiGaBer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');

        body {
            font-family: 'Teko', sans-serif;
            font-size: 20px;
        }

        .navbar {
            background-color: #D9D9D9;
            padding: 8px 16px;
        }

        .navbar-brand {
            color: #68b92e;
        }

        .navbar-brand:visited {
            color: #68b92e;
        }

        .nav-link {
            color: #656363;
        }

        .link-green {
            color: #68b92e;
        }

        .link-grey {
            color: #656363;
        }

        .navbar-menu {
            display: flex;
            justify-content: flex-end;
        }

        .navbar-menu li {
            margin-left: 20px;
        }

        .navbar-brand {
            font-family: 'Teko', sans-serif;
            font-size: 30px;
        }

        .dropdown-item i {
            font-size: 16px;
        }

        .dropdown-item {
            font-size: 14px;
            background-color: white;
        }

        .bi-person-circle {
            margin-right: 0.5rem;
            color: black;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href=".">SiGaBer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-menu">
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo ((!isset($_GET['x']) || $_GET['x'] == 'home') ? 'link-green' : 'link-grey'); ?>"
                            aria-current="page" href="home">Home</a>
                    </li>
                    <?php if ($hakAkses == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'biodata') ? 'link-green' : 'link-grey'); ?>"
                                aria-current="page" href="biodata">Biodata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kgb') ? 'link-green' : 'link-grey'); ?>"
                                aria-current="page" href="kgb">KGB</a>
                        </li>
                    <?php } ?>
                    <?php if ($hakAkses == 0) { ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'listkgb') ? 'link-green' : 'link-grey'); ?>"
                                aria-current="page" href="listkgb">List KGB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'skkgb') ? 'link-green' : 'link-grey'); ?>"
                                aria-current="page" href="skkgb">SK KGB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'pegawai') ? 'link-green' : 'link-grey'); ?>"
                                aria-current="page" href="pegawai">Pegawai</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'about') ? 'link-green' : 'link-grey'); ?>"
                            aria-current="page" href="about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-circle"></i></i> <!-- Icon for a person -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah Password</a></li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Edit-->
    <div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ganti Password
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input disabled type="email" class="form-control" id="floatingInput"
                                        placeholder="Email pegawai" name="Email" required
                                        value="<?php echo $_SESSION['username_sigaber'] ?>">
                                    <label for="floatingInput">Email</label>
                                    <div class="invalid-feedback">Masukkan Email</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPasswordlama"
                                        name="passwordlama" required>
                                    <label for="floatingPasswordlama">Password Lama</label>
                                    <div class="invalid-feedback">Masukkan Password Lama</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPasswordbaru"
                                        name="passwordbaru" required>
                                    <label for="floatingPasswordbaru">Password Baru</label>
                                    <div class="invalid-feedback">Masukkan Password Baru</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassworcheck"
                                        name="ulangipasswordbaru" required>
                                    <label for="floatingPasswordcheck">Ulangi Password Baru</label>
                                    <div class="invalid-feedback">Masukkan Ulangi Password Baru</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-secondary" name="ubah_password_validate" value="1234"
                                data-bs-dismiss="modal"
                                style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir modal Edit-->
</body>

</html>