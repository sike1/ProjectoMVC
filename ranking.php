<?php
$host = 'localhost';
$usuario = 'usuario';		//usuario
$pass = 'usuario';

$conexion = mysql_connect ($host,$usuario,$pass) or die ("Ha sido imposible realizar la conexión a la Base de Datos");

mysql_select_db('Ejercicio8',$conexion);		//Ejercicio8

$consulta = mysql_query("SELECT * FROM jugadores ORDER BY fallos,tiempo LIMIT 5",$conexion);
$consulta2 = mysql_query("SELECT * FROM jugadores ORDER BY tiempo,fallos LIMIT 5",$conexion);
?>

<html>
    <head>
    	  <title>Ranking</title>
        <meta charset="UTF-8">
        <LINK REL="stylesheet" TYPE="text/css" HREF="ranking.css">
    </head>
    <body>
    
    <div id="p1">Los 5 jugadores con menos fallos</div>
    <div id="p2">Los 5 jugadores más rápidos</div>
    
                    <?php  
                    if ($row = mysql_fetch_array($consulta)){ ?>
                    		<table id="tabla1">
                    		<tr>
                    			<th>Jugador</th>
                    			<th>Fallos</th>
                    			<th>Aciertos</th>
                    			<th>Tiempo</th>
                    		</tr> 
                   <?php do { ?>
                       <tr>
                       		<td><?php echo $row['jugador'] ?></td>
                       		<td><?php echo $row['fallos'] ?></td>
                       		<td><?php echo $row['aciertos'] ?></td>
                       		<td><?php echo $row['tiempo'] ?></td>
                       </tr>
                   <?php } while ($row = mysql_fetch_array($consulta)); ?>
                    		</table>
                   <?php } else { 
                    echo "No se han encontrado registros que poder mostrar"; 
                    } ?>
                    

                    <?php  
                    if ($row = mysql_fetch_array($consulta2)){ ?>
                    		<table id="tabla2">
                    		<tr>
                    			<th>Jugador</th>
                    			<th>Fallos</th>
                    			<th>Aciertos</th>
                    			<th>Tiempo</th>
                    		</tr> 
                   <?php do { ?>
                       <tr>
                       		<td><?php echo $row['jugador'] ?></td>
                       		<td><?php echo $row['fallos'] ?></td>
                       		<td><?php echo $row['aciertos'] ?></td>
                       		<td><?php echo $row['tiempo'] ?></td>
                       </tr>
                   <?php } while ($row = mysql_fetch_array($consulta2)); ?>
                    		</table>
                   <?php } else { 
                    echo "No se han encontrado registros que poder mostrar"; 
                    } ?>
       
       <img src="images/image5.png" id="img1">
       <a href="index.php" ><img src="images/image6.png" id="img2" title="Inicio"></a>             
        
    </body>
</html>