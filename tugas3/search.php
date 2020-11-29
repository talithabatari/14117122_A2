<?php 
$cari=$_POST['snama'];
$conn=mysqli_connect("localhost","root","");
mysqli_selectdb($conn,"itera");
$hasil=mysqli_query($conn,"select *from mahasiswa where nama like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah";
echo "<br>";
while ($baris=mysqli_fetch_array($hasil)) {
	echo "ID Nama : ";
	echo $baris[0];
	echo "<br>";
	echo "Nama : ";
	echo $baris[1];
	echo "<br>";
	echo "Alamat : ";
	echo $baris[2];
	echo "<br>";
	echo "Prodi : ";
	echo $baris[3];
	echo "<br> <br>";
}
 ?>