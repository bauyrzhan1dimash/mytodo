<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>create posts </title>
</head>
<body>
    <a href="{{ route('posts.index') }}">Go to Create Page</a>


    <form action="{{ route('posts.update',$post->id) }}"method="post">
        @csrf
        @method('PUT')
        Title: <input type="text" name="title"value="{{$post->title}}">
        category:
<br>
        <select name="category_id">
            @foreach($categories as $cat)
                <option @if($cat->id == $post->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <br>
        text:<textarea name= "content" cols="30" rows="10">{{$post->content}}</textarea>
        <button type="submit">Update post</button>
    </form>
</body>
</html>
