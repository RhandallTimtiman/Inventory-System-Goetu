@extends('layout.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary mb-3 float-right" href="{{route('location.create')}}">
        <i class="fas fa-plus mr-2"></i>
        Add
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <div class="card-title">List of Locaitons</div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>name</th>
                <th>Actions</th>
              </tr>
              <tr>
                <td>name</td>
                <td align="center">
                <button class="btn btn-primary mr-1" type="submit">
                  <i class="fas fa-backspace"></i>
                </button>
                <a class="btn btn-primary" href="/locationEdit">
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
        <div class="card-footer">
          *inser pagination*
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
