<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $data = 3;

    // 1~10までのループ
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $cnt;
        if ($cnt <= 5 and $cnt <= $data) {
            // 変数値が5以下でかつ$data以下なら●マークを追加
            print "●";
        }
        if ($cnt >= 8 or $cnt <= $data) {
            // 変数値が8以上または$data以下なら○マークを追加
            print "○";
        }
        if ($cnt >= 8 and $cnt <= 10) {
            // 変数値が8~10の間なら▼マークを追加
            print "▼";
        }
        if (!($cnt >= 8 and $cnt <= 10)) {
            // 変数値が8~10の間でなければ▽マークを追加
            print "▽";
        }
        print "<br>";
    }

    ?>
</body>

</html>