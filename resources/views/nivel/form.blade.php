<div class="">       

    <div class="col-12">
        <label class="form-label">Nombre*</label>
        {{ Form::text('nombre', $nivel->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'required' => '']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-download"></i> Guardar</button>
        <a href="{{ route('niveles.index') }}" class="btn btn-secondary btn-sm"><i class="bi bi-x-lg"></i> Cancelar</a>
    </div>

</div>

  <script type="text/javascript">
    $(function () {

        select_menu('niveles')
      
    });
</script>