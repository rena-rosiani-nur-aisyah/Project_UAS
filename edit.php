<?php
include 'session.php';

$id_barang = $_POST["id_brg"];
$series_barang = $_POST["seriesbarang"];
$harga_barang = $_POST["hargabarang"];
$stock_barang = $_POST["stockbarang"];


include 'header.php';
?>


<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/IMG.jpg">

			<!-- membuat form -->
			<form action="config/editd.php" method="POST" class="col-lg-6">
				<h5>Selamat Berbelanja</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Jenis Cadar</label>
						<input type="text" class="form-control" name="seriesbarang" value="<?php echo $series_barang;?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">harga barang</label>
						<input type="text" class="form-control" name="hargabaranf" value="<?php echo $harga_barang?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Stock</label>
						<input type="text" class="form-control" name="stockbarang" value="<?php echo $stock_barang;?>">
					</div>
					
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_brg" value="<?php echo $id_barang;?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>

			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>