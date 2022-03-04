<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search result</title>
</head>
<body>
    @foreach($result["tracks"]["items"] as $data)
    <div>
    <a href="{{$data["external_urls"]["spotify"]}}"><img src="{{$data["album"]["images"][1]["url"]}}"/></a>
    <p>Track Name: {{$data["name"]}} *play*</p> 
    <p>Artist: {{$data["artists"][0]["name"]}}</p>
    <p>Album name: {{$data["album"]["name"]}}</p>
    </div>
    @endforeach
</body>
</html>