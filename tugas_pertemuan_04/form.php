
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form nya</title>
</head>
<body>
<div class="container my-3 ">
<form action="products.php" method="post"> 
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Barang</label> 
    <div class="col-8">
      <input id="text" name="barang" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="nama" name="harga" placeholder="" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempatlahir" class="col-4 col-form-label">Dekskripsi</label> 
    <div class="col-8">
      <input id="tempatlahir" name="deskripsi" placeholder="" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text1">Stok</label> 
    <div class="col-8">
      <input id="text1" name="stok" placeholder="" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>