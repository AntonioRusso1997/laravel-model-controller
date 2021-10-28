@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
<div class="container">
    <div class="info-box">        
        <h1 class="info-title">{{$movie['title']}}</h1>
        <img class="info-img" src="{{$movie['path']}}" alt="{{$movie['title']}} poster">
        <div class="info-text-wrap">
            <div class="left-box">
                <p>Titolo originale: <span>{{ $movie['original_title'] }}</span></p>
                <p>Lingua: <span>{{ $movie['nationality'] }}</span></p>
                <p>Data di uscita: <span>{{ $movie['date'] }}</span></p>
                <p>Voto: <span>{{ $movie['vote'] }}</span></p>
            </div>
            <div class="right-box">
                <h3>Trama:</h3>
                <p>{{ $movie['plot'] }}</p>
            </div>
        </div>
    </div>
@endsection