<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="tugas1.css">
    <style media="screen">
      .kolom1{
        float: left;
        width: 197px;
        height: 255px;
        border-left: 3px solid;
        border-right: 3px solid;
        background-color: #ffff01;
      }
      li{
        margin: 4px;
      }
      .kolom2{
        float: left;
        width: 584px;
        height: auto;
        border-right: 3px solid black;
      }
    </style>
  </head>
  <body>
    <header>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZRXUO7rWqb3zKtVTPHLhkD-teJeYXG5ZErg&usqp=CAU" style="width: 784px; height: 200px;">
    </header>
    <div class="kolom1" style="background-color: #ffff01;">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Data Peserta</a></li>
        <li><a href="#">Pengertian PHP</a></li>
        <li><a href="#">Cara kerja PHP</a></li>
      </ul>
    </div>
    <div class="kolom2" style="background-color: #d99896; padding-bottom: 6px;">
      <p>PHP  <b>(Hypertext Preprocessor)</b> adalah sebuah bahasa pemrograman server side scripting yang bersifat open source. 
        Bahasa pemrograman ini banyak digunakan untuk pengembangan website. 
      </p>
      <p style="font-weight: bold; text-align: center;">Form Pendaftaran</p>
      <form action="data.php" method="post">
      <p>
        <label>Nama: </label>
        <input type="text" name="nama" placeholder="Nama Lengkap">
      </p>
      <p>
        <label>Asal: </label>
        <input type="text" name="asal" placeholder="Asal Daerah">
      </p><p>
        <label>Pekerjaan: </label>
        <input type="text" name="umur" placeholder="Pekerjaan">
        <input type="submit" name="submit" value="submit" style="margin: 0 30px;">
      </p>
    </div>
    <footer>
      <p style="text-align: center;">&copy; 2020 Talitha Batari</p>
    </footer>
  </body>
</html>
