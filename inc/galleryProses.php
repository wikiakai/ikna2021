<?php 
include ("koneksi.php");
session_start();

if(isset($_POST['submit'])){

  $image = $_FILES['poster']['name'];
  $target = "../gallery/" .basename($_FILES['poster']['name']);

  $query="INSERT INTO `galery`(`id_galery`, `nama_galery`, `photos`, `caption`, `tahun`) VALUES ('','".$_POST['nmEvent']."','$image','".$_POST['capEvent']."','".$_POST['tahun']."')";

  $hasil=mysqli_query($connect,$query) or die (mysqli_error($connect));

  if (move_uploaded_file($_FILES['poster']['tmp_name'], $target)) {
  $msg = "Upload sukses";
  }
  ?>
  <script>
    alert("Daftar berhasil.");
    window.location='../index.php';
  </script>
 
  <?php 
  } 
  ?>