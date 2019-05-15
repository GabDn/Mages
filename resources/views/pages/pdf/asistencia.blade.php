<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asistencia</title>
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
	border: 1.5px solid #000;
}
#mayusculas{
	text-transform: uppercase;
}
#h4 {
    margin:15px 60px 15px;
}

#renglonDoble, #mayusculas{
	 
}
.normal{
	border: 1px solid #000;
 
}
#encabezado{
	/*padding: 10px;*/
	font-size: 30px;
}
.small{
	font-size: 12px;
}
.espera{
	border-left:hidden;
	padding: 5px;
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
			        CENTRO DE DOCENCIA 
			        "Ing. Gilberto Borja Navarrete"<br/>
			        <br/>
			        Excel avanzado para docentes
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="small" width="500">Nombre del participante
				</td>
				<td class="small">Fecha</td>
			</tr>
		</table>
	</div>
	<hr>
	
<table align="center" style="width: 100%">
	<tr align="center" height="70">
		<td width="60%"></td>
		<td><i>Firma de Asistencia</i></td>
	</tr>
</table>
		<?php 
        foreach($alumnos as $alumno){  
	        print("
	        <table>
	        	<tr >
	        	<td>{$alumno->Nombre}</td>
	        	<td></td>
	    		</tr>
	        </table>
	        <hr>
	        ");	
			}
		
    ?>
		

</div>
<a href="{{ url('/asistencia/pdf') }}" class="btn btn-info" style="text-align:right">PDF</a></td>
</body>
</html>