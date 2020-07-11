@extends('layouts/admin')

@section('content')
<div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Forms</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
            </ol>
          </nav>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Coupon</h6>
            </div>
            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom18">First name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="First name" value="John" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom19">Last name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom19" placeholder="Last name" value="Doe" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom20">Email Address</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="validationCustom20" placeholder="Email Address" required>
                      <div class="invalid-feedback">
                        Please provide a valid email.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom21">Phone Number</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom21" placeholder="Phone Number" required>
                      <div class="invalid-feedback">
                        Please provide a number.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom22">Country</label>
                    <div class="input-group">
                      <select class="form-control" id="validationCustom22" required>
                        <option value="">01</option>
                        <option value="">02</option>
                        <option value="">03</option>
                        <option value="">04</option>
                        <option value="">05</option>
                        <option value="">06</option>
                        <option value="">07</option>
                        <option value="">08</option>
                        <option value="">09</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a Country.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom23">State</label>
                    <div class="input-group">
                      <select class="form-control" id="validationCustom23" required>
                        <option value="">2020</option>
                        <option value="">2021</option>
                        <option value="">2022</option>
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                        <option value="">2027</option>
                        <option value="">2028</option>
                        <option value="">2029</option>
                        <option value="">2030</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a State
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom24">City</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom24" placeholder="City" required>
                      <div class="invalid-feedback">
                        Please provide a city.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Zip code</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="Zip code" required>
                      <div class="invalid-feedback">
                        Please provide a ZIP.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom26">Address</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom26" placeholder="Address" required>
                      <div class="invalid-feedback">
                        Please provide an Address.
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary d-block float-right" type="submit">Save and Continue</button>
              </form>
            </div>
          </div>
        </div>
</div>
@endsection