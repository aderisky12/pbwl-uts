<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Barang extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_barang as barang JOIN tb_supplier as supplier ON barang.brg_id_supplier=supplier.sup_id JOIN tb_kategori as kategori ON barang.brg_id_kategori=kategori.kat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $brg_id_supplier = $_POST['brg_id_supplier'];
        $brg_id_kategori = $_POST['brg_id_kategori'];
        $brg_nama = $_POST['brg_nama'];
        $brg_jumlah = $_POST['brg_jumlah'];

        $sql = "INSERT INTO tb_barang (brg_id_supplier, brg_id_kategori, brg_nama, brg_jumlah) VALUES (:brg_id_supplier, :brg_id_kategori, :brg_nama, :brg_jumlah)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":brg_id_supplier", $brg_id_supplier);
        $stmt->bindParam(":brg_id_kategori", $brg_id_kategori);
        $stmt->bindParam(":brg_nama", $brg_nama);
        $stmt->bindParam(":brg_jumlah", $brg_jumlah);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_barang as barang JOIN tb_supplier as supplier ON barang.brg_id_supplier=supplier.sup_id JOIN tb_kategori as kategori ON barang.brg_id_kategori=kategori.kat_id WHERE barang.brg_id=:brg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":brg_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $brg_id_supplier = $_POST['brg_id_supplier'];
        $brg_id_kategori = $_POST['brg_id_kategori'];
        $brg_nama = $_POST['brg_nama'];
        $brg_jumlah = $_POST['brg_jumlah'];
        $brg_id = $_POST['brg_id'];

        $sql = "UPDATE tb_barang SET brg_id_supplier=:brg_id_supplier, brg_id_kategori=:brg_id_kategori, brg_nama=:brg_nama, brg_jumlah=:brg_jumlah WHERE brg_id=:brg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":brg_id_supplier", $brg_id_supplier);
        $stmt->bindParam(":brg_id_kategori", $brg_id_kategori);
        $stmt->bindParam(":brg_nama", $brg_nama);
        $stmt->bindParam(":brg_jumlah", $brg_jumlah);
        $stmt->bindParam(":brg_id", $brg_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_barang WHERE brg_id=:brg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":brg_id", $id);
        $stmt->execute();

    }
}