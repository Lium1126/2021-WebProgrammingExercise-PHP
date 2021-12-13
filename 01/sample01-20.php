<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // 1~10までのループ
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $cnt;
        if ($cnt == 5) {
            // 変数値が5なら●マークを追加
            print "●";
        }
        if ($cnt > 5) {
            // 変数値が5より大きければ▼マークを追加
            print "▼";
        }
        if ($cnt >= 5) {
            // 変数値が5以上なら▽マークを追加
            print "▽";
        }
        if ($cnt < 3) {
            // 変数値が3より小さければ■マークを追加
            print "■";
        }
        if ($cnt <= 3) {
            // 変数値が3以下なら□マークを追加
            print "□";
        }
        if ($cnt <> 7) {
            // 変数値が7でなければ★マークを追加
            print "★";
        }
        print "<br>";
    }

    ?>
</body>

</html>