<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'bstweekly');
// if (!$koneksi) {
//   die("koneksi gagal" . mysqli_connect_error());
// }
// else {
//   echo "koneksi berhasil";
// }

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query); // lemari / zip

// ambil data (fetch) mahasiswa dari lemari

// while ($mhs = mysqli_fetch_row($result))
// {
//   var_dump($mhs);
// }

/// mysqli_fetch_row() - array numerik
/// mysqli_fetch_assoc() - array asosiatif
/// mysqli_fetch_array() - array numerik + array asosiatif
/// mysqli_fetch_object() - object







?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
  </head>
  <body>
    <h1>WEB INFORMATIKA BST 2026</h1>
    <hr />
    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td><a href="index.php"> Home </a></td>
        <td><a href="profile.php">Profil</a></td>
        <td><a href="contact.php">Contact </a></td>
        <td><a href="mahasiswa.php"> Data Mahasiswa </a></td>
      </tr>
    </table>
    <h3>data mahasiswa</h3>

    <a href="inputdata.php"><button>Tambah Data Mahasiswa</button></a>
<br>
    <br>
    <table border="1" cellspadding="10">
      <tr>
        <th >No</th>
        <th >Nama</th>
        <th >NIM</th>
        <th>jurusan</th>
        <th>email</th>
        <th>no_hp</th>
        <th >Foto</th>
        <th>aksi</th>
        <!-- <th>baris 1, kolom 2</th> -->
      </tr>
      <?php
      $no = 1; 
        while($mhs = mysqli_fetch_assoc($result)) {

      ?>
      <tr align="center">
        <td><?= $no ?></td>
        <td><?= $mhs ["nama"] ?> </td>
        <td><?= $mhs ["nim"] ?> </td>
        <td><?= $mhs ["jurusan"] ?> </td>
        <td><?= $mhs ["email"] ?> </td>
        <td><?= $mhs ["no_hp"] ?></td>
        <td>
          <img src="assets/images/<?= $mhs ["foto"] ?>" width="70" height="45" />
        </td>
        <td><a href="ubahdata.php"><button>Edit</button></a> | <a href="hapusdata.php"><button>Hapus</button></a></td>
      </tr>
      <?php
        $no++;
     } 
     ?>
      
    </table>




    
    <hr />
   <table border="1" cellspacing="0" cellpadding="15">
  <tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
  </tr>
  <tr>
    <td>2,1</td>
    <td colspan="2" rowspan="2" style="text-align:center; vertical-align:middle;">
      <h1 style="font-size: 30px;">?</h1>
    </td>
    <td>2,4</td>
  </tr>
  <tr>
    <td>3,1</td>
    <td>3,4</td>
  </tr>
  <tr>
    <td>4,1</td>
    <td>4,2</td>
    <td>4,3</td>
    <td>4,4</td>
  </tr>
</table>

      </body>
</html>
