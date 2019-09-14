@extends("theme.$theme.layout")
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9 offset-md-3">
			<h1 class="page-header text-center">Lista de proyectos</h1>
			<a href="{{route('proyecto.create')}}" class="btn btn-primary">Nuevo </a>
			<hr>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead class="thead-dark">
						<tr>
							<th>nombre proyecto</th>
							<th>Fecha de defensa</th>
							<th>autores</th>
							<th>tribunal</th>
							<th>tutor</th>
							<th>estado</th>
							
						</tr>
					</thead>
					<tbody>
						
							<tr>
							
								<td>gestion documental</td>
								<td>25/12/2019</td>
								<td>Daniel Muñoz - Paola Soruco Nataly</td>
								<td>jaramillo</td>
								<td>elias cassal</td>
								<td> <h3>imprimir</h3><button type="submit" class="btn btn-primary">APROBADO</button></td>
							</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection