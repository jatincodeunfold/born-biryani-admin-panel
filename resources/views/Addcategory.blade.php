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



        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Category Module</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-category" enctype="multipart/form-data">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="catname">Caregory Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="catname" placeholder="Category Name" name="category" value="{{ old('category') }}">
                    </div>
                    @if($errors->has('category'))
                      <div class="error-by-form">{{ $errors->first('category') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="desc">Description</label>
                    <div class="input-group">
                      <textarea rows="10" id="desc" class="form-control" placeholder="Description" name="description" value="{{ old('description') }}"></textarea>
                    </div>
                    @if($errors->has('description'))
                      <div class="error-by-form">{{ $errors->first('description') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="imgh">Category Image</label>
                    <div class="input-group">
                      <input type="file" class="form-control" name="image">
                    </div>
                    @if($errors->has('image'))
                      <div class="error-by-form">{{ $errors->first('image') }}</div>
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

        <div class="col-xl-6 col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-header">
                  <h6>Category</h6>
                </div>
                <div class="ms-panel-body">
                  <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/costic/add-product-1.jpg') }}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/costic/add-product-2.jpg') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/costic/add-product-3.jpg') }}" alt="Third slide">
                      </div>
                    </div>
                    <ol class="carousel-indicators">
                      <li data-target="#imagesSlider" data-slide-to="0" class="active"> <img class="d-block w-100" src="{{ asset('img/costic/add-product-1.jpg') }}" alt="First slide"></li>
                      <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100" src="{{ asset('img/costic/add-product-2.jpg') }}" alt="Second slide"></li>
                      <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100" src="{{ asset('img/costic/add-product-3.jpg') }}" alt="Third slide"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      @endsection