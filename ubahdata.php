<?php
require 'fungsi.php';

$id = $_GET["id"];

$query= ("SELECT * FROM mahasiswa WHERE id = $id");

$mhs = tampildata($query)[0]; ///  data spesifik id 


if (isset($_POST['submit'])) {
///ketika ada 
    if(ubahdata($_POST, $id, $_FILES["foto"]) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                window.location.href = 'mahasiswa.php';
             </script>";
    }
    else
    {
        echo "<script>
                alert('data gagal diubah');
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
     <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td><a href="index.php"> Home </a></td>
        <td><a href="profile.php">Profil</a></td>
        <td><a href="contact.php">Contact </a></td>
        <td> <a href="mahasiswa.php"> Data Mahasiswa </a></td>
      </tr>
    </table>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data" >
        <table border="0" cellspacing="10">
            <tr>
                <td><label for="nama">masukan nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>" required></td>
            </tr>
        <tr>
            <td>
                <label for="NIM">NIM</label>
            </td>
            <td>:</td>
            <td><input type="number" name="nim" id="NIM" value="<?= $mhs["nim"] ?>" required></td>
        </tr>
        <tr>
            <td>
                <label for="prodi">Program Studi</label>
            </td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="prodi" value="<?= $mhs["jurusan"] ?>" required></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" value="<?= $mhs["email"] ?>"></label></td>
        </tr>
        <tr>
            <td><label for="nohp">No. HP</label></td>
            <td>:</td>
            <td><input type="number" name="no_hp" id="nohp" value="<?= $mhs["no_hp"] ?>"></label></td>
        </tr>
        <tr>
            <td><label for="foto">foto</label></td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto" value="<?= $mhs["foto"] ?>"></label></td>
        </tr>
        </table>
        <button type="submit" name="submit" > ubah Data</button>
        
    </form>
    <hr>


  </body>
</html>