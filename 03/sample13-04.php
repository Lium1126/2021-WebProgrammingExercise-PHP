<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if (isset($_POST[btnExec])) {
        // 送信ボタンがクリックされたとき
        $name = $_POST[username];
        $address = $_POST[useraddress];
        // データをクッキーに保存
        setcookie(
            "mycookiedata",
            "ck_name=$name&ck_address=$address",
            time() + (3600 * 24 * 7)
        );
        print "送信されたデータは<br>";
        print "名前→" . $name . "<br>";
        print "住所→" . $address . "<br>";
        print "<br><br>";
    } else {
        // はじめて呼び出されたとき
        if (strlen($_COOKIE[mycookiedata]) > 0) {
            // クッキーにデータが保存されているとき
            $data = $_COOKIE[mycookiedata];
            parse_str($data);
            // 分解後のデータをフォームで使う変数に代入
            $name = $ck_name;
            $address = $ck_address;
        }
    }

    ?>

    名前と住所を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST">
        <p>名前：<input size="40" type="text" name="username" value="<?= $name ?>"></p>
        <p>住所：<input size="40" type="text" name="useraddress" value="<?= $address ?>"></p>
        <input type="submit" name="btnExec" value="送信">
    </form>

</body>

</html>