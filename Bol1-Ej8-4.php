<?php 
session_start();

if($_SESSION['comprobar3'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

if($_GET) {
	if($_GET['Nrespuesta'] == 'correcta') {
		$_SESSION['aciertos']++;
		print('<div id="div4">
					<a href="Bol1-Ej8-5.php" ><input type="image" src="images/image3.png" id="img2" title="Siguiente"></a>
				 </div>');
		unset($_SESSION['comprobar3']);
		$controlador = 2;
		$_SESSION['comprobar4'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido		 
	}else {
		$_SESSION['fallos']++;
	}
}
?>

<html>
<head>
	<title>Pregunta 4</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="Bol1-Ej8-1.css">
</head>

<body>

<body>

<div id="div3">
	<div id="div2">
		<p><?php echo($jugador); ?></p><br>  
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
	</div>
</div>

<div id="div1">

<img src="images/04.png" id="img1">

<form name='form1' class="form1" action='Bol1-Ej8-4.php' method='get'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Clancy</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Eddie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Rex</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Lou</br>
	
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