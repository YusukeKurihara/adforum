<!DOCTYPE html>
<!--evaluationsのほうのindex.blade.phpです。各評価タグに記載された投稿のみ表示します。-->
<html>
    <head>
        <title>evaluation</title>
        <meta charset="utf-8">
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                evaluation
            </x-slot>
            
        <h1 class='title'>
            <a href="/posts/{{ $anime->id }}/{{ $evaluation->id }}">{{ $anime->title }}</a>
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
        <div class="footer">
            <!--掲示板に戻る-->
            <a href="/posts/{{ $anime->id }}">戻る</a>
        </div>
            </x-app-layout>
    </body>
</html>