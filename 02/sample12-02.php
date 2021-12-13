<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    print "GETで送信されたデータは<br>";

    // スーパーグローバル変数で「名前」を受け取る
    print "名前→" . $_GET[username] . "<br>";

    // スーパーグローバル変数で「住所」を受け取る
    print "住所→" . $_GET[useraddress] . "<br>";

    ?>
</body>

</html>