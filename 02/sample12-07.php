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
        if (strlen($_POST[inputdata]) > 0) {
            print "テキストボックスに入力されたデータは「" .
                $_POST[inputdata] .
                "」です！";
        } else {
            print "テキストボックスは空欄です！";
        }
        print "<br><br><br>";
    }
    ?>

    テキストボックスに値を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST">
        <input size="40" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>
</body>

</html>