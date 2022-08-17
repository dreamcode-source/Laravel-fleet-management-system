{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><a href="{{ route('logout') }}">logout</a></p>
    <p>{{ Auth()->user()->name }}</p>
    <h2>Welcome to the admin pannel</h2>

</body>
</html> --}}

@extends('dashboard/layouts.app')

@section('content')
    



 <!-- page content -->
 <div class="right_col" role="main">
         





    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Vehicle Table<small></small></h2>

                    
                    <ul class="nav navbar-right panel_toolbox">
                        
                        <button style = "background-color:yellow;color:black;" class="btn btn-success" data-toggle="modal" data-target="#mediummodal"><i class = "fa fa-plus"></i> New Entry</button>
                        
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   
                    <!-- <div class="btn-group " data-toggle="buttons">
                        <label class="btn btn-primary active">
                          <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" >
                          <span class="docs-tooltip" data-toggle="tooltip" >
                            Copy
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                            Excel
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                            CVS
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                            PDF
                          </span>
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                            PRINT
                          </span>
                        </label>
                      </div> -->
                      <br><br>


                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Vehicle Type</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Image</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

             @foreach ($vehicles as $vehicle)

                            <tr>
                   
                                    
                               
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->v_type }}</td>
                                <td>{{ $vehicle->v_name }}</td>
                                <td>{{ $vehicle->v_model }}</td>
                                <td>{{ $vehicle->image }}</td>
                                <td>{{ $vehicle->created_at }}</td>
                                <td style = "text-align: center;"> <a href="dashboard/{{ $vehicle->id }}/edit" class="btn btn-primary btn-sm">view</a><button style = "background-color:yellow;color:black;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editvehicle{{ $vehicle->id }}">edit</button><a class="btn btn-danger btn-sm" href ="" ><i class="fa fa-trash"></i></a></td>
                                
                               
                            </tr>


                             <!-- edit course modal -->

<div class="modal fade" id="editvehicle{{ $vehicle->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="mediumModalLabel" style="font-size:18px;">Edit vehicle</h5>
              <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="login-form">
                <form action = "vehicles/{{$vehicle->id}}" method ="POST" enctype ="multipart/form-data" >

                       
                @method('PUT')
                  @csrf
                  
                  
                                      <label for="select" class=" form-control-label">Select Type</label>
                                          <div class="form-group">
                                            
                                          
                                                          <div class="col-12 col-md-13">
                                                              <select name="v_type" class="form-control col-md-7 col-xs-12" >
                                                                <option value="{{ $vehicle->v_type }}">{{ $vehicle->v_type }}</option>
                                                                  <option value="SUV">SUV</option>
                                                                  <option value="Track">Track</option>
                                                                  <option value="Car">Car</option>
                              
                                                              </select>
                                                          </div>
                                                      </div>
                                        <br>
                  
                                        <label for="">vehicle Name</label>
                                        <div class="form-group">
                                            <input  class="form-control col-md-7 col-xs-12" type="text" value="{{ $vehicle->v_name }}" name="v_name" >
                                            @error('v_name')
                                            <div style="color: red;">
                                              {{$message}}
                                          </div>
                                            @enderror
                                        </div>
                  
                                        <br>
                  
                                        <label for="">vehicle Model</label>
                                        <div class="form-group">
                                            <input  class="form-control col-md-7 col-xs-12" value="{{ $vehicle->v_model }}" type="text" name="v_model" >
                                            @error('v_model')
                                            <div style="color: red;">
                                              {{$message}}
                                          </div>
                                            @enderror
                                        </div>
                  
                                        <br>
                                        {{-- <label for="select" class=" form-control-label">Entry Level</label>
                                          <div class="form-group">
                                            
                                          
                                                          <div class="col-12 col-md-13">
                                                              <select name="level[]" class="form-control col-md-7 col-xs-12" multiple >
                                                                  
                                                                  <option value="Diploma level 5">Diploma level 5</option>
                                                                  <option value="Diploma level 4">Diploma level 4</option>
                                                                  <option value="Certificate Level 1">Certificate Level 1</option>
                                                                  
                                                              </select>
                                                          </div>
                                                      </div>    --}}
                                          <label for="">Thumbnail</label>
                                          <div class="form-group">
                                              <input  class="form-control col-md-7 col-xs-12" value="{{ $vehicle->image }}"  type="text" name="image" >
                                              @error('image')
                                              <div style="color: red;">
                                                {{$message}}
                                            </div>
                                              @enderror
                                          </div>
                                          <br>
                                          <br><br>
                  
                 
                            
                  <button class="btn btn-primary btn-sm" type="submit" style = "background-color:yellow;color:black;" name="updatecourse">Update Vehicle</button>

              </form>
            
          </div>
          </div>
          
          
      </div>
  </div>

<!-- end modal medium -->
             @endforeach    
                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
  <div class="modal fade" id="mediummodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel" style="font-size:18px;">Add Vehicle</h5>
                    <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                    <form action = "vehicles" method ="POST" enctype ="multipart/form-data" >

                       
                       
@csrf


                    <label for="select" class=" form-control-label">Select Type</label>
                        <div class="form-group">
                          
                        
                                        <div class="col-12 col-md-13">
                                            <select name="v_type" class="form-control col-md-7 col-xs-12" >
                                                
                                                <option value="SUV">SUV</option>
                                                <option value="Track">Track</option>
                                                <option value="Car">Car</option>
            
                                            </select>
                                        </div>
                                    </div>
                      <br>

                      <label for="">vehicle Name</label>
                      <div class="form-group">
                          <input  class="form-control col-md-7 col-xs-12" type="text" name="v_name" >
                          @error('v_name')
                          <div style="color: red;">
                            {{$message}}
                        </div>
                          @enderror
                      </div>

                      <br>

                      <label for="">vehicle Model</label>
                      <div class="form-group">
                          <input  class="form-control col-md-7 col-xs-12" type="text" name="v_model" >
                          @error('v_model')
                          <div style="color: red;">
                            {{$message}}
                        </div>
                          @enderror
                      </div>

                      <br>
                      {{-- <label for="select" class=" form-control-label">Entry Level</label>
                        <div class="form-group">
                          
                        
                                        <div class="col-12 col-md-13">
                                            <select name="level[]" class="form-control col-md-7 col-xs-12" multiple >
                                                
                                                <option value="Diploma level 5">Diploma level 5</option>
                                                <option value="Diploma level 4">Diploma level 4</option>
                                                <option value="Certificate Level 1">Certificate Level 1</option>
                                                
                                            </select>
                                        </div>
                                    </div>    --}}
                        <label for="">Thumbnail</label>
                        <div class="form-group">
                            <input  class="form-control col-md-7 col-xs-12"  type="text" name="image" >
                            @error('image')
                            <div style="color: red;">
                              {{$message}}
                          </div>
                            @enderror
                        </div>
                        <br>
                        <br><br>

                        {{-- <br>
                        <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="resizable_textarea form-control" name = "description" placeholder="description here..."></textarea>
                        </div> --}}
                     
                       
                                  
                        <button style = "background-color:yellow;color:black;" class="btn btn-primary btn-sm" type="submit" name="submit">Add Vehicle</button>

                    </form>
                  
                </div>
                </div>
                
                
            </div>
        </div>
    
    <!-- end modal medium -->

  


    <!-- /page content -->















</div>
</div>
</div>
<!-- /page content -->

  </div>
  





</div>
<!-- /page content -->
</div>
<!-- /page content -->
         

@endsection