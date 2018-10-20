<?php
include'koneksi.php';
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $que = mysqli_query($conn,"SELECT * FROM datadiri WHERE Nim =$nim");
    while ($girl = mysqli_fetch_array($que)) {
        
    
?>
<form action="#" method="POST">
    Nama:<input type="text" name="nama" value=<?php echo $girl['Nama']; ?> ><br>
	Nim:<input type="text" name="nim" disabled value=<?php echo $girl['Nim']; ?>><br>
	Tanggal lahir:<input type="date" name="tgl" value=<?php echo $girl['Tgl_lahir']; ?>><br>
	jenis kelamin:<select name="jk">
		<option value="laki-laki" <?php echo($girl['JK']=="laki-laki")?'selected':'' ?>>laki-laki</option>
		<option value="perempuan" <?php echo($girl['JK']=="perempuan")?'selected':'' ?>>perempuan</option>
	</select><br>

	program studi:<select name="prog">
		<option value="Akuntansi" <?php echo($girl['Progsu']=="Akuntansi")?'selected':'' ?>>Akuntansi</option>
		<option value="Manajemen informatika" <?php echo($girl['Progsu']=="Manajemen informatika")?'selected':'' ?>>Manajemen Informatika</option>
		<option value="MBTI" <?php echo($girl['Progsu']=="MBTI")?'selected':'' ?>>MBTI</option>
	</select><br>

	Fakultas:<input type="radio" name="fak" value="FIT" <?php echo($girl['fakul']=="FIT")?'checked':'' ?>>FIT <input type="radio" name="fak" value="FIK" <?php echo($girl['fakul']=="FIK")?'checked':'' ?>>FIK<br>
	Asal:<input type="text" name="asal" value=<?php echo $girl['asal']; ?>><br>
	Moto hidup:<textarea rows="20" cols="50" name="moto"><?php echo $girl['moto_hidup']?></textarea><br>
	<input type="submit" name="send" value="submit">
</form>

<?php
    }
}
if (isset($_POST['send'])) {
    $nama = $_POST['nama'];
	
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prog'];
	$fakul = $_POST['fak'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	if (isset($nim)) {
	$que = mysqli_query($conn,"UPDATE datadiri SET Nama='$nama',Tgl_lahir='$tgl',JK='$jk',Progsu='$prodi',fakul='$fakul',asal='$asal',moto_hidup='$moto' WHERE Nim='$nim'");
	if ($que) {
        echo "Berhasil";
        header("Location:view.php");
	}else{
		echo "GAGAL";
	}	
	}
}
?>