<?php
session_start();
if(isset($_POST['btnGuardar']) && isset($_POST['btnGuardar'])== "Guarda")
  {
    $_SESSION ['PK_AS']=$_POST['txtPK_AS'];
    $_SESSION ['act']=$_POST['txtact'];
    $_SESSION ['punt']=$_POST['txtpunt'];
    $_SESSION ['unif']=$_POST['txtunif'];
    $_SESSION ['ba']=$_POST['txtba'];
    $_SESSION ['eb']=$_POST['txteb'];
    $_SESSION ['form']=$_POST['txtfor'];
    $_SESSION ['entu']=$_POST['txtentu'];
    $_SESSION ['act1']=$_POST['txtact1'];
    $_SESSION ['act2']=$_POST['txtact2'];
    $_SESSION ['act3']=$_POST['txtact3'];
    $_SESSION ['observaciones']=$_POST['txtobsevaciones'];
    $_SESSION ['FK_SESS_10']=$_POST['txtFK_SESS_10'];
    $_SESSION ['FK_RES_10']=$_POST['txtFK_RES_10'];
  header("Location: http://localhost/Fondoscout/RegistrarScout.php");
  }else {

if(isset($_POST['btnConsultarRegi']) && isset($_POST['btnConsultarRegi'])== "Consulta Registros")
  {
    header("Location: http://localhost/Fondoscout/ConsultarScout.php");

    }else {

  if(isset($_POST['btnConsultarSes']) && isset($_POST['btnConsultarSes'])== "Consulta Sesiones")
  {
    header("Location: http://localhost/Fondoscout/ConsultarSesiones.php");

    }else {

  if(isset($_POST['btnEliminar']) && isset($_POST['btnEliminar'])== "Elimina")
  {
        $_SESSION ['Identificador']=$_POST['txtPK_AS_Elimi'];
    header("Location: http://localhost/Fondoscout/EliminarScout.php");

    }else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Scouts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="css/style.css">

  	<!--tipografia-->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lo">
  	<!--fin tipografia-->

</head>

<body class="hidden" background="img/fondo scout.png">

<form name="formFormulario" action="#" method="post">

<!-- preload-->
	<div class="centrado" id="onload">
		<div class="lds-facebook">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
<!-- termina preload-->


<!-- Encabezado-->
<header >

		
		<h1><img style="width: 10%" src="img/scoutlogo.jpg"> Bienvenidos a <i>Scouts mexico</i></h1>
		

	
	<nav>
    <a href="index.php" >Inicio</a>
    <a href="index2.php">Asistencia</a>
    <a href="index3.php">Reporte</a>
  </nav>
</header>
	
<!--fin encabezado-->
<!--Divicion de secmentos-->
<div class="wrapper">
<section>
<div class="slider">
		<ul>
			<li><img src="img/img.jpg" width="500" height="300"></li>
			<li><img src="img/img2.jpg" width="500" height="300"></li>
			<li><img src="img/img5.png" width="500" height="300"></li>
		</ul>
</div>
<!--Empieza tabla-->

<div align="center">

<form class="form-inline" name="formFormulario" action="#" method="post">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Ciclo del programa</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected="" disabled>Seleccionar</option>
    <option value="1"></option>
    <option value="2"></option>
  </select>
</form>
<br>
<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Grupo</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  	<option selected="" disabled>Seleccionar</option>
    <option value="1">Manada de lobatos</option>
    <option value="2">Tropa de scouts</option>
    <option value="3">Comunidad de caminantes</option>
    <option value="4">Clan de rovers</option>
  </select>
</form>
<br>
<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de sesion</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  	<option selected="" disabled>Seleccionar</option>
    <option value="1">Excurcion</option>
    <option value="2">Campamento</option>
    <option value="3">Evento espeial</option>
  </select>
</form>
<br>
<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sesion(Fecha)</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  	<option selected="" disabled>Dia</option>
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
  </select>
   <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  	<option selected="" disabled>Mes</option>
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
  </select>
   <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
  	<option selected="" disabled>Año</option>
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
  </select>
</form>
</div>
<br>
<br>
<br>
<table>
  <th>
      <button type="submit" name="btnConsultarRegi" id="btnConsultarRegi">Mostrar Scouters</button>
  </th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>  &nbsp;&nbsp;</th>
  <th>
      <button type="submit" name="btnConsultarSes" id="btnConsultarSes">Mostrar Sesiones</button>
  </th>

</table>

</table>
<br>
<br>
<br>


<H2>Agregar asistencias</H2>
      <td>
        <input title="Id Asistencias" type="text" name="txtPK_AS" id="txtPK_AS" value="" placeholder="Identificador asistencia" />
      </td>

      <td>
        <input title="Actividad" type="text" name="txtact" id="txtact" value="" placeholder="Actividad" />
      </td>

      <td>
        <input title="Puntualidad " type="text" name="txtpunt" id="txtpunt" value="" placeholder="Puntualidad"/>
      </td>

      <td>
        <input title="Uniforme " type="text" name="txtunif" id="txtunif" value="" placeholder="Uniforme" />
      </td>

      <td>
        <input title="Buena Actitud" type="text" name="txtba" id="txtba" value="" placeholder="Buena Actitid" />
      </td>

      <td>
        <input title="Equipo de bolsillo" type="text" name="txteb" id="txteb" value="" placeholder="Equipo de bolsillo"/>

      </td>

      <td>
        <input title="Formacion " type="text" name="txtform" id="txtfor" value="" placeholder="Formacion"/>
      </td>

      <td>
        <input title="Entusiasmo" type="text" name="txtentu" id="txtentu" value="" placeholder="Entusiasmo"/>
      </td>

      <td>
        <input title="Actitud 1" type="text" name="txtact1" id="txtact1" value="" placeholder="Actividad 1"/>
      </td>

      <td>
        <input title="Actitud 2" type="text" name="txtact2" id="txtact2" value="" placeholder="Actividad 2"/>
      </td>

      <td>
        <input title="Actitud 3" type="text" name="txtact3" id="txtact3" value="" placeholder="Actividad 3"/>
      </td>

      <td>
        <input title="Observaciones" type="text" name="txtobsevaciones" id="txtobsevaciones" value="" placeholder="Observaciones" />
      </td>
      <td>
        <input title="Identificador sesion" type="text" name="txtFK_SESS_10" id="txtFK_SESS_10" value="" placeholder="Identificador sesion" />
      </td>
      
      <td>
        <input title="Identificador scout" type="text" name="txtFK_RES_10" id="txtFK_RES_10" value="" placeholder="Identificador scout"/>
      </td>

      <br></br>


      <td>
        <button type="submit" id="btnGuardar" name="btnGuardar">Guardar</button>
      </td>
      <br></br>
    </tr>
      <br></br>      <br></br>



<H2>Eliminar asistencias</H2>

      <td>
        <input title="Id Asistencias" type="text" name="txtPK_AS_Elimi" id="txtPK_AS_Elimi" value="" placeholder="Identificador asistencia" />
      </td>

      <td>
        <button type="submit" id="btnEliminar" name="btnEliminar">Eliminar</button>
      </td>
      <br></br>
    </tr>
      <br></br>      <br></br>   

<table WIDTH="50%" BORDER="1" CELLSPACING="3" CELLPADDING="2">
  <tr>
    <td rowSPAN="2"> no. </td>
    <td COLSPAN="2"> Nombre  </td>
    <td COLSPAN="2"> Apellido Paterno     </td>
    <td COLSPAN="2"> Apellido Materno</td>
  </tr>
</table>

<?php 
    
    require "conexion.php";
    $sql = "SELECT PK_REGIS,Nom_Scout,ApScout,AmScout,Inscrito,CURP,Sexo,CP FROM tbl_t09_rs ";

    $resultadoConsultar= mysqli_query($con,$sql) or die(mysqli_error()); 

    while($row= mysqli_fetch_array($resultadoConsultar)){

?>
      <td>
        <input size="3" disabled="disabled" title="Identificador Scout" type="text" name="txt_PK" id="txt_PK" value=<?php  echo($row['PK_REGIS']);?>/>
      </td>

      <td>
        <input disabled="disabled" title="Nombre(s)" type="text" name="txt_Nom_Scout" id="txt_Nom_Scout" value=<?php  echo($row['Nom_Scout']);?>/>
      </td>

      <td>
        <input disabled="disabled" title="Apellido Paterno" type="text" name="txt_ApScout" id="txt_ApScout" value=<?php  echo($row['ApScout']);?>/>
      </td>

      <td>
        <input disabled="disabled" title="Apellido Materno" type="text" name="txt_AmScout" id="txt_AmScout" value=<?php  echo($row['AmScout']);?>/>
      </td>
      <br></br>
<?php 
  }
?>


</section>
</div>
<!--Fin de divicion de secmentos-->

		
<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <p class="mt-5 text-muted text-center">&copy; GIR-0132 <i>"Proyecto scout"</i></p>
    </div>
    
  </div>

</div>
<!--Referencias de jquery y bootstrap-->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="js/scripts.js"></script>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/footer.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</form>
</body>
</html>

<?php
    }
   }
 }
}
?>