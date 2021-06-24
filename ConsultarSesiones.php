<?php 
		
		session_start();

		require "conexion.php";
		$sql = "SELECT PK_SESS, NombreSESS, nivelseccion, tiposeccion, fecha, costo, lugar, ingreso, egreso FROM tbl_t01_sess ";

		$resultadoConsultar= mysqli_query($con,$sql) or die(mysqli_error());
?>

<table>
	<tr>
		<th>Id Sesiones</th>
		<th>Nombre</th>
		<th>Nivel de seccion</th>
		<th>Tipo de seccion</th>
		<th>Fecha</th>
		<th>Costo</th>
		<th>Lugar</th>
		<th>Ingreso</th>
		<th>Egreso</th>
	</tr>
</table>

<?php 

		while($row= mysqli_fetch_array($resultadoConsultar)){
?>

<form   name="formconsultaScout" action="#" method="post">
	<table>
		<tr>
			<td><input disabled="disabled" size="3" title="Id Sesion" type="text" name="txtSesiones" id="txtSesiones" value=<?php  echo($row['PK_SESS']);?>/></td>
			<td>

			<td>
				<input disabled="disabled" title="Nombre" type="text" name="txtNombreSESS" id="txtNombreSEES" value=<?php  echo($row['NombreSESS']);?>/>
			</td>
			<td><input disabled="disabled" title="Nivel de seccion" type="text" name="txtLvlSeccion" id="txtLvlSeccion" value=<?php  echo($row['nivelseccion']);?>/></td>
			<td>
				<input disabled="disabled" title="Tipo de seccion" type="text" name="txtTipoSeccion" id="txtTipoSeccion" value=<?php  echo($row['tiposeccion']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Fecha" type="text" name="txtFecha" id="txtFecha" value=<?php  echo($row['fecha']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Costo" type="text" name="txtCurp" id="txtCurp" value=<?php  echo($row['costo']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Lugar" type="text" name="txtLugar" id="txtLugar" value=<?php  echo($row['lugar']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Ingreso" type="text" name="txtIngreso" id="txtIngreso" value=<?php  echo($row['ingreso']);?>/>
			</td>

			<td>
				<input disabled="disabled" title="Egreso" type="text" name="txtEgreso" id="txtEgreso" value=<?php  echo($row['egreso']);?>/>
			</td>			
	</table>
</form>
<?php 
	}
?>