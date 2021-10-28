@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
<div class="container">
    <div>
        <ul>
            @foreach ($movies as $movie)
            <li>
                <h2>Titolo: {{ $movie['title'] }}</h2>
                <h3>Titolo Originale: {{ $movie['original_title'] }}</h3>
                <p>Paese: {{ $movie['nationality'] }}</p>
                <p>data d'uscita: {{ $movie['date'] }}</p>
                <p>Voto: {{ $movie['vote'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</div>