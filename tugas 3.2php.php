<?php
	$nim = "";
	$nama= "";
	$namaErr = "";
	$nimErr = "";
	$nimErr2 = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["nama"])) {
			$namaErr = "Nama masih kosong";
		}
		else{
			$nama = test_input($_POST["nama"]);
		}

		if (empty($_POST["nim"])) {
			$nimErr = "Nim masih kosong";
		}
		else{
			$nim = test_input($_POST["nim"]);
		}

		if (strlen($nim) < 10) {
			$nimErr2 = "Tidak boleh kurang dari 10 digit";
		}
		else{
			$nim = test_input($_POST["nim"]);
		}
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Nama : <input type="text" name="nama">
		<span class="error">* <?php echo $namaErr;?> </span><br><br>
	Nime : <input type="number" name="nim">
		<span class="error">* <?php echo $nimErr;?> <?php echo $nimErr2;?> </span><br><br>
	<input type="submit" name="submit" value="Submit">
</form>