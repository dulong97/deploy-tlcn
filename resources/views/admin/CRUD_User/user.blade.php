@extends('layout/admin/master')
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
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>GENDER</th>
        <th>CMND</th>
        <th colspan="2">ACTION</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>********</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->cmnd}}</td>

        <td><a href="{{action('PageController@update', $user->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PageController@delete', $user->id)}}" method="post">
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