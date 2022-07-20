<form action="simpan13.php" method="POST">
    kode barang :   <input type="text" name="kode_brg" required><br>
    nama barang :   <input type="text" name="nama_brg" required><br>
    satuan :   <input type="text" name="satuan" required><br>
    harga :   <input type="number" value="0" min="0" name="harga" required><br>
    <input type="submit" value="simpan"><input type="reset">
</form>
<?php
require 'lihat13.php';
?>