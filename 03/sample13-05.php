<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if (isset($_GET[id])) {
        // idデータが渡されたとき
        if ($_GET[id] == 0) {
            // id=0が渡されたときはカートをクリア
            setcookie("mycart");
        } else {
            // id=0以外はカートに入れる
            if (strlen($_COOKIE[mycart]) > 0) {
                // クッキーにデータが保存されているとき
                // 現在のカートの状態を取得
                $data = $_COOKIE[mycart];
                parse_str($data);
                $id = $ck_id;
            }

            // 現在のカートデータに今回の商品IDをカンマ区切りで追加
            $id .= (strlen($id) == 0 ? "" : ",") . $_GET[id];
            // データをクッキーに保存
            setcookie("mycart", "ck_id=$id");

            // 追加したデータを表示
            print "今回カートに入れた商品IDは " . $_GET[id] . "<br><br>";
        }

        // 現在のカート内容を列挙
        print "【現在のカートの状況】<br>";
        $idarray = explode(",", $id);
        foreach ($idarray as $data) {
            print $data . "<br>";
        }
        print "<br><br>";
    }

    ?>

    <table border="1">
        <tr>
            <th>商品ID</th>
            <th>商品名</th>
            <th><br></th>
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

    </table>

</body>

</html>