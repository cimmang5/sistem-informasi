<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PEMOGRAMAN WEB AKUMULASI 4 SEMESTER</h1>
	<form method="post" action="<?php echo base_url('index.php/akumulasi/hasil_process'); ?>">

		Nama mahasiswa : <br>
		<input type="text" name ="nama"><br>
		
		NIM : <br>
		<input type="text" name = "NIM"><br>
		
		
		<input type="submit" value="tampilkan">
	</form>
	<div>
		<?php
		if($nama){
			if($lulus){
				echo "selamat $nama anda masih bisa lanjut di KAMPUS ini";
			}else{
				echo "mohon maaf $nama anda dinyatakan DO dari kampus ini";
			}
		}
		?>
	</div>
</body>
</html>

