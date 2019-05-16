<a href="{{ route('celulares.create') }}">Registrar celulares</a>
	
	<hr>

	<table>
		<thead>
		
		<tr>
			<td>Marca</td>
			<td>Descrpcion</td>

		</tr>

		</thead>
			
	<tbody>
		
		@forelse($celulares as $celular)
		<tr>
			<td>{{ $celular->marca }}</td>
			<td>
				<a href="{{ route('celulares.show', $celular) }}">Mostrar detalle del celular</a>
			</td>
			<td>
				
				<a href="{{ route('celulares.edit', $celular) }}">Editar Registros</a>

			</td>
		
		</tr>


		@empty

		<h1>No hay celulares registrados.</h1>

		@endforelse




	</tbody>	

	</table>





