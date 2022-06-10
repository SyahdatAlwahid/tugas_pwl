<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Simpan</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<?php 
require 'koneksi.php';
$data = array(
	'jenis_ps' => $_POST['txtjenis_ps'],
	'harga_rental' => $_POST['txtharga_rental'],
);

$key = array_keys($data);

$val = array_values($data);

$sql = "INSERT INTO data_rentalps(".implode(', ', $key) . ") ". "VALUES ('".implode("', '", $val) . "')";

mysqli_query($conn,$sql);

if ($sql) {echo '<div class="alert alert-success container col-6 mt-5" role="alert">
	<storng>Data Berhasil Di simpan</strong>
  </div>
  </br>
  <div class="text-center">
  <a href="index.php" class="btn btn-primary mt-2">Kembali</a>
  </div>';}
else {echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);}
mysqli_close($conn);
?>
</body>
</html>

