<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categorias, $tour->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre_tour') }}
            {{ Form::text('nombre_tour', $tour->nombre_tour, ['class' => 'form-control' . ($errors->has('nombre_tour') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tour']) }}
            {!! $errors->first('nombre_tour', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('lugar_tour') }}
            {{ Form::text('lugar_tour', $tour->lugar_tour, ['class' => 'form-control' . ($errors->has('lugar_tour') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Tour']) }}
            {!! $errors->first('lugar_tour', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('recomendacion') }}
            {{ Form::text('recomendacion', $tour->recomendacion, ['class' => 'form-control' . ($errors->has('recomendacion') ? ' is-invalid' : ''), 'placeholder' => 'Recomendacion']) }}
            {!! $errors->first('recomendacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('numero_de_personas') }}
            {{ Form::text('numero_de_personas', $tour->numero_de_personas, ['class' => 'form-control' . ($errors->has('numero_de_personas') ? ' is-invalid' : ''), 'placeholder' => 'Numero De Personas']) }}
            {!! $errors->first('numero_de_personas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fecha_tour') }}
            {{ Form::text('fecha_tour', $tour->fecha_tour, ['class' => 'form-control' . ($errors->has('fecha_tour') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Tour']) }}
            {!! $errors->first('fecha_tour', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>