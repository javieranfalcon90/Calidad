@extends('layouts.app')

@section('content')

    <div class="pagetitle">
    <h1>Oportunidades</h1>
    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item">Oportunidades</li>
          <li class="breadcrumb-item active">Insertar</li>
        </ol>
      </nav>
    </div>

    <section class="section">
        <div class="row">
    
            <div class="col-lg-12">
                <div class="card">
    
                    <div class="card-body">
    
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 class="card-title text-primary">{{ __('Formulario Insertar') }}</h5>
                        </div>

                        <form method="POST" action="{{ route('oportunidades.store') }}"  role="form" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            @include('oportunidad.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

