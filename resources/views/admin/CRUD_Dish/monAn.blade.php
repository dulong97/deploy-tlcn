@extends('layout.admin.master')
@section('content')
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <a href="{{url('create_monan')}}" class="btn btn-success">THêm món ăn</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên món ăn</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th>Image</th>
        <th>Lượt thích</th>
        <th>Tên quán ăn</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ;?>
      @foreach($monans as $monan)
       
      <tr>
        <td>{{$i++}}</td>
        <td>{{$monan->name}}</td>
        <td>{{$monan->moTa}}</td>
        <td>{{$monan->price}}</td>
        <td>{{$monan->image}}</td>
        <td>{{$monan->soLike}}<td>{{$monan->price}}</td>
        <td>{{$monan->quanans->name}}</td>
        <td><a href="{{action('monAnController@edit', $monan->_id)}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('Comment_maController@index', $monan->id)}}" class="btn btn-success">View Comment</a></td>
        <td><a href="{{action('Comment_maController@create', $monan->id)}}" class="btn btn-warning">Add Comment</a></td>
        <td>
          <form action="{{action('monAnController@delete',$monan->id)}}" method="post">
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