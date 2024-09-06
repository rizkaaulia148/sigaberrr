<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_pegawai");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK Kenaikan Gaji Berkala</title>

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

        @media print {

            #printTable table,
            #printTable th,
            #printTable td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        }
    </style>
</head>

<body>
    <div class="col-lg bg-light mt-4">
        <div class="card">
            <div class="card-header">
                Halaman Pegawai
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <a class="btn btn-custom me-2" data-bs-toggle="modal" data-bs-target="#ModalTambahPegawai" <?php echo (isset($_GET['x']) && $_GET['x'] == ' ') ? 'link-green' : 'link-grey'; ?>
                            style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Tambah
                            Pegawai</a>
                        <button id="btnReport" class="btn btn-custom" style="font-size: 0.875rem;">Report</button>
                    </div>
                </div>

                <!-- Modal tambah pegawai-->
                <div class="modal fade" id="ModalTambahPegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_pegawai.php"
                                    method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="NIP pegawai" name="NIP" required>
                                                <label for="floatingInput">NIP</label>
                                                <div class="invalid-feedback">Masukkan NIP</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Golongan pegawai" name="Golongan" required>
                                                <label for="floatingInput">Golongan</label>
                                                <div class="invalid-feedback">Masukkan Jabatan</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingPassword"
                                                    placeholder="Email pegawai" name="Email" required>
                                                <label for="floatingInput">Email</label>
                                                <div class="invalid-feedback">Masukkan Email</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-select form-select-hakakses"
                                                    aria-label="Default select example" name="HakAkses" required>
                                                    <option value="" selected disabled hidden>Pilih Hak Akses</option>
                                                    <option value="0">TU</option>
                                                    <option value="1">Pegawai</option>
                                                </select>
                                                <div class="invalid-feedback">Pilih Hak Akses</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Nama pegawai" name="Nama" required>
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">Masukkan Nama</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Jabatan pegawai" name="Jabatan" required>
                                                <label for="floatingInput">Jabatan</label>
                                                <div class="invalid-feedback">Masukkan Jabatan</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput"
                                                    placeholder="No WhatsApp pegawai" name="NoWA" required>
                                                <label for="floatingInput">No WhatsApp</label>
                                                <div class="invalid-feedback">Masukkan No WhatsApp</div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingPassword"
                                                    placeholder="Password pegawai" value="password" name="Password">
                                                <label for="floatingpassword">Password</label>
                                                <div class="invalid-feedback">Masukkan Password</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Alamat pegawai" name="Alamat" required>
                                            <label for="floatingInput">Alamat</label>
                                            <div class="invalid-feedback">Masukkan Alamat</div>
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
                <!-- Akhir modal tambah pegawai-->
                <?php
                foreach ($result as $row) {
                    ?>
                    <!-- Modal View-->
                    <div class="modal fade" id="ModalLihatPegawai<?php echo $row['NIP'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail data pegawai BPS Kota
                                        Lhokseumawe</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_pegawai.php"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="number" class="form-control" id="floatingInput"
                                                        placeholder="NIP pegawai" name="NIP"
                                                        value="<?php echo $row['NIP'] ?>">
                                                    <label for="floatingInput">NIP</label>
                                                    <div class="invalid-feedback">Masukkan NIP</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Jabatan pegawai" name="Jabatan"
                                                        value="<?php echo $row['Jabatan'] ?>">
                                                    <label for="floatingInput">Jabatan</label>
                                                    <div class="invalid-feedback">Masukkan Jabatan</div>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input disabled type="email" class="form-control" id="floatingPassword"
                                                        placeholder="Email pegawai" name="Email"
                                                        value="<?php echo $row['Email'] ?>">
                                                    <label for="floatingInput">Email</label>
                                                    <div class="invalid-feedback">Masukkan Email</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Hak Akses" name="HakAkses"
                                                        value="<?php echo $row['HakAkses'] == 0 ? 'TU' : 'Pegawai' ?>">
                                                    <label for="floatingInput">Hak Akses</label>
                                                    <div class="invalid-feedback">Masukkan Hak Akses</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama pegawai" name="Nama"
                                                        value="<?php echo $row['Nama'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">Masukkan Nama</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Golongan pegawai" name="Golongan"
                                                        value="<?php echo $row['Golongan'] ?>">
                                                    <label for="floatingInput">Golongan</label>
                                                    <div class="invalid-feedback">Masukkan Golongan</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="number" class="form-control" id="floatingInput"
                                                        placeholder="No WhatsApp pegawai" name="NoWA"
                                                        value="<?php echo $row['NoWA'] ?>">
                                                    <label for="floatingInput">No WhatsApp</label>
                                                    <div class="invalid-feedback">Masukkan No WhatsApp</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput"
                                                        placeholder="Alamat pegawai" name="Alamat"
                                                        value="<?php echo $row['Alamat'] ?>">
                                                    <label for="floatingInput">Alamat</label>
                                                    <div class="invalid-feedback">Masukkan Alamat</div>
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
                    <div class="modal fade" id="ModalEditPegawai<?php echo $row['NIP'] ?>" tabindex="-1"
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
                                    <form class="needs-validation" novalidate action="proses/proses_edit_pegawai.php"
                                        method="POST">
                                        <input type="hidden" value="<?php echo $row['NIP'] ?>" name="NIP">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput"
                                                        placeholder="NIP pegawai" name="NIP" required
                                                        value="<?php echo $row['NIP'] ?>">
                                                    <label for="floatingInput">NIP</label>
                                                    <div class="invalid-feedback">Masukkan NIP</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Jabatan pegawai" name="Jabatan" required
                                                        value="<?php echo $row['Jabatan'] ?>">
                                                    <label for="floatingInput">Jabatan</label>
                                                    <div class="invalid-feedback">Masukkan Jabatan</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingPassword"
                                                        placeholder="Email pegawai" name="Email" required
                                                        value="<?php echo $row['Email'] ?>">
                                                    <label for="floatingInput">Email</label>
                                                    <div class="invalid-feedback">Masukkan Email</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" aria-label="Default select example" required
                                                        name="HakAkses" NIP="">
                                                        <?php
                                                        $data = array("TU", "Pegawai");
                                                        foreach ($data as $key => $value) {
                                                            if ($row['HakAkses'] == $key + 1) {
                                                                echo "<option selected value='$key'> $value</option>";
                                                            } else {
                                                                echo "<option value='$key'> $value</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="floatingInput">Hak Akses</label>
                                                    <div class="invalid-feedback">Pilih Hak Akses</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama pegawai" name="Nama" required
                                                        value="<?php echo $row['Nama'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">Masukkan Nama</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Golongan pegawai" name="Golongan" required
                                                        value="<?php echo $row['Golongan'] ?>">
                                                    <label for="floatingInput">Golongan</label>
                                                    <div class="invalid-feedback">Masukkan Golongan</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput"
                                                        placeholder="No WhatsApp pegawai" name="NoWA" required
                                                        value="<?php echo $row['NoWA'] ?>">
                                                    <label for="floatingInput">No WhatsApp</label>
                                                    <div class="invalid-feedback">Masukkan No WhatsApp</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Alamat pegawai" name="Alamat" required
                                                        value="<?php echo $row['Alamat'] ?>">
                                                    <label for="floatingInput">Alamat</label>
                                                    <div class="invalid-feedback">Masukkan Alamat</div>
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
                    <div class="modal fade" id="ModalHapusPegawai<?php echo $row['NIP'] ?>" tabindex="-1"
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
                                    <form class="needs-validation" novalidate action="proses/proses_delete_pegawai.php"
                                        method="POST">
                                        <input type="hidden" value="<?php echo $row['NIP'] ?>" name="NIP">
                                        <div class="col-lg-12">
                                            Apakah anda yakin ingin menghapus Data Pegawai <b><?php echo $row['Nama'] ?></b>
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
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Golongan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No WhatsApp</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['NIP'] ?></td>
                                        <td><?php echo $row['Nama'] ?></td>
                                        <td><?php echo $row['Jabatan'] ?></td>
                                        <td><?php echo $row['Golongan'] ?></td>
                                        <td><?php echo $row['Email'] ?></td>
                                        <td><?php echo $row['NoWA'] ?></td>
                                        <td>
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalLihatPegawai<?php echo $row['NIP'] ?>"><i
                                                    class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEditPegawai<?php echo $row['NIP'] ?>"><i
                                                    class="bi bi-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ModalHapusPegawai<?php echo $row['NIP'] ?>"><i
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
            var table = $('#example').DataTable({
                dom: 'Bfrtip', // Menampilkan tombol di atas tabel
                buttons: [
                    {
                        extend: 'print',
                        text: 'Print Table', // Teks tombol
                        title: 'List Pegawai BPS Kota Lhokseumawe', // Judul untuk tabel cetak
                        customize: function (win) {
                            $(win.document.body).find('table').addClass('display').css('font-size', '12px');
                        },
                        // Setting the class to hide the default print button
                        className: 'd-none',
                    }
                ],
                "columns": [
                    { "data": "NIP" },
                    { "data": "Nama" },
                    { "data": "Jabatan" },
                    { "data": "Golongan" },
                    { "data": "Email" },
                    { "data": "NoWA" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return "<button class='btn btn-info btn-sm me-1' data-bs-toggle='modal' data-bs-target='#ModalLihatPegawai" + row.NIP + "'> <i class='bi bi-eye'></i></button> <button class='btn btn-warning btn-sm me-1' data-bs-toggle='modal' data-bs-target='#ModalEditPegawai" + row.NIP + "'> <i class='bi bi-pencil'></i></button> <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#ModalHapusPegawai" + row.NIP + "'> <i class='bi bi-trash'></i></button>";
                        }
                    }
                ]
            });

            // Add click event for the Report button
            $('#btnReport').on('click', function () {
                table.button(0).trigger();  // Trigger the first button (Print Table)
            });
        });

        function printTable() {
            var printContents = document.getElementById('printTable').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>