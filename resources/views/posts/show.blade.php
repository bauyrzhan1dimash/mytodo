<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>all posts </title>
</head>
<body>

    <a href="{{ route('posts.index') }}">Go to index Page</a>



    <h3>{{$post->titile}}</h3>
    <p>{{$post->content}}</p>

    <a href="{{route('posts.edit',$post->id)}}">Edit</a>


    </body>
</html>
