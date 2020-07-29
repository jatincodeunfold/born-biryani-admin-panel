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



        <div class="col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Addon Form</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-addon">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="addon">Addon Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="addon" placeholder="Addon Name" name="addon" value="{{ old('addon') }}">
                    </div>
                    @if($errors->has('addon'))
                      <div class="error-by-form">{{ $errors->first('addon') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="pro-list">Select Product</label>
                    <div class="input-group">
                      <select class="form-control" id="pro-list" name="product">
                      <option value="">choose any one</option>
                      <?php
                        $prodata = Helper::get_all_products();
                        if(!empty($prodata)){
                          foreach($prodata as $value){
                            echo  '<option value="'.$value['productId'].'">'.$value['name'].'</option>';
                          }
                        }
                      ?>
                      </select>
                    </div>
                    @if($errors->has('product'))
                      <div class="error-by-form">{{ $errors->first('product') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="groupaddon-list">Select Addon Group </label>
                    <div class="input-group">
                      <select class="form-control" id="groupaddon-list" name="addgroup">
                      
                      </select>
                    </div>
                    @if($errors->has('addgroup'))
                      <div class="error-by-form">{{ $errors->first('addgroup') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="taxable">Taxable</label>
                    <div class="input-group">
                      <select class="form-control" id="taxable" name="Taxable">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    @if($errors->has('Taxable'))
                      <div class="error-by-form">{{ $errors->first('Taxable') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="quantitative">Quantitative</label>
                    <div class="input-group">
                      <select class="form-control" id="quantitative" name="Quantitative">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    @if($errors->has('Quantitative'))
                      <div class="error-by-form">{{ $errors->first('Quantitative') }}</div>
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
                
                  <!-- <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Product Image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile">
                      <label class="custom-file-label" for="validatedCustomFile">Upload Images...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div> -->
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
      </div>
      <script>
      $(document).ready(function(){
        $('#pro-list').on('change',function(){
          $('#groupaddon-list').html('');
           var pro =  $(this).val();
           $.ajax({
                  type: "POST",
                  url: "<?php echo url('/getaddongroup'); ?>",
                  data: {'proid':pro,"_token": "{{ csrf_token() }}"},
                  success: function(result){
                      $('#groupaddon-list').append(result);
                  }
          });
        });
      });
      </script>
      @endsection