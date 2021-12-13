<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // 例1:10回の加算ループ
    $data = 0;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print ++$data;
        print ",";
    }
    print "<br>";

    // 例2:10回の加算ループ
    $data = 0;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $data++;
        print ",";
    }
    print "<br>";

    // 例3:10回の減算ループ
    $data = 10;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $data--;
        print ",";
    }
    print "<br>";

    ?>
</body>

</html>