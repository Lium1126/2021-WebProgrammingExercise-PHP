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

- `base.htm`: 全htmファイル共有部分
- `base.php`: 全phpファイル共通部分
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
