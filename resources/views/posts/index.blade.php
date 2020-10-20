@extends('layouts.app')
@section('content')

@if (session('status'))
    <h1>{{session('status')}}</h1>
@endif

    @foreach ($posts as $post)
        <h2>{{$post->id}}</h2>
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
    @endforeach

@endsection