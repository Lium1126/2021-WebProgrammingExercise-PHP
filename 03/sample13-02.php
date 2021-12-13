<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if (strlen($_COOKIE[mycookiedata]) > 0) {
        // クッキーにデータが保存されているとき
        // クッキーデータを取得(データ名=mycookiedata)
        $data = $_COOKIE[mycookiedata];
        // クッキーの生データを出力
        print $data . "<BR><BR>";
        // データを分解して保存時のデータを復元
        parse_str($data);
        // 分解後のデータを出力
        print "クッキーに保存されていたデータは、<BR>";
        print $ck_data1 . "<BR>";
        print $ck_data2 . "<BR>";
    } else {
        // クッキーにデータがないとき
        print "データはクッキーに保存されていません！";
    }

    ?>
</body>

</html>