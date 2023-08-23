@extends('layout.layout')
@section('content')

<div id="fh5co-main">

    <div class="fh5co-narrow-content">
        <!-- <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">ジャンル　　　　　　　　　　　　<a href="/create">新規作成</a></h2> -->
        <div class="row animate-box" data-animate-effect="fadeInLeft">
        @foreach ($genres as $genre)   
           
                <h2 class="description-show-h2">{{$genre->name}}</h3>
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
