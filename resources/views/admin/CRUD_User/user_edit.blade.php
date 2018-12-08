@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
     
      <div class="container">
    </div>
      <form method="post" action="{{action('PageController@update', $id)}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Email :</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" name="password" value="{{$user->password}}" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name :</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Gender">Gender:</label>
            <div>
                <label class="radio-inline"><input type="radio" name="gender" value="Nam" @if($user->gender == "Nam") checked @endif> Nam</label>
                <label class="radio-inline"><input type="radio" name="gender" value="Nu" @if($user->gender == "Nu") checked @endif> Nu</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">CMND :</label>
            <input type="text" class="form-control" name="cmnd" value="{{$user->cmnd}}">
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