<?php

$localhost = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "mahasiswa";

$koneksi = mysqli_connect($localhost,$username,$password,$database); 


if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$npm = $_POST['npm'];

	$data_mahasiswa  = mysqli_query($koneksi,"INSERT INTO mahasiswa nama,jurusan,npm VALUES ('','$nama','$jurusan','$npm')");

	echo "<script>
alert('berhasil memasukan data');
	</script>";
}else{
		echo "<script>
alert('gagal memasukan data');
	</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
	<label for="nama">nama</label>
	<input type="text" name="nama " id="nama">
	<label for="jurusan">jurusan</label>
	<input type="text" name="jurusan " id="jurusan">
	<label for="npm">npm</label>
	<input type="text" name="npm " id="npm">
	<button type="text" name="submit">submit</button>
	</form>

</body>
</html>