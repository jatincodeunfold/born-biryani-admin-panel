@extends('layouts/admin')

@section('content')
<div class="row">

        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
          </nav>

        </div>



        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Product Form</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-product" enctype="multipart/form-data">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="product">Product Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="product" placeholder="Product Name" name="productname" value="{{ old('productname') }}">
                    </div>
                    @if($errors->has('productname'))
                      <div class="error-by-form">{{ $errors->first('productname') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cat-list">Select Catagory</label>
                    <div class="input-group">
                      <select class="form-control" id="cat-list" name="category">
                      <option value="">choose any one</option>
                      <?php
                        $catdata = Helper::get_all_category();
                        if(!empty($catdata)){
                          foreach($catdata as $value){
                            echo  '<option value="'.$value['categoryId'].'">'.$value['categoryname'].'</option>';
                          }
                        }
                      ?>
                      </select>
                    </div>
                    @if($errors->has('category'))
                      <div class="error-by-form">{{ $errors->first('category') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="shortdesc">Short Description</label>
                    <div class="input-group">
                      <textarea rows="5" id="shortdesc" class="form-control" placeholder="Short Description" name="shortDescription" value="{{ old('shortDescription') }}"></textarea>
                    </div>
                    @if($errors->has('shortDescription'))
                      <div class="error-by-form">{{ $errors->first('shortDescription') }}</div>
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
                  <div class="col-md-6 mb-3">
                    <label for="price">Price</label>
                    <div class="input-group">
                      <input type="number" step="any" min="0" class="form-control" id="price" placeholder="Price" name="price" value="{{ old('price') }}">
                    </div>
                    @if($errors->has('price'))
                      <div class="error-by-form">{{ $errors->first('price') }}</div>
                    @endif
                  </div>
                
                  <div class="col-md-12 mb-3">
                    <label for="imgh">Product Image</label>
                    <div class="input-group">
                      <input type="file" class="form-control" name="image">
                    </div>
                    @if($errors->has('image'))
                      <div class="error-by-form">{{ $errors->first('image') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="ms-panel-header new">
                      <button class="btn btn-secondary d-block" type="submit">Save</button>
                    </div>
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
                  <h6>Product </h6>
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