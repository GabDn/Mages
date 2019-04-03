<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Identificadores</title>
</head>
<style>
	html{
	width:100%;
	height: 100%;
}
body {
  font-family: Arial, Helvetica, Sans-serif;
  align-items: center;
  font-size: 10px;
  
  
}
.identificador{
	height: 33%;
	width: 100%;
	background-color: red;
}
#todo{
	height: 100%;
	width: 100%;
}
.nombre{
	font-size: 80px;
}
</style>


<body  class="todo">
	<div>
		<?php 
	        foreach($alumnos as $alumno){
	        print("
				<table class=\"identificador\" style=height: 30%>
					<tr>
						<td width=20%>
							<img src=img/m.png align=left height=60>
						</td>
						<td align=center width=60%>Nombre del curso</td>
						<td></td>
					</tr>
					<tr>
						<td colspan=3 class=nombre align=center>{$alumno->Nombre}</td>
					</tr>
					<tr>
						<td colspan=2></td>
						<td>Fecha</td>
					</tr>
				</table>
	        	<hr>");
	        }    
	    ?>
	</div>
	<hr>
	
    
    <a href="{{ url('/identificador/pdf') }}" class="btn btn-info" style="text-align:right">PDF</a>
</body>
</html>
