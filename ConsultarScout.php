<?php 
		
		session_start();

		require "conexion.php";
		$sql = "SELECT PK_REGIS, Nom_Scout, ApScout, AmScout ,Inscrito,CURP,Sexo,CP FROM tbl_t09_rs ";

		$resultadoConsultar= mysqli_query($con,$sql) or die(mysqli_error());
?>

<table>
	<tr>
		<th>Id Registro</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Inscrito</th>
		<th>CURP</th>
		<th>Sexo</th>
		<th>Codigo Postal</th>

	</tr>
</table>

<?php 

		while($row= mysqli_fetch_array($resultadoConsultar)){

?>

<form   name="formconsultaScout" action="#" method="post">
	<table>
		<tr>
			<td><input disabled="disabled" size="3" title="Id Asistecia" type="text" name="txtApellidoP" id="txtApellidoP" value=<?php  echo($row['PK_REGIS']);?>/></td>
			<td>

			<td>
				<input disabled="disabled" title="Nombre" type="text" name="txtNombre" id="txtNombre" value=<?php  echo($row['Nom_Scout']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Apellido Paterno" type="text" name="txtApScout" id="txtApScout" value=<?php  echo($row['ApScout']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Apellido materno" type="text" name="txtAmScout" id="txtAmScout" value=<?php  echo($row['AmScout']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Fecha Inscrito" type="text" name="txtInscrito" id="txtInscrito" value=<?php  echo($row['Inscrito']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Curp" type="text" name="txtCurp" id="txtCurp" value=<?php  echo($row['CURP']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Sexo" type="text" name="txtSexo" id="txtSexo" value=<?php  echo($row['Sexo']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="CP" type="text" name="txtCP" id="txtCP" value=<?php  echo($row['CP']);?>/>
			</td>			
	</table>
</form>
<?php 
	}
?>