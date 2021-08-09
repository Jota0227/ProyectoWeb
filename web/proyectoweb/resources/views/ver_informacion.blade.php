@extends("layouts.master_c")
@section("contenido-c")
<div class="container fluid pt-4">
    <div class="row">
        <div class="col col-md col-lg mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Informacion importante</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-2">
                        <label for="numerol-txt" class="form-label">---Numero de contacto---</label>
                    </div>
                    <div class="mb-4">
                        <label for="numero-txt" class="form-label">---xxxxxxxxxxxxxxxxxx---</label>
                    </div>
                    <div class="mb-2">
                        <label for="correol-txt" class="form-label" >---Correo Electronico de contacto---</label>
                     </div>
                     <div class="mb-4">
                        <label for="correo-txt" class="form-label">---xxxxxxxxxxxxxxxxxx---</label>
                     </div>
                      <div class="mb-2">
                        <label for="horariosl-txt" class="form-label">---Horarios de Atención---</label>
                      </div>
                      <div class="mb-4">
                        <label for="horarios-txt" class="form-label">xxxxxxxxxxxxxxxxxxxx</label>
                      </div>
                      <div class="mb-2">
                         <label for="direccionl-txt" class="form-label">---Direccion de retiro---</label>
                     </div>
                       <div class="mb-4">
                         <label for="direccion-txt" class="form-label">---xxxxxxxxxxxxxxxxxx---</label>
                       </div>
                       <div id="mapid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
  <script src="{{asset('js/mapa.js')}}"></script>  
@endsection