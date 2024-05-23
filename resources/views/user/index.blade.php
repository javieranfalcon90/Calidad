@extends('layouts.app')

@section('content')

    <div class="pagetitle">
    <h1>Usuarios</h1>
    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item">Usuarios</li>
          <li class="breadcrumb-item active">Listado</li>
        </ol>
      </nav>
    </div>

    <section class="section">
        <div class="row">
    
            <div class="col-lg-12">
                <div class="card">
    
                    <div class="card-body">
    
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 class="card-title text-primary">{{ __('Listado') }}</h5>
    
                             <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-plus-lg"></i> {{ __('Insertar') }}
                                </a>
                              </div>
                        </div>
    
                        <div class="table-responsive p-2">
                            <table class="table table-hover" id="datatable" style="width: 100%">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Proceso</th>
                                        <th>Roles</th>
                                        <th>Estado</th>
                                        <th class="actions"></th>     
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
    
                    </div>
    
                </div>
            </div>
    
        </div>
      </section>
    
    
<script type="text/javascript">
$(function () {

    select_menu('users')

    @include('layouts.message')

    $("#datatable tbody").on("click", ".delete", function() {
        var form = $(this).closest("form");
        createDelete(form)
    });

    var columns = [
        {data: 'id'},
        {data: 'name'},
        {data: 'email'},
        {data: 'proceso'},
        {data: 'roles'},
        {data: 'estado'},
        {data: 'action'}
    ];

    var route = '{{ Route("users.index") }}'; 
    var sortcolumns = [0,6];
    createDatatable(route, columns, sortcolumns);
    
});
</script>

@endsection
