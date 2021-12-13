<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    if (isset($_POST[btnExec])) {
        // 実行ボタンがクリックされたとき

        // 4つのアップロードファイルを処理するループ
        for ($cnt = 0; $cnt < 4; $cnt++) {

            if (strlen($_FILES[uploadfile][name][$cnt]) > 0) {
                // 画像ファイルがアップロードされたとき

                // アップロードされたファイルの情報を取得
                $fileinfo = pathinfo($_FILES[uploadfile][name][$cnt]);
                // ファイルの拡張子を取得して大文字に変換
                $fileext = strtoupper($fileinfo[extension]);

                if ($_FILES[uploadfile][size][$cnt] > 102400) {
                    // アップロードファイルのサイズ上限をチェック
                    $errmsg .= "ファイルサイズが大きすぎます！ 100KB以下にしてください。<br>";
                } elseif ($_FILES[uploadfile][size][$cnt] == 0) {
                    // アップロードファイルのサイズ下限をチェック
                    $errmsg .= "ファイルが存在しないか空のファイルです！<br>";
                } elseif ($fileext != "GIF" and $fileext != "JPG") {
                    // アップロードファイルの拡張子をチェック
                    $errmsg .= "対象ファイルはGIFまたはJPGのみです！<br>";
                } else {
                    // アップロードされたファイルを正規に配置するパスを設定
                    // ここではimagesディレクトリの下に"upf_"＋元の名前で配置
                    $movetofile = "images/upf_" . $_FILES[uploadfile][name][$cnt];
                    // アップロードされたテンポラリファイルを正規の場所に移動
                    if (!move_uploaded_file($_FILES[uploadfile][tmp_name][$cnt], $movetofile)) {
                        $errmsg .= "ファイルのアップロードに失敗しました。<br>";
                    }
                }

                if ($errmsg == "") {
                    // 正常にアップロードされたときはその画像を表示
                    print $_FILES[uploadfile][name][$cnt] . "<br>";
                    print "<img src='$movetofile'><br><br><br>";
                } else {
                    // いずれかのエラーがあったとき
                    // エラーメッセージを表示
                    print $errmsg . "<br><br><br>";
                    // アップロードされたテンポラリファイルを削除
                    @unlink($_FILES[uploadfile][tmp_name][$cnt]);
                }
            }
        }
        print "<br><br>";
    }

    ?>

    アップロードする画像ファイルを指定して[実行]ボタンをクリックしてください。
    <form action="<?= $_SERVER[SCRIPT_NAME] ?>" method="POST" enctype="multipart/form-data">
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <input type="submit" name="btnExec" value="実行">
    </form>

</body>

</html>