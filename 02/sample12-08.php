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
        if (isset($_POST[inputdata])) {
            print "選択されたラジオボタンは「" .
                $_POST[inputdata] .
                "」です！";
        } else {
            print "ラジオボタンが選択されていません！";
        }
        print "<br><br><br>";
    }

    ?>

    いずれかのラジオボタンを選択して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST">
        <p><input type="radio" name="inputdata" value="10代">10代</p>
        <p><input type="radio" name="inputdata" value="20代">20代</p>
        <p><input type="radio" name="inputdata" value="30代">30代</p>
        <input type="submit" name="btnExec" value="送信">
    </form>
</body>

</html>