<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Owners</title>
</head>
<body>
    <h1>List of Pet Owners</h1>

    <ul>
        @foreach ($owners as $owner)

            <li><a href="{{action('IndexController@show', $owner->id)}}">{{$owner->first_name}} {{$owner->surname}}</a></li> {{--always prepares the correct url in connection to controller--}}
        @endforeach
    </ul>
    
</body>
</html>