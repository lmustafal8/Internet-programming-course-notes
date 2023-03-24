<!DOCTYPE html>
<html>
<head>
	<title>Soru 4 : Vize - Final notu hesaplama</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Vize Notu:</td>
				<td><input type="number" name="vize"></td>
			</tr>
			<tr>
				<td>Final Notu:</td>
				<td><input type="number" name="final"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Hesapla"></td>
			</tr>
		</table>
	</form>

	<?php
	if (isset($_POST['vize']) && isset($_POST['final'])) {
		$vize = $_POST['vize'];
		$final = $_POST['final'];
		$ortalama = ($vize * 0.4) + ($final * 0.6);
		$basari = "";

		if ($ortalama >= 60) {
			$basari = "Başarılı";
		} else {
			$basari = "Başarısız";
		}

		echo "<table>
				<tr>
					<th>Sınav Türü</th>
					<th>Puan</th>
				</tr>
				<tr>
					<td>Vize :</td>
					<td>$vize</td>
				</tr>
				<tr>
					<td>Final :</td>
					<td>$final</td>
				</tr>
				<tr>
					<td>Ortalama :</td>
					<td>$ortalama</td>
				</tr>
				<tr>
					<td>Başarı Durumu : </td>
					<td>$basari</td>
				</tr>
			</table>";
	}
	?>
</body>
</html>
