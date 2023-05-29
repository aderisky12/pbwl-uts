<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Supplier extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_supplier";
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
        $sup_nama = $_POST['sup_nama'];
        $sup_email = $_POST['sup_email'];
        $sup_telp = $_POST['sup_telp'];
        $sup_alamat = $_POST['sup_alamat'];

        $sql = "INSERT INTO tb_supplier (sup_nama, sup_email, sup_telp, sup_alamat) VALUES (:sup_nama, :sup_email, :sup_telp, :sup_alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sup_nama", $sup_nama);
        $stmt->bindParam(":sup_email", $sup_email);
        $stmt->bindParam(":sup_telp", $sup_telp);
        $stmt->bindParam(":sup_alamat", $sup_alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_supplier WHERE sup_id=:sup_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sup_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $sup_nama = $_POST['sup_nama'];
        $sup_email = $_POST['sup_email'];
        $sup_telp = $_POST['sup_telp'];
        $sup_alamat = $_POST['sup_alamat'];
        $sup_id = $_POST['sup_id'];

        $sql = "UPDATE tb_supplier SET sup_nama=:sup_nama, sup_email=:sup_email, sup_telp=:sup_telp, sup_alamat=:sup_alamat WHERE sup_id=:sup_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sup_nama", $sup_nama);
        $stmt->bindParam(":sup_email", $sup_email);
        $stmt->bindParam(":sup_telp", $sup_telp);
        $stmt->bindParam(":sup_alamat", $sup_alamat);
        $stmt->bindParam(":sup_id", $sup_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_supplier WHERE sup_id=:sup_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sup_id", $id);
        $stmt->execute();

    }
}