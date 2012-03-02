[ja]

家計簿ライクな何か README
=========================

CakePHPを利用して作った家計簿ライクな何かです。
このドキュメントでは使い方をテキトーに記述していきます。

要求環境
--------

基本的にCakePHP2.0.5が動作する環境であれば大丈夫なはずです。

* PHP 5.2.6 or higher
* Apache with mod_rewrite (推奨)
* いずれかのデータベースエンジン（対応したPDO拡張が必要）
** MySQL 4 or higher
** PostgreSQL
** MSSQL
** SQLite

インストール方法
----------------

公開するディレクトリに展開して下さい。
展開したディレクトリのapp/tmp以下に書き込み権限を付与して下さい。
app/Config/core.php 187行目あたりにあるSecurity.saltとSecurity.cipherSeedの値を適当に変更します。
app/Config/database.php.defaultをdatabase.phpにリネームして、データベースエンジンの設定を変更して下さい。

ライセンス
----------

本家CakePHP同様、MITライセンスの元にライセンスされています。
開発途中である為ライセンス文が記載されていないファイルがありますが、察して下さい。

その他
------

作者に連絡を取りたい場合、Twitter(@pg_bis5)をご利用下さい。
DMで連絡したい場合はその旨をMentionで送って下さい。24時間以内を目標にフォローさせていただきます。

[/ja]
[en]

Account-book like System
========================

(skip)

[/en]
