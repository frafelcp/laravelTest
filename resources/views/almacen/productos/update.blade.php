@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h3>Editar Producto</h3>
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

				{!! Form::model($producto,['method'=>'PUT', 'route' => ['productos.update', $producto->id]]) !!}
					{!! csrf_field() !!}
					{!! Form::hidden('id', $producto->id) !!}
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre Producto') !!}
							{!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Producto']) !!}
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('full_codigo', 'Codigo') !!}
							{!! Form::text('codigo', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'codigo']) !!}
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('full_stock', 'Stock') !!}
							{!! Form::number('stock', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'stock']) !!}
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('full_descripcion', 'Descripcion') !!}
							{!! Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'descripcion']) !!}
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Estado</label>
							<select name="estado" class="form-control">
								@if($producto->estado=='A')
									<option value="A" selected>Activo</option>
								@endif
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
