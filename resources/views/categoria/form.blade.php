<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_tour') }}
            {{ Form::text('nombre_tour', $categoria->nombre_tour, ['class' => 'form-control' . ($errors->has('nombre_tour') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tour']) }}
            {!! $errors->first('nombre_tour', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>