<?php
include 'config/data_pembeli.php';
include 'header.php';
include 'session.php';
?>


<a href="config/logout.php"></a>
<div class ="container">
<table id="data_barang" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
    <th>series barang</th>
    <th>harga barang</th>
    <th>stock barang</th>
    <th>aksi</th>
</tr>
</thead>

<tbody>
<?php while ($row = $q->fetch()):
    $id = $row['id'];
    $seriesbarang = $row['series_barang'];
    $hargabarang  = $row['harga_barang'];
    $stockbarang = $row['stock_barang'];
?>
<tr>
    <td><?php echo $seriesbarang;?></td>
    <td><?php echo $hargabarang;?></td>
    <td><?php echo $stockbarang;?></td>
    <td>
    <!-- form hapus -->
    <form action="edit.php" method="POST">
    <input type="hidden" name="id_brg" value="<?php echo $id;?>"/>
    <input type="hidden" name="seriesbarang" value="<?php echo $seriesbarang;?>"/>
    <input type="hidden" name="hargabarang" value="<?php echo $hargabarang;?>"/>
    <input type="hidden" name="stockbarang" value="<?php echo $stockbarang;?>"/>
    <form action="view.php" method="POST">
            <input type="hidden" name="id_brg" value="<?php echo $id; ?>" />
            <button type="submit" class="btn btn-success">Detail View</button>
    </form>

    <!-- form delete -->
    <form action="config/hapus.php" method="POST">
    <input type="hidden" name="id_brg" value="<?php echo $id;?>"/>
    <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    </td>
</tr>
<?php endwhile;?>
</tbody>
</table>
</div>
<script>
$(document).ready(function(){
$('#databarang').DataTable(
    {
        "aLengthMenu":[
        [5,  10, 25, -1],
        [5, 10, 25, "All"]
        ],
        "iDisplayLength":5
    }
);
});
</script>