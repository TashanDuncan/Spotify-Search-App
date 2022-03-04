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
    <img src="{{$data["album"]["images"][0]["url"]}}"/>
    @endforeach
</body>
</html>