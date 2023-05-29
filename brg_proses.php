<?php

use App\Barang as Barang;

$brg = new Barang();

if (isset($_POST['btn_simpan'])) {
    $brg->simpan();
    header("location:index.php?hal=brg_tampil");
}

if (isset($_POST['btn_update'])) {
    $brg->update();
    header("location:index.php?hal=brg_tampil");
}