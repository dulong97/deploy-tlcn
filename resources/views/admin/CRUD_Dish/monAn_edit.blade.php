@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
     
      <div class="container">
    </div>
      <form method="post" action="{{action('monAnController@update', $id)}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Tên món ăn :</label>
            <input type="text" class="form-control" name="name" value="{{$monan->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">Đơn vị tính:</label>
            <input type="text" class="form-control" name="mota" value="{{$monan->moTa}}" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Gía :</label>
            <input type="text" class="form-control" name="price" value="{{$monan->price}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">Ảnh :</label>
            <input type="text" class="form-control" name="image" value="monan/{{$monan->image}}">
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
