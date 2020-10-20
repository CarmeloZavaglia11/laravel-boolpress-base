@extends('layouts.app')
@section('content')

<form action="{{route('posts.store')}}" method="post">
    @csrf
    @method('POST')
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Titolo.." id="title">
    <label for="body">Contenuto</label>
    <input type="text" name="body" placeholder="Contenuto.." id="body">
    <input type="submit" value="Invia">
</form>

@endsection