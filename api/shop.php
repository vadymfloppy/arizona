<?

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
header("Content-Type: application/json");
	if($url[2] == 'all') 
	{ 
		$servers = json_decode(file_get_contents("https://heison.ru/api/all.json"));
	echo json_encode($servers,JSON_UNESCAPED_UNICODE);
}

else return false;

?>

