
<?php 
$conn = mysqli_connect('localhost','root','','paket');
if (isset($_POST['update'])) {
	$tgl_dtg = $_POST['tgl_dtg'];
	$sasaran = $_POST['sasaran'];
	$penerima = $_POST['penerima'];
	$isi = $_POST['isi'];
	$tgl_ambil = $_POST['tgl_ambil'];

	$update = ("UPDATE paket_n(tanggal_datang,sasaran,penerima,isi_paket,tanggal_ambil,id) SET('$tgl_dtg','$sasaran','$penerima','$isi','$tgl_ambil','')");
	$cek=mysqli_query($conn,$update);

	if (!$cek) {
		echo "Gagal update";
	}else{
		echo "Berhasil update";
	}
}
 ?>

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
