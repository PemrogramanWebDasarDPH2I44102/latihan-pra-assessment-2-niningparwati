<form method="POST">
	<table>
		<tr>
			<td>
				Nama Penghuni
			</td>
			<td>
				<input type="text" name="penghuni" value="">
			</td>
		</tr>
		<tr>
			<td>
				UNIT
			</td>
			<td>
				<input type="text" name="unit" value="">
			</td>
		</tr>
		<tr>
			<td>
				Nomor KTP
			</td>
			<td>
				<input type="text" name="ktp" value="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="create" value="CREATE">
			</td>
		</tr>
	</table>
</form>

<?php 
$conn = mysqli_connect('localhost','root','','paket');
if (isset($_POST['create'])) {
	$penghuni = $_POST['penghuni'];
	$unit = $_POST['unit'];
	$ktp = $_POST['ktp'];

$create = mysqli_query($conn, "INSERT INTO penghuni(nama,unit,no_ktp) VALUES('$penghuni','$unit','$ktp')");
if ($create) {
	echo "Berhasil";
}else{
	echo "Gagal";
}
}
 ?>