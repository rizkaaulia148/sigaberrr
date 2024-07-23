<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_sk");
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
                SK Kenaikan Gaji Berkala
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <a class="btn btn-custom me-2" data-bs-toggle="modal" data-bs-target="#ModalTambahSK"
                            style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Tambah
                            Data</a>
                        <button id="btnReport" class="btn btn-custom" style="font-size: 0.875rem;">Report</button>
                    </div>
                </div>

                <!-- Tabel dengan ID untuk digunakan dalam fungsi JavaScript -->
                <div class="table-responsive mt-2" id="printTable">
                    <table id="example" class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama</th>
                                <th scope="col">File</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row): ?>
                                <tr>
                                    <td><?php echo $row['NO_SK'] ?></td>
                                    <td><?php echo $row['NAMA'] ?></td>
                                    <td><?php echo $row['FILE'] ?></td>
                                    <td><?php echo $row['KET'] ?></td>
                                    <td>
                                        <a href="seepdf.php?no_sk=<?php echo $row['NO_SK'] ?>"
                                            class="btn btn-info btn-sm me-1 btn-lihat"><i class="bi bi-eye"></i></a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ModalHapusSK<?php echo $row['NO_SK'] ?>"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal Hapus -->
                                <div class="modal fade" id="ModalHapusSK<?php echo $row['NO_SK'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Kenaikan Gaji
                                                    Berkala</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" novalidate
                                                    action="proses/proses_delete_sk.php" method="POST">
                                                    <input type="hidden" value="<?php echo $row['NO_SK'] ?>" name="NO_SK">
                                                    <div class="col-lg-12">
                                                        Apakah Anda yakin ingin menghapus Data Kenaikan Gaji Berkala untuk
                                                        <b><?php echo $row['NAMA'] ?></b>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-danger"
                                                            name="input_sk_validate" value="1234"
                                                            data-bs-dismiss="modal">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir modal Hapus -->
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah file sk -->
    <div class="modal fade" id="ModalTambahSK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <select class="form-select" id="floatingSelectNama" name="NAMA" required>
                                        <option value="">Pilih Karyawan</option>
                                        <?php
                                        // Query untuk mengambil data NIP dan Nama dari tb_pegawai
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
                                    <input type="file" class="form-control" id="floatingFile" name="FILE" required>
                                    <label for="floatingFile">Unggah File PDF</label>
                                    <div class="invalid-feedback">Silakan unggah file PDF</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="KET"
                                        name="KET">
                                    <label for="floatingInput">Keterangan</label>
                                    <div class="invalid-feedback">Masukkan Keterangan</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-secondary" name="input_list_validate" value="1234"
                                data-bs-dismiss="modal"
                                style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir modal Tambah-->

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
                    <form class="needs-validation" novalidate action="proses/proses_delete_sk.php" method="POST">
                        <input type="hidden" value="<?php echo $row['NO_SK'] ?>" name="NO_SK">
                        <div class="col-lg-12">
                            Apakah anda yakin ingin menghapus Data Pegawai <b><?php echo $row['NAMA'] ?></b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger" name="input_sk_validate" value="1234"
                                data-bs-dismiss="modal">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir modal Hapus-->



    <!-- JavaScript -->
    <script>
        $(document).ready(function () {
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
                    { "data": "NO_SK" },
                    { "data": "NAMA" },
                    { "data": "FILE" },
                    { "data": "KET" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return "<a href='seepdf.php?no_sk=" + row.NO_SK + "' class='btn btn-info btn-sm me-1 btn-lihat'><i class='bi bi-eye'></i></a> <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#ModalHapusSK" + row.NO_SK + "'> <i class='bi bi-trash'></i></button>";
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