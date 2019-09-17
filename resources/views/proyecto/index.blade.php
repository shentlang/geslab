<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Cod</th>
            <th width="20">Imagem</th>
            <th>Título</th>
            <th>Autor(es)</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $book)
            <tr>
                <th scope="row" class="text-center">{{ $book->id }}</th>
                <td class="center">
                    jjj
                </td>
                <td>{{ $book->nombreproyecto }}</td>
                <td>
                    @foreach($book->estudiantes as $author)
                    <li>{{ $author->curso }}</li>
                @endforeach
                </td>
                <td>{{ $book->tipo }}</td>
                <td width="155" class="text-center">
                   kkk
                </td>
            </tr>
        @endforeach
    </tbody>
</table>