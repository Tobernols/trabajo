<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidos al Instituto</title>
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
</head>
<body>
	<div id="contenedor" class="border">
		<div id="header">
			<div id="logotipo">
				<img src="imagenes/logosenati.jpg">
				
			</div>
			<div id="operaciones">
				<h3>Bienvenidos al Instituto Privado</h3>
				<ul class="enlaces">
					<li><a href="forms/profesor.php" title="Profesor">Profesor</a></li>
					<li><a href="forms/Carerra.php" title="Carrera">Carrera</a></li>
					<li><a href="forms/Alumno.php" title="Alumno">Alumno</a></li>
					<li><a href="forms/Clases.php" title="Clases">Clases</a></li>
					<li><a href="forms/Matricula.php" title="Matricula">Matricula</a></li>
					<li><a href="forms/clases.php" title="clases">Clases</a></li>
				</ul>
			</div>
		</div>
		<div class="Formulario">
			<form action="registrarcarrera.php" method="POST">
			<center><table>
				<tr>
					<td colspan="2" align="center"><p>REGISTRO DE LAS CARRERAS</p></td>
				</tr>
				<tr>
					<td><label for="idcarrera">IDCarrera</label></td>
					<td><input type="text" name="IdCarrera" placeholder="Id Carrera" required=""></td>
				</tr>
				<tr>
					<td><label for="nombrecarrera">NombreCarrera</label></td>
					<td><input type="text" name="NombreCarrera" placeholder="Nombre Carrera" required=""></td>
				</tr>
				<tr>
					<td><label for="numcurso">NumeroCursos</label></td>
					<td><input type="text" name="NumeroCursos" placeholder="Numero Curso" required=""></td>
				</tr>
				<tr>
					<td><label for="Titulo">Titulo</label></td>
					<td><input type="text" name="Titulo" placeholder="Titulo" required=""></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="btnEnviar" value="Registrar"></td>
				</tr>
			</table>
			</center>	
			</form>
		</div>
		<div id="footer" class="pie">
			Instituto Privado @ 2017 Derechos Reservados
		
		</div>
	</div>

</body>
</html>