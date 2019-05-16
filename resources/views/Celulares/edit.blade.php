@if ($errors->any())

	<ul>
		
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		
		@endforeach

	</ul>

@endif


<form action="{{ route ('celulares.update', $celular) }}" method="post">

	@csrf
	@method('put')

	<label for="marca">Marca: </label>
	<input type="text" name="marca" value="{{ old('marca', $celular->marca) }}">

	<label for="color">Color: </label>
	<input type="text" name="color" value="{{ old('color', $celular->color) }}">

	<label for="precio">Precio: </label>
	<input type="number" name="precio" value="{{ old('precio', $celular->precio) }}">

	<label for="descripcion">Descripcion: </label>
	<textarea name="descripcion">{{ old('descripcion', $celular->descripcion) }}</textarea>

	<input type="submit" value="Guardar">


</form>

<a href="{{ route('celulares.index') }}">Resgistrar celulares</a>