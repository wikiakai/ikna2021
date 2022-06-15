<?php
include("koneksi.php");
session_start();
if(isset($_POST['submit'])){
	$image = $_FILES['image']['name'];
  	$target = "../img/" .basename($_FILES['image']['name']);
	$query="UPDATE `event` SET `nama_event`= '".$_POST['nmEvent']."',`tanggal_event`='".$_POST['tglEvent']."',`descEvent`='".$_POST['DescEvent']."',`caption`='".$_POST['capEvent']."',`poster`='$image' WHERE id_event= '".$_POST['id']."'";
	$hasil=mysqli_query($connect, $query) or die (mysqli_error());
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		?>
		<script>
			alert("data sukses Diupdate");
			window.location='../index.php';
		</script>
		<?php
  	}
}
?>
