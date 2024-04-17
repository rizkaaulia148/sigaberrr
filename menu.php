<!DOCTYPE html>
<html>

<head>
    <title>SiGaBer</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');

        body {
            font-family: 'Teko', sans-serif;
            font-size: 20px;
        }

        .navbar {
            background-color: #D9D9D9;
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="home">SiGaBer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-menu">
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') ? 'link-green' : 'link-grey'; ?>"
                            aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'listkgb') ? 'link-green' : 'link-grey'; ?>"
                            aria-current="page" href="listkgb">List KGB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'skkgb') ? 'link-green' : 'link-grey'; ?>"
                            aria-current="page" href="skkgb">SK KGB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pegawai') ? 'link-green' : 'link-grey'; ?>"
                            aria-current="page" href="pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>