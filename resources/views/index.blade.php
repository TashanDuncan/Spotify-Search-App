@extends('layout')

@section('content')
<div class="container text-center">

    <h1>Spotify search</h1>
    <p>How would you like to search?</p>
    <div class="d-flex justify-content-center">    
        <a href="bytrackname" class="btn btn-primary mx-1"> Track Name</a>
        <a href="byartist" class="btn btn-primary mx-1">Artist</a>
        <a href="byalbum" class="btn btn-primary mx-1">Album</a>
        <a href="byplaylist" class="btn btn-primary mx-1">Playlist</a>
    </div>

</div>
@stop
