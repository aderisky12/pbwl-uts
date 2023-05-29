CREATE TABLE tb_supplier (
    sup_id INT(11) NOT NULL AUTO_INCREMENT,
    sup_nama VARCHAR(100) NOT NULL,
    sup_email VARCHAR(30) NOT NULL,
    sup_telp VARCHAR(30) DEFAULT NULL,
    sup_alamat TEXT DEFAULT NULL,
    PRIMARY KEY(sup_id),
    UNIQUE KEY(sup_email)
);

CREATE TABLE tb_kategori (
    kat_id INT(11) NOT NULL AUTO_INCREMENT,
    kat_nama VARCHAR(100) NOT NULL,
    kat_text TEXT DEFAULT NULL,
    PRIMARY KEY(kat_id),
    UNIQUE KEY(kat_nama)
);
 
 CREATE TABLE tb_barang (
    brg_id INT(11) NOT NULL AUTO_INCREMENT,
    brg_id_supplier INT(11) NOT NULL,
    brg_id_kategori INT(11) NOT NULL,
    brg_nama VARCHAR(100) NOT NULL,
    brg_jumlah INT(5) DEFAULT 0,
    PRIMARY KEY(brg_id),
    FOREIGN KEY(brg_id_supplier) REFERENCES tb_supplier(sup_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(brg_id_kategori) REFERENCES tb_kategori(kat_id) ON UPDATE CASCADE ON DELETE RESTRICT
 )