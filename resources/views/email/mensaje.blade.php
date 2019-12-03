<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Recordatorio de evento</h1>
    
   
    
<div>
        <h2>Señor(a): {{$msg->docente->persona->nombre}} {{$msg->docente->persona->apellidop}} {{$msg->docente->persona->apellidom}}</h2>  
        <h2>miembro tribunal examinador</h2> 
        <img src="{{ $message->embed(asset("assets/lte/dist/img/FCIGCH11.jpg")) }}">

</div>
<p>Tengo a bien comunicar a Ud. que se ha programado la Defensa Pública del trabajo de grado.
</p>
<b>Postulantes:</b>
<p>
       <b>   @foreach ($msg->proyecto->estudiantes as $item)
            {{$item->persona->nombre}} {{$item->persona->apellidop}} {{$item->persona->apellidom}}  
        @endforeach
       </b>
</p>
<p>
    @if ($msg->proyecto->materia->sigla == "INF - 501")
    de la carrera ingenieria informatica
        
    @else
        otra carrera
    @endif
    para el dia <b>{{ date('d-m-Y', strtotime($msg->proyecto->fechadefensa)) }}</b>  en el <b> {{$msg->proyecto->lugar}}</b> .

    sin otro particular , saludo a ud. atentamente.
</p>




    
</body>
</html>