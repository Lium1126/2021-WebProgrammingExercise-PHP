<?php

// セッションを開始
session_start();

if (empty($_SESSION[sescart])) {
    // セッション変数が未定義の場合
    $html = "【現在、カートは空です】";
} else {
    // セッション変数のデータを読み込み
    $cart = $_SESSION[sescart];

    // 商品名データを配列に代入
    $product = array(
        "冷蔵庫 AB-12345 (H)", "エアコン AC-99999(W)",
        "テレビ TV-A3456K-L23", "パソコン PC-999999 Win100G",
        "洗濯機 SK-TK2424 380L"
    );

    // 現在のカート内容を列挙
    $html = "【現在のカートの状況】<br><br>";
    $cartarray = explode(",", $cart);
    foreach ($cartarray as $data) {
        // 商品IDから商品名を取得してHTML文に追加
        $html .= $product[$data - 1] . "<br>";
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
    <?= $html ?>
    <br>
    <br>
    <a href="sample14-10.php">戻る</a>
</body>

</html>