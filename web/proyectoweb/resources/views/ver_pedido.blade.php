@extends("layouts.master_a")

@section("contenido-a")
<div class="col-12 col-md-12 col-lg-6 mx-auto">
    <div class="card mt-5">
        <div class="card-header bg-success text-light">
            <span>Pedidos</span>
        </div>
        <table class="table table-success table-hover table-bordered table-striped table-responsive">
            <thead class="text-white">
                <tr>
                <td>Colación</td>
                <td>Valor</td>
                <td>Nombre</td>
                <td>Contacto</td>
                <td>Hora</td>
                <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-colaciones"></tbody>
        </table>
    </div>
</div>
@endsection