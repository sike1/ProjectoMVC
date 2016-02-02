<?php
session_start();
$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

$final = new DateTime($final);
$inicio = $_SESSION['tiempo_inicio'];

//$finalF = $final->format("H:i:s");
//$inicioF = $inicio->format("H:i:s"); 

$tiempo = $inicio->diff($final);

$tiempo = $tiempo->format("%H:%I:%S");

$_SESSION['tiempo_total'] = $tiempo;

$f1 = fopen("ejercicio-8.txt","a");		
fwrite($f1,"---------------------------------------------\r\n".
		"Usuario: ".$jugador."\r\n".
		"Aciertos: ".$aciertos."\r\n".
		"Fallos: ".$fallos."\r\n".
		"Duración de partida: ".$tiempo."\r\n".
		"---------------------------------------------\r\n");
fclose($f1);

include("conector_db.php");	//Aquí incluimos la conexión a la base de datos
?>

<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="resultado.css">
</head>
<body>

<div id="p1">Enhorabuena, has completado el juego</div>

<div id="div3">
	<div id="div2">
		<p>Jugador: <?php echo($jugador); ?></p><br> 
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
		<p>Tiempo: <?php echo($tiempo); ?></p>
	</div>
</div>

<a href="ranking.php" ><input type="image" src="images/image8.png" id="img2" title="Top 5"></a>
<a href="index.php" ><input type="image" src="images/image6.png" id="img3" title="Inicio"></a>



</body>

</html>