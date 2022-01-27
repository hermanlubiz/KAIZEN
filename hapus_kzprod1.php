<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id_hapus'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM tb_kzprod1 WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Hapus foto yang telah diupload dari folder images
unlink("filesave/".$data['img1']);

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query1 = "SELECT * FROM tb_kzprod1 WHERE id='".$id."'";
$sql1 = mysqli_query($koneksi, $query1); // Eksekusi/Jalankan query dari variabel $query
$data1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql
// Hapus foto yang telah diupload dari folder images
unlink("filesave/".$data1['img2']);

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM tb_kzprod1 WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  echo "<script>alert('Data berhasil di Hapus.');window.location='data_kzprod1.php';</script>";
}else{
  // Jika Gagal, Lakukan :
  echo "<script>alert('Maaf data GAGAL di Hapus.');window.location='data_kzprod1.php';</script>";
}
?>