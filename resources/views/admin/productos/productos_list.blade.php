@extends('templates.admin.layout')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Products <a href="{{route('productos.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>
                                    <a href="{{ route('productos.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('productos.show', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>
                                    <a href="{{ route('productos.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('productos.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>
                                    <a href="{{ route('productos.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('productos.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>
                                    <a href="{{ route('productos.edit', ['id' => 1]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('productos.destroy', ['id' => 1]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
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