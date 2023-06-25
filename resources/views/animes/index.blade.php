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
        <!--年、シーズンによる検索-->
            <form action="", method="GET">
                @csrf
                <input type="submit" name="year" value="{{ $anime->year }}">
            </form>
        </div>
        <div>
        <!--検索の出力結果表示-->
            @forelse($animes as $anime)
                <tr>
                    <td><a href="/search">{{ $anime->title }}</td>
                </tr>
            @empty
            <td>No posts!!</td>
            @endforelse
        </div>
        </x-app-layout>
    </body>
</html>