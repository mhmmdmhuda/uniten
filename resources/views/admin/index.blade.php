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
          <th>Id Post</th>
          <th>Landlord ID</th>
          <th>Categori ID</th>
          <th>Conditions</th>
          <th>Bedrooms</th>
          <th>Location</th>
          <th>Rental Price</th>
          <th>Description</th>
          <th>Address</th>
          <th>Images</th>
          <th>Action</th>
        </tr>
        <a href="{{route('admin.create')}}" class="btn btn-info pull-right">Create new data</a><br><br>
        <?php $no=1 ?>
        @foreach ($admin as $admin)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$admin->id}}</td>
            <td>{{$admin->landlord_id}}</td>
            <td>{{$admin->categories_id}}</td>
            <td>{{$admin->conditions}}</td>
            <td>{{$admin->bedrooms}}</td>
            <td>{{$admin->location}}</td>
            <td>{{$admin->rental_price}}</td>
            <td>{{$admin->description}}</td>
            <td>{{$admin->address}}</td>
            <td>{{$admin->images}}</td>

            <td>
              <form class="" action="{{route('admin.destroy',$admin->id)}}" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <a href="{{route('admin.edit',$admin->id)}}" class="btn btn-primary">Edit</a>
                <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this data ?');" name="name" value="delete">
              </form>
            </td>

          </tr>
        @endforeach
      </table>
    </div>



  @stop
