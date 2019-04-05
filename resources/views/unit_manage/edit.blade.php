@extends('layout.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <!-- main card -->
      <div class="card">
        <!-- form -->
          <div class="card-header card-header-custom">
            <div class="card-title">Edit Unit Component</div>
            <div class="card-tools">
              <!-- <a class="btn btn-primary" href="/Addinventory">
                <i class="fas fa-plus mr-2"></i>
                Add
              </a> -->
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <!-- sub-card -->
              <div class="col card card-primary card-outline p-0 m-3">
                <div class="card-header">
                  <div class="card-title">Title</div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Lorem Ipsum</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="name">
                  </div>
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="serial">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="placeholder">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /sub-card -->

              <!-- sub-card -->
              <div class="col card card-primary card-outline p-0 m-3">
                <div class="card-header">
                  <div class="card-title">title</div>
                  </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="anotherplaceholder">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="something">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="idk">
                  </div>
                </div>
              </div>
              <!-- /sub-card -->
            </div>
          </div>
          <div class="card-footer table-responsive">
            <a class="btn btn-primary float-right m-2" href="{{ route('unit.index')}}">
              <i class="fas fa-ban mr-2"></i>
              Cancel
            </a>
            <a class="btn btn-primary float-right m-2" href="#">
                <i class="fa fa-edit mr-2"></i>
              Update
            </a>
          </div>
        <!-- !form -->
      </div>
      <!--!main card -->
    </div>
  </div>
</div>
@endsection
