@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Agregar Contacto</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('store_contact') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" autocomplete="off" name="nombre" class="form-control" id="nombre">
              </div>
              <div class="form-group col-md-6">
                <label for="last_name">Apellido:</label>
                <input type="text" autocomplete="off" name="last_name" class="form-control" id="last_name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Correo :</label>
                <input type="text" autocomplete="off" name="email" class="form-control" id="email" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Telefono :</label>
                <input type="text" autocomplete="off" name="phone" class="form-control" id="phone" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="address">Direcion :</label>
                <input type="text" autocomplete="off" name="address" class="form-control" id="address" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection