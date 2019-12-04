<!DOCTYPE html>
<html >
<?php
include 'koneksi.php';
?>

<?php 
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
$nik = $_SESSION['NIK_PENDUDUK'];

$query = $query = "SELECT sk_domisili.NO_DOMISILI, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANJU, penduduk.NIK_PENDUDUK, penduduk.NAMAPEN, penduduk.TEMPATLHR, penduduk.TANGGALHR, penduduk.JK_PEN, penduduk.STATUSPEN, penduduk.AGAMAPEN, penduduk.PEKERJAANPEN, penduduk.KWNPEN, penduduk.NIK_PENDUDUK, keluarga.RT_RW, keluarga.ALAMAT FROM sk_domisili, penduduk, keluarga where sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK=penduduk.NIK_PENDUDUK AND penduduk.NO_KK=keluarga.NO_KK"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

$data = mysqli_fetch_array($sql); // Ambil semua data dari hasil eksekusi $sql


?>

<style>
		#wrap {background:white ;width:800px ; height:800;}
		body {background: white; width:800px;height:800;}
	</style>
<head>

	<title>Print Surat Pengantar Domisili</title>
	
</head>
<center>
<div align="center">
	<table width="100%" border="0" align="center" cellspacing="0" >
		<tr>
			<td width="50"></td>
			<td  align="left"><img src="Jember.png" width="150" height="120"></td>
			<td width="600" >
				<div align="center" >
					<b>
						<font size="4">
							PEMERINTAH KABUPATEN JEMBER<br>KECAMATAN AMBULU<br>DESA SABRANG
						</font><br>
						<font size="4">
							JL. Watu Ulo No.01 Telp: 081 249 065 993 kode Pos 68172<br>
						</font>
					</b>
				</div>
			</td>	
			<td width="200"></td>
		</tr>
		<tr>
			<td colspan="5"><hr size="4" color="black"></td>		
		</tr>
	</table>
</div>

<body>
	<div id="wrap">
  	<div class="row">
 		<div class="col-3"></div>
 		<div class="col-6" align="center">
				<br><b>
					<font size="4.5">
						<u>SURAT KETERANGAN CACATAN KEPOLISIAN</u></font><br>
					<font size="3">
						Nomor : 200 /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/35.09.12.2002/&nbsp;&nbsp;&nbsp;
					</font>
		 		</b><br>
				 <div class="col" align="left" margin="15px">
				 <a href="cetakskck.php" target="_blank">CETAK</a>
				 <br>
				<font size="4" align="left">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang  bertanda tangan dibawah ini Saya Kepala Desa Sabrang,Kecamatan Ambulu, Kabupaten Jember , menerangkan dengan sebenarnya bahwa :
				</font>
				<br><br>
				<table border="0" >
				<tbody>
				<center><tr><td>Nama Lengkap</td><td>:</td><td><?php echo $data['NAMAPEN'];?></td></tr>
				<tr><td>Tempat tanggal lahir/ umur</td><td>:</td><td><?php echo $data['TEMPATLHR'];?>,<?php echo $data['TANGGALHR'];?></td></tr>
				<tr><td>Jenis Kelamin</td><td>:</td><td> <?php echo $data['JK_PEN']; ?></td></tr>
				<tr><td>Status Perkawinan</td><td>:</td><td> <?php echo $data['STATUSPEN'];?></td></tr>
				<tr><td>Agama</td><td>:</td><td><?php echo $data['AGAMAPEN'];?></td></tr>
				<tr><td>Pekerjaan</td><td>:</td><td> <?php echo $data['PEKERJAANPEN'] ;?></td></tr>
				<tr><td>Kewarganegaraan</td><td>:</td><td> <?php echo $data['KWNPEN'];?></td></tr>
				<tr><td>NIK</td><td>:</td><td><?php echo $data ['NIK_PENDUDUK'] ;?></td></tr>
				<tr><td>Alamat Dusun</td><td>:</td><td><?php echo  $data['ALAMAT'];?></td></tr>
				<tr><td>RT/RW</td><td>:</td><td><?php echo $data['RT_RW']; ?></td></tr>
				<tr><td>Desa Sabrang, Kec Ambulu Kab Jember</td></tr>
				</center>
				</tbody></table>
				</font>
				<font size="3" face="Tahoma">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut di atas benar-benar penduduk Desa Sabrang dan sampai saat ini masih tinggal di alamat<br> tersebut di atas.
				<br>
				<font size="3" face="Tahoma">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan selama menjadi penduduk Desa Sabrang tidak pernah tersangkut dalam perkara tindak<br> pidana atau tindak pidana kejahatan lainya baik secara langsung ataupun tidak langsung. Adapun surat keterangan ini akan dipergunakan untuk melengkapi persyaratan  <br>
				<?php echo $data['TUJUAN']; ?>
				<font size="3" face="Tahoma">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya dan dapatnya dipergunakan sebagaimana mestinya.  
				
				</font>
				</div>
 		</div><br>
 	</div>

	 <div align="center">
	<table>
		<tr>
			<td width="245" align="right">
				<div align="center"><font size="3">
					<br>Mengetahui<br>BABINKAMTIBNAS
				</font></div>
			</td>
			<td width="300"><br></td>	
			<td width="245" align="right">
			<div align="center" class="time"><font size="3">
					<br>
					Sabrang,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
					<br>
					KEPALA DESA SABRANG
				</font></div>
				</font></div>
			</td>
		</tr>
		<tr>
			<td width="245" align="right">
				<div align="center"><font size="3">
				<br><br>
					<u>.....................</u>
				</font></div>
			</td>
			<td width="300"></td>
			<td width="245" align="right"><b>
				<div align="center"><font size="3">
				<br><br>
					<u>ZUBAERI LUTFI</u>
				</font></div></b>
			</td>
		</tr>
		<tr>
			<td width="245" height="70"></td>
			<td width="300" height="70" align="CENTER"><p>Mengetahui</p></td>
			<td width="245" height="70"></td>
		</tr>
		<tr>
			<td width="245" align="right">
				<div align="center"><font size="3">
					<u>CAMAT AMBULU</u>
				</font></div>
			</td>
			<td width="300"></td>
			<td width="245" align="right">
				<div align="center"><font size="3">
					<u>KAPOLSEK AMBULU</u>
				</font></div>
			</td>
		</tr>
		<tr>
			<td width="245" align="right">
				<div align="center"><font size="3">
				<br><br>
					<u>.....................</u>
				</font></div>
			</td>
			<td width="300"></td>
			<td width="245" align="right">
				<div align="center"><font size="3">
					<br><br>
					<u>.....................</u>
				</font></div>
			</td>
		</tr>
		
	</table>
</div>
</center>

</body>
</html>
