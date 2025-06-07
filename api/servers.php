<?
require_once('./engine/core/connect.php');

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
header("Content-Type: application/json");

if($url[2] == 'arizona') 
{ 
	$mysqli->set_charset("utf8");
	$sql = "SELECT * FROM `servers` WHERE `status` != '0'";
	$result = $mysqli->query($sql);
	$rows = $result->num_rows;
	if($rows != 0)
	{
		for ($x = 0; $x < $rows; $x++)	
		{	
			$servers = $result->fetch_assoc();	
			$servers_all[] = ["id" => (int) $servers['id'],
				"title" => $servers['server_name'],
				"online" => 898,
				"maxPlayers" => 1000,
				"vk" => $servers['group_vk_url'],
				"tg" => "https://t.me/arizona_rpcom",
				"inst" => "https://instagram.com/arizonagames_",
				"icon" => "https://pc.az-ins.com/resource/image/project_icons/".$servers['id'].".png",
				"project" => "arizona",
				"multiplierExp" => 4,
				"paydayBoost" => 1,
				"multiplierDonate" => 4,
				"donateRestrictionEnabled" => false
			  ];	
		};
		$result->close();
		echo json_encode($servers_all,JSON_UNESCAPED_UNICODE);
	}
}

?>

