<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // 乱数ジェネレータを初期化
    srand(microtime() * 1000000);

    // 全部で10個のパスワードを生成するループ
    for ($passcnt = 1; $passcnt <= 10; $passcnt++) {
        $password = "";

        // 1から9までの乱数を5回生成してパスワードに追加
        for ($cnt = 1; $cnt <= 5; $cnt++) {
            $password = $password . rand(1, 9);
        }

        // AからZまでの乱数を5回生成してパスワードに追加
        for ($cnt = 1; $cnt <= 5; $cnt++) {
            $password = $password . chr(rand(65, 90));
        }

        print $password;
        print "<br>";
    }

    ?>
</body>

</html>