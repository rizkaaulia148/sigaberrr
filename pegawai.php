<style>
    .table {
        font-size: 1rem;
    }

    .btn-info.btn-sm,
    .btn-warning.btn-sm,
    .btn-danger.btn-sm {
        padding: 0.5rem 0.3rem;
        line-height: 1.5rem;
    }

    .bi-eye,
    .bi-pencil,
    .bi-trash {
        font-size: 0.80rem;
        display: flex;
    }
</style>

<div class="col-lg bg-light mt-4">
    <div class="card">
        <div class="card-header">
            Halaman Pegawai
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a class="btn" data-bs-toggle="modal" data-bs-target="#ModalTambahPegawai" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                        style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Tambah
                        Pegawai</a>
                </div>
            </div>

            <!-- Modal tambah pegawai-->
            <div class="modal fade" id="ModalTambahPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a class="btn" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                                style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah pegawai-->
            <!-- Modal liat user-->
            <div class="modal fade" id="ModalLihatPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pegawai BPS Kota Lhokseumawe</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a class="btn" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                                style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal lihat-->
            <!-- Modal Edit user-->
            <div class="modal fade" id="ModalEditPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pegawai BPS Kota Lhokseumawe
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a class="btn" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                                style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal edit user-->
            <!-- Modal hapus user-->
            <div class="modal fade" id="ModalHapusPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Pegawai BPS Kota Lhokseumawe
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a class="btn" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                                style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal hapus user-->
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Gaji Terkini</th>
                            <th scope="col">TanggalKGB</th>
                            <th scope="col">Email</th>
                            <th scope="col">No WhatsApp</th>
                            <th scope="col">Hak Akses</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                    data-bs-target="#ModalLihatPegawai"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                    data-bs-target="#ModalEditPegawai"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#ModalHapusPegawai"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>