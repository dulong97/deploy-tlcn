@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
      <h2>Thêm Món ăn mới</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('monan/create')}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Tên món ăn :</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="moTa">Mô tả:</label>
            <input type="text" class="form-control" name="moTa">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Lượt thích :</label>
            <input type="text" class="form-control" name="like" value="0" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="price">Giá :</label>
            <input type="text" class="form-control" name="price">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="maloai">Quán ăn :</label>
            <select class="custom-select" name="quanan">
              @foreach($quanan as $quanan)
              <option value="{{$quanan->id}}">{{$quanan->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">Ảnh :</label>
            <input type="text" class="form-control" name="image" value="monan/">
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
