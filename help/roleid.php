<style>
	table, th, td {
	    border: 1px solid black;
	}
</style>
<a href="../herramientas/herr.php">Herramientas</a><br>
<a href="index.php">Ayuda</a>
<?php
require "../version/ver.php";
echo $version;
?>

<?php
	// roleid, accountid
	// Datos
	include "../conx.php";

	// Crear conexión
	$conn = new mysqli($servername, $username, $pw, $dbname);
	// Verificar conexión
	if ($conn->connect_error) {
	    die("Not connected... " . $conn->connect_error);
	}
	// Table
	$sql = "SELECT roleID, roleName FROM roles";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    echo "<table><tr><th>roleID</th><th>Nombre del rango</th></tr>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td>".$row["roleID"]."</td><td>".$row["roleName"]."</td></tr>";
	    }
	    echo "</table>";
	} else {
	    echo "Servidores caídos.";
	}
	$conn->close();
?>
