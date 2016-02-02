<?php 
session_start();


$_SESSION['jugador'] = $_GET['Nusuario'];
$_SESSION['aciertos'] = 0;
$_SESSION['fallos'] = 0;
$_SESSION['tiempo_inicio'] = "";
$_SESSION['tiempo_total'] = "";

//Inicio parte base de datos
$host = 'localhost';
$usuario = 'usuario';
$pass = 'usuario';

$conexion = mysql_connect ($host,$usuario,$pass) or die ("Ha sido imposible realizar la conexión a la Base de Datos");

mysql_select_db('Ejercicio8',$conexion);

$consulta = mysql_query("SELECT jugador FROM jugadores WHERE jugador = '".$_SESSION['jugador']."'",$conexion);
//Final parte base de datos

if($_GET) {
		//Inicio parte base de datos
		if(!empty($_SESSION['jugador']) && $_SESSION['jugador'] != '') {
			$registro = mysql_fetch_row($consulta);
			if(!$registro == $_SESSION['jugador']) {
				//Final parte base de datos
				header("location: Bol1-Ej8-1.php");
				$controlador = 2;
				$_SESSION['comprobar0'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido
			}else {
				echo("Ese jugador ya existe, elige otro nombre");
			}
		}
}
?>

<html>
<head>
	<title>Portada</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="index.css">
</head>

<body>

<div id="div1">

<img src="images/portada.png" id="img1">

</div>

<a href="ranking.php" ><input type="image" src="images/image8.png" id="img2" title="Top 5"></a>

<div id="div2">

<p>Nombre de Usuario</p>

<form name='form1' class="form1" action='index.php' method='get'>

<input type="text" name="Nusuario" id="usuario" required><br>

<input type="submit" value="Comenzar" class="comenzar">

</form>

</div>

</body>

</html>