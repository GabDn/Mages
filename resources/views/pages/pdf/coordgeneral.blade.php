<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coordinacion General</title>
</head>
<style>
body {
  font-family:Arial, Helvetica, Sans-serif,cursive; 
  line-height: 70%
}
h4 {
    margin-left:10; 
    margin-right:10;
    font-style:italic;
}
.nombre{
    font-family:'Tangerine', serif;
    font-style:italic;
    font-size: 35px;
    line-height: 100%
}
.centro {
    line-height: 20%
}
</style>
<body>   
    <!--body style="background-image:url(http://www.ingenieria.unam.mx/nuestra_facultad/images/institucionales/escudo_fi_color.png);background-attachment: fixed; background-size: cover; background-repeat: no-repeat;background-position: center;" -->    
    <div><img src="http://www.ingenieria.unam.mx/nuestra_facultad/images/institucionales/escudo_fi_color.png" width="150" height="184" align="right"><img src="http://www.ingenieria.unam.mx/nuestra_facultad/images/institucionales/escudos/escudounam_color.jpg" width="160" height="190" align="left"></div>           
    <div align=center; style="line-height=200%;">
        <h2 style="font-size: 26px;">Universidad Nacional Autónoma de México</h2>
        <h3>Facultad de Ingeniería</h3>
        <h3>Secretaría de Apoyo a la Docencia</h3>
        <h2>Centro de Docencia</h2>
        <h4>"Ing. Gilberto Borja Navarrete"</h4>
        <br><br>
        <div class="centro">
        <h3 style="font-size: 18px;font-style: normal; line-height: 20%;">Otorga la presente constancia a: </h2>
        <br><h2 class='nombre'>{{ $profesor->nombres}} {{$profesor->apellido_paterno}} {{$profesor->apellido_materno}}</h2>
        <h3 style="font-size: 17px;line-height: 20%;">por impartir el curso</h3>
        <h2 class='nombre'>{{ $curso->nombre_curso  }}</h2>
        
        <h5>Del {{$curso->fecha_inicio}} al {{$curso->fecha_fin}}</h5>
        <h5>Duracion: {{ $cursoCatalogo->duracion_curso }}</h5>
        <h6 style="line-height: 20%;">"POR MI RAZA HABLARÁ EL ESPÍRITU"</h6>    
        <h6 style="font-size: 10px;">Ciudad Universitaria a {{$fecha}}</h6> 
        </div>
               
    </div>
<br><br>
<table>
<tr><td align=center><img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Firma_de_Ariana_Grande.png" width="100" height="100" align="center"></td></tr>

<tr>

  <td width=765 align=center>___________________________</td>

</tr>
<br>
<tr style="line-height: 100%">

  <td width=400 align=center>Nombre</td>

</tr>
<tr style="line-height: 100%">

  <td align=center style="font-size: 10px;line-height: 20%;">puesto</td>
</tr>
</table>
</body>
</html>