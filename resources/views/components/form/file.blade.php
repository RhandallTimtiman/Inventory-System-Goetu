<div class="form-group">
  {{ Form::label($name, null, ['class' => 'control-label']) }}
  <div class="custom-file">
    {{ Form::label($name, null, ['class' => 'custom-file-label']) }}
    {{ Form::file($name, array_merge(['class' => 'custom-file-input'], $attributes = [])) }}
  </div>
</div>
