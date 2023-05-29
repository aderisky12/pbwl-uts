<?php

use App\Supplier as Supplier;

$sup = new Supplier();

if (isset($_POST['btn_simpan'])) {
    $sup->simpan();
    header("location:index.php?hal=sup_tampil");
}

if (isset($_POST['btn_update'])) {
    $sup->update();
    header("location:index.php?hal=sup_tampil");
}