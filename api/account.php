<?
require_once('./engine/core/connect.php');
session_start();

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
$data = json_decode( file_get_contents('php://input') );

header("Content-Type: application/json");

if($url[2] == 'find') 
{ 
	$login = $data->login;
	$server = $data->server;
	
	$mysqli->set_charset("utf8");
	$sql = "SELECT * FROM `servers` WHERE id = '{$server}'";
	$result = $mysqli->query($sql);
	if($result->num_rows != 0) 
	{
		$servers = $result->fetch_assoc();
		$mysqli = @new mysqli($servers['db_host'], $servers['db_user'], $servers['db_password'], $servers['db_name']);
		if (mysqli_connect_errno()) { echo json_encode(array('status' => 'error', 'type' => 'dbinvalidserver')); return false; }
	
		$sql = "SELECT * FROM `accounts` WHERE `NickName` = '{$login}' LIMIT 1";
		$result = $mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows == 1)
		{
			$account = $result->fetch_assoc();
			
			if($account['Sex'] == 1) { $sex = 'Муж'; }
			else { $sex = 'Жен'; }
			
			$find_account = [
			  "name" => $account['NickName'],
			  "level" => (int) $account['Level'],
			  "hp" => (int) $account['HP'],
			  "xp" => $account['Exp'],
			  "money" => $account['Money'] + $account['Bank'],
			  "hasJob" => job($account['Job']),
			  "maxHunger" => 100,
			  "hunger" => 40,
			  "vip" => vip($account['VIP']),
			  "vip_level" => (int) $account['VIP'],
			  "vipExpirationDate" =>  gmdate("Y-m-d\TH:i:s\Z", $account['VipTime']),
			  "coins" => (int) $account['DonateMoney'],
			  "telephone" => (int) $account['TelNum'],
			  "telephoneBalance" => null,
			  "cash" => (int) $account['Money'],
			  "bank" => (int) $account['Bank'],
			  "deposit" => 0,
			  "bankCard" => false,
			  "gender" => $sex,
			  "maxXp" => (int) $account['Level']*4,
			  "married" => "",
			  "wantedLevel" => 0,
			  "drugAddict" => "нет зависимости",
			  "playerAdditionVip" => 1680236721,
			  "warns" => 0,
			  "blago" => 0,
			  "bankAccount1" => -1,
			  "bankAccount2" => -1,
			  "bankAccount3" => -1,
			  "bankAccount4" => -1,
			  "bankAccount5" => -1,
			  "bankAccount6" => -1,
			  "PlayHours" => 93,
			  "ZKP" => 100
			];
			echo json_encode($find_account,JSON_UNESCAPED_UNICODE);
		} else { http_response_code(403 ); echo json_encode(["statusCode" => 404, "message" => "Пользователя с таким никнеймом не существует", "error" => "Not Found"]); }
	}
	
	
}
else 
{
	$login = $_SESSION['nickname'];
	$server = $_SESSION['server'];
	
	$mysqli->set_charset("utf8");
	$sql = "SELECT * FROM `servers` WHERE id = '{$server}'";
	$result = $mysqli->query($sql);
	if($result->num_rows != 0) 
	{
		$servers = $result->fetch_assoc();
		$mysqli = @new mysqli($servers['db_host'], $servers['db_user'], $servers['db_password'], $servers['db_name']);
		if (mysqli_connect_errno()) { echo json_encode(array('status' => 'error', 'type' => 'dbinvalidserver')); return false; }
	
		$sql = "SELECT * FROM `accounts` WHERE `NickName` = '{$login}' LIMIT 1";
		$result = $mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows == 1)
		{
			$account = $result->fetch_assoc();
			
			if($account['Sex'] == 1) { $sex = 'Муж'; }
			else { $sex = 'Жен'; }
			
			
			$stats_account = [
			  "name" => $account['NickName'],
			  "level" => (int) $account['Level'],
			  "hp" => (int) $account['HP'],
			  "xp" => (int) $account['Exp'],
			  "money" => $account['Money'] + $account['Bank'],
			  "hasJob" => job($account['Job']),
			  "maxHunger" => 100,
			  "hunger" => 0,
			  "vip" => vip($account['VIP']),
			  "vip_level" => $account['VIP'],
			  "vipExpirationDate" => gmdate("Y-m-d\TH:i:s\Z", $account['VipTime']),
			  "coins" => (int) $account['DonateMoney'],
			  "telephone" => (int) $account['TelNum'],
			  "telephoneBalance" => null,
			  "cash" => (int) $account['Money'],
			  "bank" => (int) $account['Bank'],
			  "deposit" => (int) $account['Deposit'],
			  "bankCard" => true,
			  "gender" => $sex,
			  "maxXp" => (int) $account['Level']*4,
			  "married" => "",
			  "wantedLevel" => 0,
			  "drugAddict" => "нет зависимости",
			  "playerAdditionVip" => 0,
			  "warns" => 0,
			  "blago" => 0,
			  "bankAccount1" => -1,
			  "bankAccount2" => -1,
			  "bankAccount3" => -1,
			  "bankAccount4" => -1,
			  "bankAccount5" => -1,
			  "bankAccount6" => -1,
			  "PlayHours" => 59,
			  "ZKP" => 51,
			  "mail" => $account['Mail'],
			  "organization" => member($account['Member']),
			  "job" => job($account['Job']),
			  "avatar" => (int) $account['Skin'],
			  "bitcoins" => null,
			  "gameChips" => null,
			  "server" => (int) $_SESSION['server'],
			  "euro" => null,
			  "family" => null,
			  "armyTicket" => null,
			  "passportSN" => "5494 920667",
			  "birthDate" => "17.9.1997",
			  "maxHp" => 100,
			  "lastupdate" => strtotime($account['LastTime']),
			  "more" => 0,
			  "houseUpdate" => 0,
			  "haveTwoFarms" => 0,
			  "haveTwoWarehouses" => null,
			  "feFinder" => 1,
			  "pack" => 1,
			  "businessman_1" => 0,
			  "plancet" => 1,
			  "noCarSkill" => 0,
			  "moreRealty" => 0,
			  "noNalog" => 0,
			  "sevenBiz" => null,
			  "familyCertificate" => null,
			  "pensionInsurance" => 0,
			  "upgradeRassrochka" => 0,
			  "upgradeAutopark" => 0,
			  "addHouseSlot" => 0,
			  "largePockets" => null,
			  "addParkingSlot" => null,
			  "blackListOrgs" => [],
			  "realty" => [],
			  "inventory" => [
				[
				  "id" => 1171,
				  "name" => "Мед. Карта [Полностью здоровый(ая)]",
				  "image" => 2686,
				  "putOn" => false,
				  "amount" => 1,
				  "type" => 1
				],
				[
				  "id" => 569,
				  "name" => "Сундук рулетки",
				  "image" => 19918,
				  "putOn" => false,
				  "amount" => 1,
				  "type" => 1
				],
				[
				  "id" => 220,
				  "name" => "Скин: Drug Dealer (ID: 29)",
				  "image" => 29,
				  "putOn" => true,
				  "amount" => 1,
				  "type" => 22
				]
			  ],
			  "transports" => [
				[
				  "id" => 529,
				  "name" => "Willard",
				  "type" => "Легковой",
				  "cost" => 590000
				]
			  ],
			  "skills" => [
				"figtingStyles" => [
				  [
					"id" => "Boxing",
					"value" => 13
				  ],
				  [
					"id" => "Kungfu",
					"value" => 0
				  ],
				  [
					"id" => "Kneehead",
					"value" => 0
				  ],
				  [
					"id" => "Grabkick",
					"value" => 0
				  ],
				  [
					"id" => "Elbow",
					"value" => 0
				  ]
				],
				"weaponSkills" => [
				  [
					"id" => "pistolSkill",
					"value" => 0
				  ],
				  [
					"id" => "sdpistolSkill",
					"value" => 0
				  ],
				  [
					"id" => "eagleSkill",
					"value" => 0
				  ],
				  [
					"id" => "shotgunSkill",
					"value" => 0
				  ],
				  [
					"id" => "uziSkill",
					"value" => 0
				  ],
				  [
					"id" => "mp5Skill",
					"value" => 0
				  ],
				  [
					"id" => "ak47Skill",
					"value" => 0
				  ],
				  [
					"id" => "m4Skill",
					"value" => 0
				  ],
				  [
					"id" => "sniperSkill",
					"value" => 0
				  ]
				],
				"others" => [
				  [
					"id" => "allRepl",
					"value" => 0
				  ],
				  [
					"id" => "craftSkill",
					"value" => 0
				  ],
				  [
					"id" => "carSkill",
					"value" => 70
				  ],
				  [
					"id" => "bikeSkill",
					"value" => 0
				  ],
				  [
					"id" => "veloBikeSkill",
					"value" => 0
				  ],
				  [
					"id" => "gymForce",
					"value" => 0
				  ],
				  [
					"id" => "gymEndurance",
					"value" => 0
				  ],
				  [
					"id" => "gymMusculature",
					"value" => 0
				  ],
				  [
					"id" => "gymEnergy",
					"value" => 500
				  ],
				  [
					"id" => "contractTime",
					"value" => 174
				  ],
				  [
					"id" => "dSkill",
					"value" => 0
				  ],
				  [
					"id" => "taxiSkill",
					"value" => 704
				  ],
				  [
					"id" => "gryzJobSkill",
					"value" => 0
				  ],
				  [
					"id" => "pilotClass",
					"value" => 0
				  ],
				  [
					"id" => "cladmanSkill",
					"value" => 0
				  ],
				  [
					"id" => "driverSkill",
					"value" => 0
				  ],
				  [
					"id" => "tramOperatorSkill",
					"value" => 0
				  ],
				  [
					"id" => "carTheftSkill",
					"value" => 0
				  ]
				]
			  ],
			  "rating_first" => [
				"money" => "Yuriy_Mayakov",
				"level" => "Dmitry_Bonus"
			  ],
			  "minShopPrice" => 142,
			  "role" => "ADMIN",
			  "taxMultiplier" => 10
			];
		}
		echo json_encode($stats_account,JSON_UNESCAPED_UNICODE);
	}
}
function vip($id)
{
	switch($id)
	{
		case 0: { $VIP = null; break; }
		case 1: { $VIP = "Bronze"; break; }
		case 2: { $VIP = "Gold"; break; }
		case 3: { $VIP = "Platinum"; break; }
		case 4: { $VIP = "Diamond"; break; }
		case 5: { $VIP = "Titan"; break; }
		case 6: { $VIP = "Premium"; break; }
	}
	return $VIP;
}
function job($id)
{
	switch($id)
	{
		case 1: $job = "Водитель автобуса"; break;
		case 2: $job = "Детектив"; break;
		case 3: $job = "Развозчик продуктов"; break;
		case 4: $job = "Механик"; break;
		case 5: $job = "Таксист"; break;
		case 6: $job = "Адвокат"; break;
		case 7: $job = "Фермер"; break;
		case 8: $job = "Крупье"; break;
		case 9: $job = "Инкассатор"; break;
		case 10: $job = "Наркодиллер"; break;
		case 11: $job = "Дальнобойщик"; break;
		case 12: $job = "Развозчик пиццы"; break;
		case 13: $job = "Развозчик металлолома"; break;
		case 14: $job = "Мусорщик"; break;
		case 15: $job = "Грузчик"; break;
		case 16: $job = "Работник Налоговой"; break;
		case 17: $job = "Начинающий фермер"; break;
		case 18: $job = "Тракторист"; break;
		case 19: $job = "Комбайнер"; break;
		case 20: $job = "Водитель кукурузника"; break;
		case 21: $job = "Строитель"; break;
		default: $job = null; break;
	}
	return $job;
}
function member($id)
{
	switch($id)
	{
		case 1: $member = "Полиция ЛС"; break;
		case 2: $member = "RCPD"; break;
		case 3: $member = "FBI"; break;
		case 4: $member = "Полиция СФ"; break;
		case 5: $member = "Больница LS"; break;
		case 6: $member = "Правительство"; break;
		case 7: $member = "Армия LV"; break;
		case 8: $member = "Больница SF"; break;
		case 9: $member = "Лицензеры"; break;
		case 10: $member = "Radio LS"; break;
		case 11: $member = "Grove"; break;
		case 12: $member = "Vagos"; break;
		case 13: $member = "Ballas"; break;
		case 14: $member = "Aztecas"; break;
		case 15: $member = "Rifa"; break;
		case 16: $member = "Russian Mafia"; break;
		case 17: $member = "Yakuza"; break;
		case 18: $member = "La Cosa Nostra"; break;
		case 19: $member = "Warlock MC"; break;
		case 20: $member = "Армия LS"; break;
		case 21: $member = "Центральный Банк"; break;
		case 22: $member = "Больница LV"; break;
		case 23: $member = "Полиция LV"; break;
		case 24: $member = "Radio LV"; break;
		case 25: $member = "Night Wolfs"; break;
		case 26: $member = "Radio SF"; break;
		case 27: $member = "Армия SF"; break;
		default: $member = null; break;
	}
	return $member;
}
?>

