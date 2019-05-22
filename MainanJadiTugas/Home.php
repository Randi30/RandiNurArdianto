<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Design1.css">
</head>
<body>

	<div class="kotak-login">
	
		<h4 class="tulisan">Lepaskan Peningmu dan Rasakan Kebahagiaan didalamnya</h4>
	
	<form method="post" action="data.php" class="bc">
		<table>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="nama" class="ac"></td>
			</tr>
			<br>
			<tr>
				<td>Password </td>
				<td>:</td>
				<td><input type="Password" name="pass" class="ac"></td>
			</tr>
			<br>
			<tr>
				<td>Jumlah Peserta</td>
				<td>:</td>
				<td>
					<select name="peserta" class="ac">
					<option value="J">==Jumlah Peserta==</option>
					<?php for($x=1;$x<=3;$x++){ ?>
						<option value="<?php echo $x; ?>">
							<?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
 				<td>
 					Pilih Lokasi
 				</td>
 				<td>:</td>
 				<td>
 					<select name="lokasi" class="ac">
 						<option value="Atlantos">Atlantos</option>
 						<option value="Seaworld">Seaworld</option>
 						<option value="Kampung">Kampung Seni</option>
 						<option value="Pantai">Pantai</option>
 						<option value="Dufan">Dunia Fantasi</option>
 					</select>
 				</td>
 			</tr>
 			
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
			<br>
		</table>
	</form>
		<a class="daftar" href="Daftar.php">Daftarkan Akunmu</a>
</div>
</body>
</html>