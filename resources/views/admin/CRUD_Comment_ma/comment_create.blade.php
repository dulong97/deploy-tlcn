@extends('layout.admin.master')
@section('content')
  <body>
      <div class="container">
           <h2>{{$monan->name}}</h2><br/>
    </div>
      <form method="post" action="{{url('create_comment-ma')}}">
       @csrf 
        <div class="row" >
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Nội dung BL:</label>
            <input type="text" class="form-control" name="comment">
            <input type="hidden" name="monan" value="{{$id}}">
            <input type="hidden" name="user" value="user">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
  </body>
@endsection
