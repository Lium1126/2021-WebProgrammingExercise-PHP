<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if (isset($_GET[inputdata])) {
        // inputdata変数が定義されているおき
        // データを受け取り
        $html = $_GET[inputdata] . "<br>";
    } else {
        // はじめて呼び出されたとき
        // パラメータ部分の文字列を設定
        $prm = "ピーエッチピーを使ってWebプログラミング！";
        // 文字列をURLエンコードしてリンク全体を組み立て
        $html = "<a href='" . $_SERVER[PHP_SELF] . "?inputdata=" . urldecode($prm) . "'>" .
            "ここをクリックしてください！</a>";
    }

    ?>

    <?= $html ?>

</body>

</html>