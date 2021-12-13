<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $data1 = "Hello, world!";
    $data2 = 10;                    // 文字列型
    $data3 = 0xa;                   // 整数型(16進数)
    $data4 = 1.545;                 // 浮動小数点数型
    $data5 = True;                  // 論理型
    $data6[0] = "Hello, world!";    // 配列型

    print $data1;
    print "<br>";
    print $data2;
    print "<br>";
    print $data3;
    print "<br>";
    print $data4;
    print "<br>";
    print $data5;
    print "<br>";
    print $data6[0];

    ?>
</body>

</html>