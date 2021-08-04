@extends("layouts.master")

@section("contenido")
<div class="container-fluid pt-5">
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Registrar colación</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-3">
                        <label for="colacion-txt" class="form-label">Colación</label>
                        <input type="text" id="colacion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" id="valor-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer bg-warning d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-success table-hover table-bordered table-striped table-responsive">
                <thead class="text-warning">
                    <tr>
                    <td>Colación</td>
                    <td>Valor</td>
                    <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-colaciones"></tbody>
            </table>
        </div>

    </div>
</div>
@endsection
@section('javascript')
    <script src="{{asset('js/servicios/menusService.js')}}"></script> 
    <script src="{{asset('js/actualizar_menu.js')}}"></script>
@endsection