@extends("layouts.master_c")

@section("contenido-c")
<div class="container fluid pt-4">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Datos del Cliente</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-4">
                        <label for="nombre-txt" class="form-label" >Nombre del Cliente</label>
                        <input type="text" class="form-control" id="nombre-txt" >
                    </div>
                    <div class="mb-4">
                        <label for="numero-txt" class="form-label" >Numero de contacto del Cliente</label>
                        <input type="int" class="form-control" id="numero-txt" placeholder="9XXXXXXXX">
                     </div>
                     <div class="mb-4">
                        <label for="hora-txt" class="form-label">Hora de Retiro</label>
                        <input type="text" id="hora-txt" class="form-control">
                      </div>
                      <div class="mb-4">
                        <label for="colacionC-txt" class="form-label">Colacion seleccionada</label>
                        <input type="text" id="colacionC-txt" readonly class="form-control">
                      </div>
                      <div class="mb-4">
                        <label for="valorC-txt" class="form-label">Valor</label>
                        <input type="int" id="valorC-txt" readonly class="form-control">
                      </div>
                </div>
                <div class="card-footer bg-warning d-grid gap-1">
                    <button type="button" id="registrar-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <div class="card-header bg-success text-light">
                <span>Menu de hoy</span>
            </div>
            <table class="table table-success table-hover table-bordered table-striped table-responsive" id="tabla-menu-cliente">
                <thead class="text-white">
                    <tr>
                    <th>Colaciones</td>
                    <th>Valor</td>
                    <th>Seleccionar</td>
                    </tr>
                </thead>
                <tbody id="tbody-tabla"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <script src="{{asset('js/servicios/menusService.js')}}"></script> 
    <script src="{{asset('js/servicios/pedidosService.js')}}"></script> 
    <script src="{{asset('js/ingresar_pedido.js')}}"></script>  
@endsection