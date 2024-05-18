<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table {
            border-collapse: collapse;
            width: 50%;
            float: right; /* Mengatur posisi tabel ke kanan */
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
<h3>Form Barang</h3>
<form action="proses-barang.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Barang</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan nama barang" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="harga" name="harga" placeholder="Masukan harga barang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" placeholder="Masukan deskripsi barang" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<div class="container">
    <h2>Daftar Produk</h2>
    <table>
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php
        $products = [
            ["Barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
            ["Barang" => "Tablet", "Harga" => 200000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
            ["Barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
            ["Barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
         ["Barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
        ];

        // Menampilkan data produk dalam tabel
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['Barang'] . "</td>";
            echo "<td>" . number_format($product['Harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $product['Deskripsi'] . "</td>";
            echo "<td>" . $product['Stok'] . "</td>";
            echo "</tr>";
            
    
        }
        ?>
    </table>
</div>

</body>
</html>
