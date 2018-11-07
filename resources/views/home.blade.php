@extends('layouts.app')

@section('content')
<div class="container">

    {!! $calendar->calendar() !!}

</div>
@endsection
@section('bottom_javascript')
    {!! $calendar->script() !!}
@endsection