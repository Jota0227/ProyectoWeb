@extends("layouts.master_home")

@section("contenido-h")
<div class="container fluid pt-4">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-light">
                    <span>Iniciar Sesion</span>
                </div>
                <div class="card-body bg-warning">
                    <div class="mb-4">
                        <label for="rut-txt" class="form-label" >Rut</label>
                        <input type="text" class="form-control" id="rut-txt" >
                    </div>
                    <div class="mb-4">
                        <label for="pass-txt" class="form-label" >Contraseña</label>
                        <input type="text" class="form-control" id="pass-txt">
                     </div>
                </div>
            </div>
            <div class="card-footer bg-warning d-grid gap-1">
                <button type="button" id="iniciar-sesion-btn" class="btn btn-success">Iniciar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@endsection