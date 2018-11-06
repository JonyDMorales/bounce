<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Calendar;

class EventsController extends Controller
{
    public function index(){
        $events = [];
        //$data = Event::all();
        for($i = 0; $i < 5; $i++){
            $events[] = Calendar::event(
                'Holiday',
                true,
                new \DateTime('2018-11-02'),
                new \DateTime('2018-11-30'),
                null,
                // Add color and link on event
                [
                    'color' => '#ff0000'
                ]
            );
        }

        $calendar = Calendar::addEvents($events);
        return view('home', compact('calendar'));
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
