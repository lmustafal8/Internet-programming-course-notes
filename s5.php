<!DOCTYPE html>
<html>
<head>
	<title> Soru 5 : Üçgen</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Derece 1:</td>
				<td><input type="number" name="deg1"></td>
			</tr>
			<tr>
				<td>Derece 2:</td>
				<td><input type="number" name="deg2"></td>
			</tr>
			<tr>
				<td>Derece 3:</td>
				<td><input type="number" name="deg3"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Kontrol Et"></td>
			</tr>
		</table>
	</form>
	<?php
if (isset($_POST['deg1']) && isset($_POST['deg2']) && isset($_POST['deg3'])) {
	$deg1 = $_POST['deg1'];
	$deg2 = $_POST['deg2'];
	$deg3 = $_POST['deg3'];

	$total_degrees = $deg1 + $deg2 + $deg3;

	echo "<table>";
	echo "<tr><td>Derece 1</td><td>$deg1</td></tr>";
	echo "<tr><td>Derece 2</td><td>$deg2</td></tr>";
	echo "<tr><td>Derece 3</td><td>$deg3</td></tr>";
	echo "<tr><td>Toplam Derece</td><td>$total_degrees</td></tr>";

	if ($total_degrees == 180) {
		echo "<tr><td colspan='2'>Bu bir üçgendir.</td></tr>";
	} else {
		echo "<tr><td colspan='2'>Bu bir üçgen değildir.</td></tr>";
	}
	echo "</table>";
}
?>
</body>
</html>