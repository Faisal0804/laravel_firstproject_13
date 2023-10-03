<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
   
    <title>@yield("title")</title>
</head>
<body>
@include("user.layout.header")
   
@yield("content")


<link href="{{asset('js/bootstrap.min.js')}}" />
<link href="{{asset('js/popper.min.js')}}"  />
</body>
</html>