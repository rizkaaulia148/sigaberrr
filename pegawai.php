<div class="col-lg bg-light mt-4">
    <div class="card">
        <div class="card-header">
            Halaman Pegawai
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a class="btn" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                        style="background-color: #68b92e; color: #ffffff; font-family: ''Teko', sans-serif;">Tambahkan
                        Data</a>
                </div>
            </div>
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
                                <button class="btn btn-info btn-sm me-2"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm me-2"><i class="bi bi-trash"></i></button>
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
                            <td>
                                <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>