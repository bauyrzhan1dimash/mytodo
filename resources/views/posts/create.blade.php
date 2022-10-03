<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>create a posts </title>
</head>
<body>
    <a href="{{ route('posts.index') }}">Go to Create Page</a>


    <form action="{{ route('posts.store') }}"method="post">
        @csrf
        
        category:
        <select name="category_id">
            @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>

        Title: <input type="text" name="title"> <br>
        Content:<textarea name= "content" cols="30" rows="10"></textarea>
        <button type="submit">save post</button>
    </form>
</body>
</html>
