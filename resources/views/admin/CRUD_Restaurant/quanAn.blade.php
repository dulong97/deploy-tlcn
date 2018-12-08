@extends('layout.admin.master')
@section('content')
  <body>
    <div>
       <a href="{{url('/quanan/create')}}" class="btn btn-danger">Them quan an</a>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên quán ăn</th>
        <th>Số like</th>
        <th>Nhân viên phục vụ</th>
        <th>Chất lượng đồ ăn</th>
        <th>Không gian thoải mái</th>
        <th>Giá tiền</th>
        <th>Địa điểm dễ tìm</th>
         <th>Image</th>
        <th colspan="3"></th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ;?>
      @foreach($quanans as $quanan)
       
      <tr>
        <td>{{$i++}}</td>
        <td>{{$quanan->name}}</td>
        <td>{{$quanan->soLike}}</td>
        <td>{{$quanan->vote1}}</td>
        <td>{{$quanan->vote2}}</td>
        <td>{{$quanan->vote3}}</td>
        <td>{{$quanan->vote4}}</td>
        <td>{{$quanan->vote5}}</td>  
        <td>{{$quanan->image}}</td>  
        <td><a href="{{action('quanAnController@edit', $quanan->id)}}" class="btn btn-success">Edit</a></td>                <td><a href="{{action('AddressController@index', $quanan->id)}}" class="btn btn-success">View Address</a></td>
        <td><a href="{{action('monAnController@index', $quanan->id)}}" class="btn btn-success">View Menu</a></td>
        <td><a href="{{action('CommentController@index', $quanan->id)}}" class="btn btn-success">View Comment</a></td>
        <td><a href="{{action('CommentController@create', $quanan->id)}}" class="btn btn-warning">Add Comment</a></td>
        <td>
          <form action="{{action('quanAnController@delete',$quanan->id)}}" method="post">
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