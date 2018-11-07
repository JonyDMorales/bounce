<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Calendar;

class EventsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $events = [];
        $events[] = Calendar::event(
            'Dia del amor',
            true,
            new \DateTime('2018-11-02'),
            new \DateTime('2018-11-12'.' +1 day'),
            null,
            // Add color and link on event
            [
                'color' => '#ff0000',
                'url' => 'pass here url and any route',
            ]
        );
        $calendar = Calendar::addEvents($events)->setOptions(['views' => [
            'month' => [
                'titleFormat' => 'MMMM yyyy'
            ]
        ]]);

        return view('home')
            ->with('calendar', $calendar);
    }

    public function insertEvent(Request $request){
        $event = new Events();
        $event->event_name = 'Prueba';
        $event->start_date = '2018-11-02';
        $event->end_date = '2018-11-02';
        if($event->save()){
            return view('home');
        }
    }
}
