<!DOCTYPE html>
<!--アニメの掲示板を新しく製作することができます。-->
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
        <h1>新掲示板作成フォーム</h1>
        <form action="/animestore", method="POST">
            @csrf
            <input type="text" name="anime[title]"/>
            <textarea name="anime[summary]"></textarea>
            <select name="anime[year]">
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select>
            <select name="anime[season]">
                <option>春</option>
                <option>夏</option>
                <option>秋</option>
                <option>冬</option>
            </select>
            <select name="anime[category_id]">
                <option value="1">変身ヒロイン</option>
                <option value="2">検証用</option>
            </select>
            <input type="submit" value="store"/>
        </form>
        
        </x-app-layout>
    </body>
</html>