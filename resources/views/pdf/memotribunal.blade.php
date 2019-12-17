<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memorandum</title>
    <style>
        @page {
            margin-top: 0.1em;
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
   
   <div style="width: 50%;height: 13%"></div>
<div style="float:left; width: 20%; height: 85%"></div>
   <div>
        <h1 style="text-align: center">Memorandum Nº {{$numerito}}/<?php echo date("Y");?></h1>
        <h3 style="float: right; width: 30%">fecha <?php echo date("d-m-Y");?></h3><br>
        <h3>Señor(a): 
            {{$tutor->docente->persona->nombre}} 
            {{$tutor->docente->persona->apellidop}}
            {{$tutor->docente->persona->apellidom}}</h3>
        <h3 style="position:absolute; left: 11%">Docente de la facultad</h3><br><br>
        <h2 style="font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,monospace;font-size: 12pt">Presente.-</h2>
        <p style="font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,monospace;font-size: 12pt"> De mi consideracion:</p>
        <p style="font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,monospace;font-size: 12pt">
            Tengo a bien comunicar a Ud. que conforme a reunión del Consejo de Planeación y Seguimiento Curricular de la
            carrera de 
            @if ($tutor->proyecto->materia->sigla == "INF - 501")
            Ing. Informática,
            @else
                @if ($tutor->proyecto->materia->sigla == "LAA - 100")
                    ADM.Y Gestion Publica,
                @else
                    @if ($tutor->proyecto->materia->sigla == "AUD - 610")
                        Contaduria Publica,
                    @else
                       @if ($tutor->proyecto->materia->sigla == "AGR - 521")
                           ING. Agronomica,
                       @else
                           @if ($tutor->proyecto->materia->sigla == "ICT - 011")
                               ING. Comercial,
                           @else
                               @if ($tutor->proyecto->materia->sigla == "ISA - 092 ")
                               Sanitaria y Ambiental,  
                               @else
                               ING. De Recursos Hidricos, 
                                 
                                 
                                   
                                   
                               @endif
                           @endif
                       @endif 
                    @endif
                @endif
            @endif
            ha sido designado(a) tribunal del trabajo de
            grado titulado {{$tutor->proyecto->nombreproyecto}} presentado por UNIV. 
            @foreach ($tutor->proyecto->estudiantes as $item)
                {{$item->persona->nombre}} {{$item->persona->apellidop}} {{$item->persona->apellidom}}. 
            @endforeach
            <br>
            <br>
            En tal sentido, se solicita a Ud. proceder a la revisión del documento adjunto y emitir el informe valorativo correspondiente, dentro del plazo establecido según reglamento de 5 días a partir de la recepción del documento.
            <br><br>
            Sin otro particular, saludo a Ud. atentamente.
            <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3 style="position:absolute; left: 20%">{{$tutor->proyecto->decano->persona->nombre}} {{$tutor->proyecto->decano->persona->apellidop}}</h3>
        <h3 style="position:absolute; left: 25%">D E C A N O</h3><br>
        <h2 style="text-align: left">facultad de ciencias integradas del gran chaco</h2>

        </p>  
   </div>

   

</body>

</html>