<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <style>
               *{
                    font-family: 'Staatliches', cursive;
               }
               nav{
                    background-color: #ee164f;
               }
          </style>
     <title>@yield('title')</title>
</head>

<body>
     <div class="container d-flex justify-content-center">
          @include('layouts.navigation')
     </div>

     <div class="container">
          @yield('content')
     </div>
</body>

</html>