@extends('layouts.app')
@section('content')
    <h2>Dettaglio utente</h2>
    <div class="utente">
        <h2>{{$user->name}}</h2>
        <h2>{{$user->email}}</h2>
    </div>
    <form action="{{route('users.destroy',$user->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="CANCELLA">
    </form>
    <h3>Post scritti da {{$user->name}}</h3>
    @foreach ($user->posts as $post)
        <div class="posts">
            <h3>Titolo:{{$post->title}}</h3>
            <p>Dettaglio Post:{{$post->body}}</p>
        </div>
    @endforeach
@endsection