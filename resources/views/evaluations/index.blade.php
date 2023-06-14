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
            
        <h1 class='title'>アニメgood</h1>
        <div class='posts'>
            <!--掲示板本文-->
            <div class='post'>
            @foreach($evaluations as $evaluation)
                <p class='body'>{{ $evaluation->tag }}</p>
            @endforeach    
            </div>
        </div>
        
            </x-app-layout>
    </body>
</html>