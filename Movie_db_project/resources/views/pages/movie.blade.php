@extends('layouts.main-layout')
@section('title')
    {{$movie -> title}}
@endsection
@section('content')

    <h2>{{$movie -> title}}</h2>
    <div class="card">
        <h3>Titolo: {{$movie -> title}}</h3>
        <div>Original title: {{$movie -> original_title}}</div>
        <div>Nationality: {{$movie -> nationality}}</div>
        <div>Date: {{$movie -> date}}</div>
        <div>Ratings: {{$movie -> vote}}</div>
    </div>
    
@endsection