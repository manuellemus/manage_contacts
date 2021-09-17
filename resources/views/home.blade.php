@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($message = Session::get('success'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('new_contact') }}" class="btn btn-primary">Agregar Contacto</a>
                </div>
                </br>
                <div class="panel-body">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->last_name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->adress }}</td>
                                <td>
                                    <form action="{{ route('delete_contact') }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('edit_contact',$value->id) }}">Edit</a>
                                        @csrf @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $value->id }}">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection