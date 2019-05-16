@if($errors->any())

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

@endif

<form action="{{ route('celulares.store') }}" method="post">

    @csrf

    <label for="title">Marca:</label>
    <input type="text" name="marca" value="{{ old('marca') }}">

    <label for="color">Color:</label>
    <input type="text" name="color" value="{{ old('color') }}">

    <label for="precio">Precio:</label>
    <input type="number" name="precio" value="{{ old('precio') }}">

    <label for="descripcion">Descripcion:</label>
     <textarea name="descripcion">{{ old('descripcion') }}</textarea>
    
    <input type="submit" value="Guardar">

</form>

<hr>

<a href="{{ route('celulares.index') }}">Regresar a la lista</a>