@extends('layouts/admin')

@section('content')
<div class="row">

        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
          </nav>

          <!-- <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully read this important alert message.
          </div> -->
        </div>



        <div class="col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Payment Method Module</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-payment">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="method">Method Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="method" placeholder="Method Name" name="Method" value="{{ old('Method') }}">
                    </div>
                    @if($errors->has('Method'))
                      <div class="error-by-form">{{ $errors->first('Method') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <button class="btn btn-secondary d-block" type="submit">Save</button>
                  </div>
                </div>

              </form>

            </div>
          </div>

        </div>

      </div>
      @endsection