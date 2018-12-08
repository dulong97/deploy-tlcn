@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
      
      <div class="container">
    </div>
      <form method="post" action="{{action('quanAnController@update', $id)}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Tên quán :</label>
            <input type="text" class="form-control" name="name" value="{{$quanan->name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Ảnh :</label>
            <input type="text" class="form-control" name="image" value="quanan/{{$quanan->image}}">
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
