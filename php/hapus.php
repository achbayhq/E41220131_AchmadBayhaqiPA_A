<?php 
// require('koneksi.php');
$koneksi = mysqli_connect("localhost", "root", "", "user_bkpm");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM user_detail WHERE id = '$id'");
if (!$result) {
    die("Gagal menghapus data: " . mysqli_error($koneksi));
}
header("Location: home.php");
?>