<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // カウント用の変数を1に初期設定
    $cnt = 1;

    // 変数が10以下の間ループを繰り返し
    do {
        print $cnt;
        print ",";
        $cnt++;
    } while ($cnt <= 10);

    ?>
</body>

</html>