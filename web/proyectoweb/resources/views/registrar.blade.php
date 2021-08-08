@extends("layouts.master_home")

@section("contenido-h")
<div class="container fluid pt-4">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Registrar nuevo administrador</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-4">
                        <label for="nombre-admin-txt" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" id="nombre-admin-txt" >
                    </div>
                    <div class="mb-4">
                        <label for="rut-txt" class="form-label" >Rut</label>
                        <input type="text" class="form-control" id="rut-txt" >
                    </div>
                    <div class="mb-4">
                        <label for="pass-txt" class="form-label" >Contraseña</label>
                        <input type="text" class="form-control" id="pass-txt">
                     </div>
                     <div class="mb-4">
                        <label for="fono-txt" class="form-label" >Telefono</label>
                        <input type="text" class="form-control" id="fono-txt" >
                    </div>
                </div>
                <div class="card-footer bg-warning d-grid gap-1">
                    <button type="button" id="registrar-admin-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset('js/adminsService.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
@endsection