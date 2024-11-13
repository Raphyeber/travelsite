@extends('layouts/main')
@section('header')
<div class="hero" style="background-image: url('https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?cs=srgb&dl=pexels-joyston-judah-331625-933054.jpg&fm=jpg');">
  <div class="hero-content">
    <div class="title">Pembelian tiket mudah dan cepat</div>
  </div>
</div>
@endsection
@section('content')


<div class="section-title">
  <div class="title">Tiket</div>
  <a href="/tickets">Lihat Semua</a>
</div>


<ul class="tickets">
  @foreach ($tickets as $ticket)

    <li>
      
      <a href="/tickets/{{ $ticket['slug'] }}"> 
        <img src="{{ $ticket['imageURL'] ?? 'https://www.its.ac.id/tmesin/wp-content/uploads/sites/22/2022/07/no-image.png' }}">
        <div class="content">
          <div class="name">{{ $ticket['name'] }}</div>
          <div class="price">Rp {{ $ticket['price'] }}</div>
        </div>  
      </a>
    </li>
  @endforeach
  </ul> 

  
@endsection

