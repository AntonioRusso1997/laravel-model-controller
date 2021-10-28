@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
<div class="container">
    <div class="movies-box">        
        @foreach ($movies as $movie)
        
        <div class="card">
            <a href="{{ route('detail-page', [ 'id' => $movie['id']]) }}">
                <img src="{{ $movie['path'] }}" alt="">
                <div class="text-box">
                    <h2>{{ $movie['title'] }}</h2>
                </div>
                <div class="card-hover">
                    <span>
                        <i class="fas fa-hand-pointer"></i> INFO
                    </span>
                </div>
            </a>
        </div>
        @endforeach        
    </div>
</div>
@endsection