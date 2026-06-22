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

function tambahdata($data, $files)
{
    global $koneksi;
    $nama = htmlspecialchars  ($data['nama']);
    $nim = htmlspecialchars ($data['nim']);
    $jurusan = htmlspecialchars ($data['jurusan']);
    $email = htmlspecialchars ($data['email']);
    $no_hp = htmlspecialchars ($data['no_hp']);

    $namafoto = $files["name"]; 
    $tmpfoto = $files["tmp_name"];

    $path = "assets/images/$namafoto";
    if(move_uploaded_file($tmpfoto, $path)) {
        
        $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
        VALUES ( '$nama', '$nim', '$jurusan', '$email', '$no_hp', '$namafoto')";
        mysqli_query($koneksi, $query);
    }
    return mysqli_affected_rows($koneksi); // angka perubahan query
}

function hapusdata($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}

function ubahdata($data, $id, $files)
{
    global $koneksi;
    $nama = htmlspecialchars  ($data['nama']);
    $nim = htmlspecialchars ($data['nim']);
    $jurusan = htmlspecialchars ($data['jurusan']);
    $email = htmlspecialchars ($data['email']);
    $no_hp = htmlspecialchars ($data['no_hp']);
    $foto = htmlspecialchars ($data['foto']);

    $namafoto = $files["name"]; 
    $tmpfoto = $files["tmp_name"];

    $path = "assets/images/$namafoto";
    if(move_uploaded_file($tmpfoto, $path)) {
        
        $query = "UPDATE mahasiswa SET
    nama = '$nama',
    nim = '$nim',
    jurusan = '$jurusan',
    email = '$email', 
    no_hp = '$no_hp',
    foto = '$namafoto'
    WHERE id = $id";

    mysqli_query($koneksi, $query);
    
    }

   

    return mysqli_affected_rows($koneksi); // angka perubahan query
}

?>