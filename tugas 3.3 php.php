<?php
	$nama = "";
	$nim = "";
	$valid_panjang_nim = true;
	$valid_panjang_nim_msg = "";

	if (isset($_POST['submit'])){
		$nama = trim($_POST['nama']);
		$nim = trim($_POST['nim']);

		if (empty($nama)) {
			$nama = "Nama Masih kosong <br>";
		}

		if (empty($nim)){
			$nim = "Nim masih kosong <br>";
		}

		if (strlen($nim) <= 10 ) {
			$valid_panjang_nim = false;
			$valid_panjang_nim_msg = "Passwor minimal 10 digit";
		}
	
?>

<form action="tugas3 pweb.php" method="post">
	 <input type="text" name="name" value="<?php echo $nama; ?>"><br>
	 <input type="number" name="nim" value="<?php echo $nim; ?>"><br>
	<input type="submit" name="submit" value="register">
</form>