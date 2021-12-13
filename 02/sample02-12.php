<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // バナーの画像ファイル名とリンク先を配列に設定
    $banner[1][0] = "http://www.gihyo.co.jp/indexJ.html";
    $banner[1][1] = "gihyo.gif";
    $banner[2][0] = "http://www.apache.org/";
    $banner[2][1] = "asf_logo_wide.gif";
    $banner[3][0] = "http://www.php.net/";
    $banner[3][1] = "php.gif";
    $banner[4][0] = "http://www.mysql.com/";
    $banner[4][1] = "mysql_100x52-64.gif";

    // 乱数ジェネレータを初期化
    srand(microtime() * 1000000);

    // 1~4(用意されたバナーの数)の乱数を生成
    $data = rand(1, 4);

    // 生成された乱数からバナー画像とリンク先のHTMLを組み立て
    $html = "<A href='" . $banner[$data][0] . "'>" .
        "<IMG src='images/" . $banner[$data][1] . "'></A>";

    // HTMLを出力
    print $html;

    ?>
</body>

</html>