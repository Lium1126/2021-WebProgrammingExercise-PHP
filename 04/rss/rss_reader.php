<?php
error_reporting(E_ALL);				// エラー出力のレベルを設定します
ini_set("display_errors", "Off");	// 画面上にエラー出力を表示する設定にします
$mysqli = new mysqli("localhost", "root", "root", "rss_reader");
$mysqli->set_charset("utf8mb4");

$context = stream_context_create(array("ssl" => array(
	"allow_self_signed" => true,
	"verify_peer" => false,
)));
libxml_set_streams_context($context);
$xml = simplexml_load_file("https://cyber.harvard.edu/blogs/gems/tech/rss2sample.xml");
# $xml = simplexml_load_file("https://techacademy.jp/magazine/feed");
# $xml = simplexml_load_file("https://gigazine.net/news/rss_2.0/");
foreach ($xml->channel->item as $feed) {
	$stmt = $mysqli->prepare("SELECT * FROM rss_item WHERE guid = ?");
	$stmt->bind_param("s", $feed->guid);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows() == 0) {
		$stmt2 = $mysqli->prepare("INSERT INTO rss_item(pub_date, title, description, author, link, guid) VALUES (?, ?, ?, ?, ?, ?)");
	} else {
		$stmt2 = $mysqli->prepare("UPDATE rss_item SET pub_date = ?, title = ?, description = ?, author = ?, link = ? WHERE guid = ?");
	}
	$stmt2->bind_param("ssssss", date("Y/m/d H:i:s", strtotime($feed->pubDate)), $feed->title, $feed->description, $feed->author, $feed->link, $feed->guid);
	$stmt2->execute();
}

$query_result = $mysqli->query("SELECT * FROM rss_item ORDER BY pub_date DESC");
$rss_list = array();
while ($rss = $query_result->fetch_array()) {
	$rss_list[] = $rss;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>サクッとRSSリーダー</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>サクッとRSSリーダー 記事一覧</h1>
	<ul>
		<?php foreach ($rss_list as $rss) { ?>
			<?php
			$title[$rss["id"]] = strlen($rss["title"]) == 0 ? "<Non Title>" : $rss["title"];
			$author[$rss["id"]] = strlen($rss["author"]) == 0 ? "<Non Author>" : $rss["author"];
			$pub_date[$rss["id"]] = strlen($rss["pub_date"]) == 0 ? "<Non Date>" : $rss["pub_date"];
			$description[$rss["id"]] = strlen($rss["description"]) == 0 ? "<Non Description>" : $rss["description"];
			?>
			<li>
				<a href="#no<?php echo ($rss["id"]); ?>">
					<?php echo (htmlspecialchars($title[$rss["id"]], ENT_QUOTES)); ?>
				</a>
			</li>
		<?php } ?>
	</ul>

	<?php foreach ($rss_list as $rss) { ?>
		<a name="no<?php echo ($rss["id"]); ?>">
			<h2>
				<a href="<?php echo (htmlspecialchars($rss["link"])); ?>" target="_brank" rel="noopener noreferrer">
					<?php echo (htmlspecialchars($title[$rss["id"]], ENT_QUOTES)); ?>
				</a>
			</h2>
		</a>

		<p>
			<strong>作成：<?php echo (htmlspecialchars($author[$rss["id"]])); ?>
				(<?php echo (htmlspecialchars($pub_date[$rss["id"]])); ?>)
			</strong>
		</p>

		<p><?php echo (nl2br(strip_tags($description[$rss["id"]]))); ?></p>
	<?php } ?>

</body>

</html>