@extends('layouts.app')

@section('content')
<div class="container">
@if(!empty($mensaje))
    {{ $mensaje }}
    <br>
@endif
<a href="{{url('empleado/')}}" class="btn btn-primary"> Regresar </a>
<form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('empleado.form',['modo'=>'Editar'])
</form>
@endsection
</div>