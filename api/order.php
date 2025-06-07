<?

$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
$url = explode('/', $action);
header("Content-Type: application/json");
	if($url[2] == 'donate') 
	{ 
		$servers = json_decode('{
						"purchased": {
							"day": 0,
							"week": 0,
							"month": 0,
							"alltime": 0
						},
						"list": [
							{
								"id": 1415126,
								"gatePaymentId": null,
								"accountId": 127123,
								"accountName": "Simon_Showsky",
								"title": "AZ Монета (донат валюта)",
								"price": 128,
								"userAmount": 0,
								"serverId": 7,
								"shopCardId": 1,
								"type": "CASH",
								"variableValue": true,
								"expirationDate": "2024-09-30T15:42:38.207Z",
								"status": "pending",
								"createdAt": "2024-09-30T15:12:38.228Z",
								"succededAt": null,
								"paymentSystem": null,
								"paymentMethod": null,
								"offerId": 1,
								"mail": "gi4go@bk.ru",
								"params": null,
								"hash": "505621d8fa6b8cd1149d3c9fb3e255fc",
								"items": [
									{
										"id": 1827775,
										"itemId": null,
										"name": "AZ Монета (донат валюта)",
										"type": "COINS",
										"donateType": 0,
										"orderId": 1415126,
										"value": 256,
										"deleted": false,
										"discount": 0,
										"duration": null,
										"createdAt": "2024-09-30T15:12:38.228Z",
										"isOfferItem": false
									},
									{
										"id": 1827776,
										"itemId": 7378,
										"name": "Бронзовый кейс",
										"type": "INVENTORY",
										"donateType": 1,
										"orderId": 1415126,
										"value": 1,
										"deleted": false,
										"discount": null,
										"duration": null,
										"createdAt": "2024-09-30T15:12:38.228Z",
										"isOfferItem": true
									}
								],
								"server": {
									"id": 7,
									"title": "Mesa",
									"online": 909,
									"maxPlayers": 1000,
									"vk": "https://vk.com/arizonarpmesa7",
									"tg": "https://t.me/arizona_rpcom",
									"inst": "https://instagram.com/arizonagames_",
									"icon": "https://pc.az-ins.com/resource/image/project_icons/7.png",
									"project": "arizona",
									"multiplierExp": 0,
									"paydayBoost": 1,
									"multiplierDonate": 2,
									"donateRestrictionEnabled": false
								}
							},
							{
								"id": 1407043,
								"gatePaymentId": null,
								"accountId": 127123,
								"accountName": "Simon_Showsky",
								"title": "AZ Монета (донат валюта)",
								"price": 111,
								"userAmount": 0,
								"serverId": 7,
								"shopCardId": 1,
								"type": "CASH",
								"variableValue": true,
								"expirationDate": "2024-09-29T11:42:44.787Z",
								"status": "pending",
								"createdAt": "2024-09-29T11:12:45.165Z",
								"succededAt": null,
								"paymentSystem": null,
								"paymentMethod": null,
								"offerId": null,
								"mail": "gi4go@bk.ru",
								"params": null,
								"hash": "206201f808db6d2bb2843e7f0c1191f6",
								"items": [
									{
										"id": 1817990,
										"itemId": null,
										"name": "AZ Монета (донат валюта)",
										"type": "COINS",
										"donateType": 0,
										"orderId": 1407043,
										"value": 444,
										"deleted": false,
										"discount": 0,
										"duration": null,
										"createdAt": "2024-09-29T11:12:45.165Z",
										"isOfferItem": false
									}
								],
								"server": {
									"id": 7,
									"title": "Mesa",
									"online": 909,
									"maxPlayers": 1000,
									"vk": "https://vk.com/arizonarpmesa7",
									"tg": "https://t.me/arizona_rpcom",
									"inst": "https://instagram.com/arizonagames_",
									"icon": "https://pc.az-ins.com/resource/image/project_icons/7.png",
									"project": "arizona",
									"multiplierExp": 0,
									"paydayBoost": 1,
									"multiplierDonate": 2,
									"donateRestrictionEnabled": false
								}
							}
						]
					}');
	echo json_encode($servers,JSON_UNESCAPED_UNICODE);
}
else if($url[2] == 'auth')
{
	if($url[3] == 'create')
	{
		$order_create = json_decode('{
  "id": 1416824,
  "title": "AZ Монета (донат валюта)",
  "accountName": "Admin",
  "serverId": 7,
  "status": "pending",
  "price": 1337,
  "expirationDate": "2024-09-30T21:01:42.376Z",
  "paymentMethod": "card",
  "mail": "gi4go@bk.ru",
  "accountId": 1,
  "shopCard": {
    "items": [
      {
        "description": null
      }
    ],
    "image": "50049.jpg",
    "type": "CASH"
  },
  "items": [
    {
      "name": "AZ Монета (донат валюта)",
      "value": 246
    }
  ],
  "hash": "ed9639df4dbdc722b1e7e3877ea8a87b"
}');
		echo json_encode($order_create,JSON_UNESCAPED_UNICODE);
	}
	
}
else if($url[2] == 'link')
{
$order_link = json_decode('{
  "orderId": 1416824,
  "method": "ru_card",
  "email": "gi4go@bk.ru",
  "gReCaptchaToken": "HFNjU0JUwVV0JRHSABGB8QGVZEckRcJW1QRmpcdDRLTURRak1Gdz12SzMqFW8UcENDREoHUkZHHwAGBGZTLUBvI1JuLyRwEAIeDj5LUXRLfwh1Y1FECjcJVlA_IxBMQUdMFBF2Bg0APFFEbAh1ZU0cQFtpTAcmRTNDNSdHMktyQDNGSXcNEwdFBQkxMgoaNGRfARgxdEkuDRQFEyFGd0x2TEU"
}');
echo json_encode($order_link,JSON_UNESCAPED_UNICODE);
}	

else return false;

?>

