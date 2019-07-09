@extends('layouts.app')

@section('contenido')



<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
       <!-- Basic Card Example -->
 <div class="card shadow mb-4 center">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                      Bienvenido al Banco EDENRED Online
                  </h6>
                </div>
                <div class="card-body">
                  <hr>
                  Aqui podras realizar tranferencias entre usuarios, asi como pagar servios como TV, Telefonia, Luz, Agua, etc.
                  <hr>
                  Para empezar a usar EDENRED Online haz clic al boton "Crear Tarjeta" para que se genere tu tarjeta con sus datos.
                  
                  <br>
                  <br>
                      <div class="row">
                      <div class="col-sm"></div>
                      <div class="col-sm">
                        <a href="" class="btn btn-success btn-icon-split">Crear tarjeta</a>
                    </div>
                      <div class="col-sm"></div>
                    </div>
                  
                </div>
</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>

@endsection
