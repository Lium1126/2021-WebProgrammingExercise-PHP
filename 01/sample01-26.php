<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    ini_set('display_errors', On);

    print "テストケース1<br>";
    rmdir("test");

    print "テストケース2<br>";
    error_reporting(0);
    rmdir("test");

    print "テストケース3<br>";
    error_reporting(E_ALL);
    rmdir("test");

    print "テストケース4<br>";
    @rmdir("test");

    ?>
</body>

</html>