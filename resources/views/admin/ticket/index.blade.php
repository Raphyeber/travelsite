@extends('admin.layouts.main')
@section('content')
  @if(session()->has('success'))
    {{ session('success') }}
  @endif
  <a class="button" href="/admin/ticket/create">
    Tambah tiket
    <div class="circle"><div class="icon fa-solid fa-plus"></div></div>
  </a>
  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
    @foreach($tickets as $ticket)
    <tr>
      
        <td>{{ $loop->iteration }}</td>
        <td>{{ $ticket->name }}</td>
        <td>{{ $ticket->category->name }}</td>
        <td>
          <a href="/admin/ticket/{{ $ticket->slug }}/edit"><span class="fas fa-edit"></span></a>
          <form action="/admin/ticket/{{ $ticket->slug }}" method="post">
            @method('delete')
            @csrf
            <button type="submit"><span class="fas fa-trash"></span></button>
          </form>
        </td>
    
    </tr>
    @endforeach
</table>

@endsection