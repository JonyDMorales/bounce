@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            {!! $calendar->calendar() !!}


    </div>
</div>
@endsection
@section('bottom_javascript')
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
    {!! $calendar->script() !!}
@endsection