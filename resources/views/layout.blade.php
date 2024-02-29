<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>@yield('title') page</title>
    <link rel="stylesheet" href="{{url('css/bloge.css')}}">
</head>
<body>
    <div class="nav"> 
        <a href="{{route('home.home')}}">home</a>
        <a href="{{route('home.about')}}">about</a>
        <a href="{{route('blogs.index')}}">bloges</a>
       
    </div>

    <div>
        @yield('content')
    </div>
</body>
</html> 