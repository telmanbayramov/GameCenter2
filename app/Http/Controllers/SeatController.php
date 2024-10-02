<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    public function create($branch_id)
    {
        return view('seats.create', compact('branch_id'));
    }

    public function store(Request $request)
    {
        // Masa oluşturma işlemi
    }

    public function show($id)
    {
        $seat = Seat::find($id);
        // Burada doluluk durumu ve promosyon bilgilerini al
        return view('seats.show', compact('seat'));
    }
}
