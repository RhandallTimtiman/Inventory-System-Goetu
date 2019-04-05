@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary mb-3 float-right" href="{{route('unit.create')}}">
        <i class="fas fa-plus mr-2"></i>
        Create Unit
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <div class="card-title">List of Units</div>
          <div class="card-tools row">
            <div class=" form-group">
              <select class="form-control-sm mr-3">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control-sm mr-3">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="input-group input-group-sm mr-3" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn search btn-navbar"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
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
                <button class="btn btn-primary mr-1" type="submit">
                  <i class="fas fa-backspace"></i>
                </button>
                <a class="btn btn-primary" href="/unitEdit">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-primary" href="/unitShow">
                  <i class="fa fa-eye"></i>
                </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          *insert pagination*
        </div>
      </div>
    </div>
  </div>
@endsection
