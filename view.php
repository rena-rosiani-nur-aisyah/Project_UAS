<?php
include 'session.php';
$id_barang = $_POST["id_brg"];
require_once 'config/koneksi.php';

try{
$sql = "SELECT data_pembeli.id, data_pembeli.Nama_lengkap, data_pembeli.Alamat, 
data_pembeli.No_Handphone, data_pembeli.Kode Barang, data_pembeli.Jumlah_Pembelian, 
FROM data_pembeli RIGHT JOIN data_barang ON data_pembeli.id = data_barang.id WHERE data_barang.id=?";
$q = $database_connection->prepare($sql);
$q->execute([$id_barang]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $seriesbarang = $row['series_barang'];
    $hargabarang  = $row['harga_barang'];
    $stockbarang = $row['stock_barang'];
    $namalengkap = $row['Nama_lengkap'];
    $alamat = $row['Alamat'];
    $nohandphone  = $row['No_Handphone'];
    $kodebarang = $row['kode_barang'];
    $jumlahpembelian = $row['Jumlah_Pemebelian'];
    if ($st == "0"){
        $status = "Pembeli";
    }else if ($st == "1"){
        $status = "Admin";
    }else if (is_null($st)){
        $status = "Data Belum Lengkap! Segera Hubungi admin untuk melakukan update data!";
    }    
}

include 'header.php';
?>


<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $photo;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $pekerjaan;?></p>
                      <p class="text-muted font-size-sm"><?php echo $perusahaan;?></p><br/><br/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Series Barang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $seriesbarang;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Harga Barang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $hargabarang;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Stock Barang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $stockbarang;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kode Barang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kodebarang;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jumlah_Pemebelian</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $jumlahpembelian;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No No_Handphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $nohandphone;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>