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
              <h6>Add Addon Group Form</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-addongroup">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="group">Group Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="group" placeholder="Group Name" name="groupname" value="{{ old('groupname') }}">
                    </div>
                    @if($errors->has('groupname'))
                      <div class="error-by-form">{{ $errors->first('groupname') }}</div>
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
                  <div class="col-md-6 mb-3">
                    <label for="pro-list">Select Product</label>
                    <div class="input-group">
                      <select class="form-control" id="pro-list" name="product">
                      
                      </select>
                    </div>
                    @if($errors->has('product'))
                      <div class="error-by-form">{{ $errors->first('product') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="type">Type</label>
                    <div class="input-group">
                      <select class="form-control" id="type" name="Type">
                        <option value="SELECT">SELECT</option>
                        <option value="RADIO">RADIO</option>
                      </select>
                    </div>
                    @if($errors->has('Type'))
                      <div class="error-by-form">{{ $errors->first('Type') }}</div>
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
                    <label for="required">Required Addon Group</label>
                    <div class="input-group">
                      <select class="form-control" id="required" name="required">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    @if($errors->has('required'))
                      <div class="error-by-form">{{ $errors->first('required') }}</div>
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
        $('#cat-list').on('change',function(){
          $('#pro-list').html('');
           var cat =  $(this).val();
           $.ajax({
                  type: "POST",
                  url: "<?php echo url('/getproducts'); ?>",
                  data: {'catid':cat,"_token": "{{ csrf_token() }}"},
                  success: function(result){
                      $('#pro-list').append(result);
                  }
          });
        });
      });
      </script>
      @endsection