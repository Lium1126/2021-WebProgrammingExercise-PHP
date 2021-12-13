<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
    <?php

    if (isset($_POST[btnExec])) {
        // 送信ボタンがクリックされたとき
        // ラジオボタンに応じてフォントサイズを設定
        switch ($_POST[fontsize]) {
            case 1:     // 小
                $fontsize = "10pt";
                break;
            case 2:     // 中
                $fontsize = "14pt";
                break;
            case 3:     // 大
                $fontsize = "18pt";
                break;
            default:    // 未指定時
                $fontsize = "14pt";
                break;
        }
    } else {
        // はじめて呼び出されたとき
        $fontsize = "14pt";
    }

    ?>

    <style>
        td {
            font-size: <?= $fontsize ?>;
        }
    </style>

</head>

<body>

    <table border="1">
        <tr>
            <td width="500">インターネットの普及に伴い、その開発環境として、Webサーバー側で動的にコンテンツを生成するサーバーサイドプログラムも一般的なものになりました。Perl、C、Java、ASP、ASP.NETなど、多くの言語や開発環境が登場し、それによって構築されたサイトも相当な数に上っています。検索や投稿、データ編集などの機能を持ったサイトでは、もはや不可欠な存在となっています。</td>
        </tr>
    </table>

    <form action="<?= $_SERVER[PHP_SELF] ?>" method="POST">
        フォントサイズ：
        <input type="radio" name="fontsize" value="1">小
        <input type="radio" name="fontsize" value="2">中
        <input type="radio" name="fontsize" value="3">大
        <input type="submit" name="btnExec" value="送信">
    </form>

</body>

</html>