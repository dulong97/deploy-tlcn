@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
      
      <div class="container">
    </div>
      <form method="post" action="{{url('address/create')}}">
       @csrf 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">TÊN QUÁN ĂN :</label>
            <input type="text" class="form-control"  value="{{$quanans->name}}" disabled="">
            <input type="hidden" name="quanan" value="{{$quanans->id}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">ĐỊA CHỈ:</label>
            <input type="text" class="form-control" name="password">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">TỈNH :</label>

             <select id="province_1" class="custom-select" name="province">
              <option disabled selected value>Chọn địa điểm</option>
              @foreach($provinces as $province)
              <option value="{{$province->id}}">{{$province->_name}} </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">QUẬN/HUYỆN :</label>
            <select id="district_1" class="custom-select" name="district">
              
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">ĐƯỜNG/PHỐ :</label>
           <select id="street_1" class="custom-select" name="street">
              
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CMND">XÃ/PHƯỜNG/THỊ TRẤN :</label>
           <select id="ward_1" class="custom-select" name="ward">
              
            </select>
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

  <script src="../lib/js/jquery-3.3.1.min.js"></script>
    <script src="../js/xuly.js"></script>

@endsection
