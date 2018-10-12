<?php
error_reporting(0);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "form";

	$conn=mysqli_connect($host, $user, $pass, $database);

	if (isset($_POST['kirim'])) {
		$nama1 			= $_POST['nama'];
		$nim1 			= $_POST['nim'];
		$kelas1			= $_POST['kelas'];
		$JenisKelamin1	= $_POST['jeniskelamin'];
		$Hobi1			= $_POST['hobi'];
		$Fakultas1		= $_POST['fakultas'];
		$aamat1			= $_POST['aamat'];
		$pass1 			= $_POST['pass'];

		if (strlen($NIM)==10) {	
				if (strlen($nama)<=35) {
						$qry = $conn -> query("INSERT INTO pendaftaran VALUES  ('$nama1', '$nim1', '$kelas1', $JenisKelamin1',  '$Hobi1', '$Fakultas1', '$aamat1', '$pass1')");
						
						echo "Regristrasi Berhasil";
						echo "<button><a href='login.php'>Log In</button></a>";
					}
					else{
						echo "Regristrasi Gagal";
					}
				}
			}
			else{
				echo "Regristrasi Gagal";	
	}		
?>