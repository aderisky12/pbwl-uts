<?php

use App\Kategori as Kategori;

$kat = new Kategori();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=kat_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=kat_tampil");
}