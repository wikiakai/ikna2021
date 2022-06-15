<?php
include '../inc/koneksi.php';
$query1 = mysqli_query($connect,"SELECT * FROM event  where id_event='".$_GET['event']."'"); 
while ($record = mysqli_fetch_array($query1)) {
?>
<div class="row">
<div class="col-md-12">
    <h2>Event</h2>
	<form action="../inc/editEventProses.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $_GET['event']?>"> <br>
		<label>Nama Event	 :</label> <br>
		<input type="text" name="nmEvent" required="required" value="<?php echo $record['nama_event']?>"> <br>
		<label>tanggal 		:</label> <br>
		<input type="date" name="tglEvent" required="required" value="<?php echo $record['tanggal_event']?>"> <br>
		<label>Caption 		:</label> <br>
		<input type="text" name="capEvent" required="required" value="<?php echo $record['caption']?>"> <br>
		<label>Deskripsi 	:</label> <br>
		<textarea name="DescEvent" required="required"> <?php echo $record['descEvent']?></textarea><br>
		<label>Poster		:</label> <br>
		<input type="file" name="image" required="required"> <br>
		<input type="Submit" name="submit"> <br>
	</form>   
</div>
</div>

<?php } ?>
