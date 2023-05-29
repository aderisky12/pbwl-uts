<?php

use App\Kategori as Kategori;

$kat = new Kategori;
$rows = $kat->tampil();

?>

<h2>Data Kategori</h2>

<a href="index.php?hal=kat_input">Tambah Kategori</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>KETERANGAN</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['kat_nama']; ?></td>
        <td><?php echo $row['kat_text']; ?></td>
        <td><a href="index.php?hal=kat_edit&id=<?php echo $row['kat_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kat_delete&id=<?php echo $row['kat_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
