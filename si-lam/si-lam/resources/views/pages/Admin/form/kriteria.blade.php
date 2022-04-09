@extends('layout.admin')

@section('container')

<form methode="POST" action="{{url('/create')}}">
  <div class="form-group">
    <label> Parent Name</label>
    <input type="text" class="form-control" id="parent_name" aria-describedby="emailHelp" placeholder="Masukan Nama Parent">
    <small id="emailHelp" class="form-text text-muted">Silahkan isi data dengan lengkap</small>
  </div>
  <div class="form-group">
    <label>Child Name</label>
    <input type="text" class="form-control" id="child_name" placeholder="Silahkan masukan nama child">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection