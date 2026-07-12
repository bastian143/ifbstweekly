<?php
require 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEB INFORMATIKA C 2026</title>
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
        <td><a href="mahasiswa.php"> Data Mahasiswa </a></td>
        <?php if (isset($_SESSION['username'])) { ?>
          <td><a href="logout.php">Logout (<?= $_SESSION['nama'] ?>)</a></td>
        <?php } else { ?>
          <td><a href="login.php">Login</a></td>
          <td><a href="register.php">Daftar</a></td>
        <?php } ?>
      </tr>
    </table>
    <h3>BIODATA BST</h3>
    <p>
      nama : David Bastian <br />
      NIM : 13182420092 <br />
      Deskripsi : Saya adalah seorang mahasiswa yang sedang mengambil mata
      kuliah web informatika. Saya memiliki hobi membaca dan menulis. Saya
      memiliki cita-cita menjadi seorang presiedent. <i>Terimakasih</i>
    </p>
    <br />
  </body>
</html>
