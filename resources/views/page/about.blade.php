<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Laravel | About</title>
</head>
<body>
    <div class="jumbotron">

        <h1 class="display-4 text-center">
            About Demo
        
        </h1>

        <ul class="nav justify-content-center">

            <li class="nav-item">
                <a class="btn btn-light nav-link" href="{{url('/')}}">Home</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-light nav-link" href="{{url('/profile')}}">Profile</a>
            </li>
            <li class="nav-item">
                <a href="" class="btn btn-light nav-link active">About</a>
            </li>

        </ul>
            
            
            
    </div>  
</body>
</html>