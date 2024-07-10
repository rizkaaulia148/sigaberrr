<?php
include "proses/connect.php";
// Pastikan session 'username_sigaber' sudah ter-set sebelumnya (setelah proses login)
$username = $_SESSION['username_sigaber'];

// Query untuk mengambil data pegawai yang sedang login
$query = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE Email = '$username'");
$row = mysqli_fetch_array($query);
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
            Biodata
        </div>
        <div class="card-body">
            <!-- Tombol Simpan -->
            <form class="needs-validation " novalidate action="proses/proses_edit_biodata.php" method="POST">
                <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-secondary" name="input_pegawai_validate" value="1234"
                            style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;">Simpan</button>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $row['NIP'] ?>" name="NIP">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInputNIP" placeholder="NIP pegawai"
                                name="NIP" required value="<?php echo $row['NIP'] ?>">
                            <label for="floatingInputNIP">NIP</label>
                            <div class="invalid-feedback">Masukkan NIP</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputName" placeholder="Nama pegawai"
                                name="Nama" required value="<?php echo $row['Nama'] ?>">
                            <label for="floatingInputName">Nama</label>
                            <div class="invalid-feedback">Masukkan Nama</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputJab" placeholder="Jabatan pegawai"
                                name="Jabatan" required value="<?php echo $row['Jabatan'] ?>">
                            <label for="floatingInputJab">Jabatan</label>
                            <div class="invalid-feedback">Masukkan Jabatan</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Tanggal KGB" name="TanggalKGB" required
                                value="<?php echo $row['TanggalKGB'] ?>">
                            <label for="floatingInput">Tanggal KGB</label>
                            <div class="invalid-feedback">Masukkan Tanggal KGB</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInputWa"
                                placeholder="No WhatsApp pegawai" name="NoWA" required
                                value="<?php echo $row['NoWA'] ?>">
                            <label for="floatingInputWa">No WhatsApp</label>
                            <div class="invalid-feedback">Masukkan No WhatsApp</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="Email pegawai"
                                name="Email" required value="<?php echo $row['Email'] ?>">
                            <label for="floatingEmail">Email</label>
                            <div class="invalid-feedback">Masukkan Email</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingGaji" placeholder="Gaji pegawai (Rp)"
                                name="GajiTerkini" required value="<?php echo $row['GajiTerkini'] ?>">
                            <label for="floatingGaji">Gaji Terkini (Rp)</label>
                            <div class="invalid-feedback">Masukkan Gaji Terkini</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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

    // Example decryption function (replace with your own decryption logic)
    function decryptPassword(hash) {
        // Implement your decryption logic here
        // For example, you can use AES decryption, base64 decoding, etc.
        // For demonstration purpose, returning the original hash value
        return hash;
    }
</script>