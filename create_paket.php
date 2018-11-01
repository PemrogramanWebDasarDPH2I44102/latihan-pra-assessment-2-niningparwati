<form method="POST">
	<table>
		<tr>
			<td>
				Tanggal Datang :
			</td>
			<td>
				<input type="date" name="tgl_dtg" value="<?php echo date('l, d-m-Y'); ?>" hidden><?php echo date('l, d-m-Y'); ?>
			</td>
		</tr>
		<tr>
			<td>
				Sasaran Paket
			</td>
			<td>
				<select name="sasaran">
					<option value="Nining">Nining</option>
					<option value="Aan">Aan</option>
					<option value="Devi">Devi</option>
					<option value="Fiya">Fiya</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Penerima
			</td>
			<td>
				<input type="text" name="penerima" value="">
			</td>
		</tr>
		<tr>
			<td>
				Isi Paket
			</td>
			<td>
				<input type="text" name="isi" value="">
			</td>
		</tr>
		<tr>
			<td>
				Tanggal Ambil
			</td>
			<td>
				<input type="date" name="tgl_ambil" value="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="SUBMIT">
			</td>
		</tr>
	</table>
</form>

<?php 
$conn = mysqli_connect('localhost','root','','paket');
if (!$conn) {
	echo "GAGAL";
}else{
	echo "BERHASIL";
}
if (isset($_POST['submit'])) {
	$tgl_dtg = $_POST['tgl_dtg'];
	$sasaran = $_POST['sasaran'];
	$penerima = $_POST['penerima'];
	$isi = $_POST['isi'];
	$tgl_ambil = $_POST['tgl_ambil'];

	$sql = ("INSERT INTO paket_n(tanggal_datang,sasaran,penerima,isi_paket,tanggal_ambil,id) VALUES('$tgl_dtg','$sasaran','$penerima','$isi','$tgl_ambil','')");
	$query=mysqli_query($conn,$sql);

	if (!$query) {
		echo "Gagal ditambahkan".mysqli_error($query);
	}else{
		echo "Berhasil ditambahkan";
	}
}
 ?>