<?php
require 'fungsi.php';
$id = $_GET["id"];
if (hapusdata($id) > 0) {
    echo "<script>
            alert('data berhasil dihapus');
            window.location.href = 'mahasiswa.php';
         </script>";
}
else
{
    echo "<script>
            alert('data gagal dihapus');
            window.location.href = 'mahasiswa.php';
         </script>";
}
?>