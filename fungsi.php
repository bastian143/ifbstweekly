<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'bstweekly');
// if (!$koneksi) {
//   die("koneksi gagal" . mysqli_connect_error());
// }
// else {
//   echo "koneksi berhasil";
// }


function tampildata($query)
{
    global $koneksi;
 $result = mysqli_query($koneksi, $query); // lemari / zip  

 $rows = []; //wadah
 while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row; /// ambil baju taruh kewadah
 }
 return $rows;
}

function tambahdata($data)
{
    global $koneksi;
    $nama = htmlspecialchars  ($data['nama']);
    $nim = htmlspecialchars ($data['nim']);
    $jurusan = htmlspecialchars ($data['jurusan']);
    $email = htmlspecialchars ($data['email']);
    $no_hp = htmlspecialchars ($data['no_hp']);
    $foto = htmlspecialchars ($data['foto']);

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
    VALUES ( '$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi); // angka perubahan query
}


?>