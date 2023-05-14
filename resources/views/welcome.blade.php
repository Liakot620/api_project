<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body class="antialiased">
        <h1>student view</h1>
        <hr>
        @foreach($students as $stu)
        <h4>
       ID: {{$stu->id}} ,
       Name:{{$stu->name}} ,
       City:{{$stu->city}} ,
       Fees: {{$stu->fees}}
        </h4>
        <br>
        @endforeach
        <h5>cope @right by liakot</h5>
    </body>
</html>
