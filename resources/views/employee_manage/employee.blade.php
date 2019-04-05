@extends('layout.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary mb-3 float-right" href="{{route('employee.create')}}">
        <i class="fas fa-plus mr-2"></i>
        Create Employee
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="list card-header">
          <h3 class="card-title">List of Items</h3>
          <div class="card-tools">
            {!! Form::open(['action' => 'ItemController@store', 'method' => 'POST']) !!}
              <div class="form-group">

              </div>
            {!! Form::close() !!}
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody>
              <tr>
                <th>Employee Name</th>
                <th>Position</th>
                <th>Mobile</th>
                <th>Item Code</th>
                <th>Item Brand</th>
                <th>Model Code</th>
                <th>Serial</th>
                <th>Actions</th>
              </tr>
              <tr>
                <td>name</td>
                <td>0a1b2c3de4f5g6</td>
                <td>Place Holder 1</td>
                <td>Place Holder 2</td>
                <td>Place Holder 3</td>
                <td>Place Holder 4</td>
                <td>Place Holder 5</td>
                <td align="center">
                <button class="btn btn-primary mr-1 mb-2" type="submit">
                  <i class="fas fa-backspace"></i>
                </button>
                <a class="btn btn-primary mb-2" href="/employeeEdit">
                  <i class="fas fa-edit"></i>
                </a>
                <!-- planning to add a button to view specific row (not sure yet tho) -->
                <!-- <a class="btn btn-sm btn-primary" href="#">
                  <i class="fab fa-readme"></i>
                </a> -->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          *inser pagination*
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
