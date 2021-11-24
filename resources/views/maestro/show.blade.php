@extends('layouts.app')

@section('template_title')
    {{ $maestro->name ?? 'Show Maestro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Maestro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maestros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clase Id:</strong>
                            {{ $maestro->clase_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $maestro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido P:</strong>
                            {{ $maestro->apellido_p }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido M:</strong>
                            {{ $maestro->apellido_m }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $maestro->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $maestro->horario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
