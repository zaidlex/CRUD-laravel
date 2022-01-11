<h1>
    {{$modo}} empleado
</h1>
@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" 
        value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">

    <label for="ApellidoPaterno"> Apellido paterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" 
        value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">

    <label for="ApellidoMaterno"> Apellido materno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" 
        value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">

    <label for="correo"> Correo </label>
    <input type="text" class="form-control" name="Correo" id="Correo" 
        value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">

    <label for="foto"> Foto </label>
    @if(isset($empleado->Foto))
        <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img img-thumbnail img-fluid" alt="" width="100">
    @endif
    <input type="file" class="form-control" name="Foto" id="Foto">
    <input type="submit" class="btn btn-success" value="{{$modo}} datos">
</div>