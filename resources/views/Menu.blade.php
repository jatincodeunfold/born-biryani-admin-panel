@extends('layouts/admin')

@section('content')
<div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active" aria-current="page">Menu Catalogue</li>
            </ol>
          </nav>
        </div>

        <?php 
          if (array_key_exists("success",$result)){
            foreach($result['result'] as $value){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-img">
              <img src="{{ $value['category']['img_link'] }}" alt="card_img">
            </div>
            <div class="ms-card-body ">
              <div class="wrapper-new2 ">
                <h6>{{ $value['category']['categoryname'] }}</h6>
              </div>
               <div class="wrapper-new1">
               <span >{{ $value['category']['longDescription'] }}</span>
              </div> 
              <a href="#" class="btn btn-primary btn-md btn-block">See More</a>
            </div>
          </div>
        </div>
        <?php 
          }
        }
        ?>
        <div class="col-xl-12 col-md-12">
          <div class="load">
            <i class="fas fa-redo alt  space text-muted" aria-hidden="true"></i><span class="more">Load More</span>
          </div>
        </div>
      </div>

@endsection