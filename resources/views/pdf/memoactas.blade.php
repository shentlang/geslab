<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memorandum</title>
    <style>
        @page {
            margin-top: 1em;
            margin-left: 0.1em;
            margin-right: 1.5em;
            margin-bottom: 1em;
        }
            .page-break {
                page-break-after: always;
                
            }
            </style>
            
</head>

<body style="
background: url({{asset("assets/lte/dist/img/plantillas.jpg")}}) no-repeat center center fixed;
-webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;   

">
   
   <div style="background-color: lawngreen; width: 50%;height: 13%"></div>
<div style="background-color: aqua; float:left; width: 20%; height: 85%"></div>
   <div><br>
        <h2 style="float: right; width: 30%">Nº {{$numerito}}/<?php echo date("Y");?></h2><br><br><br>
        <h3 style="text-align: center">ACTA DE DEFENSA FINAL DE TRABAJO DE <br> GRADO</h3>
        <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                En la ciudad de Yacuiba a horas ………del día …….de marzo de dos mil diecinueve años,  en el paraninfo del Campus Universitario  de la Facultad de Ciencias Integradas del Gran Chaco, se dio inicio al acto público de DEFENSA FINAL DEL TRABAJO DE PROFESIONALIZACION {{$estudiantes->proyecto->materia->sigla}} {{$estudiantes->proyecto->materia->nomb}},   presentado por:
        </p>
    <h1 style="text-align: center; width: 90%"> {{ $estudiantes->estudiante->persona->nombre }} {{ $estudiantes->estudiante->persona->apellidop }} {{ $estudiantes->estudiante->persona->apellidom }}</h1>
        <p style="text-align: justify; width: 90%;font-family: Arial, Helvetica, sans-serif;font-size: 12pt">
                Postulante a: LICENCIATURA EN {{$estudiantes->estudiante->carrera}} del PLAN DE ESTUDIOS {{$estudiantes->estudiante->plan->numplan}}. 
        </p> <?php $cont=2;?>
        <p style="text-align: center; width: 90%; font-family: Arial, Helvetica, sans-serif;font-size: 12pt" >
                La comisión evaluadora es conformada por los siguientes miembros: <br><br>   
        </p>
        <ul>
                @foreach($estudiantes->proyecto->docente_proyectos as $tutor)
<li>                <?php echo $cont.')'; $cont++;?>     {{ $tutor->docente->titulado}} {{ $tutor->docente->persona->nombre }} {{ $tutor->docente->persona->apellidop }} {{ $tutor->docente->persona->apellidom }} (TRIBUNAL EVALUADOR)

    <br> </li>
                
              @endforeach
        </ul>
        
    <h3>TITULO DEL TRABAJO: “{{$estudiantes->proyecto->nombreproyecto}}”</h3>
        <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                Leídos los artículos pertinentes del Reglamento de la Materia {{$estudiantes->proyecto->materia->sigla}} {{$estudiantes->proyecto->materia->nomb}} , se procedió a la exposición oral del postulante sobre el Trabajo, a cuya conclusión se dio paso a las consultas y debate correspondientes, con la participación de los miembros de  la Comisión Evaluadora.
        </p>
        <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                Concluida la fase de exposición y preguntas de rigor se determinó un cuarto intermedio, para permitir a los señores miembros de la Comisión Evaluadora emitir el resultado de la evaluación en forma reservada.
        </p>
        <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                Reiniciado el acto público, se procedió a dar lectura de la calificación de la Defensa Final como resultado del promedio de las notas de los miembros de la Comisión Evaluadora, quienes determinaron una nota de ………. (…………………………………. puntos) otorgándole una calificación de ……………………………… que de acuerdo con el artículo 31 del Reglamento corresponde a la ponderación del 50% de la Nota Final.
        </p>
   </div>
   <div class="page-break"></div>
   <div style="width: 80%; height: 15%"></div>
   <div style="float: left; width: 20%; height: 80%"></div>
   <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conforme a lo establecido en el  Artículo 39 del Reglamento la calificación final de la Materia de Profesionalización {{$estudiantes->proyecto->materia->sigla}} {{$estudiantes->proyecto->materia->nomb}}, es de ………. (……………………………….. sobre cien),  la misma que es el resultado de los promedios de las calificaciones de Evaluación Continua y Defensa Final respectivamente, cuyo detalle es el siguiente:
