<?php 
    $products = [ ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
                  ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
                  ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
                  ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
                  ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
                 ];
                 if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['barang']) && empty($_POST['harga']) && empty($_POST['deskripsi']) && empty($_POST['stok'])) {
                    header("Location: form.php");
                    exit;
                }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tugas Jarviscamp pertemuan 04</title>
</head>
<body>
<div class="container m-1 ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
        <?php 
            foreach( $products as $product){?>
                <tr>
                    <td scope="col"><?= $product['barang']; ?></td>
                    <td scope="col"><?= $product['Harga']; ?></td>
                    <td scope="col"><?= $product['Deskripsi']; ?></td>
                    <td scope="col"><?= $product['Stok']; ?></td>
                </tr>
            <?php
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){?>
                <tr>
                    <td scope="col"><?= $_POST["barang"]; ?></td>
                    <td scope="col"><?= $_POST['harga']; ?></td>
                    <td scope="col"><?= $_POST['deskripsi']; ?></td>
                    <td scope="col"><?= $_POST['stok']; ?></td>
                </tr>
            <?php
            }else{
                header("Location: form.php");
                exit;
            }
        ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>         