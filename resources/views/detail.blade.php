@extends('layouts.main')
@section('content')
    <div class="ticket-detail">
        <div class="title">{{ $ticket->name }}</div>
        {{ $ticket->description }}
   

    Ulasan
    <div class="review">
    
        <div class="text">Ulasan</div>
        <ul>
        @foreach($reviews as $review)
            <li>
                <div class="name">{{ $review->user->name }}</div>
                {{ $review->review }}
            </li>
        @endforeach
        </ul>
        @auth
        <form method="post" action="/tickets/{{ $ticket->slug }}/review">
        @csrf
            <textarea name="review"></textarea>
            <button type="submit">Kirim</button>
        </form>
        @else
            <p> login untuk memberi ulasan </p>
        @endauth
    </div>
  
    <div class="bottom-price">
        <div>
            <div class="text">{{ $ticket->name }}</div>
            <div class="price">Rp {{ $ticket->price }}</div>
        </div>
        <a href="">Beli</a>
    </div>
@endsection


