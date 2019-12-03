<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memorandum</title>
    
</head>

<body style="background-image: url({{asset("assets/lte/dist/img/plantillas.jpg")}})">
    <hr>
   <p style="margin-bottom: 100px; width: 250px"></p><br><br><br><br><br><br><br><br>
<p style="float:left; width: 20%"> <br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br></p>
   <div >

        <h1 style="text-align: center">Memorandum Nro</h1>
        <h2 style="text-align: right">fecha <?php echo date("d-m-Y");?></h2>
        <h2>Señor(a): 
            {{$tutor->docente->persona->nombre}} 
            {{$tutor->docente->persona->apellidop}}
            {{$tutor->docente->persona->apellidom}}</h2>
        <h2>Docente de la facultad</h2>
        <h2>Presente</h2>
        
        <p> De mi consideracion</p>
        <p>
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
            efectuado en fecha {{ date('d-m-Y', strtotime($tutor->consejo)) }} , ha sido designado(a) {{$tutor->funcion}} del trabajo de
            tesis titulado {{$tutor->proyecto->nombreproyecto}} presentado por UNIV. 
            @foreach ($tutor->proyecto->estudiantes as $item)
                {{$item->persona->nombre}} {{$item->persona->apellidop}} {{$item->persona->apellidom}}. 
            @endforeach
            <br>
            Sin otro particular, saludo a Ud. atentamente.
        </p>
        <br>
        <br>
        <br>
        <br>
        <h2>facultad de ciencias integradas del gran chaco</h2>
   </div>


</body>

</html>