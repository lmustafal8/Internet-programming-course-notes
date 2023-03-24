<!DOCTYPE html>
<html>
<head>
	<title>Gün Bulma</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Gün Sayısı:</td>
				<td><input type="number" name="day"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Günü Bul"></td>
			</tr>
		</table>
	</form>
	<?php
if (isset($_POST['day'])) {
	$day = $_POST['day'];

	switch ($day) {
		case 1:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Pazartesi</td></tr></table>";
			break;
		case 2:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Salı</td></tr></table>";
			break;
		case 3:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Çarşamba</td></tr></table>";
			break;
		case 4:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Perşembe</td></tr></table>";
			break;
		case 5:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Cuma</td></tr></table>";
			break;
		case 6:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Cumartesi</td></tr></table>";
			break;
		case 7:
			echo "<table><tr><td>Gün Sayısı:</td><td>$day</td></tr><tr><td>Gün Adı:</td><td>Pazar</td></tr></table>";
			break;
		default:
			echo "Hatalı sayı girdiniz. Lütfen 1-7 arasında bir sayı girin.";
	}
}
?>
</body>
</html>