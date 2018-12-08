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
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Người bình luận</th>
        <th>Nội dung</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comments as $comment)
      <tr>
        <td>{{$comment->user}}</td>
        <td>{{$comment->noidung}}</td>

        <td><a href="" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="" method="post">
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