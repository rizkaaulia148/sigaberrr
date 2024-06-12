<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <style>
        .card-background {
            background-image: url('img/yooo.png');
            background-size: cover;
            background-position: center;
            height: 300px;
            /* Sesuaikan tinggi foto dengan kebutuhan */
            position: relative;
            text-align: center;
            color: white;
        }

        .card-title {
            font-family: 'Teko', sans-serif;
            font-size: 30px;
            margin-top: 30px;
            /* Jarak antara teks dan foto */
            color: black;
            /* Warna teks hitam */
            display: flex;
            /* Menambahkan display: flex */
            align-items: center;
            /* Menempatkan item secara vertikal di tengah */
            justify-content: center;
            /* Menempatkan item secara horizontal di tengah */
        }

        .button-back {
            position: absolute;
            top: 330px;
            /* Jarak tombol dari atas */
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 14px 30px;
            /* Ubah padding tombol sesuai kebutuhan */
            background-color: #68b92e;
            /* Warna background tombol */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="col-lg bg-light">
        <h1 class="card-title">Alur Pengajuan Kenaikan Gaji Berkala</h1>
        <div class="card-body card-background">
            <button class="button-back"
                style="background-color: #68b92e; color: #ffffff; font-family: 'Teko', sans-serif;"
                onclick="window.location.href='home'">Back</button>
        </div>
    </div>
</body>

</html>