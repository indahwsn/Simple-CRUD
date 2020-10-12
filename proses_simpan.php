<?php
include "koneksi.php";
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$sql = $pdo->prepare("INSERT INTO printer(nis, nama, jenis_kelamin, telp, alamat) VALUES(:nis,:nama,:jk,:telp,:alamat)");
$sql->bindParam(':no', $no);
$sql->bindParam(':nama_merek', $nama_merek);
$sql->bindParam(':warna', $warna);
$sql->bindParam(':jumlah', $jumlah);
$sql->execute();

if($sql){ 
  header("location: index.php");
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
