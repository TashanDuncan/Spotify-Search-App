@extends('layout')
@section('content')
@extends('results/resultsLayout')
    <div class="container d-flex my-4  flex-wrap justify-content-center">
    @foreach($result["playlists"]["items"] as $data)
    <div class="card my-4 mx-2" style="width: 18rem;">
    <a href="{{$data["external_urls"]["spotify"]}}"><img class="card-img-top" src="{{$data["images"][0]["url"]}}"/></a>
        <div class="card-body">
        <h5 class="card-title">{{$data["name"]}}</h5>
        <ul class="list-unstyled">
            <li><strong>Playlist Owner:</strong> {{$data["owner"]["display_name"]}}</li>
        </ul>
        </div>
    </div>
    @endforeach
    </div>
@stop
