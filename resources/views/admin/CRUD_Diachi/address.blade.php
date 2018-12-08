@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
    <br />
    <div class="row">
      
    </div>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>TÊN QUÁN ĂN</th>
        <th>ĐỊA CHỈ</th>
        <th>TỈNH</th>
        <th>QUẬN/HUYỆN</th>
        <th>ĐƯỜNG/PHỐ</th>
        <th>XÃ/PHƯỜNG/THỊ TRẤN</th>
        <th>LAT</th>
        <th>LNG</th>
        <th colspan="2">ACTION</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($diachi as $address)
      <tr>
        <td>{{$address->quanans['name']}}</td>
        <th>{{$address->name}}</th>
        <td>{{$address->provinces['name'] }}</td>
        <td>{{$address->districts['name']}}</td>
        <td>{{$address->streets['name']}}</td>
        <td>{{$address->wards['name']}}</td>
        <td>{{$address->lat}}</td>      
        <td>{{$address->lng}}</td>              
        <td><a href="{{action('AddressController@edit', $address->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('AddressController@delete', $address->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
@endsection