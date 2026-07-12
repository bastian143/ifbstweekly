<?php
require 'fungsi.php';

$pesan = "";

// kalau sudah login, tidak usah lihat form login lagi
if (isset($_SESSION['username'])) {
    header("Location: mahasiswa.php");
    exit;
}

if (isset($_POST['submit'])) {
    if (loginUser($_POST)) {
        header("Location: mahasiswa.php");
        exit;
    } else {
        $pesan = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | WEB INFORMATIKA 2026</title>
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
        <td><a href="register.php">Daftar</a></td>
      </tr>
    </table>

    <h2>Login</h2>

    <?php if ($pesan != "") { ?>
      <p style="color:red;"><?= $pesan ?></p>
    <?php } ?>

    <form action="" method="post">
      <table border="0" cellspacing="10">
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password" id="password" required></td>
        </tr>
      </table>
      <button type="submit" name="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
  </body>
</html>
