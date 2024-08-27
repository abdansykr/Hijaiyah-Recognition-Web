<?php
session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id= $_GET['r'];


$queryDelete="DELETE FROM kuis WHERE id='$id'";
$query=mysqli_query($koneksi,$queryDelete)or die(mysqli_error($koneksi));
if($query){

	echo "<script>alert('Data berhasil hapus'); window.location.replace('daftarkuis.php');</script>";
}

mysqli_close($koneksi);

?>