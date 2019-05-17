@extends('layouts.app')

@section ('celular_marca', 'Lista de celulares')

@section('content')

<div class="text-rigth">
	
	<a href="{{ route('celulares.create') }}" class="btn btn-warning">Registrar celulares</a>

</div>

	<hr>

	<table class="table table-hover">
		<thead>
		
		<tr>
			<td>Marca del Celular</td>
			<td>Descrpcion del Celular</td>
			<td>Editar Registro del Celular</td>

		</tr>

		</thead>
			
	<tbody>
		
		@forelse($celulares as $celular)
		<tr>
			<td>{{ $celular->marca }}</td>
			<td>
				<a href="{{ route('celulares.show', $celular) }}" class="btn btn-success">Mostrar</a>
			</td>
			<td>
				
				<a href="{{ route('celulares.edit', $celular) }}" class="btn btn-secondary">Editar</a>

			</td>
		
		</tr>


		@empty

		<h1>No hay celulares registrados.</h1>

		@endforelse

	</tbody>	

	</table>

@endsection





