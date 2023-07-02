<!DOCTYPE html>
<!--。検索画面です-->
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
        <!--検索ワード入力フォーム-->
            <form action="", method="GET">
                @csrf
                <input type="text" name="keyword" value="{{ $keyword }}">
                <input type="submit" value="ワード検索">
            </form>
        </div>
        <div>
            <!--年度検索入力フォーム-->
            <form action="", method="GET">
                @csrf
                <select name="year">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                </select>
                <select name="season">
                    <option value="春">春</option>
                    <option value="夏">夏</option>
                    <option value="秋">秋</option>
                    <option valut="冬">冬</option>
                </select>
                <input type="submit" value="年数・シーズン検索">
            </form>
        </div>
        <div>
        <!--検索の出力結果表示-->
            @forelse($animes as $anime)
                   <tr>
                    <td><a href="/posts/{{ $anime->id }}" name="post[anime_id]" value="{{ $anime->id }}">{{ $anime->title }}</td>
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