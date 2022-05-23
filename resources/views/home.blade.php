@extends('master')

@section('title', 'HomePage')

@section('content')
    @foreach ($movies as $movie)
        {{ $movie->title }}<br>
    @endforeach
@endsection
