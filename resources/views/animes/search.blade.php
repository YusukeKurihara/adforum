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
            <!--検索の出力結果表示-->
                @forelse($animes as $anime)
                <tr>
                    <td><a href="/search/1">{{ $anime->title }}</td>
                </tr>
                @empty
                <td>No posts!!</td>
                @endforelse
            </div>
        
        </x-app-layout>
    </body>
</html>