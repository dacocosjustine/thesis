<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Auth\Events\Validated;

class CalendarController extends Controller
{
    public function index() {
        $events = array();
        $bookings = Event::all();
        
        foreach($bookings as $booking) {
            $events[] = [
                'title' => $booking->title,
                'start' => $booking->start_date,
                'end' => $booking->end_date
            ];
        }
        return view('Activities.calendar', ['events' => $events]);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $booking = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return response()->json($booking);

    }
}
