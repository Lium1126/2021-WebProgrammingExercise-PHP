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

        // 入力されたキーワードを取得
        $keyword = $_POST[keyword];
        // キーワードをURLエンコード
        $keyword = urlencode($keyword);
        // ジャンプ先URLを組み立て
        $jumpto = "http://www.google.co.jp/search?q=" . $keyword .
            "&hl=ja&ie=UTF-8&oe=UTF-8";
        // そのURLへリダイレクト
        header("location: $jumpto");
        exit();
    }

    ?>

    検索キーワードを入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER[PHP_SELF] ?>" method="POST">
        <input size="40" type="text" name="keyword">
        <input type="submit" name="btnExec" value="送信">
    </form>

</body>

</html>