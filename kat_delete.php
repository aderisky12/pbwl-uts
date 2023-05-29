<?php

use App\Kategori as Kategori;

$id = $_GET['id'];

$kat = new Kategori();
$rows = $kat->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kat_tampil">Kembali</a>