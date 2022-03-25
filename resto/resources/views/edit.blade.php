@extends('layout')

@section('content')
<div class="col-sm-6">
    <h2>Edit Gɔbɛ Joint</h2>
    <form method="post" action="">
    @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name </label>
          <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" placeholder="Name"aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}" placeholder="Email address"aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Address</label>
          <input type="text"  name="address" class="form-control" id="address" value="{{$data->address}}" placeholder="Address or Location"aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@stop