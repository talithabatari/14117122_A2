<!DOCTYPE html>
<head>
    <title>Tugas 1</title>
</head>
<?php
    function faktorial($bil){
        if($bil==0){
            return 1;
        }else{
            return $bil*faktorial($bil-1);
        }
    }
?>
<h2>Menghitung Faktorial</h2>
<form method="post">
    <label>Masukkan Bilangan : </label>
    <input type="number" name="bilangan" min="0">
    <button type="submit" name="kirim">Submit</button>
</form><br>
<?php
if(isset($_POST['kirim'])){
    $bil = $_POST['bilangan'];
    echo "faktorial(" .$bil .") : " .faktorial($bil);
}
?>