<?php

// セッションを開始
session_start();

// ユーザーIDがセッション変数に保存されているかチェック
if (!empty($_SESSION[sesuserid])) {
    // セッション変数が設定されているとき
    print "<html lang=\"ja\">\n";
    print "<head>\n";
    print "<meta charset=\"UTF-8\">\n";
    print "<title></title>";
    print "</head>";
    print "<body><p>\n";
    print "あなたのユーザーIDは " . $_SESSION[sesuserid] . " です。<BR>";
    print "<BR>";
    print "*****************************************<BR>";
    print "*****************************************<BR>";
    print "**  ここにユーザーのメインコンテンツ  **<BR>";
    print "*****************************************<BR>";
    print "*****************************************<BR>";
    print "</p></body></html>";
}
else {
    // セッション変数が設定されていないとき
    // sample14-09.phpへリダイレクト
    header("location: sample14-09.php");
    exit();
}
