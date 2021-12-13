<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if ($_SERVER[REQUEST_METHOD] == "POST") {
        // POSTで送信されたとき
        print "POSTで送信されました！<br>";
        print "名前→" . $_POST[username];
    } elseif ($_SERVER[REQUEST_METHOD] == "GET") {
        // GETで送信されたとき
        print "GETで送信されました！<br>";
        print "名前→" . $_GET[username];
    }

    ?>
</body>

</html>