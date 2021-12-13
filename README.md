# 2021-WebProgrammingExercise-PHP
2021Webプログラミング及び演習のPHPプログラム

## 第1回

- MAMPのインストール: [ダウンロードページ](https://www.mamp.info/en/downloads/)よりダウンロード・インストール
- `sample01-01.php`: PHPスクリプトの基本
- `sample01-02.php`: 画面に値を出力する
- `sample01-03.php`: 変数を使う
- `sample01-04.php`: 変数の型
- `sample01-05.php`: 変数を宣言する
- `sample01-06.php`: 定数を使う
- `sample01-07.php`: エスケープシーケンス
- `sample01-08.php`: 可変変数の使い方
- `sample01-09.php`: PHPとHTMLを組み合わせる
- `sample01-10.php`: HTMLに部分的にPHPを埋め込む
- `sample01-11.php`: 1行のコメントを記述する
- `sample01-12.php`: 複数行のコメントを記述する
- `sample01-13.php`: 処理を繰り返す(for)
- `sample01-14.php`: 処理を繰り返す(while)
- `sample01-15.php`: 処理を繰り返す(do)
- `sample01-16.php`: 処理を分岐する(if)
- `sample01-17.php`: 処理を分岐する(if else)
- `sample01-18.php`: HTMLを含む処理の分岐
- `sample01-19.php`: 条件によって代入する値を切り替える
- `sample01-20.php`: 処理を分岐する(比較演算子)
- `sample01-21.php`: 処理を分岐する(論理演算子)
- `sample01-22.php`: 処理を分岐する(switch)
- `sample01-23.php`: ループを強制的に抜ける
- `sample01-24.php`: スクリプトを直ちに終了する
- `sample01-25.php`: メッセージを表示してスクリプトを終了する
- `sample01-26.php`: エラーメッセージを無視するには?

## 第2回

### リソース

- `base.htm`: htmファイル共有部分
- `base.php`: phpファイル共通部分
- `images`: 画像ファイル格納用ディレクトリ

    ```
    images/
      ├── asf_logo_wide.gif
      ├── counter0.gif
      ├── counter1.gif
      ├── counter2.gif
      ├── counter3.gif
      ├── counter4.gif
      ├── counter5.gif
      ├── counter6.gif
      ├── counter7.gif
      ├── counter8.gif
      ├── counter9.gif
      ├── gihyo.gif
      ├── gihyo.png
      ├── image1.gif
      ├── image2.gif
      ├── image3.gif
      ├── image4.gif
      ├── image5.gif
      ├── image6.gif
      ├── image7.gif
      ├── image8.gif
      ├── image9.gif
      ├── mysql_100x52-64.gif
      ├── photo01.jpg
      ├── photo02.jpg
      ├── photo03.jpg
      ├── photo04.jpg
      ├── photo05.jpg
      ├── photo06.jpg
      ├── photo07.jpg
      ├── photo08.jpg
      ├── php.gif
      ├── upf_apache_pb02.gif
      ├── upf_photo07x2.jpg
      └── upf_photo08x2.jpg
    ```

### 基本的な計算処理

- `sample02-01.php`: 四則演算する
- `sample02-02.php`: 同じ変数に四則演算結果を代入する
- `sample02-03.php`: インクリメント・デクリメントする
- `sample02-04.php`: 数値をフォーマットする
- `sample02-05.php`: 絶対値を求める

### 小数点を扱う

- `sample02-06.php`: 小数点を四捨五入する
- `sample02-07.php`: 小数を切り捨てる
- `sample02-08.php`: 小数を切り上げる

### 乱数を扱う

- `sample02-09.php`: 乱数を扱う
- `sample02-10.php`: パスワードを自動生成する
- `sample02-11.php`: 画像をランダムに表示する
- `sample02-12.php`: 広告バナーをランダム表示する

### 最大値・最小値・べき乗・平方根を求める

- `sample02-13.php`: 最大値を求める
- `sample02-14.php`: 最小値を求める
- `sample02-15.php`: べき乗を求める
- `sample02-16.php`: 平方根を求める

### フォームからデータを受け取る

- `sample12-01.htm ・ sample12-01.php`: フォームのデータを受け取る(POST)
- `sample12-02.htm ・ sample12-02.php`: フォームのデータを受け取る(GET)
- `sample12-03.htm ・ sample12-03.php`: POST/GETどちらで送信されたか調べる
- `sample12-04.htm ・ sample12-04.php`: POST/GETの内容を変数で受け取る
- `sample12-05.php`: 自分自身のフォームデータを受け取る
- `sample12-06.htm ・　sample12-06.php`: パラメータ付きリンクを受け取る
- `sample12-07.php`: テキストボックスへの入力値を受け取る
- `sample12-08.php`: ラジオボタンの選択値を取得する
- `sample12-09.php`: チェックボックスのチェックの有無を取得する
- `sample12-10.php`: 複数のチェックボックスの状態を変数名で調べる
- `sample12-11.php`: 複数のテキストボックスの入力値を配列で調べる
- `sample12-12.php`: リストボックスの選択値を取得する
- `sample12-13.php`: 複数行テキスト領域への入力値を取得する
- `sample12-14.php`: クリックされたボタンを調べる

## 第3回

### リソース

- `base.htm`: htmファイル共通部分
- `base.php`: phpファイル共通部分
- `cssfile_1.css`: --+
- `cssfile_2.css`: --+-- `sample12-30.php`で利用するCSS
- `cssfile_3.css`: --+
- `images`: 画像ファイル格納用ディレクトリ

    ```
    images
    ├── upf_backdoor.php?.jpg
    ├── upf_partyparrot.gif
    ├── upf_photo01.jpg
    ├── upf_photo02.jpg
    ├── upf_photo03.jpg
    ├── upf_photo04.jpg
    ├── upf_photo05.jpg
    ├── upf_photo06.jpg
    ├── upf_photo07.jpg
    └── upf_photo08.jpg
    ```

- `index.htm`: 共通して利用するhtmファイル

### 受け取ったデータを確認・加工する

- `sample12-15.php`: HTMLタグを除去する
- `sample12-16.php`: HTMLの特殊文字を実体参照に置換する
- `sample12-17.php`: 改行タグを追加する
- `sample12-18.php`: エスケープ文字を除去する
- `sample12-19.php`: 受け取ったデータの妥当性を確認する
- `sample12-20.php`: 受け取ったデータの未入力を確認する
- `sample12-21.php`: 受け取ったデータを次ページに渡す
- `sample12-21-2.php`: `sample12-21.php`からの遷移先
- `sample12-22.php`: 受け取ったデータを数値として処理する
- `sample12-23.php`: URLエンコードされたデータを元に戻す
- `sample12-24.php`: 文字列をURLエンコードする

### 高度なフォーム処理

- `sample12-25.php`: ファイルをアップロードする
- `sample12-26.php`: 複数のファイルをまとめてアップロードする
- `sample12-27.php`: 別ページへ強制ジャンプさせる
- `sample12-28.php`: 検索エンジンサイトにキーワードを渡す
- `sample12-29.php`: フォントサイズを動的に切り替える
- `sample12-30.php`: ページのスタイル（CSS）を動的に切り替える
- `sample12-31.php`: 2つのリストボックスのリストを連動させる
- `sample12-32.php`: どのページから呼ばれたか確認する
- `sample12-33.php`: アクセスユーザのブラウザ情報を調べる
- `sample12-34.php`: ユーザ環境によって表示するページを切り替える
- `sample12-34_Cr.htm`: `sample12-34.php`のChrome用ページ
- `sample12-34_IE.htm`: `sample12-34.php`のInternet Explorer用ページ
- `sample12-34_NN.htm`: `sample12-34.php`のFirefox用ページ
- `sample12-34_Sf.htm`: `sample12-34.php`のSafari用ページ

### クッキーの基本操作

- `sample13-01.php`: クッキーにデータを保存する
- `sample13-02.php`: クッキーからデータを読み込む
- `sample13-03.php`: クッキーのデータを削除する

### クッキーの応用

- `sample13-04.php`: フォームへの前回入力値を自動入力する
- `sample13-05.php`: カートに入れる仕組みを作る（クッキー版）

### セッション処理の基本

- `sample14-01.php`: セッションを開始する
- `sample14-02.php`: セッション変数にデータを保存する
- `sample14-03.php`: セッション変数のデータを読み込む
- `sample14-04.php`: セッション変数を破棄する
- `sample14-05.php`: セッション変数が設定されているか調べる
- `sample14-06.php`: セッションを終了する
- `sample14-07.php`: セッション名を変更する
- `sample14-08.php`: セッションIDを変更する

### セッション処理の応用

- `sample14-09.php ・ sample14-09-2.php`: セッション変数を使ってユーザIDを使い回す
- `sample14-10.php ・ sample14-10-2.php`:  カートに入れる仕組みを作る（セッション版）

## 第4回

### リソース

- `my.conf`: 漢字コード(UTF-8mb4)を使用するための設定ファイル
- `bbs`: インターネット掲示板(データ保存先ファイル版)
- `bbs-db`: インターネット掲示板(データ保存先DB版)
- `rss`: RSSリーダー
- `todo`: ToDoリスト

```
04
├── my.conf
├── bbs
│   ├── bbs.php
│   ├── bbs_data
│   │   └── [datafiles...]
│   ├── smarty
│   ├── style.css
│   ├── templates
│   │   └── bbs.html
│   └── templates_c
│       └── [compiled file]
├── bbs-db
│   ├── bbs_mysql.php
│   ├── smarty
│   ├── style.css
│   ├── templates
│   │   └── bbs.html
│   └── templates_c
│       └── [compiled file]
├── rss
│   ├── rss_reader.php
│   └── style.css
└── todo
    ├── data
    │   └── todo.txt
    ├── smarty
    ├── style.css
    ├── templates
    │   └── todo.html
    ├── templates_c
    │   └── [compiled file]
    └── todo.php
```

### Configure

- `my.conf`を**/Applications/MAMP/conf/my.cnf**としてコピー
- 各`templates_c`ディレクトリのパーミッションを書き込み可能に変更

### Require

| Library | Version |
| --- | --- |
| Smarty | 3.1.33 |
