<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    $data = 1254.56789;

    // 小数点以下を切り捨て
    print floor($data);
    print "<br>";

    // 少数第2位より下を切り捨て
    print floor($data * 100) / 100;
    print "<br>";

    // 百の位より下を切り捨て
    print floor($data / 100) * 100;
    print "<br>";

    ?>
</body>

</html>