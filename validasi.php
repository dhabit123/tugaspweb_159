<!DOCTYPE html>
<html>
<head>
	<style>
		.valid{
			color: red;
		}
	</style>
	<title>validasi form</title>
</head>
<body>
	<form action="valid.php" method="POST">
		<h3 align="center">FORM VALIDASI</h3>
		<br><br>
		
		<table>
		<tr>
			<td>Nama</td> <td><input type="text" name="nama"></td>
			<td><span class="valid">
			<?php
				if (isset($_GET["errornamanim"])){
					$error=$_GET["errornamanim"];
					echo $error;
				}
				elseif (isset($_GET["errornama"])) {
					$error=$_GET["errornama"];
					echo($error);
				}
			?>
			</span></td>
		</tr>
		<tr>
			<td>Nim</td> <td><input type="text" name="nim"></td>
			<td><span class="valid">
			<?php
				if (isset($_GET["errornim"])) {
					$error=$_GET["errornim"];
					echo $error;
				}
			?>
			</span></td>
		</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="submit">
		
	</form>
	

</body>
</html>