@extends('admin.layouts.main')
@section('content')
  @if(session()->has('success'))
    {{ session('success') }}
  @endif
  <a class="button" href="/admin/user/create">
    Tambah pengguna
    <div class="circle"><div class="icon fa-solid fa-plus"></div></div>
  </a>
  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Role</th>
      <th>Aksi</th>
    </tr>
    @foreach($users as $user)
    <tr>
      
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td>
          <a href="/admin/user/{{ $user->id }}/edit"><span class="fas fa-edit"></span></a>
          <form action="/admin/user/{{ $user->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit"><span class="fas fa-trash"></span></button>
          </form>
        </td>
    
    </tr>
    @endforeach
</table>

@endsection