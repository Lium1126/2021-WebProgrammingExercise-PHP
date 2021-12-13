DROP TABLE IF EXISTS linkdata;

CREATE TABLE linkdata (
    id         int(11)       NOT NULL AUTO_INCREMENT,
    l_url      varchar(255)  NOT NULL,
    l_title    varchar(100)  NOT NULL,
    l_comment  varchar(255)  NOT NULL,
    l_date     datetime      NOT NULL,
    PRIMARY KEY (id)
); 

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (1, 'https://github.com/Lium1126', 'GitHub', 'My GitHub Profile', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (2, 'https://www.google.com', 'Google', 'Google search page', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (3, 'https://pluslab.org', 'Pluslab', '内藤研究室', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (4, 'https://www.youtube.com/', 'YouTube', 'YouTube 動画視聴サイト', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (5, 'https://www.ait.ac.jp/', '愛知工業大学', '愛知工業大学 公式ページ', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (6, 'https://plus.jr-athlete.jp/?p=2247', 'Jr.アスリート浜松', '取り上げられた雑誌', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (7, 'http://epoch.cs.ehime-u.ac.jp/result/', '愛媛大学工学部情報工学科プログラミングコンテスト', '優秀賞', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (8, 'https://web-ext.u-aizu.ac.jp/pc-concours/2018/programming/p_totalscore.html', 'パソコン甲子園 | 本選結果', '本選21位', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (9, 'https://www.sangi.ac.jp/award-history/award2018/', '産技アワード', '10位入賞', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (10, 'https://github.com/Pluslab/EAGIS', 'EAGIS', 'Enter/leave Automatically Gather and Inform System', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (11, 'https://lcam.aitech.ac.jp/portalv2/', 'L-cam', '愛知工業大学公式ポータルサイト', '2021-11-04 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (12, 'https://atcoder.jp/users/Lium0623', 'AtCoder', 'AtCoderプロフィールページ', '2021-11-04 12:03:51');
