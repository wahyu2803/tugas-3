<?php
	$nama = "";
	$nim = "";
	$valid_panjang_nim = true;
	$valid_panjang_nim_msg = "";
	$namaErr = "";
	$nimErr = "";

	if (isset($_POST['submit'])){
		$nama = trim($_POST['nama']);
		$nim = trim($_POST['nim']);

		if (empty($_POST["nama"])) {
			$namaErr = "Nama Masih kosong <br>";
		}
		else {
    		$nama = test_input($_POST["nama"]);
  		}

		if (empty($_POST["nim"])){
			$nimErr = "Nim masih kosong <br>";
		}

		else {
    		$nim = test_input($_POST["nim"]);
  

	function test_input($data) {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
}
?>

<form action="tugas3 pweb.php" method="post">
	Nama : <input type="text" name="nama">
		<spin class="error">* <?php echo $namaErr;?></span>
  <br><br>
	Nim  : <input type="number" name="nim" value="<?php echo $nim; ?>"><br>
		<spin class="error">* <?php echo $nimErr;?></span>
  <br><br>
	<input type="submit" name="submit" value="register">
</form>