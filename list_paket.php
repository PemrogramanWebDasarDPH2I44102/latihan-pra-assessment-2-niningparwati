<?php 
$conn = mysqli_connect('localhost','root','','paket');
$list = "SELECT * FROM paket_n";
while ($row = mysqli_fetxh_array($list)) {
	

 ?>

<form method="POST">
	<table>
		if ($) {
			# code...
		}
		 ?>
		<tr>
			<td>
				Tanggal Datang :
			</td>
			<td>
				<?php echo $row['tanggal_datang']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Sasaran Paket
			</td>
			<td>
				<?php echo $row['sasaran']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Penerima
			</td>
			<td>
				<?php echo $row['penerima']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Isi Paket
			</td>
			<td>
				<?php echo $row['isi_paket']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Tanggal Ambil
			</td>
			<td>
				<?php echo $row['tanggal_ambil']; ?>
			</td>
		</tr>
	</table>
</form>

<?php 
}
 ?>