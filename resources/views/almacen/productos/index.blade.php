@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Productos</h3>
			<!-- Formulario para buscar productos -->
			@include('almacen.productos.search')
			<br>
			<br>
			<!-- <div class="table table-responsive"> -->
				<table class="table table-condensed table-striped table-bordered table-hover">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Codigo</td>
							<td>Stock</td>
							<td>Descripcion</td>
							<td>Estado</td>
							<td>Opciones</td>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $producto)
						<tr>
							<td>{{ $producto->nombre }}</td>
							<td>{{ $producto->codigo }}</td>
							<td>{{ $producto->stock }}</td>
							<td>{{ $producto->descripcion}}</td>
							<td>{{ $producto->estado }}</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{ route('productos.edit',['id' => $producto->id] )}}" >Editar</a>
								<a class="btn btn-danger btn-xs" href="" data-target="#modal-delete-{{$producto->id}}" data-toggle="modal">Eliminar</a>
							</td>
						</tr>
						@include('almacen.productos.modal')
						@endforeach
					</tbody>
				</table>
			<!-- </div>	 -->

			{{$productos->render()}}
		</div>
	</div>
</div>
@endsection
