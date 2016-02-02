<?php
session_start();
$host = 'localhost';
$usuario = 'usuario';	//usuario
$pass = 'usuario';

$conexion = mysql_connect ($host,$usuario,$pass) or die ("Ha sido imposible realizar la conexión a la Base de Datos"); 

$sql = "CREATE database Ejercicio8";	//Ejercicio8

$insertar = mysql_query($sql,$conexion);
/*if(!$insertar){ 
    echo 'No se ha podido crear la base de datos'; 

}else{ 
    echo 'Perfecto, base de datos creada correctamente'; 
}*/

mysql_select_db('Ejercicio8',$conexion);		//Ejercicio8

        $tabla="CREATE TABLE IF NOT EXISTS `jugadores` (
                  `jugador` varchar(20) NOT NULL,
                  `aciertos` int(10) NOT NULL,
                  `fallos` int(100) NOT NULL,
                  `tiempo` varchar(70) NOT NULL
                )";
            
        $crear_tabla=mysql_query($tabla,$conexion);
        /*if(!$crear_tabla){
            echo 'No se ha podido crear la tabla en la base de datos';
            }else{
                echo 'Perfecto, tabla creada correctamente'; 
            }*/
            
	     $datos="INSERT INTO `jugadores` (`jugador`, `aciertos`, `fallos`, `tiempo`) VALUES('".$_SESSION['jugador'].
	     "', '".$_SESSION['aciertos']."', '".$_SESSION['fallos']."', '".$_SESSION['tiempo_total']."')";
	     
	     $consulta=mysql_query($datos,$conexion);
	     /*if(!$consulta){
	          echo 'No se han podido insertar los datos de manera correcta';
	     }else{
	          echo 'Perfecto, los datos se insertaron correctamente';
	     }*/

?>