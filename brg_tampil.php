<?php

use App\Barang as Barang;

$brg = new Barang;
$rows = $brg->tampil();

?>

<h2>Data Barang Masuk</h2>

<a href="index.php?hal=brg_input">Tambah Barang</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>SUPPLIER</td>
        <td>KATEGORI</td>
        <td>NAMA</td>
        <td>JUMLAH</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['sup_nama']; ?></td>
        <td><?php echo $row['kat_nama']; ?></td>
        <td><?php echo $row['brg_nama']; ?></td>
        <td><?php echo $row['brg_jumlah']; ?></td>
        <td><a href="index.php?hal=brg_edit&id=<?php echo $row['brg_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=brg_delete&id=<?php echo $row['brg_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
