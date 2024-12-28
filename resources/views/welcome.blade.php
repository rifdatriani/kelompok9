<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARS University</title>
    <style>
        body {
            background: linear-gradient(to bottom, #87ceeb, #ffffff, #87ceeb);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            padding: 100px 15%; /* Menggunakan persentase untuk responsivitas */
            font-size: 16px;
            font-weight: bold;
            color: #333;
            position: absolute; /* Menempel pada bagian atas layar */
            top: 0;
            width: 70%; /* Memastikan lebar penuh */
        }


        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100vh; /* Mengisi tinggi penuh layar */
            max-width: 1200px; /* Membatasi lebar maksimal */
            margin: auto;
            padding: 0 20px;
        }

        .content {
            max-width: 50%;
        }

        .stitle {
            font-size: 20px; /* Sedikit lebih besar agar terlihat jelas */
            margin-bottom: 15px; /* Memberikan jarak lebih proporsional */
            color: #555;
            line-height: 1.5; /* Menambah spasi antar baris */
        }

        .title {
            font-size: 48px; /* Ukuran yang lebih besar untuk tajuk utama */
            font-weight: bold;
            margin-bottom: 20px; /* Tambahkan jarak agar tidak terlalu rapat */
            color: #000;
            line-height: 1.2; /* Line height untuk proporsional */
        }

        .subtitle {
            font-size: 20px; /* Sedikit lebih besar agar konsisten */
            color: #777;
            margin-bottom: 40px; /* Menambah jarak di bawah subtitle */
            line-height: 1.5; /* Menambah kenyamanan membaca */
            text-align: justify; /* Jika ingin rata kiri-kanan */
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .button {
            display: inline-block;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            border: 2px solid #000;
            border-radius: 5px;
            text-decoration: none;
            color: #000;
            background: #fff;
            transition: background 0.3s, color 0.3s;
        }

        .button:hover {
            background: #000;
            color: #fff;
        }

        .logo {
            max-width: 45%;
            display: flex;
            justify-content: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        /* Responsif untuk layar lebih kecil */
        @media (max-width: 1000px) {
            .container {
                flex-direction: column;
                text-align: center;
                height: auto;
                gap: 100px;
                margin-top: 150px; /* Menambahkan jarak di bawah top-bar */
                padding: 0 20px; /* Memberikan padding agar konten tidak menempel ke tepi layar */
            }

            .content {
                max-width: 80%; /* Memperbesar lebar konten untuk responsif */
                margin: auto; /* Centering konten secara horizontal */
                text-align: center; /* Pastikan teks dalam konten rata tengah */
            }

            .logo {
                max-width: 70%;
                margin: auto; /* Centering logo secara horizontal */
            }

            .buttons {
                justify-content: center; /* Menyesuaikan tombol agar rata tengah */
            }

            .title {
                font-size: 32px; /* Mengurangi ukuran font agar lebih pas */
                text-align: center; /* Rata tengah teks judul */
            }

            .subtitle {
                font-size: 16px; /* Ukuran font yang lebih kecil */
                text-align: center; /* Rata tengah teks subtitle */
            }
        }

    </style>
</head>
<body>
    <div class="top-bar">
        <div>Profile Pribadi</div>
        <div>by Kelompok 9</div>
    </div>
    <div class="container">
        <div class="content">
            <p class="stitle">Hallo, Selamat Datang</p>
            <h1 class="title">Nikmati Perjalanan Digital Ini!</h1>
            <p class="subtitle">Informatika: Antara Logika dan Imajinasi</p>
            <div class="buttons">
                <a href="{{ route('daftar') }}" class="button">Daftar</a>
                <a href="{{ route('masuk') }}" class="button">Masuk</a>
            </div>
        </div>
        <div class="logo">
            <img src="{{ asset('assets/ars.png') }}" alt="Logo ARS University">
        </div>
    </div>
</body>
</html>
