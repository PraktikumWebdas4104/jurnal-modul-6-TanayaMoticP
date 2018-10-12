<!--
	Tanaya Motic P
	Jurnal 5
	-->


<center><h1>Form Pendaftaran Mahasiswa</h1></center>

<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="35"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type ="text" name="NIM" length="10"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas">
			<option value="1">Kelas</option>
			<option value="D3MI41-04">D3MI41-04</option>
			<option value="D3MI41-03">D3MI41-03</option>
			<option value="D3MI41-02">D3MI41-02</option>
			<option value="D3MI41-01">D3MI41-01</option>
			</select>
			</td>
		</tr>
			<tr>
			<td> Jenis Kelamin </td>
			<td> : </td>
			<td><input type="radio" name="JenisKelamin" value="Laki-laki"> Laki-laki 		
			<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan</td>
		</tr>
		</tr>
		<tr> 
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Travelling">Travelling
			<input type="checkbox" name="hobi" value="Climbing">Climbing
			<input type="checkbox" name="hobi" value="Diving">Diving</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text area" name="alamat"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="passsword" name="pass"></td>
		</tr>
		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>
	</table>
</form>


<?php 
if (isset($_POST['kirim'])) {
	include('prosesregistrasi.php');
}
?>


		



		