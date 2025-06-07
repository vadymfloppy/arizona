<?
session_start();

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);

header("Content-Type: application/json");
$data = json_decode( file_get_contents('php://input') );

if($url[2] == 'login')
{  
	$password = $data->password;
	$name = $data->login;
	$server = $data->server;
	$token = $data->gReCaptchaToken;
	
	$vkCode = $data->vkCode;
	
	require_once('./engine/core/connect.php');
	$mysqli->set_charset("utf8");
	$sql = "SELECT * FROM `servers` WHERE id = '{$server}'";
	$result = $mysqli->query($sql);
	if($result->num_rows != 0) 
	{
		$servers = $result->fetch_assoc();
		$mysqli = @new mysqli($servers['db_host'], $servers['db_user'], $servers['db_password'], $servers['db_name']);
		if (mysqli_connect_errno()) { echo json_encode(array('status' => 'error', 'type' => 'dbinvalidserver')); return false; }
			
		session_start();
		$mysqli->set_charset("utf-8");
		$sql = "SELECT * FROM `accounts` WHERE `NickName` = '{$name}'";
		$result = $mysqli->query($sql);

		if($result->num_rows == 1)
		{	
			$result->data_seek(0);
			$account = $result->fetch_assoc();
			$dbpassword = $account['Password'];
			$id = $account['ID'];
			$skin = $account['Skin'];
			$admin = $account['Admin'];
			
			if(strtoupper(md5($password)) === $dbpassword)
			{			
				$_SESSION['id'] = $id;
				$_SESSION['nickname'] = $name;
				$_SESSION['server'] = $server;
				setcookie('accessToken', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NDU3MDI0LCJhY2NvdW50SWQiOjEyNzEyMywic2VydmVyIjo3LCJpYXQiOjE3Mjc1OTE2MDEsImV4cCI6MTcyNzU5NTIwMX0.aC8ERDqcmaxFDzjhHUf_d_smGoHLjSYkUifydwb6R_U', time() + 3600);
				echo json_encode(array('accessToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NDU3MDI0LCJhY2NvdW50SWQiOjEyNzEyMywic2VydmVyIjo3LCJpYXQiOjE3Mjc1OTE2MDEsImV4cCI6MTcyNzU5NTIwMX0.aC8ERDqcmaxFDzjhHUf_d_smGoHLjSYkUifydwb6R_U'),JSON_UNESCAPED_UNICODE); 
			} else { http_response_code(403); echo json_encode(array('statusCode' => 403,'message' => 'Неверный пароль','error' => 'Forbidden')); return false; }
		} else { http_response_code(403); echo json_encode(array('statusCode' => 403,'message' => 'Пользователя с таким никнеймом не существует','error' => 'Forbidden')); return false; }
		$result->close();
	}
}
else if($url[2] == 'logout') { setcookie('accessToken', '', time() - 3600); header('Location: /');}
else if($url[2] == 'refresh-tokens') { setcookie('accessToken', $_COOKIE['accessToken'], time() + 3600); echo json_encode(array('accessToken' => $_COOKIE['accessToken'],),JSON_UNESCAPED_UNICODE);  }
else if($url[2] == 'forgotten-password') {}
else if($url[2] == 'vkontakte') {}
else if($url[2] == 'forget-password') {}
else if($url[2] == 'change-password') {}
else if($url[2] == 'change-forgotten-password') {}

//echo json_encode($servers,JSON_UNESCAPED_UNICODE);

?>

