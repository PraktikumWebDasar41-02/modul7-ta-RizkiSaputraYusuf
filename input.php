<form method="POST">
	Nama<input type="text" name="nama"><br>
	Nim<input type="text" name="nim"><br>
	Tanggal_Lahir<input type="date" name="Tgl_lahir"><br>
	Jenis_Kelamin<select name="jk">
		<option value="Pria">Pria</option>
		<option value="Wanita">Wanita</option>
		</select><br>
	Prodi<select name="prod">
		<option value="Akuntansi">Akuntansi</option>
		<option value="Manajemen Informatika">Manajemen Informatika</option>
		<option value="MBTI">MBTI</option>
		<option value="Teknik Informatika">Teknik Informatika</option>
		<select><br>
	Fakultas<input type="radio" name="fakul" value="FIT">FIT
	<input type="radio" name="fakul" value="FIK">FIK<br>
	Asal<input type="text" name="asal"><br>
	Moto Hidup<textarea rows="20" cols="50" name="moto"></textarea><br>
	<input type="submit" name="send" value="submit"><button><a href="view.php">View</a></button>
</form>
<?php
include 'koneksi.php';
if (isset($_POST['send'])) {
	$nama = $_POST['nama'];
	if (is_numeric($_POST['nim'])) {
		$nim =$_POST['nim'];
	}
	$tgl =$_POST['Tgl_lahir'];
	$jk =$_POST['jk'];
	$prod =$_POST['prod'];
	$fakul =$_POST['fakul'];
	$asal =$_POST['asal'];
	$moto =$_POST['moto'];
	if (isset($nim)) {
	$que = mysqli_query($conn,"INSERT INTO data(Nama, Nim, Tgl_Lahir, Jk, Prodi, fakul, asal, moto_hidup) VALUES ('$nama','$nim','$tgl', '$jk', '$prod','$fakul','$asal','$moto')");
	if ($que){
		echo "Berhasil";
	}else{
		echo "Gagal";
	}
}
}
?>