@extends('layout/admin/master')
@section('content')
  <body>
    <div class="container">
      
      <div class="container">
    </div>
      <form method="post" action="{{url('user/create')}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Email :</label>
            <input type="text" class="form-control" name="email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name :</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-2">
                <label for="Gender">Gender:</label>
           </div>
            <div class="form-group col-md-2">
                <label class="radio-inline"><input type="radio"  name="gender" value="Nam" checked> Nam</label>
                <br>
                <label class="radio-inline"><input type="radio" name="gender" value="Nu" > Nu</label>
            </div>
         
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">CMND :</label>
            <input type="text" class="form-control" name="cmnd">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
@endsection
