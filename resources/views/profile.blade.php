@extends('layouts/main')
@section('content')
  Halo, {{ auth()->user()->name }}<br>
  {{ auth()->user()->email }}
  <form method="post" action="/logout">
    @csrf
    <button type="submit">LogOut</button>
  </form>
@endsection

