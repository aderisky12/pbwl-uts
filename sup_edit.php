<?php

use App\Supplier as Supplier;

$supplier = new Supplier;
$sup = $supplier->edit($_GET['id']);
?>

<h2>Ubah Supplier</h2>

<form action="index.php?hal=sup_proses" method="post">
    <input type="hidden" name="sup_id" value="<?= $sup['sup_id'] ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="sup_nama" value="<?= $sup['sup_nama'] ?>" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="sup_email" value="<?= $sup['sup_email'] ?>" required></td>
        </tr>
        <tr>
            <td>TELP</td>
            <td><input type="text" name="sup_telp" value="<?= $sup['sup_telp'] ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="sup_alamat" id="" cols="30" rows="10"><?= $sup['sup_alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=sup_tampil"><button>Kembali</button></a>