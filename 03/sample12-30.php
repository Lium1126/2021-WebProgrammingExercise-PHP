<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>

    <?php

    // 送信されたスタイルの番号を取得
    $stylenum = $_POST[style];

    // スタイルの番号に応じてスタイルシートを切り替え
    switch ($stylenum) {
        case 1:     // スタイル1
            $cssfile = "cssfile_1.css";
            break;
        case 2:     // スタイル2
            $cssfile = "cssfile_2.css";
            break;
        case 3:     // スタイル3
            $cssfile = "cssfile_3.css";
            break;
        default:    // 未指定時
            $cssfile = "cssfile_1.css";
            $stylenum = 1;
            break;
    }

    ?>

    <link rel="stylesheet" href="<?= $cssfile ?>">

</head>

<body>

    <table border="1">
        <tr>
            <td width="500">インターネットの普及に伴い、その開発環境として、Webサーバー側で動的にコンテンツを生成するサーバーサイドプログラムも一般的なものになりました。Perl、C、Java、ASP、ASP.NETなど、多くの言語や開発環境が登場し、それによって構築されたサイトも相当な数に上っています。検索や投稿、データ編集などの機能を持ったサイトでは、もはや不可欠な存在となっています。</td>
        </tr>
    </table>

    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST" name="myform">
        スタイル：
        <select size="3" name="style" onclick="document.myform.submit();">
            <option value="1" <?= $stylenum == 1 ? " selected" : "" ?>>スタイル1</option>
            <option value="2" <?= $stylenum == 2 ? " selected" : "" ?>>スタイル2</option>
            <option value="3" <?= $stylenum == 3 ? " selected" : "" ?>>スタイル3</option>
        </select>
    </form>


</body>

</html>