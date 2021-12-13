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
        print ",";
    }
    print "<br>";

    // 10から1まで2ずつ減らすループ
    for ($cnt = 10; $cnt >= 1; $cnt = $cnt - 2) {
        print $cnt;
        print ",";
    }

    ?>
</body>

</html>