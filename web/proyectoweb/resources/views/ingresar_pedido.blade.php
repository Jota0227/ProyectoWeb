@extends("layouts.master")

@section("contenido")
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
                        <label for="numero-txt" class="form-label" >Numero del Cliente</label>
                        <input type="int" class="form-control" id="numero-txt" >
                     </div>
                     <div class="mb-4">
                        <label for="hora-txt" class="form-label">Hora de Retiro</label>
                        <input type="text" id="hora-txt" class="form-control">
                      </div>
                </div>
                <div class="card-footer bg-warning d-grid gap-1">
                    <button type="button" id="registrar-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-success table-bordered table-hover table-striped table-responsive">
                <thead class="text-warning">
                    <tr>
                    <th>Menu</th>
                    <th>Valor</th>
                    </tr>
                </thead>
                <tbody id="tbody-tabla"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection