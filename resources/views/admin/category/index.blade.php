@extends('admin.layouts.main')
@section('content')
  @if(session()->has('success'))
    {{ session('success') }}
  @endif
  <a class="button" href="/admin/category/create">
    Tambah kategori
    <div class="circle"><div class="icon fa-solid fa-plus"></div></div>
  </a>
  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    @foreach($categories as $category)
    <tr>
      
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <a href="/admin/category/{{ $category->slug }}/edit"><span class="fas fa-edit"></span></a>
          <form action="/admin/category/{{ $category->slug }}" method="post">
            @method('delete')
            @csrf
            <button type="submit"><span class="fas fa-trash"></span></button>
          </form>
        </td>
    
    </tr>
    @endforeach
</table>

@endsection