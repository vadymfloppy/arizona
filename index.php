<?  	
		/*			Arizona 24 v0.01                    
					CopyRight HackChik.Ru © 2024               
																			*/							
    session_start();
    
    define('HackChik', true);
	
    require_once 'engine/core/main.php';
	
	//require_once('engine/core/config.php');
	
    $action = stripslashes(htmlspecialchars(trim($_GET['action'])));
	$url = explode('/', $action);
	if($url[0] != 'api') { require_once 'public/pages/index.php'; }
	
?>