<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Search by Track Name</h1>
    <form action="{{url ('/search-record')}}" method="post">
      {{ csrf_field() }}
        <input type="text" name="name"/>
        <input type="submit" value="Search" />
    </form>
</body>
</html>