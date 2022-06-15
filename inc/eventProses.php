<?php 
include ("koneksi.php");
session_start();

if(isset($_POST['submit'])){

  $image = $_FILES['image']['name'];
  $target = "../img/" .basename($_FILES['image']['name']);

  $query="INSERT INTO `event`(`id_event`, `nama_event`, `tanggal_event`, `descEvent`, `caption`, `poster`) VALUES ('','".$_POST['nmEvent']."','".$_POST['tglEvent']."','".$_POST['DescEvent']."','".$_POST['capEvent']."','$image')";

  $hasil=mysqli_query($connect,$query) or die (mysqli_error($connect));

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
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