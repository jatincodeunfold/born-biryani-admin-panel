@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Restaurant List</li>
            </ol>
        </nav>
    </div>
    <?php
      // echo '<pre>';
      // print_r($result);
      // echo '</pre>';

    ?>
    <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>Coupons List</h6>
              </div>
              <div class="ms-panel-body">

                <div class="table-responsive">
                  <table class="table table-hover thead-primary" id="data-tbl">
                    <thead>
                      <tr>
                        <th scope="col">Coupon Name</th>
                        <th scope="col">Coupon Text</th>
                        <th scope="col">Coupon Code</th>
                        <th scope="col">Coupon Price</th>
                        <th scope="col">Coupon Type</th>
                        <th scope="col">Coupon Expiry Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Maximum</th>
                        <th scope="col">Minimum Total</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Edit / Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      if (array_key_exists("success",$result)){
                        foreach($result['result'] as $value){
                    ?>
                      <tr>
                        <th scope="row">{{ $value['coupon_name'] }}</th>
                        <td>{{ $value['coupon_text'] }}</td>
                        <td> {{ $value['coupon_code'] }}</td>
                        <td>{{ $value['coupon_price'] }}</td>
                        <td>{{ $value['coupon_type'] }}</td>
                        <td>{{ $value['expiry_date'] }}</td>
                        <td>{{ $value['status'] }}</td>
                        <td>{{ $value['max_limit'] }}</td>
                        <td>{{ $value['min_total'] }}</td>
                        <td>{{ date($value['created_at']) }}</td>
                        <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                        <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <?php 
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>
<!-- Notes Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>
            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 
<script>
$(document).ready(function() {
    $('#data-tbl').DataTable();
} );
</script>
@endsection
