<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <br>
    <h4>Welcome {{$user->name}} !</h4>
    <h5>{{$user->email}}</h5>
    <h5>{{$user->role}}</h5>
</body>
</html>