@extends('admin.layouts.main')
@section('content')
  @if(session()->has('success'))
    {{ session('success') }}
  @endif
  <table class="table">
    <tr>
      <th>No</th>
      <th>Pengguna</th>
      <th>Review</th>
      <th>Aksi</th>
    </tr>
    @foreach($reviews as $review)
    <tr>
        
        <td>{{ $loop->iteration }}</td>
        <td>{{ $review->user->name}}</td>
        <td>{{ $review->review }}</td>
        <td>
          <form action="/admin/review/{{ $review->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit"><span class="fas fa-trash"></span></button>
          </form>
        </td>
    
    </tr>
    @endforeach
</table>

@endsection