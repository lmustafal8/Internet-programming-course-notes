<!DOCTYPE html>
<html>
<head>
	<title>Soru 2 : Dört işlem ödevi</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Sayı 1:</td>
				<td><input type="number" name="num1"></td>
			</tr>
			<tr>
				<td>Sayı 2:</td>
				<td><input type="number" name="num2"></td>
			</tr>
			<tr>
				<td>İşlem Türü:</td>
				<td>
					<input type="text" name="operation" placeholder="İşlem türü (+, -, *, /)">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Hesapla"></td>
			</tr>
		</table>
	</form>

	<?php
	if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operation = $_POST['operation'];

		switch ($operation) {
			case '+':
				$result = $num1 + $num2;
				echo "<table><tr><td>Toplama İşlemi</td><td>$num1 + $num2 = $result</td></tr></table>";
				break;

			case '-':
				$result = $num1 - $num2;
				echo "<table><tr><td>Çıkarma İşlemi</td><td>$num1 - $num2 = $result</td></tr></table>";
				break;

			case '*':
				$result = $num1 * $num2;
				echo "<table><tr><td>Çarpma İşlemi</td><td>$num1 * $num2 = $result</td></tr></table>";
				break;

			case '/':
				if ($num2 == 0) {
					echo "<table><tr><td colspan='2'>Sıfıra bölünemez.</td></tr></table>";
				} else {
					$result = $num1 / $num2;
					echo "<table><tr><td>Bölme İşlemi</td><td>$num1 / $num2 = $result</td></tr></table>";
				}
				break;

			default:
				echo "<table><tr><td colspan='2'>Bu işlem türü geçersizdir veya işlem seçilmemiştir işlem seçmediyseniz lütfen bir işlem seçiniz. ( + - * /) $operation</td></tr></table>";
				break;
		}
	}
	?>
</body>
</html>
