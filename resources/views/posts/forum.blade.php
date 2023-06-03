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
            
            <h1>アニメ名</h1>
        <div class='posts'>
            <!--掲示板本文-->
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='username'>ユーザー名</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
        <div class='create'>
            <!--投稿フォーム-->
            <form action="/posts",method="POST">
                @csrf
                <div class='title'>
                    <h3 class='username'>ユーザー名</h3>
                    <texiarea name="post[body]" placeholder="投稿を記入"></texiarea>
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