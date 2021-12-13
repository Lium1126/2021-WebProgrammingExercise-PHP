<?php

// 閲覧しているブラウザの情報を取得・表示
$useragent = $_SERVER[HTTP_USER_AGENT];

// ブラウザの種類によってリダイレクト先を切り替え
if (strlen(strpos($useragent, "MSIE")) > 0) {
    // Internet Explorer
    header("location: sample12-34_IE.htm");
} elseif (strlen(strpos($useragent, "Chrome")) > 0) {
    // Chrome
    header("location: sample12-34_Cr.htm");
} elseif (strlen(strpos($useragent, "Safari")) > 0) {
    // Safari
    header("location: sample12-34_Sf.htm");
} elseif (strlen(strpos($useragent, "Mozilla")) > 0) {
    // NetscapeやMozilla互換ブラウザ
    header("location: sample12-34_NN.htm");
} else {
    // その他の環境
    header("location: index.htm");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
</body>

</html>