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
    <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>Invoice List</h6>
              </div>
              <div class="ms-panel-body">

                <div class="table-responsive">
                  <table class="table table-hover thead-primary">
                    <thead>
                      <tr>
                        <th scope="col">Restaurant ID</th>
                        <th scope="col">Restaurant Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Ratings</th>
                         <th scope="col">Joining Date</th>

                            <th scope="col">Restaurant Sale(%)</th>
                            <th scope="col">Edit / Delete</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">15451</th>
                        <td>Delizus</td>
                        <td> New York</td>
                          <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                    <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                    <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                    <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                    <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                    <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  </ul></td>
                             <td>12/10/19</td>
                            <td>90</td>
                            <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">15452</th>
                          <td>Lumina</td>
                        <td> New York</td>
                        <td><ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                          <td>20/9/19</td>
                          <td>99</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">45263</th>
                            <td>Food Loung</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>15/10/19</td>
                          <td>95</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">45865</th>
                        <td>Hungry House</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                          <td>21/11/19</td>
                          <td>88</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">56652</th>
                        <td>Luncheon</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>12/11/19</td>
                          <td>81</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">65845</th>
                        <td>Spice 'n' Steam</td>
                        <td> New York</td>
                        <td><ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>20/10/19</td>
                          <td>91</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">65425</th>
                        <td>Tomato</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>12/10/19</td>
                          <td>77</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">54556</th>
                        <td>Bardojo</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                          <td>12/11/19</td>
                          <td>78</td>
                           <td>
                           <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">45556</th>
                        <td>Deliceiux</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>22/10/19</td>
                          <td>88</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">55856</th>
                        <td>Food Forest</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>12/10/19</td>
                          <td>75</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">36456</th>
                        <td>Food Bella</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                          <td>18/11/19</td>
                          <td>90</td>
                           <td><a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                            
                            <a href='a.html'><i class='flaticon-trash'></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">78456</th>
                        <td>Red Chilly</td>
                        <td> New York</td>
                        <td> <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                  <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                  <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                </ul></td>

                           <td>12/10/19</td>
                          <td>85</td>
                           <td>
                           <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class='flaticon-pencil'></i></a>
                           <a href="#"> <i class='flaticon-trash'></i></a></td>
                      </tr>


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
@endsection