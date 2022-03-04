@extends('layout')

@section('content')
    
<div class="container text-center">
    <img src="{{URL('images/Spotify_Logo_CMYK_Green.png')}}" alt="spotify logo" class="img-fluid" width="500">
    <h1>Spotify Search Tool</h1>
    <p>How would you like to search?</p>
    <form class="d-flex justify-content-center" action="{{url ('/search')}}" method="POST"> 
        {{ csrf_field() }}
        <button name="lookup" value="track"href="bytrackname" class="btn btn-primary mx-1"> Track Name</button>
        <button name="lookup" value="artist" class="btn btn-primary mx-1">Artist</button>
        <button name="lookup" value="album" class="btn btn-primary mx-1">Album</button>
        <button name="lookup" value="playlist" class="btn btn-primary mx-1">Playlist</button>
    </form>

</div>
@stop
