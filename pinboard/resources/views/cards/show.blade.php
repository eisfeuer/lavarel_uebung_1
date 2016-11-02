@extends('layout')

@section('content')
<h1>moin</h1>
    Cards Show

    <ul>
        @foreach($cards as $card)
            <li>{{ $card->title }}</li>
        @endforeach
    </ul>

@stop
