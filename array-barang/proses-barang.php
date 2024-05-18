<?php 
if ($_SERVER['REQUEST_METHOD']== "POST" )  { ?>
<table>
    <tr>
        <td>Nama</td>
        <td> :<?= $_POST['nama'] ?></td>
    </tr>
    <tr>
    <td>Harga</td>
    <td> :<?= $_POST['harga'] ?> </td>
</tr>
<tr>
<td>Deskripsi</td>
<td> :<?= $_POST['deskripsi'] ?></td>
</tr>
<tr>
<td>stok</td>
<td> :<?= $_POST['stok'] ?></td>
</tr>
</table>
<?php
}
else {
    header('location: barang.php');

}
?>