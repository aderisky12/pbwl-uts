<?php

use App\Barang as Barang;

$id = $_GET['id'];

$brg = new Barang();
$rows = $brg->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=brg_tampil">Kembali</a>