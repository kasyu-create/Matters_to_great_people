@extends('layout.layout')
@section('content')

    <form method="post" action="/update/{{$genre->id}}" class="create-genre" enctype="multipart/form-data">
    @csrf
    <h2 class="edit-genre-h2">ジャンル編集</h2>
            <input class="create-genre-input" style="height:70px;" type="text" placeholder="ジャンル名" name="name" value="{{$genre->name}}" required>

            <textarea class="create-genre-input" style="height:350px;" type="text" placeholder="説明" name="description">{{$genre->description}}</textarea>

            <input id="image" class="create-genre-input" type="file" name="image">


            <input class="create-genre-input" type="submit" value="送信">
    </form>
@endsection
