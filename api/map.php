<?
require_once('./engine/core/connect.php');

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
header("Content-Type: application/json; charset=utf-8");

if($url[2] != '') 
{
	$server = $url[2];
	$sql = "SELECT * FROM `servers` WHERE id = '{$server}'";
	$result = $mysqli->query($sql);
	if($result->num_rows != 0) 
	{
		$servers = $result->fetch_assoc();
		$mysqli = @new mysqli($servers['db_host'], $servers['db_user'], $servers['db_password'], $servers['db_name']);
		if (mysqli_connect_errno()) { echo http_response_code(403); echo json_encode(['statusCode' => 403,'message' => 'Подключение к базе невозможно!','error' => 'Forbidden']); return false; }
	
		$result = $mysqli->query("SELECT * FROM `businesses`");
		$row = $result->num_rows;
		$n=0;
		while($biz = $result->fetch_assoc())
		{
			$type = $biz['State'];
			$bn_own[] = ["id" => (int) $biz['ID'],"lx" => (float) $biz['Enter_X'],"ly" => (float) $biz['Enter_Y'],"name" => $biz['Name'], "type" => (int) $biz['State'],"owner" => "The State","hasAuction" => 0,"auMinBet" => 0,"auTimeEnd" => 0,"auStartPrice" => 0];
			$b_own[] = ["id" => (int) $biz['ID'],"lx" => (float) $biz['Enter_X'],"ly" => (float) $biz['Enter_Y'],"name" => $biz['Name'], "type" => (int) $biz['State'],"owner" => $biz['Owner'],"hasAuction" => 0,"auMinBet" => 0,"auTimeEnd" => 0,"auStartPrice" => 0];
			$b[$type][] = ["id" => (int) $biz['ID'],"lx" => (float) $biz['Enter_X'],"ly" => (float) $biz['Enter_Y'],"name" => $biz['Name'], "type" => (int) $biz['State'],"owner" => $biz['Owner'],"hasAuction" => 0,"auMinBet" => 0,"auTimeEnd" => 0,"auStartPrice" => 0];
		}
		$result->close;

		$result = $mysqli->query("SELECT * FROM `houses`");
		$row = $result->num_rows;
		while($house = $result->fetch_assoc())
		{
			if($house['Owner'] == 'The State') { $hn_own[] = ["id" => (int) $house['ID'],"lx" => (float) $house['Enter_X'],"ly" => (float) $house['Enter_Y'],"name" => "","owner" => "The State","hasAuction" => 0,"auMinBet" => 0,"auTimeEnd" => 0,"auStartPrice" => 0]; }
			else { $h_own[] = ["id" => (int) $house['ID'],"lx" => (float) $house['Enter_X'],"ly" => (float) $house['Enter_Y'],"name" => "","owner" => $house['Owner'],"hasAuction" => 0,"auMinBet" => 0,"auTimeEnd" => 0,"auStartPrice" => 0]; }
		}
		$result->close;
		$noowner = ["houses" => ["noOwner"=>$hn_own,"hasOwner"=>$h_own,"onAuction"=>""],"businesses" => ["noAuction"=> [$b[0],$b[1],$b[2],$b[3],$b[4],$b[5],$b[6],$b[7],$b[8],$b[9]],"onAuction" => $bn_own]];
		echo json_encode($noowner,JSON_UNESCAPED_UNICODE);
	} 
}


?>

