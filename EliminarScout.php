<?php 
	session_start();

	require "conexion.php"; 

	
	$Id=$_SESSION['Identificador'];
	$sql="DELETE FROM tbl_t10_as WHERE  (PK_AS='$Id')";
	
	$resultado=mysqli_query($con,$sql) or die (mysqli_error());
 ?>