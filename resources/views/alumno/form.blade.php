<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('maestro_id') }}
            {{ Form::select('maestro_id', $maestros , $alumno->maestro_id, ['class' => 'form-control' . ($errors->has('maestro_id') ? ' is-invalid' : ''), 'placeholder' => 'Maestro Id']) }}
            {!! $errors->first('maestro_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_p') }}
            {{ Form::text('apellido_p', $alumno->apellido_p, ['class' => 'form-control' . ($errors->has('apellido_p') ? ' is-invalid' : ''), 'placeholder' => 'Apellido P']) }}
            {!! $errors->first('apellido_p', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_m') }}
            {{ Form::text('apellido_m', $alumno->apellido_m, ['class' => 'form-control' . ($errors->has('apellido_m') ? ' is-invalid' : ''), 'placeholder' => 'Apellido M']) }}
            {!! $errors->first('apellido_m', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('domicilio') }}
            {{ Form::text('domicilio', $alumno->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
            {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>