<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
     public function index()
    {
        return view('reservations.index'); // Rezervasyonların listeleneceği bir view döndürüyor.
    }
}
