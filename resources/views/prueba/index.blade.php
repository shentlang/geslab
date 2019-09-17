

   <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Cod</th>
            
            <th>usuario</th>
            
            <th>mensaje</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($comentarios as $comentari)
            <tr> 
            <th>{{$comentari->id}}</th>
              
            <td>{{$comentari->comentario}}</td>
            <td>{{$comentari->usuario->nombre}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
   