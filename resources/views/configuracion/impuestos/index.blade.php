@extends('layouts.app')
@section('content')
 <div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Impuestos</h3>
			<!-- Formulario para buscar categorias -->
			{!! Form::open(['url' => 'configuracion/impuestos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
			<a href="{{ route('impuestos.create') }}" class="btn btn-primary">Crear</a>
			{!! Form::close() !!}
			<br>
			<div class="table table-responsive">
				<table class="table table-condensed table-striped table-bordered table-hover">
					<thead>
						<tr>
							<td>Descripcion</td>
							<td>Porcentaje %</td>
							<td>Estado</td>
							<td>Opciones</td>
						</tr>
					</thead>
					<tbody>
						@foreach($impuestos as $taxes)
						<tr>
							<td>{{ $taxes->descripcion }}</td>
							<td>{{ $taxes->porcentaje }}</td>
							<td>{{ $taxes->estado }}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="" data-target="#modal-delete-{{$taxes->id}}" data-toggle="modal">Eliminar</a>
							</td>
						</tr>
						@include('configuracion.impuestos.modal')
						@endforeach
					</tbody>
				</table>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Productos</a>
			</div>
		</div>
	</div>
	{{$impuestos->render()}}
 </div>
@endsection
