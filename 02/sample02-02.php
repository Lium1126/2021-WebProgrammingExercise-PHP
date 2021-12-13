<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $result = 0;    // 初期化

    // 足し算
    $result += 5;   // 0+5=5が計算される
    print $result;
    print "<br>";

    // 引き算
    $result -= 3;   // 5-3=2が計算される
    print $result;
    print "<br>";

    // 掛け算
    $result *= 10;  // 2×10=20が計算される
    print $result;
    print "<br>";

    // 割り算
    $result /= 2;   // 20÷2=10が計算される
    print $result;
    print "<br>";

    // 余り
    $result %= 4;   // 10÷4の余り=2が計算される
    print $result;
    print "<br>";

    ?>
</body>

</html>