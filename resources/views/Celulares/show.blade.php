<h1>{{ $celular-> marca }}</h1>

<ul>
	
	<li>Modelo: {{ $celular->modelo }}</li>
	<li>Decripcion: {{ $celular->descripcion }}</li>


</ul>

<form action="{{ route('celulares.destroy', $celular) }}" method="post">

	@csrf
	@method('delete')


	<input type="submit" value="Eliminar">	


</form>

<a href="{{ route('celulares.index') }}">Regresar a lista</a>