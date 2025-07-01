<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbname = 'db_toko';

try {
    $config = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    // Tampilkan output hanya jika file ini dibuka langsung
    if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo 'Sukses mengambil database';
    }

} catch (PDOException $e) {
    if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        echo 'KONEKSI GAGAL: ' . $e->getMessage();
    }
}

$view = 'fungsi/view/view.php';

// echo __FILE__;
// echo '<br>';
// echo $_SERVER['SCRIPT_FILENAME'];

?>
