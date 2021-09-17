@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Editar Contacto</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('update_contact') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" autocomplete="off" name="nombre" class="form-control" value="{{ $contact->name }}" id="nombre">
              </div>
              <div class="form-group col-md-6">
                <label for="last_name">Apellido:</label>
                <input type="text" autocomplete="off" name="last_name" class="form-control" value="{{ $contact->last_name }}" id="last_name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Correo :</label>
                <input type="text" autocomplete="off" name="email" class="form-control" value="{{ $contact->email }}" id="email" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Telefono :</label>
                <input type="text" autocomplete="off" name="phone" class="form-control" value="{{ $contact->phone }}" id="phone" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="address">Direcion :</label>
                <input type="text" autocomplete="off" name="address" class="form-control" value="{{ $contact->adress }}" id="address" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection