<?php
require 'fungsi.php';

$pesan = "";

if (isset($_POST['submit'])) {
    $status = registerUser($_POST);

    if ($status == "sukses") {
        echo "<script>
                alert('Registrasi berhasil, silakan login');
                window.location.href = 'login.php';
             </script>";
    } elseif ($status == "ada") {
        $pesan = "Username sudah dipakai, coba username lain.";
    } elseif ($status == "beda") {
        $pesan = "Password dan konfirmasi password tidak sama.";
    } else {
        $pesan = "Registrasi gagal, silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Akun | WEB INFORMATIKA 2026</title>
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
        <td><a href="login.php">Login</a></td>
      </tr>
    </table>

    <h2>Daftar Akun Baru</h2>

    <?php if ($pesan != "") { ?>
      <p style="color:red;"><?= $pesan ?></p>
    <?php } ?>

    <form action="" method="post">
      <table border="0" cellspacing="10">
        <tr>
          <td><label for="nama">Nama</label></td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama" required></td>
        </tr>
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
        <tr>
          <td><label for="konfirmasi_password">Konfirmasi Password</label></td>
          <td>:</td>
          <td><input type="password" name="konfirmasi_password" id="konfirmasi_password" required></td>
        </tr>
      </table>
      <button type="submit" name="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
  </body>
</html>
