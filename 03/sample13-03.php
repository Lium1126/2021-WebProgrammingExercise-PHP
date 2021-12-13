<?php
// クッキーを削除
setcookie("mycookiedata");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // クッキーを読み込み
    if (strlen($_COOKIE[mycookiedata]) == 0) {
        // クッキーにデータがないとき
        print "データはクッキーに保存されていません！";
    }

    ?>
</body>

</html>