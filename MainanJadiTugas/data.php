<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<div class="ac">
 		<h3 class="tulisan">Deskripsi Pemesanan</h3>
 	
 	<form action="Home.php" class="sc" >
<table class="aja">
 		<tr>
 			<td>
 				Nama Pemiliki akun
 			</td>
 			<td>:</td>
 			<td><?php
 			echo $name = $_POST['nama'];
 			?>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				Jumlah orang yang dibawa
 			</td>
 			<td>:</td>
 			<td><?php echo $Peserta =$_POST['peserta'];?></td>
 		</tr>
 		<tr>
 			<td>
 				Akan Mengunjungi 
 			</td>
 			<td>:</td>
 			<td>
 				<?php
 					echo $Lokasi = $_POST['lokasi'];
 				?>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				Total Pembayaran
 			</td>
 			<td>:</td>
 			<td>
 			<?php
 				
 					if(isset(isset($_POST['login']))){
 						$Peserta = $_POST['peserta'];
 						$Lokasi = $_POST['lokasi'];
 						switch ($Lokasi) {
 							case 'Atlantos':
 								if($Peserta>1 && $Peserta<=3){
 									$hasil = $Peserta*250000*0.1;
 									$hasil1 = 250000-$hasil;
 									echo $hasil1." /Orang";;
 								}
 								else{
 									$hasil = $Peserta*250000;
 									echo $hasil." /Orang";;
 								}
 								break;
 							case 'Seaworld':
 								if($Peserta>1 && $Peserta<=3){
 									$hasil = $Peserta*180000*0.1;
 									$hasil1 = 180000-$hasil;
 									echo $hasil1." /Orang";
 								}
 								else{
 									$hasil = $Peserta*180000;
 									echo $hasil." /Orang";
 								}
 								break;
 							case 'Kampung':
 								if($Peserta>1 && $Peserta<=3){
 									$hasil = $Peserta*25000*0.1;
 									$hasil1 = 25000-$hasil;
 									echo $hasil1." /Orang";;
 								}
 								else{
 									$hasil = $Peserta*25000;
 									echo $hasil." /Orang";;
 								}
 								break;
 							case 'Pantai':
 								if($Peserta>1 && $Peserta<=3){
 									$hasil = $Peserta*20000*0.1;
 									$hasil1 = 20000-$hasil;
 									echo $hasil1." /Orang";;
 								}
 								else{
 									$hasil = $Peserta*20000;
 									echo $hasil." /Orang";;
 								}
 								break;
 							case 'Dufan':
 								if($Peserta>1 && $Peserta<=3){
 									$hasil = $Peserta*350000*0.1;
 									$hasil1 = 350000-$hasil;
 									echo $hasil1." /Orang";;
 								}
 								else{
 									$hasil = $Peserta*350000;
 									echo $hasil." /Orang";;
 								}
 								break;
 							default:
 								echo "Mohon masukan yang lain";
 								break;
 						}
 					}
 					
 				?>
 			</td>
 		</tr>
 	</table>
 	 	<input type="submit" name="Kembali" value="Kembali ke Home">
 	</form>
 	</div>
</body>
</html>
