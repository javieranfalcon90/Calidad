@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Responsables</h1>
    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item">Responsables</li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
      </nav>
    </div>

    <section class="section">
        <div class="row">
    
            <div class="col-lg-12">
                <div class="card">
    
                    <div class="card-body">
    
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 class="card-title text-primary">{{ __('Formulario Editar') }}</h5>
                        </div>

                        <form method="POST" action="{{ route('responsables.update', $responsable->id) }}"  role="form" enctype="multipart/form-data" autocomplete="off">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('responsable.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection