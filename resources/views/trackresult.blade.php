@extends('layout')
@section('content')
    <div class="container d-flex my-4  flex-wrap justify-content-center">
    @foreach($result["tracks"]["items"] as $data)
    <div class="card my-4 mx-2" style="width: 18rem;">
    <a href="{{$data["external_urls"]["spotify"]}}"><img class="card-img-top" src="{{$data["album"]["images"][1]["url"]}}"/></a>
        <div class="card-body">
        <h5 class="card-title">{{$data["name"]}}</h5>
        <ul class="list-unstyled">
            <li><strong>Artist:</strong> {{$data["artists"][0]["name"]}}</li>
            <li><strong>Album name:</strong> {{$data["album"]["name"]}}</li>
        </ul>
        </div>
    </div>
    @endforeach
    </div>
@stop
