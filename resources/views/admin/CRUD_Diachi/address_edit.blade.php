@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
     
      <div class="container">
    </div>
     <form method="post" action="{{action('AddressController@update', $id)}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">LAT :</label>
            <input type="text" class="form-control"  value="{{$address->lat}}" name="lat">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">LNG:</label>
            <input type="text" class="form-control" value="{{$address->lng}}" name="lng">
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