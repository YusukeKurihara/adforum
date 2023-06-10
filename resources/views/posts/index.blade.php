<!DOCTYPE html>
<html>
    <head>
        <title>forum</title>
        <meta charset="utf-8">
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                forum
            </x-slot>
            
        <h1 class='title'>
            <a href="/posts/{{ $anime->id }}">{{ $anime->title }}</a>
        </h1>
        <div class='posts'>
            <!--掲示板本文-->
            <div class='post'>
            @foreach($posts as $post)
                <a href="">{{ $post->user->name }}</a>
                <p class='body'>{{ $post->body }}</p>
            @endforeach    
            </div>
        </div>
        <div class='create'>
            <!--投稿フォーム-->
            <form action="/posts", method="POST">
                @csrf
                <div class='title'>
                    <h3 class='username'>{{ Auth::user()->name }}</h3>
                    <textarea name="post[body]" placeholder="投稿を記入"></textarea>
                </div>
                <input type="submit" value="store"/>
            </form>
        </div>
        <div class="footer">
            <!--ホームに戻る-->
            <a href="/">home</a>
        </div>
        
        </x-app-layout>
    </body>
</html>