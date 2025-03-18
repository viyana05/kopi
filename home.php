<?php
$kopi = array(
    array("Pilih Paket A", "Rasa Original", 10000),
    array("Pilih Paket B", "Rasa Original+susu", 15000),
    array("Pilih Paket C", "Rasa Original+susu+topping", 20000),
    array("Pilih Paket D", "Rasa Original+susu+topping+boba", 25000),
);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter encoding halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat halaman responsif -->
    <title>Daftar Paket Wisata</title> <!-- Judul halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menggunakan Bootstrap untuk tampilan yang lebih rapi -->
    <style>
        .btn-black {
            background-color: black;
            border-color: black;
            color: white;
        }

        .card h6 {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav style="background-color:  #8B4513;"> <!-- Navigasi dengan latar belakang gelap -->
        <div class="container-fluid"> <!-- Container yang memenuhi lebar layar -->
            <div class="d-flex justify-content-between w-100"> <!-- Membuat area di dalam navbar memenuhi lebar layar dan menyusun item ke kiri dan kanan -->
                <!-- Menu kiri -->
                <div class="d-flex">
                    <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="#">Home</a> <!-- Link ke Beranda -->
                    <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="transaksi.php">Transaksi</a> <!-- Link ke halaman transaksi -->
                </div>
                <!-- Menu kanan (Logout) -->
                <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="index.php">Logout</a> <!-- Link untuk logout -->
            </div>
        </div>
    </nav>
    <br>

    <!-- Content utama -->
    <div class="mb-4 p-0">
        <div class="container-fluid p-0">
            <div class="row g-2"> <!-- Menggunakan row dan grid system -->
                <div class="col-md-6"> <!-- Kolom kiri -->
                    <img src="img/club.jpg" class="img-fluid w-100" alt="Banner Kiri" style="height: 300px; object-fit: cover; border-radius: 10px;">
                </div>
                <div class="col-md-6"> <!-- Kolom kanan -->
                    <img src="img/maxpro.jpg" class="img-fluid w-100" alt="Banner Kanan" style="height: 300px; object-fit: cover; border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>



    <!-- Daftar Produk Co Kreatif -->
    <div class="container-fluid mt-5">
        <h2 class="text-center mb-4">Daftar Paket Coppy Drinks</h2>
        <div class="row justify-content-center">
            <?php foreach ($kopi as $index => $paket) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 text-white d-flex" style="height: 350px; background-color: #8B4513; border: none;">
                        <div class="card-body d-flex flex-column justify-content-center text-start px-4">
                            <!-- Mengecilkan teks menggunakan kelas Bootstrap -->
                            <p class="card-text fs-7"><?= $paket[0] ?></p>
                            <h6><?= $paket[1] ?></h6>
                            <p class="card-text fs-7"><strong>Rp <?= number_format($paket[2], 0, ',', '.') ?></strong></p>
                        </div>
                    </div>
                    <!-- Tombol di luar card -->
                    <div class="d-grid mt-2">
                        <a href="transaksi.php?id=<?= $index ?>" class="btn text-white" style="background-color: #654321; font-size: 14px;">Pilih Produk</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

</html>