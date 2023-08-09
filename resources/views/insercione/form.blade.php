<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('noticia') }}
            {{ Form::text('noticia', $insercione->noticia, ['class' => 'form-control' . ($errors->has('noticia') ? ' is-invalid' : ''), 'placeholder' => 'Noticia']) }}
            {!! $errors->first('noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('informacion') }}
            {{ Form::text('informacion', $insercione->informacion, ['class' => 'form-control' . ($errors->has('informacion') ? ' is-invalid' : ''), 'placeholder' => 'Informacion']) }}
            {!! $errors->first('informacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datos') }}
            {{ Form::text('datos', $insercione->datos, ['class' => 'form-control' . ($errors->has('datos') ? ' is-invalid' : ''), 'placeholder' => 'Datos']) }}
            {!! $errors->first('datos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $insercione->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('extra') }}
            {{ Form::text('extra', $insercione->extra, ['class' => 'form-control' . ($errors->has('extra') ? ' is-invalid' : ''), 'placeholder' => 'Extra']) }}
            {!! $errors->first('extra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $insercione->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $insercione->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>