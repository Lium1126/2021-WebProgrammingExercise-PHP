<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $data = 1254.56789;

    // 小数点以下を四捨五入して整数かされた値を出力
    print round($data);
    print "<br>";

    // 少数第2位を四捨五入
    print round($data * 100) / 100;
    print "<br>";

    // 少数第4位を四捨五入
    print round($data * 10000) / 10000;
    print "<br>";

    // 百の位を四捨五入
    print round($data / 100) * 100;
    print "<br>";

    ?>
</body>

</html>