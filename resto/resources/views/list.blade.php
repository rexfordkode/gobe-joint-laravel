@extends('layout')

@section('content')
<h1>Gɔbɛ Joint Page</h1>
@if (Session::get('success')) 
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
     {{Session::get('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    @foreach ($data as $item )
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td colspan="1">{{$item->name}}</td>
        <td colspan="1">{{$item->email}}</td>
        <td colspan="1">{{$item->address}}</td>
        <td>
            <a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>&#160;
            <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
        </td>
      </tr>
    @endforeach
</table>
@stop