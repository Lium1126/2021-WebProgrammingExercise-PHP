<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $data1 = 128;
    $data2 = -256;

    // data1の絶対値を出力
    print abs($data1);
    print "<br>";

    // data2の絶対値を出力
    print abs($data2);
    print "<br>";

    // 値を常にマイナス化して出力
    print abs($data1) * -1;
    print "<br>";
    print abs($data2) * -1;
    print "<br>";

    ?>
</body>

</html>