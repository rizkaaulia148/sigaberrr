<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_listkgb");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kenaikan Gaji Berkala</title>

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>

    <style>
        .table {
            font-size: 1rem;
        }

        .btn-info.btn-sm,
        .btn-warning.btn-sm,
        .btn-danger.btn-sm,
        .btn-secondary.btn-sm {
            padding: 0.5rem 0.3rem;
            line-height: 1.5rem;
        }

        .btn-custom {
            background-color: #68b92e;
            color: #ffffff;
            font-family: 'Teko', sans-serif;
            font-size: 0.875rem;
        }

        .btn-custom:hover {
            background-color: #5a9c24;
            color: #ffffff;
        }

        .bi-eye,
        .bi-pencil,
        .bi-trash {
            font-size: 0.80rem;
            display: flex;
        }

        .form-select-hakakses {
            font-size: 1rem;
        }

        .form-floating {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="col-lg bg-light mt-4">
        <div class="card">
            <div class="card-header">
                List Kenaikan Gaji Berkala
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <a class="btn btn-custom me-2" data-bs-toggle="modal" data-bs-target="#ModalTambahList">Tambah
                            Data</a>
                        <button id="btnReport" class="btn btn-custom" style="font-size: 0.875rem;">Report</button>
                    </div>
                </div>

                <!-- Modal tambah pegawai-->
                <div class="modal fade" id="ModalTambahList" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_list.php"
                                    method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="floatingSelectNama" name="NAMA"
                                                    required>
                                                    <option value="">Pilih Karyawan</option>
                                                    <?php
                                                    $query_nip = mysqli_query($conn, "SELECT tb_pegawai.NIP, tb_pegawai.NAMA FROM tb_pegawai");
                                                    while ($row_nip = mysqli_fetch_assoc($query_nip)) {
                                                        echo "<option value='" . $row_nip['NIP'] . "'>" . $row_nip['NAMA'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingSelectNama">Nama Pegawai</label>
                                                <div class="invalid-feedback">Pilih Nama Pegawai</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" placeholder="Tanggal KGB"
                                                    name="TANGGALKGB" required>
                                                <label for="floatingInput">Tanggal KGB</label>
                                                <div class="invalid-feedback">Masukkan Tanggal KGB</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingGaji"
                                                    placeholder="Gaji pegawai (Rp)" name="GAJI" required>
                                                <label for="floatingGaji">Gaji Terkini (Rp)</label>
                                                <div class="invalid-feedback">Masukkan Gaji Terkini</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-custom" name="input_list_validate"
                                            value="1234">Simpan</button>
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
                    <div class="modal fade" id="ModalLihatList<?php echo $row['NO'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs
-5" id="exampleModalLabel">Detail list Kenaikan Gaji Berkala
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_list.php"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="number" class="form-control" id="floatingInput"
                                                        placeholder="NIP pegawai" name="NO"
                                                        value="<?php echo $row['NO'] ?>">
                                                    <label for="floatingInput">NO</label>
                                                    <div class="invalid-feedback">Masukkan NO</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingGaji"
                                                        placeholder="Gaji pegawai (Rp)" name="GAJI"
                                                        value="<?php echo number_format($row['GAJI'], 0, ',', '.'); ?>">
                                                    <label for="floatingGaji">Gaji Terkini (Rp)</label>
                                                    <div class="invalid-feedback">Masukkan Gaji Terkini</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama pegawai" name="NAMA"
                                                        value="<?php echo $row['NAMA'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">Masukkan Nama</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Tanggal KGB" name="TANGGALKGB"
                                                        value="<?php echo date('d F Y', strtotime($row['TANGGALKGB'])); ?>"
                                                        disabled>
                                                    <label for="floatingInput
">Tanggal KGB</label>
                                                    <div class="invalid-feedback">Masukkan Tanggal KGB</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir modal lihat-->

                    <!-- Modal Edit-->
                    <div class="modal fade" id="ModalEditList<?php echo $row['NO'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data pegawai BPS Kota
                                        Lhokseumawe
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_list.php"
                                        method="POST">
                                        <input type="hidden" value="<?php echo $row['NO'] ?>" name="NO">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama pegawai" name="NAMA" required
                                                        value="<?php echo $row['NAMA'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">Masukkan Nama</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingGaji"
                                                        placeholder="Gaji pegawai (Rp)" name="GAJI" required
                                                        value="<?php echo $row['GAJI'] ?>">
                                                    <label for="floatingGaji">Gaji Terkini (Rp)</label>
                                                    <div class="invalid-feedback">Masukkan Gaji Terkini</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" placeholder="Tanggal KGB"
                                                        name="TANGGALKGB" required value="<?php echo $row['TANGGALKGB'] ?>">
                                                    <label for="floatingInput">Tanggal KGB</label>
                                                    <div class="invalid-feedback">Masukkan Tanggal KGB</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-secondary" name="input_pegawai_validate"
                                                value="1234" data-bs-dismiss="modal"
                                                style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir modal Edit-->

                    <!-- Modal Hapus-->
                    <div class="modal fade" id="ModalHapusList<?php echo $row['NO'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data pegawai BPS Kota
                                        Lhokseumawe
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_list.php"
                                        method="POST">
                                        <input type="hidden" value="<?php echo $row['NO'] ?>" name="NO">
                                        <div class="col-lg-12">
                                            Apakah anda yakin ingin menghapus Data Pegawai <b><?php echo $row['NAMA'] ?></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-danger" name="input_pegawai_validate"
                                                value="1234" data-bs-dismiss="modal">Hapus</button>
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

                    <div class="table-responsive mt-2">
                        <table id="example" class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gaji Terkini</th>
                                    <th scope="col">TanggalKGB</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['NO'] ?></td>
                                        <td><?php echo $row['NAMA'] ?></td>
                                        <td>Rp. <?php echo number_format($row['GAJI'], 0, ',', '.'); ?></td>
                                        <td><?php echo $row['TANGGALKGB'] ?></td>
                                        <td>
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalLihatList<?php echo $row['NO'] ?>"><i
                                                    class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEditList<?php echo $row['NO'] ?>"><i
                                                    class="bi bi-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ModalHapusList<?php echo $row['NO'] ?>"><i
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
        $(document).ready(function () {
            // Initialize DataTable
            var table = $('#example').DataTable({
                dom: 'Bfrtip', // Menampilkan tombol di atas tabel
                buttons: [
                    {
                        extend: 'print',
                        text: 'Print Table', // Teks tombol
                        title: 'List Kenaikan Gaji Berkala', // Judul untuk tabel cetak
                        customize: function (win) {
                            $(win.document.body).find('table').addClass('display').css('font-size', '12px');
                        },
                        // Setting the class to hide the default print button
                        className: 'd-none',
                    }
                ],
                "columns": [
                    { "data": "NO" },
                    { "data": "NAMA" },
                    { "data": "GAJI" },
                    { "data": "TANGGALKGB" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return "<button class='btn btn-info btn-sm me-1' data-bs-toggle='modal' data-bs-target='#ModalLihatList" + row.NO + "'> <i class='bi bi-eye'></i></button> <button class='btn btn-warning btn-sm me-1' data-bs-toggle='modal' data-bs-target='#ModalEditList" + row.NO + "'> <i class='bi bi-pencil'></i></button> <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#ModalHapusList" + row.NO + "'> <i class='bi bi-trash'></i></button>";
                        }
                    }
                ]
            });

            // Add click event for the Report button
            $('#btnReport').on('click', function () {
                table.button(0).trigger();  // Trigger the first button (Print Table)
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