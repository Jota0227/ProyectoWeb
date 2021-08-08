@extends("layouts.master_home")

@section("contenido-h")
<div class="row mt-5">
  <div class="col-12 col-md-6 col-lg-5 mx-auto">
      <div class="card bg-warning">
          <div class="card-header bg-success text-white">
              <span>Seleccione</span>
          </div>
          <div class="card-body">
              <div class="mb-6">
          <div class="card-footer d-grid gap-6 mt-5 pt-3 pb-3">
              <button id="cliente-btn" class="btn btn-success">Cliente</button>
          </div>
          <div class="card-footer d-grid gap-6 pt-3 pb-3">
              <button id="admin-btn" class="btn btn-success">Administrador</button>
          </div>
      </div>
  </div>
</div>
@endsection

@section('javascript')

  <script src="{{asset('js/home.js')}}"></script>
@endsection