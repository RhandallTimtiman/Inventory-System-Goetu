@extends('layout.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <!-- main card -->
      <div class="card">
        <!-- form -->
          <div class="card-header card-header-custom">
            <div class="card-title">Create Unit</div>
            <div class="card-tools">
              <!-- <a class="btn btn-primary" href="/Addinventory">
                <i class="fas fa-plus mr-2"></i>
                Add
              </a> -->
            </div>
          </div>

          <div class="card-body">
            {{ Form::bsText('Unit Name') }}
          </div>

          <div class="card-footer table-responsive">
            {{ Form::submit('Create Unit', ['class' => 'btn btn-primary float-right m-2']) }}
          </div>
        <!-- !form -->
      </div>

    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
