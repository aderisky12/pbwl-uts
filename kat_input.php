<h2>Tambah Kategori</h2>

<form action="index.php?hal=kat_proses" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kat_nama" autofocus required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><textarea name="kat_text" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kat_tampil"><button>Kembali</button></a>