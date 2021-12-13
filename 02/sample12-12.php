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
        if (isset($_POST[seldata])) {
            print "選択された項目は「" .
                $_POST[seldata] .
                "」です！";
        } else {
            print "いずれの項目も選択されていません！";
        }
        print "<br><br><br>";
    }

    ?>

    リストボックスのいずれかの項目を選択して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST">
        <select size="6" name="seldata">
            <option value="ブラジル">ブラジル</option>
            <option value="イタリア">イタリア</option>
            <option value="アルゼンチン">アルゼンチン</option>
            <option value="フランス">フランス</option>
            <option value="イングランド">イングランド</option>
            <option value="オランダ">オランダ</option>
        </select>
        <input type="submit" name="btnExec" value="送信">
    </form>
</body>

</html>