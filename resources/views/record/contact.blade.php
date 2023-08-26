@extends('layout.layout')
@section('content')

<div class="antialiased" style="padding-left: 230px; padding-top: 10px;">
    <div id="map" style="height:600px; width:1200px;"></div>
<br>
    <form>
        <input type="text" name="address" value="大阪府大阪市西成区花園南1-12-14" id="address">
        <button type="button" id="button">検索</button>
    </form>

    <ul>
        <li>lat: <span id="lat"></span></li>
        <li>lng: <span id="lng"></span></li>
    </ul>


</div>
@endsection
