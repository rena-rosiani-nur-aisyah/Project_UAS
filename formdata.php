<?php
include 'session.php';
include "header.php";
?>

<body>
<style>
		body{
			background-image: url("registtt.jpg");
			background-size: cover;
			background-attachment: fixed;
            font-family: sans-serif;
		}
		label{
			font-size: 15pt;
    		color: white;
		}
		h5{
			font-family: cursive;
			font-size: 20px;
			color: white;
		}
		p{
			font-family: sans-serif;
			color: white;
		}
	</style>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			<!-- membuat form -->
			<form action="config/barang.php" method="POST" class="col-lg-6">
				<h5>Silahkan Isi Data barang</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Series Barang</label>
						<input type="text" class="form-control" name="seriesbarang" placeholder="Series barang">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Harga Barang</label>
						<input type="text" class="form-control" name="hargabarang" placeholder="Harga Barang">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Stock Barang</label>
						<input type="text" class="form-control" name="stockbarang" placeholder="Stock Barang">
					</div>
				</div>
				<!-- end baris 2 pada form -->
				<button type="submit" class="btn btn-primary">Tambah</button>
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>