<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Review;

class TicketController extends Controller
{
    public function index() {
        return view('ticket', [
            "tickets" => Ticket::all()
        ]);
    }

    public function show(Ticket $ticket) {
        return view('detail', [
            "ticket" => $ticket,
            "reviews" => Review::where('ticket_id', $ticket->id)->get()
        ]);
    }


    public function review(Request $request, Ticket $ticket)
    {
        $validatedData = $request->validate([
            'review' => 'required',
        ]);

        $validatedData['user_id'] = 1;
        $validatedData['ticket_id'] = $ticket->id;
        
    
        Review::create($validatedData);
        

        return back()->with('success', 'Ulasan telah ditambahkan!');
    }
}
