<?php

use App\Supplier as Supplier;

$sup = new Supplier;
$rows = $sup->tampil();

?>

<h2>Data Supplier</h2>

<a href="index.php?hal=sup_input">Tambah Supplier</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>EMAIL</td>
        <td>TELP</td>
        <td>ALAMAT</td>
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
        <td><?php echo $row['sup_email']; ?></td>
        <td><?php echo $row['sup_telp']; ?></td>
        <td><?php echo $row['sup_alamat']; ?></td>
        <td><a href="index.php?hal=sup_edit&id=<?php echo $row['sup_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=sup_delete&id=<?php echo $row['sup_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
