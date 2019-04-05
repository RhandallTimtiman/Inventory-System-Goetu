@extends('layout.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <!-- main card -->
      <div class="card">
        <!-- form -->
          <div class="card-header card-header-custom">
            <div class="card-title">Create Item</div>
            <div class="card-tools">
              <!-- <a class="btn btn-primary" href="/Addinventory">
                <i class="fas fa-plus mr-2"></i>
                Add
              </a> -->
            </div>
          </div>

          {!! Form::open(['action' => 'ItemController@store', 'method' => 'POST']) !!}
          <div class="card-body">
            <div class="row">
              <!-- sub-card -->
              <div class="col-md card card-primary card-outline p-0 m-3">
                <div class="card-header">
                  <div class="card-title">Title</div>
                </div>
                <div class="card-body">
                  {{ Form::bsText('name') }}
                  {{ Form::bsText('description') }}
                  {{ Form::bsTextArea('description') }}
                  {{ Form::bsSelect('Select Box', ['option1' ,'option 3', 'option 5'])}}
                  {{ Form::bsText('Amount') }}
                </div>
              </div>
              <!-- /sub-card -->

              <!-- sub-card -->
              <div class="col-md card card-primary card-outline p-0 m-3">
                <div class="card-header">
                  <div class="card-title">title</div>
                  </div>
                <div class="card-body">
                  {{ Form::bsSelect('Select Box', ['option1' ,'option 3', 'option 5']) }}
                  {{ Form::bsSelect('Select Box 2', ['option1' ,'option 3', 'option 5'])}}
                  {{ Form::bsText('Something') }}
                  {{ Form::bsText('Serial') }}
                </div>
              </div>
              <!-- /sub-card -->
              <!-- sub-card -->
              <div class="col-md card card-primary card-outline p-0 m-3">
                <div class="card-header">
                  <div class="card-title">Upload Image</div>
                </div>
                <div class="card-body">
                  {{ Form::bsFile('Upload Image') }}
                </div>
              </div>
              <!-- /sub-card -->
            </div>
          </div>

          <div class="card-footer table-responsive">
            <a class="btn btn-primary float-right m-2" href="{{ route('item.index')}}">
              <i class="fas fa-ban mr-2"></i>
              Cancel
            </a>
            <a class="btn btn-primary float-right m-2" href="#">
              <i class="fas fa-plus mr-2"></i>
              Add
            </a>
          </div>
      {!! Form::close() !!}
        <!-- !form -->
      </div>
      <!--!main card -->
    </div>
  </div>
</div>
@endsection
