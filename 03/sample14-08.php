<?php

// セッションを開始
session_start();

// 現在のセッションIDを取得
$oldsesid = session_id();

// セッションIDを変更
session_regenerate_id();

// 新しいセッションIDを取得
$newsesid = session_id();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    print "【現在のセッションID】<br>";
    print $oldsesid . "<br><br>";
    print "【新しいセッションID】<br>";
    print $newsesid . "<br><br>";

    ?>
</body>

</html>