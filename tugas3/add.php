<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data</title>
</head>
<body>
<h1>Simpan Data Mahasiswa MySQL</h1>
<?php 
$nim = $_POST["nim"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$prodi=$_POST["prodi"];
$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"itera");
echo "Nim 			: $nim <br>";
echo "Nama		 	: $nama <br>";
echo "Alamat 		: $alamat <br>";
echo "Prodi			: $prodi";
$sqlstr="insert into mahasiswa (nim,nama,alamat,id_prodi) values('$nim','$nama','$alamat','$prodi')";
$hasil=mysqli_query($conn,$sqlstr);
echo "<br>";
if ($hasil) {
	echo "Simpan data berhasil";
}
 ?>
</body>
</html>