<?php 
require 'koneksi.php'; 
$id_mhs = $_REQUEST['id'];
$sql = "SELECT * FROM data_rentalps WHERE id='$id_mhs'";
$result = mysqli_query($conn,$sql);
foreach ($result as $rows) {
	$id   = $rows['id'];
	$jenisps = $rows['jenis_ps'];
	$hargarental  = $rows['harga_rental'];


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UBAH DATA RENTAL PS</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<main>
  <h1 class="text-center pt-5">Form Ubah data Rental PS</h1>
	<form action="ubah.php" method="POST" class="container col-6 mt-5">
  <div class="mb-3">
    <input type="hidden" name="txtid" class="form-control" id="exampleInputText" required="true" value="<?php echo $id ?>" placeholder="Nama..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis PS</label>
    <input type="text" name="txtjenis_ps" class="form-control" id="exampleInputText" required="true" value="<?php echo $jenisps ?>" placeholder="Jenis PS..." aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga Rental</label>
    <input type="text" name="txtharga_rental" class="form-control" id="exampleInputtext1" required="true" value="<?php echo $hargarental ?>" placeholder="Harga Rental...">
  </div>
  <button type="submit" class="btn btn-success">Ubah</button>
  <a href="index.php" class="btn btn-primary ms-4">Kembali</a>
</form>
	</main>
</body>
</html>