<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_sk");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!-- Include jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Include jQuery and jQuery UI JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

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

    .form-select-hakakses {
        font-size: 1.rem;
    }

    .form-floating {
        font-size: 1rem;
    }
</style>

<div class="col-lg bg-light mt-4">
    <div class="card">
        <div class="card-header">
            List Kenaikan Gaji Berkala
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a class="btn" data-bs-toggle="modal" data-bs-target="#ModalTambahSK" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                        style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Tambah
                        Data</a>
                </div>
            </div>

            <!-- Modal tambah file sk-->
            <div class="modal fade" id="ModalTambahSK" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah File SK</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_sk.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama pegawai" name="NAMA" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">Masukkan Nama</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="floatingFile" name="FILE"
                                                required>
                                            <label for="floatingFile">Unggah File PDF</label>
                                            <div class="invalid-feedback">Silakan unggah file PDF</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="KET"
                                                name="KET" required>
                                            <label for="floatingInput">Keterangan</label>
                                            <div class="invalid-feedback">Masukkan Keterangan</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-secondary" name="input_list_validate"
                                        value="1234" data-bs-dismiss="modal"
                                        style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah pegawai-->
            <?php
            foreach ($result as $row) {
                ?>
                <!-- Modal View-->
                <div class="modal fade" id="ModalLihatList<?php echo $row['NO_SK'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail list Kenaikan Gaji Berkala</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_list.php"
                                    method="POST">
                                    <!-- Isi form di sini -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal lihat-->


                <!-- Modal Hapus-->
                <div class="modal fade" id="ModalHapusSK<?php echo $row['NO_SK'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data pegawai BPS Kota Lhokseumawe
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_sk.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['NO_SK'] ?>" name="NO_SK">
                                    <div class="col-lg-12">
                                        Apakah anda yakin ingin menghapus Data Pegawai <b><?php echo $row['NAMA'] ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger" name="input_sk_validate" value="1234"
                                            data-bs-dismiss="modal">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Hapus-->
                <?php
            }
            if (empty($result)) {
                echo "Data User tidak ada";
            } else { ?>

                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama</th>
                                <th scope="col">File</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['NO_SK'] ?></td>
                                    <td><?php echo $row['NAMA'] ?></td>
                                    <td><?php echo $row['FILE'] ?></td>
                                    <td><?php echo $row['KET'] ?></td>
                                    <td>
                                        <button class="btn btn-info btn-sm me-1 btn-lihat"
                                            data-no-sk="<?php echo $row['NO_SK'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ModalHapusSK<?php echo $row['NO_SK'] ?>"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk mengarahkan ke halaman "seepdf.php"
    function redirectToSeePdf(noSk) {
        window.location.href = `seepdf.php?no_sk=${noSk}`;
    }

    // Tambahkan event listener pada tombol "Lihat"
    document.querySelectorAll('.btn-lihat').forEach(btn => {
        btn.addEventListener('click', function () {
            const noSk = this.dataset.noSk;
            redirectToSeePdf(noSk);
        });
    });
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>