@extends('master')
  @section('content')
    <div class="row">
      <div class="col-md-12">
        <h1>Create Data</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" action="{{route('admin.store')}}" method="post" role="form">
          {{csrf_field()}}
          <div class = "form-group">
            <label name = "username" class = "col-sm-2 control-label">Username Landlor</label>
                <div class = "col-sm-10">
                  <select class = "form-control">
                    @foreach ($landlord as $value)
                    <option value="{{$value->id}}">{{$value->username}}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('Username Landlor','<p class="help-block">:message</p>') !!}
                </div>
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Categories</label>
                <div class = "col-sm-10">
                  <select class = "form-control">
                    @foreach ($categories as $value)
                    <option value="{{$value->id}}">{{$value->property_name}}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('Categories','<p class="help-block">:message</p>') !!}
                </div>
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Condititon</label>
                <div class = "col-sm-10">
                  <select class = "form-control">
                    <option>Full furnished</option>
                    <option>Semi furnished</option>
                    <option>Unfurnished</option>
                  </select>
                  {!! $errors->first('Condititon','<p class="help-block">:message</p>') !!}
                </div>
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Badrooms</label>
                <div class = "col-sm-10">
                  <select class = "form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  {!! $errors->first('Badrooms','<p class="help-block">:message</p>') !!}
                </div>
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Location</label>
                <div class = "col-sm-10">
                  <select class = "form-control">
                    <option></option>
                  </select>
                  {!! $errors->first('Location','<p class="help-block">:message</p>') !!}
                </div>
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Rental Price</label>

            <div class = "col-sm-10">
              <input type = "text" class = "form-control" id = "lastname" placeholder = "Input rental price">
            </div>
            {!! $errors->first('Rental Price','<p class="help-block">:message</p>') !!}
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">description</label>

            <div class = "col-sm-10">
               <textarea class = "form-control" rows = "3" placeholder="Input description here"></textarea>
            </div>
            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Address</label>

            <div class = "col-sm-10">
               <textarea class = "form-control" rows = "3" placeholder="Input address here"></textarea>
            </div>
            {!! $errors->first('Address','<p class="help-block">:message</p>') !!}
          </div>

          <div class = "form-group">
            <label for = "lastname" class = "col-sm-2 control-label">Image</label>

            <div class = "col-sm-10">
               <input type = "file" class = "form-control" id = "lastname" placeholder = "Input rental price">
            </div>
            {!! $errors->first('Image','<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group">
            <div class = "col-sm-10">
              <input type="submit" class="btn btn-primary" value="save">
              <input type="reset" class="btn btn-danger" value="reset">
            </div>
          </div>
        </form>
      </div>
    </div>
  @stop
