<?php
include "../conx.php";
include "../header.php";
include "../langc/lang$lang.php";
require "../version/ver.php";
echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>'.$hrUpdMod.'</title>
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link rel="stylesheet" href="../CSS/layout.css">
	<link rel="stylesheet" href="../CSS/desplegable.css">
	<link rel="stylesheet" href="../CSS/fonts.css">
</head>
<body>
	'.$doHeader.'
	<center>
		<h1>'.$hrUpdMod.'</h1>
		<form action="actions/updtMod.php" method="post">
		'.$roleID.'<br>
		<input type="text" name="roleid"><br>
		'.$accountID.'<br>
		<input type="text" name="accountid"><br>
		'.$askPass.' <br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="'.$hrUpdMod.'"><br><br>
	</form>

	'.$reportBug.$version.'	

</body>
</html>';
?>
