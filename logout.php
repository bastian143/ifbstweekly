<?php
require 'fungsi.php';

// hapus semua data session lalu balik ke halaman login
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>
