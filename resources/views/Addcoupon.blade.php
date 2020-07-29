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
              <h6>Add Coupon Module</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/add-coupon">
              {{ csrf_field() }}
              @if (Session::has('message'))
              <?php echo  Session::get('message'); ?>
              @endif
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="coup">Coupon Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="coup" placeholder="Coupon Name" name="Coupon" value="{{ old('Coupon') }}">
                    </div>
                    @if($errors->has('Coupon'))
                      <div class="error-by-form">{{ $errors->first('Coupon') }}</div>
                    @endif
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="code">Coupon Code</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="code" placeholder="Coupon Code" name="Code" value="{{ old('Code') }}">
                    </div>
                    @if($errors->has('Code'))
                      <div class="error-by-form">{{ $errors->first('Code') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="price">Coupon Price</label>
                    <div class="input-group">
                      <input type="number" step="any" min="0" class="form-control" id="price" placeholder="Price" name="price" value="{{ old('price') }}">
                    </div>
                    @if($errors->has('price'))
                      <div class="error-by-form">{{ $errors->first('price') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="couptype">Coupon Type</label>
                    <div class="input-group">
                      <select class="form-control" id="couptype" name="CouponType">
                        <option value="FLAT">FLAT</option>
                        <option value="PERCENT">PERCENT</option>
                      </select>
                    </div>
                    @if($errors->has('CouponType'))
                      <div class="error-by-form">{{ $errors->first('CouponType') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="exprdate">Expiry Date</label>
                    <div class="input-group">
                      <input type="date" class="form-control" id="exprdate" placeholder="Expiry date" name="ExpiryDate"  value="{{ old('ExpiryDate') }}">
                    </div>
                    @if($errors->has('ExpiryDate'))
                      <div class="error-by-form">{{ $errors->first('ExpiryDate') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="maxlimit">Max Limit</label>
                    <div class="input-group">
                      <input type="number" step="any" min="1" class="form-control" id="maxlimit" placeholder="Max Limit" name="MaxLimit" value="{{ old('MaxLimit') }}">
                    </div>
                    @if($errors->has('MaxLimit'))
                      <div class="error-by-form">{{ $errors->first('MaxLimit') }}</div>
                    @endif
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="minlimit">Min Limit</label>
                    <div class="input-group">
                      <input type="number" step="any" min="1" class="form-control" id="minlimit" placeholder="Min Limit" name="MinLimit" value="{{ old('MinLimit') }}">
                    </div>
                    @if($errors->has('MinLimit'))
                      <div class="error-by-form">{{ $errors->first('MinLimit') }}</div>
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
                  <button class="btn btn-secondary d-block" type="submit">Save</button>
                </div>
                </div>

              </form>

            </div>
          </div>

        </div>

      </div>
      @endsection