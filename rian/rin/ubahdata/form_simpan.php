<html>
<head>
	<title>Simpan Data</title>
</head>
<body>
	<h1>Tambah Data </h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>NIK</td>
		<td><input type="text" name="NIK"></td>
	</tr>
	<tr>
		<td>No KK</td>
		<td><input type="text" name="NO_KK"></td>
    </tr>
    <tr>
		<td>Nama</td>
		<td><input type="text" name="NAMA"></td>
    </tr> 
    <tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="JENIS_KELAMIN"></td>
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td><input type="type" name="TMP_LHR"></td>
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="TGL_LHR"></td>
	</tr>
    <tr>
		<td>Agama</td>
		<td><input type="text" name="AGAMA"></td>
	</tr>
    <tr>
		<td>Pendidikan</td>
		<td><input type="text" name="PENDIDIKAN"></td>
	</tr>
    <tr>
		<td>Pekerjaan</td>
		<td><input type="text" name="PEKERJAAN"></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td><input type="text" name="ALAMAT"></td>
	</tr>
    <tr>
		<td>RT/RW</td>
		<td><input type="text" name="RWRT"></td>
	</tr>
    <tr>
		<td>Desa</td>
		<td><input type="text" name="DESA"></td>
	</tr>
    <tr>
		<td>Kecamatan</td>
		<td><input type="text" name="KECAMATAN"></td>
	</tr>
    <tr>
		<td>Kabupaten</td>
		<td><input type="text" name="KAB_KOTA"></td>
	</tr>
    <tr>
		<td>Kode Pos</td>
		<td><input type="text" name="KODE_POS"></td>
	</tr>
    <tr>
		<td>Provinsi</td>
		<td><input type="text" name="PROVINSI"></td>
	</tr>
    <tr>
		<td>Kewarganegaraan</td>
		<td><input type="text" name="KEWARGANEGARAAN"></td>
	</tr>
    <tr>
		<td>Username</td>
		<td><input type="text" name="USERNAME"></td>
	</tr>
    <tr>
		<td>Password</td>
		<td><input type="text" name="PASSWORD"></td>
	</tr>
    <tr>
		<td>Tanggal Daftar</td>
		<td><input type="date" name="TGL_DAFTAR"></td>
	</tr>
    <tr>
		<td>Level</td>
		<td><input type="text" name="LEVEL"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="FOTO"></td>
	</tr>
    <tr>
		<td>Status</td>
		<td><input type="text" name="STATUS"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="http://localhost/Kelompok1/rian/rin/home/dtwarga.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>