<div class="row g-3">      
        
    <div class="col-12">
        <label class="form-label">{{ Form::label('nombre') }}</label>
        {{ Form::text('nombre', $responsable->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'required' => '']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-download"></i> Guardar</button>
        <a href="{{ route('responsables.index') }}" class="btn btn-secondary btn-sm"><i class="bi bi-x-lg"></i> Cancelar</a>
    </div>

</div>

<script type="text/javascript">
    $(function () {

        select_menu('responsables')
      
    });
</script>