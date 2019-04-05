@extends('layout.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <!-- main card -->
      {!! Form::open(['action' => 'LocationController@store', 'method' => 'POST']) !!}
      <div class="card">
        <!-- form -->
        <div class="card-header card-header-custom">
          <div class="card-title">Add Location</div>
        </div>

        <div class="card-body">
          <div class="card-body">
            {{ Form::bsText('name') }}
          </div>
        </div>

        <div class="card-footer table-responsive">
          {{Form::bsSubmit('Create Location')}}
        </div>

      </div>
      {!! Form::close() !!}
      <!--!main card -->
    </div>
  </div>
</div>
@endsection
