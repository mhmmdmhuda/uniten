@extends('master')
  @section('content')
    <div class="row">
      <div class="col-md-12">
        <h1>Post Properties</h1>
      </div>
    </div>

    <div class="row">
      <table class="table table-striped">
        <tr>
          <th>No</th>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Telpon</th>
          <th>Images</th>
          <th>Address</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <a href="{{route('landlord.create')}}" class="btn btn-info pull-right">Create new data</a><br><br>
        <?php $no=1 ?>
        @foreach ($landlord as $value)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$value->id}}</td>
            <td>{{$value->first_name}}</td>
            <td>{{$value->last_name}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td>{{$value->telpon}}</td>
            <td>{{$value->images}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->status}}</td>
            <td>
              <form class="" action="{{route('landlord.destroy',$value->id)}}" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <a href="{{route('landlord.edit',$value->id)}}" class="btn btn-primary">Edit</a>
                <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this data ?');" name="name" value="delete">
              </form>
            </td>

          </tr>
        @endforeach
      </table>
    </div>
  @stop
