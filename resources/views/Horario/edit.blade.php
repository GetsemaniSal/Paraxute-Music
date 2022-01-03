
@extends('livewire.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/usuarios/{{$usuarios->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">name</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1" Value="{{$usuarios->name}}" >     
  </div>

  <div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="email" class="form-control" tabindex="2"Value="{{$usuarios->email}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">role</label>
    <input id="role" name="role" type="string" class="form-control" tabindex="3"Value="{{$usuarios->role}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">password</label>
    <input id="password" name="password" type="string" class="form-control" tabindex="1"Value="{{$usuarios->password}}">   
  </div>

  <div class="mb-3">
    <label for="" class="form-label">phone</label>
    <input id="phone" name="phone" type="string" class="form-control" tabindex="1"Value="{{$usuarios->phone}}">   
  </div>

  <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection

