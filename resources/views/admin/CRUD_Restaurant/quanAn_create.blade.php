@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
      <h2>Thêm Quán ăn mới</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('quanan/create')}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Tên quán ăn :</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Lượt thích :</label>
            <input type="text" class="form-control" name="like" value="5" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Nhân viên phục vụ :</label>
            <input type="text" class="form-control" name="vote1" value="5" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Chất lượng đồ ăn :</label>
            <input type="text" class="form-control" name="vote2" value="5" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Không gian thoải mái  :</label>
            <input type="text" class="form-control" name="vote3" value="5" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Đáng giá tiền  :</label>
            <input type="text" class="form-control" name="vote4" value="5" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="like">Địa điểm dễ tìm  :</label>
            <input type="text" class="form-control" name="vote5" value="5" >
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