</p>
   <div style="float: left">

    @php
          $res = "";
        $unidad = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"];
        $decenaEspecial = ["once", "donce", "trence", "catorce", "quince", "dieciseis", "diecisiete", "dieciocho", "diecinueve"];
        $decena = ["diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"];
        $centena = ["ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos"];
        $pro=($estudiantes->nota)/2;
        $numero=round($pro, 0, PHP_ROUND_HALF_UP);
        if ($numero < 1000) {
            $d1 = "";
            $d2 = "";
            $d3 = "";
            $numtexto= (string)$numero;
            $d1 = substr($numtexto, 0, 1);
            $d2 = substr($numtexto, 1, 1);
            $d3 = substr($numtexto, 2, 1);
            //echo "DIGITO 01 : ${d1} <br> DIGIGITO 02 : ${d2} <br> DIGITO 03 : ${d3} <br>";
            if ($numero <= 10) {
                if ($numero < 10) {
                    $res = $unidad[$numero];
                } else {
                    $res = $decena[$d2];
                }
            } else if ($numero < 20) {
                $numero -= 11;
                $res = $decenaEspecial[$numero];
            } else if ($numero < 100) {
                if ($d2 == 0) {
                    $numero /= 10;
                    $res = $decena[$numero - 1];
                } else {
                    $res = $decena[$d1 - 1] . " y " . $unidad[$d2];
                }
            } else if ($numero < 1000) {
                if ($d2 == 0 && $d3 == 0) {
                    $res = "Cien";
                } else if ($d3 == 0) {
                    $res = $centena[$d1 - 1] . " " . $decena[$d2 - 1];
                } else if ($d2 == 0) {
                    $res = $centena[$d1 - 1] . " " . $unidad[$d3];
                } else {
                    $res = $centena[$d1 - 1] . " " . $decena[$d2 - 1] . " y " . $unidad[$d3];
                }
            }
        } else {
            $res = "MIL";
        }

    @endphp
<br><table border="1">
       
        <thead >
             <tr>
                     <th rowspan="2">DETALLE DE CALIFICACIONES</th><th colspan="2">CALIFICACIONES</th><th rowspan="2">NOTA 
                         LITERAL
                         </th>
                     </tr>
                     <tr>
                     <td colspan="1">S/ 100 Ptos.</td><td>Ponderación</td>
                     </tr>
        </thead>
         <tr>
         <td>Docente de la Materia (50%)</td><td style="text-align: center">{{$estudiantes->nota}}</td>
         <td style="text-align: center" >@php
            echo round($pro, 0, PHP_ROUND_HALF_UP);
         @endphp</td><td>@php
             echo $res;
         @endphp</td>
         </tr>
         <tr>
         <td>Tribunal de la Defensa (50%)</td><td></td><td></td><td></td>
         </tr>
         <tr>
             <td> <b>CALIFICACION FINAL </b></td><td></td><td></td><td></td>
             </tr>
         </table>
   </div>

    <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
            Determinándose por tanto   …………………………… la materia de {{$estudiantes->proyecto->materia->nomb}} ({{$estudiantes->proyecto->materia->sigla}}).
    </p>
    <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
        <br>    Concluido el acto a horas ………….. del mismo día, se procedió a la firma al pie de la presente en originales.
    </p>
   
    <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
            Yacuiba ……. marzo de 2019
    </p><br><br><br>


    <div style="background-color: blue;float: left; width: 25%; height: 13%">

    </div>
    <div style="background-color: brown;float: left; width: 25%; height: 13%">

        </div>
        @foreach($estudiantes->proyecto->docente_proyectos as $tutor)
    <div style="background-color: blue; float: left; width: 25%; height: 13%">
            <p style="text-indent: 30px;text-align: center; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                  <br>------------------------------ <br>
                    {{ $tutor->docente->persona->nombre }} {{ $tutor->docente->persona->apellidop }} <br>    TRIBUNAL EVALUADOR

            </p> 
           
        </div>
        <p style="text-indent: 30px;text-align: justify; width: 90%;font-family:Arial, Helvetica, sans-serif;font-size: 12pt">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                </p>
        @endforeach
        

           
     

</body>

</html>