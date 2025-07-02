<?php 
// session_start();
// if (empty($_SESSION['admin'])) {
//     echo '<script>window.location="login.php";</script>';
//     exit;
//}

session_start();
// Dokumentasi ini bebas diakses, tidak perlu login

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dokumentasi Program | KasirKu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f8f9fa, #e3f2fd); /* gradasi latar */
        }
        .section-title {
            font-weight: 600;
            font-size: 1.6rem;
            margin-top: 2rem;
            border-bottom: 3px solid #0d6efd;
            padding-bottom: 0.5rem;
            color: #0d6efd;
        }
        .animated-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 1.5rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;
        }
        .animated-section:hover {
            background: #f1f9ff;
            transform: translateY(-5px);
        }
        .output-placeholder {
            border: 2px dashed #ccc;
            padding: 1rem;
            text-align: center;
            color: #777;
            border-radius: 10px;
            background: #ffffff;
        }
        img {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-primary">📘 Dokumentasi Aplikasi KasirKu</h1>
        <p class="lead">Sistem Point of Sale (POS) berbasis web untuk toko ritel</p>
    </div>

    <div class="animated-section">
        <div class="section-title">📝 Deskripsi Program</div>
        <p>
            <strong>KasirKu</strong> adalah sistem kasir digital berbasis web yang dibangun dengan PHP dan Bootstrap. 
            Aplikasi ini dirancang untuk memudahkan pemilik toko dalam mengelola transaksi penjualan, 
            data barang, kategori, laporan penjualan, dan pengaturan toko secara cepat dan efisien.
        </p>
    </div>

    <div class="animated-section">
        <div class="section-title">⚙️ Fitur-Fitur Utama</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">✅ Login dan Autentikasi Admin</li>
            <li class="list-group-item">📦 Manajemen Data Barang</li>
            <li class="list-group-item">🗂️ Kategori Barang</li>
            <li class="list-group-item">💳 Transaksi Penjualan</li>
            <li class="list-group-item">📊 Laporan Penjualan</li>
            <li class="list-group-item">🛠️ Pengaturan Informasi Toko</li>
            <li class="list-group-item">🔒 Sistem Logout Aman</li>
        </ul>
    </div>

    <div class="animated-section">
        <div class="section-title">🎯 Target Pengguna</div>
        <p>
            Aplikasi <strong>KasirKu</strong> ditujukan untuk:
        </p>
        <ul>
            <li>Pemilik toko kecil hingga menengah (UKM)</li>
            <li>Kasir toko retail atau minimarket</li>
            <li>Mahasiswa/i yang sedang belajar pengembangan aplikasi kasir</li>
            <li>Developer yang ingin memodifikasi sistem POS sederhana</li>
        </ul>
    </div>

    <div class="animated-section">
        <div class="section-title">🖼️ Dokumentasi Gambar Output</div>
        <div class="output-placeholder">
            <img src="assets/img/pic/login.png" alt="login page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Create.png" alt="Create page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/dashboard.png" alt="Login page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Barang.png" alt="Barang page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Kategori.png" alt="Kategori page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Transaksi.png" alt="Transaksi page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Laporan.png" alt="Laporan page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <img src="assets/img/pic/Profile.png" alt="Profil page" class="img-fluid rounded shadow-sm" style="max-width: 600px;">
            <p>💡 Contoh: Halaman login, dashboard, transaksi penjualan, laporan, dll.</p>
        </div>
    </div>

    <div class="animated-section">
        <div class="section-title">📦 Repository</div>
        <p>
            Repo proyek ini tersedia di GitHub: <br>
            <a href="https://github.com/Armu14/Projek-POS" target="_blank">https://github.com/Armu14/Projek-POS</a>
        </p>
    </div>

    <div class="animated-section">
        <div class="section-title">🖼️ Proyek</div>
        <p>
            Link dibawah ini akan mengarahkan kita menuju Proyek yang telah saya buat: <br>
            <a href="login.php" target="_blank">Selamat Melihat dan Mengamati, Kita Belajar Bersama !!</a>
        </p>
    </div>
</div>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>