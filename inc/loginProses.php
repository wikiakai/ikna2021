<?php 
// menghubungkan dengan koneksi
session_start();
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['un'];
$password = $_POST['pass'];
$sql = mysqli_query($connect, "Select * from admin where username = '$username' and password = '$password'");
$result = mysqli_num_rows($sql);
if($result){
	$row = mysqli_fetch_assoc($sql);
	$userid = $row['id_admin'];
	$_SESSION['username']=$username;
	$_SESSION['id_user']=$userid;
	?>
	<script>
		window.location='../index.php';
	</script>
	<?php 
}else{
	?>
	<script>
		alert("username atau password salah!");
		window.location='../page/login.php';
	</script>
	<?php 
}

?>