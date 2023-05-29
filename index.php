<?php

require_once "inc/Koneksi.php";
require_once "vendor/autoload.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>UD GARUDA SAKTI | BARANG MASUK</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <div class="container">
            <header>
                  <img src="layouts/assets/img/header.jpg" alt="" height="350px" >
            </header>

            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?hal=sup_tampil">Supplier</a></li>
                        <li><a href="index.php?hal=kat_tampil">Kategori</a></li>
                        <li><a href="index.php?hal=brg_tampil">Barang Masuk</a></li>

                  </ul>
            </nav>

            <main>
                  <section>
                        <?php 
                        if (isset($_GET['hal'])) {
                              require $_GET['hal'] . ".php";
                        } else {
                              require 'main.php';
                        }
                        ?>
                  </section>
            </main>

            <footer>
                  Copyright &copy; 2023. Designed by Ade Risky Pradika
            </footer>
      </div>

</body>

</html>