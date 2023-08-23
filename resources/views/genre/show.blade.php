@extends('layout.layout')
@section('content')

<div id="fh5co-main">

    <div class="fh5co-narrow-content">
        @foreach ($genres as $genre)   
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 flex-show">
                <h2 class="description-show-h2">{{$genre->name}}</h2>
                <a href="/edit/{{$genre->id}}" class="description-edit-a">編集</a>
                <form action="/destroy/{{$genre->id}}" method="POST">
                    @csrf
                    <button type="submit" class="description-button">削除</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 flex-show">
                <img src="{{ asset('/storage/app/'.$genre->img_path) }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive img-show">
                <h3 class="description-show">{!! nl2br(e($genre->description)) !!}</h3>
            </div>
            <div class="clearfix visible-md-block"></div>
        @endforeach
        </div>
    </div>
</div>

@endsection
