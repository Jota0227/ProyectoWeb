@extends('layouts.master_a')
@section("contenido-a")
<div class="container fluid pt-4">
    <div class="row">
        <div class="col col-md col-lg mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Modificar Informacion</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-4">
                        <label for="numerol-txt" class="form-label">---Numero de contacto---</label>
                    </div>
                    <div class="mb-2">
                        <input type="text" id="numerom-txt" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="correol-txt" class="form-label" >---Correo Electronico de contacto---</label>
                     </div>
                     <div class="mb-2">
                        <input type="text" id="correom-txt" class="form-control">
                     </div>
                     <div class="mb-4">
                        <label for="direccionl-txt" class="form-label">---Direccion de retiro---</label>
                      </div>
                      <div class="mb-2">
                        <input type="text" id="direcciom-txt" class="form-control">
                      </div>
                      <div class="mb-4">
                        <label for="instruccionesl-txt" class="form-label">---Forma de realizar pedidos---</label>
                      </div>
                      <div class="mb-2">
                        <input type="text" id="instruccionesm-txt" class="form-control">
                      </div>
                      <div class="mb-4">
                        <label for="horariosl-txt" class="form-label">---Horarios de Atención---</label>
                      </div>
                      <div class="mb-2">
                        <input type="text" id="horariosm-txt" class="form-control">
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection