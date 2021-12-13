<?php

if (isset($_GET[id])) {
    // idデータが渡されたとき
    // セッションを開始
    session_start();

    if ($_GET[id] == 0) {
        // id=0が渡されたときはカートをクリア
        unset($_SESSION[sescart]);
    } else {
        // id=0以外はカートに入れる
        if (!empty($_SESSION[sescart])) {
            // セッション変数が定義済みなら現在の値を取得
            $cart = $_SESSION[sescart];
        }

        // 現在のカートデータに今回の商品IDをカンマ区切りで追加
        $cart .= (strlen($cart) == 0 ? "" : ",") . $_GET[id];
        // セッション変数にデータを代入して保存
        $_SESSION[sescart] = $cart;

        // 追加したデータを表示
        print "今回カートに入れた商品IDは " . $_GET[id] . "<br><br>";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <th>商品ID</th>
            <th>商品名</th>
            <th><BR></th>
        </tr>
        <tr>
            <td>1</td>
            <td>冷蔵庫 AB-12345 (H)</td>
            <td>
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=1" ?>">カートに入れる</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>エアコン AC-99999 (W)</td>
            <td>
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=2" ?>">カートに入れる</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>テレビ TV-A3456K-L23</td>
            <td>
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=3" ?>">カートに入れる</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>パソコン PC-999999 Win100G</td>
            <td>
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=4" ?>">カートに入れる</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>洗濯機 SK-TK2424 380L</td>
            <td>
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=5" ?>">カートに入れる</a>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="<?= $_SERVER[SCRIPT_NAME] . "?id=0" ?>">カートをクリア</a>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="sample14-10-2.php">カートの中身を見る</a>
            </td>
        </tr>
    </table>

</body>

</html>