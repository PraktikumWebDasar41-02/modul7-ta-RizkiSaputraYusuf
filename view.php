<button><a href="input.php">INPUT</a></button>
<form method="POST">
	<input type="search" name="cari"><input type="submit" name="send" value="cari"><br>
</form>
<?php
include 'koneksi.php';
if (isset($_POST['send'])) {
	$cari = $_POST['cari'];
$quer = mysqli_query($conn,"SELECT * FROM data WHERE nim LIKE '%".$cari."%'");
echo "<table border='3'>";
echo "<th>Nama</th><th>Nim</th><th>Tgl_lahir</th><th>
      Jk</th><th>prog</th><th>fakul</th><th>asal</th><th>
      asal</th><th>moto</th><th>AKSI</th>";
while ($girl= mysqli_fetch_array($quer)) {
	echo "<tr>";
	echo "<td>".$girl['Nama']."</td>";
	echo "<td>".$girl['Nim']."</td>";
	echo "<td>".$girl['Tgl_Lahir']."</td>";
	echo "<td>".$girl['Jk']."</td>";
	echo "<td>".$girl['Prodi']."</td>";
	echo "<td>".$girl['fakul']."</td>";
	echo "<td>".$girl['asal']."</td>";
	echo "<td>".$girl['moto_hidup']."</td>";
	echo "<td><a href=hapus.php?nim=".$girl['Nim'].">;
		Hapus</a></td>";
	echo "</tr>";
}
echo "</table>";
}else{
	$quer = mysqli_query($conn,"SELECT * FROM data");
echo "<table border='3'>";
echo "<th>Nama</th><th>Nim</th><th>Tgl_lahir</th><th>
      Jk</th><th>prog</th><th>fakul</th><th>asal</th><th>
      asal</th><th>moto</th><th>AKSI</th>";
while ($boy = mysqli_fetch_array($quer)) {
	echo "<tr>";
	echo "<td>".$boy['Nama']."</td>";
	echo "<td>".$boy['Nim']."</td>";
	echo "<td>".$boy['Tgl_Lahir']."</td>";
	echo "<td>".$boy['Jk']."</td>";
	echo "<td>".$boy['Prodi']."</td>";
	echo "<td>".$boy['fakul']."</td>";
	echo "<td>".$boy['asal']."</td>";
	echo "<td>".$boy['moto_hidup']."</td>";
}
}
?>