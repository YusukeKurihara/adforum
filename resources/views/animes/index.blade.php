<!DOCTYPE html>
<!--animeのindexです。検索画面です-->
<html>
    <head>
        <title>search</title>
        <meta charset="utf-8">
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                search
            </x-slot>
        
        <div>
        <!--入力フォーム-->
            <form action="", method="GET">
                @csrf
                <input type="text" name="keyword" value="{{ $keyword }}">
                <input type="submit" value="検索">
            </form>
        </div>
        <div>
        <!--検索の出力結果表示-->
            @forelse($animes as $anime)
                <tr>
                    <td><a href="/posts/{{ $anime->id }}">{{ $anime->title }}</td>
                </tr>
            @empty
            <td>No posts!!</td>
            @endforelse
        </div>
        <div>
        <!--アニメ掲示板作成フォームへ-->
            <a href="/animestore">新しい掲示板を作る</a>
        </div>
        </x-app-layout>
    </body>
</html>