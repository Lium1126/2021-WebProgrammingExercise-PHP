<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // 数値を4桁ごとにカンマ区切り
    print number_format(123456789);
    print "<br>";

    // 小数第3位まで出力(4桁目で四捨五入)
    print number_format(1.23456789, 3);
    print "<br>";

    ?>
</body>

</html>