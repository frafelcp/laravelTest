@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h3>Crear Producto</h3>
				@if(!$errors->isEmpty())
					<div class="alert alert-danger">
						<p><strong>Ooops! </strong>Algo salio mal:</p>
						<ul>
						  @foreach($errors->all() as $error)
						  	<li>{{$error}}</li>
						  @endforeach
						</ul>
					</div>
				@endif

				{!! Form::open(['route' => 'productos.store', 'method' => 'post', 'class' => 'form']) !!}
					{!! csrf_field() !!}
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Nombre Producto</label>
							<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre Producto">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Codigo</label>
							<input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="codigo">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Stock</label>
							<input type="number" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="stock">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Descripcion</label>
							<input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="descripcion postal">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Estado</label>
							<select name="estado" class="form-control">
								<option value="A">Activo</option>
							</select>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
                      		{!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                  		</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
