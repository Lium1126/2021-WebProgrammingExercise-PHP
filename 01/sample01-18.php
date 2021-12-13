<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $data = 12;
    if ($data > 10) {
    ?>
        $dataの値は10より大きいです！<br>
    <?php
    } else {
    ?>
        $dataの値は10以下です！<br>
    <?php
    }
    ?>


    <?php if ($data > 10) : ?>
        $dataの値は10より大きいです！<br>
    <?php else : ?>
        $dataの値は10以下です！<br>
    <?php endif; ?>
</body>

</html>