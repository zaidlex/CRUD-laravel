@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('empleado/')}}" class="btn btn-primary"> Regresar </a>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form',['modo'=>'Crear'])
</form>
@endsection
</div>