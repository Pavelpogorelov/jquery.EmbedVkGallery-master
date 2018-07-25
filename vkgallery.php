<?php

require_once('./vendor/autoload.php');

define('TOKEN', 'ba5e6d21ba5e6d21ba5e6d213bba3b2f5dbba5eba5e6d21e11008e57a7e5cc4a05236bf');
$_GET['86529292f5c1c666f4899193a83ac143876cd717b308a085799e66bca4cb109cc086dd776d20986092c71'] = TOKEN;
$params = http_build_query($_GET);
$url = 'https://api.vk.com/method/photos.get?&' . $params;

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', $url);
if ($res->getStatusCode() === 200) {
    echo $res->getBody();
} else {
    echo json_encode(['errors' => ['Guzzle Request Error']]);
}
