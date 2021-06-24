<?php // operacion de insertar en la base de datos saas en la tabla 
//tbl_t10_as
	session_start();

	require "conexion.php"; //estamos incluyendo el escript
	//que hace conexion a la base de datos 

	//se recuperan en variables de PHP los datos que existen 
	//en las variables de sesion de la pagina 

	$PK_AS=$_SESSION ['PK_AS'];
    $act=$_SESSION ['act'];
    $punt=$_SESSION ['punt'];
    $unif=$_SESSION ['unif'];
    $ba=$_SESSION ['ba'];
    $eb=$_SESSION ['eb'];
    $form=$_SESSION ['form'];
    $entu=$_SESSION ['entu'];
    $act1=$_SESSION ['act1'];
    $act2=$_SESSION ['act2'];
    $act3=$_SESSION ['act3'];
    $observaciones=$_SESSION ['observaciones'];
    $FK_SESS_10=$_SESSION ['FK_SESS_10'];
    $FK_RES_10=$_SESSION ['FK_RES_10'];

	//se genera la cadena de sql utilizando las variables de PHP generadas,
	//con la finalidad de ejecutar despues de la operacion.

	$sql="INSERT INTO tbl_t10_as Values ('$PK_AS','$act','$punt','$unif','$ba','$eb','$form','$entu','$act1','$act2','$act3','$observaciones','$FK_SESS_10','$FK_RES_10')";
	
	echo $sql;
		//ejecut la operacion para que se realice la insercion de los datos el la base de datos.

	$resultadoRegistrar=mysqli_query($con,$sql) or die (mysqli_error());
 ?>