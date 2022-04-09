@extends('layout.admin')

@section('container')

<form method="POST" action="{{url('tkriteria/'.$tkriteria->id)}}">
@csrf
<input type="hidden" name="_method" value="PATCH">
<div class="form-group">
    <label for="exampleInputEmail1">Nama Menu</label>
    <input type="text" class="form-control" name="parent_name" value="{{$tkriteria->parent_name}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Sub Menu</label>
    <input type="text" class="form-control" name="child_name" value="{{$tkriteria->child_name}}" >
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

<button type="submit" class="btn btn-primary">EDIT MENU</button>
</form>

@endsection