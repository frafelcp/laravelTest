{!! Form::open(['url' => 'almacen/productos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
	<div class="form-group">
		<label for="exampleInputName2">Nombre</label>
		<input type="text" class="form-control" name = "name" >
	</div>
	<button type="submit" class="btn btn-default">Buscar</button>
	<a href="{{ route('productos.index') }}" class="btn btn-primary">Ver Todo</a>
	<a href="{{ route('productos.create') }}" class="btn btn-primary">Crear</a>
{!! Form::close() !!}
