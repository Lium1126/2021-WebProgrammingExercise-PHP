<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    // 1~10までのループ
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $cnt;
        switch ($cnt) {
            case 1:
                print "★";
                break;
            case 2:
                print "☆";
                break;
            case 3:
                print "●";
                break;
            case 4:
                print "○";
                break;
            default:
                print "×";
                break;
        }
        print "<br>";
    }

    ?>
</body>

</html>