<?php
include "proses/connect.php";
// Pastikan session 'username_sigaber' sudah ter-set sebelumnya (setelah proses login)
$username = $_SESSION['username_sigaber'];

// Query untuk mengambil data pegawai yang sedang login
$queryPegawai = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE Email = '$username'");
$rowPegawai = mysqli_fetch_array($queryPegawai);

// Ambil NIP pegawai yang sedang login
$nipPegawai = $rowPegawai['NIP'];

// Query untuk mengambil data SK pegawai yang sesuai dengan NIP pegawai yang sedang login
$querySK = mysqli_query($conn, "SELECT * FROM tb_sk WHERE NIP = '$nipPegawai'");
$result = [];
while ($record = mysqli_fetch_array($querySK)) {
    $result[] = $record;
}

// Query untuk mengambil data TANGGALKGB dan GAJI dari tabel tb_listkgb
$queryKGB = mysqli_query($conn, "SELECT TANGGALKGB, GAJI FROM tb_listkgb WHERE NIP = '$nipPegawai' ORDER BY TANGGALKGB DESC LIMIT 1");
$rowKGB = mysqli_fetch_array($queryKGB);

// Cek apakah data KGB ada
if ($rowKGB) {
    $tanggalKGB = $rowKGB['TANGGALKGB'];
    $gajiKGB = $rowKGB['GAJI'];

    // Ubah $tanggalKGB ke dalam format timestamp
    $tanggalKGB_timestamp = strtotime($tanggalKGB);

    // Hitung tanggal 10 sebulan sebelumnya
    $tanggalSepuluhHariSebulanSebelumnya = date('d-m-Y', strtotime('-1 month', $tanggalKGB_timestamp));
} else {
    $tanggalKGB = null;
    $gajiKGB = null;
    $tanggalSepuluhHariSebulanSebelumnya = "Data belum di input";
}
?>

<!-- Include jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Include jQuery and jQuery UI JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<style>
    :root {
        --bg: #68b92e;
    }

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

    .modal-title {
        text-align: center;
    }

    .modaltext {
        text-align: center;
        /* Posisi teks di tengah */
        font-size: 16px;
        /* Ukuran teks 12px */
        color: #000000;
        /* Warna teks hitam */
        font-family: 'Teko', sans-serif;
    }

    .btn-sk {
        text-align: center;
    }

    .btn-cetak-sk {
        background-color: #68b92e;
        color: #ffffff;
        transition: background-color 0.3s ease;
    }

    .btn-cetak-sk:hover {
        background-color: #5DA42A;
        color: #ffffff;
        /* Warna yang sama saat hover */
    }
</style>

<div class="col-lg bg-light mt-4">
    <div class="card">
        <div class="card-header">
            KGB
        </div>
        <div class="card-body mb-4">
            <div>
                <?php if ($tanggalKGB && $gajiKGB): ?>
                    <p>Tanggal KGB Sebelumnya : <?php echo $tanggalKGB ?></p>
                    <p>Gaji Sebelumnya : Rp. <?php echo number_format($gajiKGB, 0, ',', '.') ?></p>
                <?php else: ?>
                    <p>Tanggal KGB Sebelumnya : Data KGB belum di input</p>
                    <p>Gaji Sebelumnya : Data KGB belum di input</p>
                <?php endif; ?>
            </div>

            <div>
                <p>
                    <?php if ($tanggalKGB && $gajiKGB): ?>
                        Tanggal KGB Selanjutnya: <a href="#" id="see-more-link">lihat lebih</a>
                    <?php else: ?>
                        Tanggal KGB Selanjutnya: <a href="#" id="see-more-link">lihat lebih</a>
                    <?php endif; ?>
                </p>
            </div><br><br>

            <?php
            if (empty($result)) {
                echo "Data SK tidak tersedia untuk pegawai ini.";
            } else {
                ?>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
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
                            <?php foreach ($result as $row) { ?>
                                <tr>
                                    <td><?php echo $row['NO_SK'] ?></td>
                                    <td><?php echo $row['NAMA'] ?></td>
                                    <td><?php echo $row['FILE'] ?></td>
                                    <td><?php echo $row['KET'] ?></td>
                                    <td>
                                        <a href="seepdf.php?no_sk=<?php echo $row['NO_SK'] ?>"
                                            class="btn btn-info btn-sm me-1 btn-lihat"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Modal untuk melihat lebih detail -->
<div class="modal fade" id="ModalLihat" tabindex="-1" aria-labelledby="ModalLihatLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modaltext mb-2">
                <h4 class="modal-title mt-4" id="ModalLihatLabel">Status Kenaikan Gaji Berkala</h4><br>
                <p>Selamat <b><?php echo $rowPegawai['Nama'] ?></b></p>
                <p>Anda dapat mengurus berkas KGB (Kenaikan Gaji Berkala) <br>atau menghubungi pihak Tata Usaha untuk
                    info lebih lanjut <br><br> Maksimal pengajuan KGB dapat dilakukan sampai dengan <br> Tanggal
                    <b><?php echo $tanggalSepuluhHariSebulanSebelumnya ?></b></b>
            </div>
            <div class="btn-sk mb-4">
                <button id="btn-lihat-sk" type="button" class="btn btn-bg btn-cetak-sk mt-3"
                    onclick="redirectLihatSK('<?php echo $rowPegawai['NIP']; ?>')">Lihat SK</button>
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Script untuk menangani klik pada tautan "see more"
        $('#see-more-link').click(function () {
            $('#ModalLihat').modal('show'); // Membuka modal
        });
    });

    function redirectLihatSK(no_sk) {
        // Redirect ke halaman pdfskpegawai.php dengan no_sk sebagai parameter
        window.location.href = 'pdfskpegawai.php';
    }
</script>