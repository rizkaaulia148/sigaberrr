<nav class="navbar navbar-expand-lg sticky-top" style="background-color:#6FBA2C;">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-graph-up-arrow"></i>SIGaBer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') ? 'link-light' : 'link-dark'; ?>"
                        aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'listkgb') ? 'link-light' : 'link-dark'; ?>"
                        aria-current="page" href="listkgb">List KGB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'skkgb') ? 'link-light' : 'link-dark'; ?>"
                        aria-current="page" href="skkgb">SK KGB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pegawai') ? 'link-light' : 'link-dark'; ?>"
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