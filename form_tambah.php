<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA RENTALPS</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
	<main>
  <h1 class="text-center pt-5">Form Tambah data Rental PS</h1>
	<form action="simpan.php" method="POST" class="container col-6 mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenisps</label>
    <input type="text" name="txtjenis_ps" class="form-control" id="exampleInputText" required="true" placeholder="Jenis PS..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">HargaRental</label>
    <input type="text" name="txtharga_rental" class="form-control" id="exampleInputtext1" required="true" placeholder="Harga Rental...">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <a href="index.php" class="btn btn-primary ms-4">Kembali</a>
</form>
	</main>
</body>
</html>