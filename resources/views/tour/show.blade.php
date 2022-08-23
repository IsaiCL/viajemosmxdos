@extends('layouts.app')

@section('template_title')
    {{ $tour->name ?? 'Show Tour' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tour</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tours.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $tour->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Tour:</strong>
                            {{ $tour->nombre_tour }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Tour:</strong>
                            {{ $tour->lugar_tour }}
                        </div>
                        <div class="form-group">
                            <strong>Recomendacion:</strong>
                            {{ $tour->recomendacion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero De Personas:</strong>
                            {{ $tour->numero_de_personas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Tour:</strong>
                            {{ $tour->fecha_tour }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
