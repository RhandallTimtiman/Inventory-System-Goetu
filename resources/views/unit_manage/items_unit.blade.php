@extends('layout.app')

@section('content')
  <button type="button" class="btn btn-primary btn-lg" name="button">Back</button>
  {!! Form::open(['action' => 'UnitController@store', 'method' => 'POST']) !!}
    <div class="card">
      <!-- form -->
        <div class="card-header card-header-custom">
          <div class="card-title">Add Items To Unit</div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col card card-primary card-outline p-0 m-3">
              <div class="card-header">
                <div class="card-title">List of Items</div>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="search" class="form-control float-right" value="">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" name="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>Item Name</th>
                      <th>Condition</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                    <tr>
                      <td>Laptop</td>
                      <td>
                        <span class="badge bg-danger">Not Working</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" name="button">Add to Unit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Desktop</td>
                      <td>
                        <span class="badge bg-success">Working</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" name="button">Add to Unit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Spoon</td>
                      <td>
                        <span class="badge bg-dark">For Disposal</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" name="button">Add to Unit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Ooooff</td>
                      <td>
                        <span class="badge bg-warning">For Repair</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" name="button">Add to Unit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Meooooww</td>
                      <td>
                        <span class="badge bg-primary">On Repair</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" name="button">Add to Unit</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer table-responsive">

        </div>
      <!-- !form -->
    </div>
    <div class="card">
      <!-- form -->
        <div class="card-header card-header-custom">
          <div class="card-title">Existing Items in Unit</div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col card card-primary card-outline p-0 m-3">
              <div class="card-header">
                <div class="card-title">Items in the Unit</div>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th>Item Name</th>
                      <th>Condition</th>
                    </tr>
                    <tr>
                      <td>Laptop</td>
                      <td>
                        <span class="badge bg-danger">Not Working</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Desktop</td>
                      <td>
                        <span class="badge bg-success">Working</span>
                      </td>

                    </tr>
                    <tr>
                      <td>Spoon</td>
                      <td>
                        <span class="badge bg-dark">For Disposal</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Ooooff</td>
                      <td>
                        <span class="badge bg-warning">For Repair</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Meooooww</td>
                      <td>
                        <span class="badge bg-primary">On Repair</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer table-responsive">

        </div>
      <!-- !form -->
    </div>
  {!! Form::close() !!}
@endsection
