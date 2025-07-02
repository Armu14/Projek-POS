<h3 class="mb-4">Dashboard</h3>

<?php 
	$sql = "SELECT * FROM barang WHERE stok <= 3";
	$row = $config->prepare($sql);
	$row->execute();
	$r = $row->rowCount();
	if($r > 0){
		echo "
		<div class='alert alert-warning'>
			<i class='fas fa-exclamation-triangle'></i> Ada <strong style='color:red;'>$r</strong> barang yang stoknya kurang dari 3. Silakan restok!
			<span class='float-right'><a href='index.php?page=barang&stok=yes'>Lihat Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";
	}
?>

<?php 
	$hasil_barang = $lihat->barang_row();
	$hasil_kategori = $lihat->kategori_row();
	$stok = $lihat->barang_stok_row();
	$jual = $lihat->jual_row();
?>

<div class="row">
	<?php
	$cards = [
		["title" => "Nama Barang", "value" => number_format($hasil_barang), "icon" => "fa-cubes", "color" => "primary", "link" => "index.php?page=barang"],
		["title" => "Stok Barang", "value" => number_format($stok['jml']), "icon" => "fa-chart-bar", "color" => "success", "link" => "index.php?page=barang"],
		["title" => "Telah Terjual", "value" => number_format($jual['stok']), "icon" => "fa-upload", "color" => "warning", "link" => "index.php?page=laporan"],
		["title" => "Kategori Barang", "value" => number_format($hasil_kategori), "icon" => "fa-bookmark", "color" => "info", "link" => "index.php?page=kategori"]
	];
	foreach ($cards as $card) {
		echo "
		<div class='col-md-3 mb-4'>
			<div class='card shadow border-left-{$card['color']}'>
				<div class='card-body'>
					<div class='d-flex justify-content-between align-items-center'>
						<div>
							<div class='text-xs font-weight-bold text-{$card['color']} text-uppercase mb-1'>{$card['title']}</div>
							<div class='h4 font-weight-bold text-gray-800'>{$card['value']}</div>
						</div>
						<div>
							<i class='fas {$card['icon']} fa-2x text-gray-300'></i>
						</div>
					</div>
					<a href='{$card['link']}' class='small text-{$card['color']} mt-2 d-block'>Lihat Detail <i class='fa fa-angle-double-right'></i></a>
				</div>
			</div>
		</div>
		";
	}
	?>
</div>

<!-- Agenda Harian -->
<div class="card mt-4 mb-4">
  <div class="card-header bg-dark text-white">
    <i class="fas fa-calendar-alt"></i> Agenda Rutin Harian
  </div>
  <div class="card-body">
    <ul class="mb-0">
      <li><strong>06:00</strong> - Cek Stok Gudang</li>
      <li><strong>06:30</strong> - Cek Harga Terbaru dan Update Data</li>
      <li><strong>07:00</strong> - Membuka Store</li>
      <li><strong>13:00</strong> - Menghitung Pendapatan Sift 1</li>
      <li><strong>13:30</strong> - Pergantian Sift</li>
      <li><strong>07:00 - 20:00</strong> - Tutup Store</li>
      <li><strong>20:10</strong> - Kirim laporan penjualan Harian</li>
      <li><strong>20:30</strong> - Cek Stok Gudang</li>
      <li><strong>21:00</strong> - Sistem Off (Penutupan pembukuan harian)</li>
    </ul>
  </div>
</div>