<!DOCTYPE html>
<!--posts側のindexです。掲示板画面です。-->
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
        <div class='evaluations'>
            <!--評価タグによる投稿の選別ボタン-->
            @foreach($evaluations as $evaluation)
                <a href="/posts/{{ $anime->id }}/{{ $evaluation->id }}">{{ $evaluation->tag }}</a>
            @endforeach
        </div>
        <div class='posts'>
            <!--掲示板本文-->
            <div class='post'>
            @foreach($posts as $post)
                <a href="">{{ $post->user->name }}</a>
                <p class='body'>{{ $post->body }}</p>
            @endforeach    
            </div>
        </div>
        <div class='store'>
            <!--投稿フォーム-->
            <form action="/posts/{{ $anime->id }}", method="POST">
                @csrf
                <div class='title'>
                    <h3 class='username'>{{ Auth::user()->name }}</h3>
                    <textarea name="post[body]" placeholder="投稿を記入"></textarea>
                </div>
                <div class='evaluations'>
                    <!--評価を選ぶ-->
                    @foreach($evaluations as $evaluation)
                        <button type="radio" name="evaluation" value="{{ $evaluation->id }}">{{ $evaluation->tag }}</button>
                    @endforeach
                </div>
                <button type="submit" value="store"/>
            </form>
        </div>
        <div class="footer">
            <!--ホームに戻る-->
            <a href="/">home</a>
        </div>
        
        </x-app-layout>
    </body>
</html>