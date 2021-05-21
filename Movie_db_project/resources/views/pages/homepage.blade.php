@extends('layouts.main-layout')
@section('title')
    Movies HomePage
@endsection
@section('content')
    <h2>Tutti i film</h2>
    <ul>
        @foreach ($movies as $movie)
            <a href="{{route('movie',$movie -> id)}}">
                <li class="card">
                    <p>{{$movie -> id}}.</p>
                    <p>Titolo: {{$movie -> title}}</p>
                </li>
            </a>
        @endforeach
    </ul>
@endsection