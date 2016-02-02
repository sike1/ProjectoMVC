<?php 
session_start();

if($_SESSION['comprobar0'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];
$inicio = new DateTime($inicio);
$_SESSION['tiempo_inicio'] = $inicio;


if($_GET) {
	if($_GET['Nrespuesta'] == 'correcta') {
		$_SESSION['aciertos']++;
		print('<div id="div4">
					<a href="Bol1-Ej8-2.php" ><input type="image" src="images/image3.png" id="img2" title="Siguiente"></a>
				 </div>');
		unset($_SESSION['comprobar0']);
		$controlador = 2;
		$_SESSION['comprobar1'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido
	}else {
		$_SESSION['fallos']++;
	}
}
?>

<html>
<head>
	<title>Pregunta 1</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="Bol1-Ej8-1.css">
</head>

<body>

<div id="div3">
	<div id="div2">
		<p><?php echo($jugador); ?></p><br> 
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
	</div>
</div>


<div id="div1">

<img src="images/01.png" id="img1">
<img src="images/tabla_correcto.png" id="img3">

<form name='form1' class="form1" action='Bol1-Ej8-1.php' method='get'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Bart</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Homer</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Willie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Apu</br>
	
	<input type="submit" value="Comprobar" class="comprobar">

</form>

</div>

</body>

</html>

<?php
}else {
	header("location:index.php");
}
?>