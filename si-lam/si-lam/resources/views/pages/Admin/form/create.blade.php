@extends('layout.admin')

@section('container')

<form method="POST" action="{{url('/tkriteria')}}">
@csrf

<div class="form-group">
    <label for="exampleInputEmail1">Nama Menu</label>
    <input type="text" class="form-control" name="parent_name" placeholder="Masukan Nama Menu">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Sub Menu</label>
    <input type="text" class="form-control" name="child_name" placeholder="Masukan Nama Sub Menu">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

<button type="submit" class="btn btn-primary">CREATE MENU</button>
</form>

@endsection