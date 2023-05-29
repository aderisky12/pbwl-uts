<h2>Tambah Supplier</h2>

<form action="index.php?hal=sup_proses" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="sup_nama" autofocus required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="sup_email" required></td>
        </tr>
        <tr>
            <td>TELP</td>
            <td><input type="text" name="sup_telp"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="sup_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=sup_tampil"><button>Kembali</button></a>