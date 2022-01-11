@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{url('empleado/create')}}" class="btn btn-success"> Crear un nuevo registro </a>
<br><br>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td scope="row">{{$empleado->id}}</td>
                <td><img src="{{asset('storage').'/'.$empleado->Foto}}" class="img img-thumbnail img-fluid" width="100" alt=""></td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning"> Editar </a> 
                    |
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Borrar" class="btn btn-danger" onclick="return confirm('¿Quieres borrar el registro?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
{!!$empleados->links()!!}
@endsection
</div>