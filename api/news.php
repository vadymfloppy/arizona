<?
require_once('./engine/core/connect.php');

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
header("Content-Type: application/json; charset=utf-8");

if($url[2] == 'admin')
{
	$sql = "SELECT * FROM `news` WHERE `status`='1' LIMIT 10";
	$result = $mysqli->query($sql);
	while($news_row = $result->fetch_assoc()) 
	{
		$url_media = explode("|", $news_row['url_video']);
		$news[] = [
			"id" => (int) $news_row['id'],
			"title" => $news_row['title'],
			"date" => $news_row['date'],
			"description" => $news_row['content'],
			"picture" => $news_row['image'],
			"url" => $url_media[1],
			"type" => $url_media[0],
			"deleted" => false,
			"createdAt" => "2024-08-25T17:09:17.418Z",
			"updatedAt" => "2024-08-25T17:09:17.418Z"
		];
	}
	echo json_encode($news,JSON_UNESCAPED_UNICODE);
}
else
{
	$sql = "SELECT * FROM `news` WHERE `status`='1' LIMIT 10";
	$result = $mysqli->query($sql);
	while($news_row = $result->fetch_assoc()) 
	{
		$url_media = explode("|", $news_row['url_video']);
		$news[] = [
			"id" => (int) $news_row['id'],
			"title" => $news_row['title'],
			"date" => $news_row['date'],
			"description" => $news_row['content'],
			"picture" => $news_row['image'],
			"url" => $url_media[1],
			"type" => $url_media[0],
			"deleted" => false,
			"createdAt" => "2024-08-25T17:09:17.418Z",
			"updatedAt" => "2024-08-25T17:09:17.418Z"
		];
	}
echo json_encode($news,JSON_UNESCAPED_UNICODE);
}