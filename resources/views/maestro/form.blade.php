<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clase_id') }}
            {{ Form::select('clase_id', $clases  ,$maestro->clase_id, ['class' => 'form-control' . ($errors->has('clase_id') ? ' is-invalid' : ''), 'placeholder' => 'Clase Id']) }}
            {!! $errors->first('clase_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $maestro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_p') }}
            {{ Form::text('apellido_p', $maestro->apellido_p, ['class' => 'form-control' . ($errors->has('apellido_p') ? ' is-invalid' : ''), 'placeholder' => 'Apellido P']) }}
            {!! $errors->first('apellido_p', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_m') }}
            {{ Form::text('apellido_m', $maestro->apellido_m, ['class' => 'form-control' . ($errors->has('apellido_m') ? ' is-invalid' : ''), 'placeholder' => 'Apellido M']) }}
            {!! $errors->first('apellido_m', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('domicilio') }}
            {{ Form::text('domicilio', $maestro->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
            {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario') }}
            {{ Form::text('horario', $maestro->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('horario', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>