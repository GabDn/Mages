<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verificacion de Nombres</title>
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
  font-size: 23px;
}

hr{
	border: 1.2px solid #000;
}
#mayusculas{
	text-transform: uppercase;
}
.datosTabla{
	margin: 30px 10px 10px; 
 
}
#encabezado{
	/*padding: 10px;*/
	font-size: 30px;
}
.small{
	font-size: 15px;
}

.cuadrado{
	width: 2%; 
    height: 25px; 
    border: 3px solid #555;
}
</style>
<body>
<div style="height: 90%">
	<div height="10%">
		<table style="width: 100%" align="center" id="encabezado" height="5%">
			<tr>
				<td  width="10%" >
					<img src="img/m.png"  align="center" height="100">
					
				</td>
				<td align="center">
					UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO<br/>
			        FACULTAD DE INGENIERÍA<br/>
			        CENTRO DE DOCENCIA<br>
			        <i>"Ing. Gilberto Borja Navarrete"</i><br/>
			        <br/>
			        Excel avanzado para docentes
				</td>
			</tr>
		</table>
		<table class="datosTabla" width="100%">
			<tr>
				<td class="small" width="75%">Nombre del participante para el Diploma
				</td>
				<td class="small" width="15%">Fecha</td>
				<td class="small" width="10%">Datos Correctos</td>
			</tr>
		</table>
	</div>
	<hr>
	
		<?php 
        foreach($alumnos as $alumno){  
	        print("
	        <table width=100%>
	        	<tr >
	        	<td width=45%>{$alumno->Nombre}</td>
	        	<td class=small width=30%>{$alumno->email}</td>
	        	<td class=small width=20%>{$alumno->telefono}</td>
	        	<td class=cuadrado width=5%></td>
	    		</tr>
	    		<tr>
	    			<td width=50%></td>
	    			<td  class=small colspan=3 width=15%>Facebook:</td>

	    		</tr>
	        </table>
	        <hr>
	        ");	
			}
		
    ?>
		

</div>
<a href="{{ url('/verificacion/pdf') }}" class="btn btn-info" style="text-align:right">PDF</a></td>
</body>
</html>