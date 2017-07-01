@extends('templates.admin.layout')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Product Categories <a href="{{route('producto-categorias.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="{{ route('producto-categorias.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('producto-categorias.show', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>
                                    <a href="{{ route('producto-categorias.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('producto-categorias.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>
                                    <a href="{{ route('producto-categorias.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('producto-categorias.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>
                                    <a href="{{ route('producto-categorias.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('producto-categorias.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop