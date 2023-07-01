<!DOCTYPE html>
<!--commentsのindexです。掲示板の投稿にコメントを投稿できます。-->
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
            
        <div class='posts'>
            <div class='post'>
                <a href="">{{ $post->user->name }}</a>
                <p class='body'>{{ $post->body }}</p>
            </div>
            <div class='comment'>
                @foreach($comments as $comment)
                <a href="">{{ $comment->user->name }}</a>
                <p class='body'>{{ $comment->body }}</p>
                @endforeach
            </div>
        </div>
        
        <div class="footer">
            <!--ホームに戻る-->
            <a href="/">home</a>
        </div>
        
        </x-app-layout>
    </body>
</html>