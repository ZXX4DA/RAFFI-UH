<?php
include "koneksi.php";

// Ambil id kegiatan dari parameter URL
$activity_id = $_GET['id'];

// Hapus kegiatan
$query = "DELETE FROM activities WHERE id=$activity_id";
$mysqli->query($query);

// Redirect ke halaman daftar kegiatan setelah menghapus
header("Location: tampilan.php");
exit();
?>
