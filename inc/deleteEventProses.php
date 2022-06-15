<?php 
require_once ("koneksi.php");
$query1 = mysqli_query($connect,"DELETE FROM event where id_event='".$_GET['event']."'  "); 

?>
<script>
	window.location='../index.php';
</script>