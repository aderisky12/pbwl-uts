<?php

use App\Supplier as Supplier;
use App\Kategori as Kategori;

$supplier = new Supplier;
$sup = $supplier->tampil();

$kategori = new Kategori;
$kat = $kategori->tampil();

?>

<h2>Tambah Barang Masuk</h2>

<form action="index.php?hal=brg_proses" method="post">
    <table>
        <tr>
            <td>SUPPLIER</td>
            <td>
                <select name="brg_id_supplier" id="">
                    <?php
                    foreach ($sup as $row) {
                    ?>
                    <option value="<?= $row['sup_id']?>"><?= $row['sup_nama']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td>
                <select name="brg_id_kategori" id="">
                    <?php
                    foreach ($kat as $row) {
                    ?>
                    <option value="<?= $row['kat_id']?>"><?= $row['kat_nama']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="brg_nama" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" min="0" name="brg_jumlah" required></td>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=brg_tampil"><button>Kembali</button></a>