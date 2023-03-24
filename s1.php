<!DOCTYPE html>
<html>
<head>
	<title>Soru 1 : Ehliyet durumu</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Yaşınızı giriniz:</td>
				<td><input type="number" name="age"></td>
			</tr>
			<tr>
				<td>Ehliyet alma durumu :</td>
				<td>
					<?php
					if (isset($_POST['age'])) {
						$age = $_POST['age'];
						if ($age <= 0) {
       					 echo '<input type="text" value="Yaşınız 0 veya daha küçük olamaz!" size="45" readonly>';
       					}
       					else if ($age >= 18) {
							echo '<input type="text" value="18 yaşından büyük olduğu için ehliyet alabilir." size="45" readonly>';
						} else {
							echo '<input type="text" value="18 yaşından küçük olduğu için ehliyet alamaz." size="45" readonly>';
						}
					}
					?>
				</td> 
			</tr>
		</table>
	<input type="submit" value="Gönder">
	</form>
</body>
</html>
 
<!-- readonly : ifadesi input içinde ki metnin değiştirilmemesini sağlar !-->

