<div class=" form-group">
  {{ Form::select($name, $value, null, ['class' => 'custom-select custom-select-sm'], $attributes)}}
  {{ Form::select($name, $value, null, ['class' => 'custom-select custom-select-sm'], $attributes)}}
  <div class="input-group input-group-sm mr-3" style="width: 150px;">
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    <div class="input-group-append">
      <button type="submit" class="btn search btn-navbar"><i class="fa fa-search"></i></button>
      {{Form::submit($value, ['class' => 'btn search btn-navbar'], $attributes)}}
    </div>
  </div>
</div>
