@extends('master')
  @section('content')
    <div class="row">
      <div class="col-md-12">
        <h1>Create Landlord</h1>
      </div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <form class="form-horizontal" action="{{route('landlord.store')}}" method="post" role="form">
            {{csrf_field()}}
              <div class="form-group">
                <label>First Name</label>
                <input class="form-control" placeholder="Input first name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" placeholder="Input last name">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" placeholder="username">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label>Telpon</label>
                <input class="form-control" placeholder="Input first name">
              </div>
              <div class="form-group">
                <label>images</label>
                <input type="file" class="form-control" placeholder="Input first name">
              </div>
              <div class="form-group">
                <label>Status</label>
                <input type="radio" name="status" value="active">
                <input type="radio" name="status" value="deactive">
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-default" value="save">
                  <input type="reset" class="btn btn-danger" value="reset">
              </div>
              </div>
          </form
        </div>
      </div>
    </div>
    @stop
