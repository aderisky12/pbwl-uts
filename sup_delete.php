<?php

use App\Supplier as Supplier;

$id = $_GET['id'];

$sup = new Supplier();
$rows = $sup->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=sup_tampil">Kembali</a>