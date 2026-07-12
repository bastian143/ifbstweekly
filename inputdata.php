<?php
require 'fungsi.php';

if (isset($_POST['submit'])) {
    ///ketikaada data yg dikirim ke db kirim notifnya
    if(tambahdata($_POST,$_FILES["foto"]) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                window.location.href = 'mahasiswa.php';
             </script>";
    }
    else
    {
        echo "<script>
                alert('data gagal ditambahkan');
                window.location.href = 'mahasiswa.php';
             </script>";
    }
   
}

  

?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Saya - Tingkat 1</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>WEB INFORMATIKA BST 2026</h1>
    <hr />
     <table border="1" cellspacing="0" cellpadding="10" class="navbar">
      <tr>
        <td><a href="index.php"> Home </a></td>
        <td><a href="profile.php">Profil</a></td>
        <td><a href="contact.php">Contact </a></td>
        <td> <a href="mahasiswa.php"> Data Mahasiswa </a></td>
      </tr>
    </table>
    <h2>Input Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="0" cellspacing="10">
            <tr>
                <td><label for="nama">masukan nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
        <tr>
            <td>
                <label for="NIM">NIM</label>
            </td>
            <td>:</td>
            <td><input type="number" name="nim" id="NIM" required></td>
        </tr>
        <tr>
            <td>
                <label for="prodi">Program Studi</label>
            </td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="prodi" required></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email"></label></td>
        </tr>
        <tr>
            <td><label for="nohp">No. HP</label></td>
            <td>:</td>
            <td><input type="number" name="no_hp" id="nohp"></label></td>
        </tr>
        <tr>
            <td><label for="foto">foto</label></td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto"></label></td>
        </tr>
        </table>
        <button type="submit" name="submit" > kirim Data</button>
        
    </form>
    <hr>

    <h2>TUGAS BUAT FORM (20/04/2026)</h2>
    <form action="mahasiswa.php" method="post">
        <ul>
            <li><label for="nama">nama  :</label>
            <input type="text" name="nama" id="nama"></li>
            <li><label for="NIM">NIM : </label>
            <input type="number" name="NIM" id="NIM"> </li>
            <li><label for="Password"> Password :</label>
            <input type="password" name="Password" id="Password"></li>
            <li><label for="Email">Email :</label>
            <input type="email" name="Email" id="Email"></li>
            <li><label for="No HP">No HP :</label>
            <input type="text" name="No HP" id="No HP"></li>
            <li><label for="website Pribadi">website Pribadi :</label>
            <input type="url" name="website Pribadi" id="website Pribadi"></li>
            <li><label for="Tanggal Lahir">Tanggal Lahir :</label>
            <input type="date" name="Tanggal Lahir" id="Tanggal Lahir"></li>
            <li><label for="Warna Favorit"> warna Favorit :</label>
            <input type="color" name="Warna Favorit" id="Warna Favorit"></li>
            <li><label for="Tingkat Kepuasaan"> tingkat Kepuasaan :</label>
            <input type="range" name="Tingkat Kepuasaan" id="Tingkat Kepuasaan"></li>
            <li><label for="Jenis Kelamin">Jenis Kelamin : </label>
            <label for="Jenis Kelamin"><input type="radio" name="Jenis Kelamin" id="Jenis Kelamin" value="Laki-laki">Laki-laki</input></label>
            <label for="Jenis Kelamin"><input type="radio" name="Jenis Kelamin" id="Jenis Kelamin" value="Perempuan">Perempuan</Input></label></li>
            <li><label for="Hobi"> Hobi :</label>
            <label for="Hobi"><input type="checkbox" name="Hobi" id="Hobi" value="olahraga">olahraga</label>
            <label for=""><input type="checkbox" name="Hobi" id="Hobi" value="menulis" > menulis </label> 
            <label for="Hobi"><input type="checkbox" name="Hobi" id="Hobi" value="membaca">membaca</label></li>


            <li><label for="uploads Foto">uploads Foto   :</label>
            <input type="file" name="uploads Foto" id="uploads Foto"></li>
            <li><label for="Alamat"> Alamat  :</label>
            <textarea name="Alamat" id="Alamat"></textarea></li>
            <li><label for="Jurusan">Jurusan  :</label>
             <select name="Jurusan" id="Jurusan">
             <option value="Teknik Informatika">Teknik Informatika</option>
             <option value="Teknik Mesin">Teknik Mesin</option>
             <option value="Teknologi Informasi"> Teknologi Informasi</option>
             <option value="Teknik Elektro">Teknik Elektro</option>
             <option value="Teknik Sipil">Teknik Sipil</option> </select> </li>
             <input type="submit" name="submit" value="gass kirim data" >
        </ul>
    </form>
  </body>
</html>