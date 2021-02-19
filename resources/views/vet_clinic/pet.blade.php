<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$owner->first_name}} {{$owner->surname}}</h1>
    
    <h2>Pets</h2>

    <ul>
        @foreach ($pets as $pet) 

        <li>
        {{$pet->name}}<br><br>
        {{$pet->species}}<br><br>
        {{$pet->breed}}<br><br>
        {{$pet->age}}<br><br>
        {{$pet->weight}}<br>
       <!-- <img src="{{'http://www.veterinary-clinic.test/'.$pet->photo}}" alt=""> -->
         <img src="{{asset($pet->photo)}}" alt="">
        </li>
        @endforeach
    
    </ul>

</body>
</html>