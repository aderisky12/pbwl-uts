<?php

use App\Kategori as Kategori;

$kategori = new Kategori;
$kat = $kategori->edit($_GET['id']);
?>

<h2>Ubah Kategori</h2>

<form action="index.php?hal=kat_proses" method="post">
    <input type="hidden" name="kat_id" value="<?= $kat['kat_id'] ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kat_nama" value="<?= $kat['kat_nama'] ?>" required></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="kat_text" id="" cols="30" rows="5"><?= $kat['kat_text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kat_tampil"><button>Kembali</button></a>