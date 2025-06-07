<?
    if(!defined("HackChik")) return require_once '../../public/pages/404.php';
?>
<?
	$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
	
	$url = explode('/', $action);
	
	//require_once('engine/core/config.php');
	//setcookie('accessToken', md5($action));
	//setcookie('accessToken', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NDU3MDI0LCJhY2NvdW50SWQiOjEyNzEyMywic2VydmVyIjo3LCJpYXQiOjE3Mjc1OTE2MDEsImV4cCI6MTcyNzU5NTIwMX0.aC8ERDqcmaxFDzjhHUf_d_smGoHLjSYkUifydwb6R_U');
			
	//setcookie('accessToken', '', time() - 3600);
	//print_r($_COOKIE['accessToken']);
	
	//http_response_code(401 ); echo json_encode(array('statusCode' => 401 ,'message' => 'Unauthorized'));
	
	if(empty($url[0]))
	{
		if($_COOKIE["accessToken"] != '') { $chunk = ' <script src="/_next/static/chunks/pages/posts/[newsId]-5fe005c0999ca018.js" defer=""></script>'; }
		$title = 'Главная | Arizona 2024';
		$script = '{ "props": {"pageProps": {}},"page": "/","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
			
		$page = 'public/pages/main.php';
	}
	else if($url[0] == 'api')
	{
		if($url[1] == 'auth'){ require_once('api/auth.php'); }
	/* 	{
			if($url[2] == 'login') { require_once('api/auth/login.php'); }
			else if($url[2] == 'logout'){ require_once('api/auth/logout.php'); }
			else if($url[2] == 'refresh-tokens'){ require_once('api/auth/refresh-tokens.php'); }
			else return true;
		} */
		else if($url[1] == 'account') { require_once('api/account.php'); }
		else if($url[1] == 'news') { require_once('api/news.php'); }
		else if($url[1] == 'servers') { require_once('api/servers.php'); }
		else if($url[1] == 'order') { require_once('api/order.php'); }
		else if($url[1] == 'map') { require_once('api/map.php'); }
		else if($url[1] == 'shop') { require_once('api/shop.php'); }
		///api/auth/login
	}
	else
	{
		switch ($url[0])
		{	
			case 'posts':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/posts/[newsId]-5fe005c0999ca018.js" defer=""></script><script src="/_next/static/chunks/pages/shop-f074ee1efeb2fca3.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/posts/[newsId]","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/posts.php';
				break;
			}
			case 'profile':
			{
				if($_COOKIE["accessToken"] != '')
				{
					$chunk = ' <script src="/_next/static/chunks/pages/profile-b45f03c2e6b6f5ce.js" defer=""></script>';
					$script = '{ "props": {"pageProps": {}},"page": "/profile","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
					$page = 'public/pages/profile.php';
				}
				else 
				{
					header('Location: /');
				}
				break;
			}
			case 'pay':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/pay/[orderId]-36c028f2efc91298.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/pay/[orderId]","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/pay.php';
				break;
			}
			case 'shop':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/shop-f074ee1efeb2fca3.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/shop","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/shop.php';
				break;
			}
			case 'maps':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/maps-4e7e702c8446d2f6.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/maps","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/maps.php';
				break;
			}
			case 'server_panel':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/server_panel-dbcc47f5d243d5d2.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/server_panel","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/server_panel.php';
				break;
			}
			case 'change_news':
			{
				$chunk = ' <script src="/_next/static/chunks/pages/change_news-2a91ee8dd7c5c92a.js" defer=""></script>';
				$script = '{ "props": {"pageProps": {}},"page": "/change_news","query": {},"buildId": "04ndh8U2LrPoA4SG-wQAH","nextExport": true,"autoExport": true,"isFallback": false,"scriptLoader": [] }';
				$page = 'public/pages/change_news.php';
				break;
			}
			default:
			{
                header('Location: /');
				break;
			}
		}	
	}
?>