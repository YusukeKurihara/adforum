<h1 align="center">アニメ感想掲示板</h1>

##  制作背景
私はアニメが好きで、見たアニメをほかの人がどう感じているのかを知るために、TwitterなどのSNSをよく閲覧します。<br><br>
その時、Twitterでは「面白かった」などの肯定的な感想と「つまらなかった」という感想が、混合した状態で流れてきます。そのため、肯定的な感想を見たいのに否定的な感想を見ることを避けられません。否定的な意見を見てしまうと、「面白い」と思って見ていたアニメもつまらなく感じてしまいます。<br><br>
そこで、肯定的な意見と否定的な意見を分けて表示する掲示板が必要だと感じました。

##  概要
アニメの感想を書ける掲示板です。投稿にタグをつけることで、感想が「肯定的」か「否定的」かで投稿を分けることができます。

##  開発環境
<b>使用言語：</b><br>
- PHP
- HTML

<b>環境：</b><br>
- Laravel(ver.9)
- AWS(EC2＋Cloud9)
- MySQL(MariaDB)
- Github

<b>デプロイ：</b><br>
- Heroku

##  機能
・検索機能<br>
掲示板を検索できます。アニメ名入力によるワード検索と、アニメの放送年度を検索する方法が使えます。<br>
・投稿閲覧機能<br>
掲示板に寄せられた投稿を閲覧することができます。投稿の内容（肯定的・否定的）ごとに、投稿を分けて表示することができます。<br>
・投稿機能<br>
投稿をすることができます。投稿の際には、その内容が肯定的か否定的か選んで、タグをつけてもらいます。<br>
・コメント機能<br>
掲示板に寄せられた投稿に、コメントを書くことができます。<br>
・新規掲示板作成機能<br>
新しい掲示板を作成できます。アニメ名、アニメの概要、放送年度、放送シーズンを入力します。<br>

##  こだわり
<b>肯定的・否定的と内容ごとに分けて表示できる投稿内容</b><br>
掲示板の目玉として、掲示板に寄せられた投稿を分けて表示できるようにした。投稿者は、投稿時にその投稿が肯定的、否定的のどちらの内容かを選び、その結果によって投稿が分けられる仕組みとなっている。
<br><br>
<b>ワード検索も年度検索もできる検索機能
</b><br>
アニメを検索する際には、名前でも検索するが、アニメが放送された年度、シーズンでも検索する。そのため、検索はワード検索も、年度検索もできるようにした。特に、年度検索は、表記ゆれによる検索漏れがないように、掲示板を投稿する際にプルダウンメニューによる選択で表記ゆれが起きないようにした。<br><br>

##  今後の計画
- CSSによるデザインの工夫
- 管理者機能の追加
