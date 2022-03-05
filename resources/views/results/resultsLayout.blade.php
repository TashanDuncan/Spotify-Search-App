<div class="container text-center">
    <a href="{{URL('')}}" class="btn btn-primary">Back to Home</a>
    <form class="d-flex justify-content-center my-2" action="{{url ('/search')}}" method="POST"> 
        {{ csrf_field() }}
        <button name="lookup" value="track"href="bytrackname" class="btn btn-primary mx-1"> Track Name</button>
        <button name="lookup" value="artist" class="btn btn-primary mx-1">Artist</button>
        <button name="lookup" value="album" class="btn btn-primary mx-1">Album</button>
        <button name="lookup" value="playlist" class="btn btn-primary mx-1">Playlist</button>
    </form>
</div>