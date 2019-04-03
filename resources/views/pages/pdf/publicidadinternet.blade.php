<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hoja Inscripción</title>
</head>
<style>
    div.container {
        text-align:center;
    }
html{
	width:100%;
}
body {
  font-family: Arial, Helvetica, Sans-serif;
  align-items: center;
  font-size: 18px;
  
}
hr{
    border: 1px solid #000;
  	border-spacing: 0;
  }
#cuerpo{
	background-image: url("img/m.png");
  background-repeat: no-repeat;
  background-position: absolute;
}
#mayusculas{
	text-transform: uppercase;
}
#contenido{
    padding:15px 60px 15px;
 
   
}
#renglonDoble, #mayusculas{
	 border: 1px solid white;
}
#normal{
	
   border-spacing: 0;
}
.encabezado{
	font-size: 25px;
}

</style>
<body>
<div style="height: 90%">
	<div height="10%">
		<hr/ >
		<div align="center" class="encabezado">
			UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO
		</div>
		
		<table style="width: 100%" align="center" id="encabezado" height="5%">
			<tr id="normal">
				<td  width="10%" id="normal">
					<img src="img/escudounam.png" alt="" align="right" height="120">
				</td>
				<td  align="center" class="encabezado">
					
			        FACULTAD DE INGENIERÍA<br/>
			        Secretaría de Apoyo a la Docencia<br/>
			        CENTRO DE DOCENCIA <br/>
			        "Ing. Gilberto Borja Navarrete"<br/>
			        Curso: Bases de datos
				</td>
				<td align="center" width="15%" id="normal">
					<img src="img/escudo_fi_color.png" alt="" align="right" height="120">
				</td> 
			</tr>
		</table>
		<hr/ >
	</div>
	<div id="cuerpo">
		<table>
			<tr>
				<td>Modalidad:</td>
				<td>curso-taller</td>
			</tr>
			<tr>
				<td>Dirigino a:</td>
				<td>Todas las areas y divisiones</td>
			</tr>
			<tr>
				<td>Instructor (es)</td>
				<td></td>
			</tr>
		</table>
		<p>Nombre Instructor</p>
		<p>Ingeniería en Computación egresada de la FI de la U.N.A.M. Inicia su carreda docente hace 10 años impartiendo cursos en la Unidad de Servicios de Cómputo Académico (UNICA) y hace 6 años empieza a impartir cátedra a nivel licenciatura. Ha elaborado 6 manuales de Ofonática como apoyo a los cursos que imparte tanto en UNICA como en el CDD. Instructora de cursos a Cómputo Coordinados por el CDD desde el semestre 2006-2</p>
		<table id="contenido">
			<tr>
				<td>Objetivo:</td>
				<td>Que los asistentes utilicen las herramientas avanzadas del Excel para un mejor aprovechamiento de sus labores acad'emicas.</td>
			</tr>
			<tr>
				<td>Contenido:</td>
			 	<td>-Bases de datos(filtros, filtros avanzados, ordenamisntos, subtotales)<br>
					-Tablas dinámicas<br>
					-Funciones y Fórmulas avanzadas (Sí, busca rv, funciones lógicas, matriciales)<br>
					-Consolidar<br>
					-Escenarios<br>
					-Introducción a Macros<br>
				</td>
			</tr>
			<tr>
				<td>Antecedentes:</td>
				<td>Conocimientos de Excel básico</td>
			</tr>
			<tr>
				<td>Duración</td>
				<td>20 h</td>
			</tr>
		</table>
	</div>
<a href="{{ url('/publicidad/pdf') }}" class="btn btn-info" style="text-align:right">PDF</a></td>
</body>
</html>