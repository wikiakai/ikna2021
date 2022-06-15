
<div class="row">
	<div class="col-md-12">
			<?php

			$query = mysqli_query($connect,"SELECT * FROM event");
			if (mysqli_num_rows($query) == 0) {
			?>
			<div class="card1">
			<div class="row">
			<div class="col-md-12">
				<h1>Belum Ada Data</h1>
			</div>
			</div>
			</div>  
			<?php
			}else{
				while ($record = mysqli_fetch_array($query)) {
			?>
			<div class="card1">
			<div class="row">
			<div class="col-md-3">
				<img src="img/<?php echo $record['poster']; ?>" class="img-responsive" />
			</div>
			<div class="col-md-6">
				<h1><?php echo $record['nama_event']; ?></h1>
				<h4><?php echo $record['caption']; ?></h4>
				<h4><?php echo $record['tanggal_event']; ?></h4>
				<p><?php echo $record['descEvent']; ?></p>
			</div>
			<div class="col-md-3">
				<a href="inc/deleteEventProses.php?event=<?php echo $record['id_event']?>" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
				<a href="page/editEvent.php?event=<?php echo $record['id_event']?>" class="btn btn-xs btn-info">Edit</a>
			</div>
			</div>
			</div>  
			<?php }
			}
			?>
	  
	</div>
</div>