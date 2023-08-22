@extends('layout.layout')
@section('content')


<form method="post" action="/store" class="create-genre" enctype="multipart/form-data">
@csrf
  <input class="create-genre-input" type="text" placeholder="ジャンル名" name="name" required>

  <input id="image" class="create-genre-input" type="file" name="image" required>


  <input class="create-genre-input" type="submit" value="送信">

</form>

@endsection
