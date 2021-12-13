<?php
// セッションを開始
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // セッション変数のデータを読み込み
    print $_SESSION[sesdata1] . "<br>";
    print $_SESSION[sesdata2] . "<br>";
    print $_SESSION[sesdata3] . "<br>";
    print $_SESSION[sesdata4] . "<br>";
    print $_SESSION[sesdata5] . "<br>";

    ?>
</body>

</html>