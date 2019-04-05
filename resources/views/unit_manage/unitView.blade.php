@extends('layout.app')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h2>Name of unit</h2>
    <h4>Owner Name</h4>
    <div class="card-tools">
      <button class="btn btn-danger mr-1" type="submit">
        Surrender Item
      </button>
    </div>
  </div>
  <!-- /.card-footer-->
</div>

<div class="card card-primary">
  <div class="card-body table-responsive p-0">
    <table class="table table-hover">
      <tbody><tr>
        <th>Item</th>
        <th>Date</th>
        <th>Status</th>
        <th>Reason</th>

      </tr>
      <tr>
        <td>Itemmm</td>
        <td>11-7-2014</td>
        <td><span class="tag tag-success">Approved</span></td>
        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        <td>
          <td>
            <button class="btn btn-primary mr-1" type="submit">
              <i class="fas fa-plus"></i>
            </button>
          </td>
        </td>
      </tr>
    </tbody></table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer

    <button class="btn btn-primary mr-1 float-right" type="submit">
      Add Something
    </button>
  </div>
  <!-- /.card-footer-->
</div>
@endsection
